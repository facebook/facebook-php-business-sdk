<?php
/**
 * Copyright 2014 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Http\Adapter;

use FacebookAds\Exception\Exception;
use FacebookAds\Http\Client;
use FacebookAds\Http\Headers;
use FacebookAds\Http\Parameters;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;

class StreamHttpAdapter extends AbstractAdapter {

  /**
   * @var string
   */
  const EOL = "\r\n";

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @var \ArrayObject
   */
  protected $opts;

  /**
   * @var StreamHttp Procedural stream wrapper as object
   */
  protected static $stream_http;  

  /**
   * @var MIME Boundary
   */
  protected static $mime_boundary;  

  /**
   * @param Client $client
   */
  public function __construct(Client $client) {
    parent::__construct($client);

    self::$stream_http = new StreamHttp();

    static::generateMimeBoundary();
  }

  protected static function generateMimeBoundary() {
    static::$mime_boundary = md5(time());
  }

  /**
   * @return string
   */
  protected function getCaBundlePath() {
    return dirname(__FILE__).DIRECTORY_SEPARATOR
    .'..'.DIRECTORY_SEPARATOR
    .'..'.DIRECTORY_SEPARATOR
    .'..'.DIRECTORY_SEPARATOR
    .'..'.DIRECTORY_SEPARATOR
    .'fb_ca_chain_bundle.crt';
  }

  /**
   * @return \ArrayObject
   */
  public function getOpts() {
    return array();
  }

  /**
   * @param \ArrayObject $opts
   */
  public function setOpts(\ArrayObject $opts) {
    return;
  }

  /**
   * @param Headers $headers
   * @param string $raw_headers
   */
  protected function parseHeaders(Headers $headers, $raw_headers) {
    // There will be multiple headers if a 301 was followed
    // or a proxy was followed, etc
    $last_request = 0;
    foreach($raw_headers as $key => $raw_header) {
      if (strpos($raw_header, ': ') === false) {
        $last_request = $key;
      }
    }

    // We just want the last response (at the end)
    $header_components = array_slice($raw_headers, $last_request);

    foreach ($header_components as $line) {
      if (strpos($line, ': ') === false) {
        $headers['http_code'] = $line;
      } else {
        list ($key, $value) = explode(': ', $line);
        $headers[$key] = $value;
      }
    }
  }

  /**
   * @param Parameters $body_params
   * @return array
   */
  protected function prepareBodyPostfields(Parameters $body_params) {
    $postfields = array();
    foreach ($body_params as $key => $value) {
      $data = '';    
      $data .= '--' . static::$mime_boundary . self::EOL;
      $data .= 'Content-Disposition: form-data; name="' . $key . '"' . self::EOL . self::EOL;
      $data .= (is_scalar($value) ? $value : json_encode($value)) . self::EOL;

      $postfields[$key] = $data;
    }

    return $postfields;
  }

  /**
   * @param Parameters $file_params
   * @return array
   */
  protected function prepareFilePostfields(Parameters $file_params) {
    $postfields = array();
    foreach ($file_params as $key => $value) {
      $data = '';    
      $data .= '--' . static::$mime_boundary . self::EOL;
      $data .= 'Content-Disposition: form-data; name="' . $key . '"; filename="' . basename($value) . '"' . self::EOL;
      $data .= 'Content-Type: application/octet-stream' . self::EOL . self::EOL;
      $data .= file_get_contents($value) . self::EOL;

      $postfields[$key] = $data;
    }

    return $postfields;
  }

  /**
   * @param RequestInterface $request
   * @return ResponseInterface
   * @throws Exception
   */
  public function sendRequest(RequestInterface $request) {
    $response = $this->getClient()->createResponse();
    $url = $request->getUrl();
    $method = $request->getMethod();

    $options = array(
      'http' => array(
        'method' => $method,
        'timeout' => 60,
        'ignore_errors' => true
      ),
      'ssl' => array(
        'verify_peer' => true,
        'cafile' => $this->getCaBundlePath(),
      ),
    );

    $postfields = array();
    if ($method === RequestInterface::METHOD_POST
      && $request->getFileParams()->count()
    ) {
      $postfields = array_merge(
        $postfields, $this->prepareFilePostfields($request->getFileParams()));
    }    
    if ($method !== RequestInterface::METHOD_GET
      && $request->getBodyParams()->count()) {
      $postfields = array_merge(
        $postfields, $this->prepareBodyPostfields($request->getBodyParams()));
    }    

    $options['http']['content'] = implode('', $postfields) . "--" . self::$mime_boundary . "--" . self::EOL . self::EOL;

    $request->getHeaders()['Content-Type'] = 'multipart/form-data; boundary=' . static::$mime_boundary . self::EOL;

    if ($request->getHeaders()->count()) {
      $headers = array();
      foreach ($request->getHeaders() as $header => $value) {
        $headers[] = "{$header}: {$value}";
      }

      $options['http']['header'] = implode(self::EOL, $headers);
    }    

    self::$stream_http->streamContextCreate($options);
    $raw_response = self::$stream_http->fileGetContents($url);
    $raw_headers = self::$stream_http->getResponseHeaders();

    $this->parseHeaders($response->getHeaders(), $raw_headers);
    $response->setBody($raw_response);   

    $status_code = $this->getStatusCodeFromHeader($response->getHeaders()['http_code']);
    $response->setStatusCode($status_code);   

    return $response;
  }

  /**
   * Pulls out the HTTP status code from a response header
   *
   * @param string $header
   *
   * @return int
   */
  public static function getStatusCodeFromHeader($header)
  {
    preg_match('|HTTP/\d\.\d\s+(\d+)\s+.*|', $header, $match);
    return (int) $match[1];
  }  
}
