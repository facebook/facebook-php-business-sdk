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

class CurlAdapter extends AbstractAdapter {

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @var \ArrayObject
   */
  protected $opts;

  /**
   * @param Client $client
   */
  public function __construct(Client $client) {
    parent::__construct($client);
    if (!extension_loaded('curl')) {
      throw new \RuntimeException(
        get_class($this)." requires php curl extention");
    }
  }

  /**
   * @return resource|null
   */
  public function getLatestHandle() {
    return $this->handle;
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
    if ($this->opts === null) {
      $this->opts = new \ArrayObject(array(
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_CAINFO => $this->getCaBundlePath(),
      ));
    }

    return $this->opts;
  }

  /**
   * @param \ArrayObject $opts
   */
  public function setOpts(\ArrayObject $opts) {
    $this->opts = $opts;
  }

  /**
   * @return int
   */
  protected function getheaderSize() {
    return curl_getinfo($this->handle, CURLINFO_HEADER_SIZE);
  }

  /**
   * Extracts the headers and the body into a two-part array
   * @param string $raw_response
   * @return array
   */
  protected function extractResponseHeadersAndBody($raw_response) {
    $header_size = $this->getheaderSize();

    $raw_headers = mb_substr($raw_response, 0, $header_size);
    $raw_body = mb_substr($raw_response, $header_size);

    return array(trim($raw_headers), trim($raw_body));
  }

  /**
   * @param Headers $headers
   * @param string $raw_headers
   */
  protected function parseHeaders(Headers $headers, $raw_headers) {
    $raw_headers = str_replace("\r\n", "\n", $raw_headers);

    // There will be multiple headers if a 301 was followed
    // or a proxy was followed, etc
    $header_collection = explode("\n\n", trim($raw_headers));
    // We just want the last response (at the end)
    $raw_headers = array_pop($header_collection);

    $header_components = explode("\n", $raw_headers);
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
   * @param Parameters $file_params
   * @return array
   */
  protected function prepareFilePostfields(Parameters $file_params) {
    $postfields = array();
    foreach ($file_params as $key => $value) {
      if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
        $postfields[$key] = curl_file_create($value);
      } else {
        $postfields[$key] = '@'.$value;
      }
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
    $this->handle = curl_init($request->getUrl());
    $method = $request->getMethod();
    if ($method === RequestInterface::METHOD_DELETE) {
      curl_setopt($this->handle, CURLOPT_CUSTOMREQUEST, $method);
    }

    curl_setopt_array($this->handle, $this->getOpts()->getArrayCopy());

    if ($request->getHeaders()->count()) {
      $headers = array();
      foreach ($request->getHeaders() as $header => $value) {
        $headers[] = "{$header}: {$value}";
      }
      curl_setopt($this->handle, CURLOPT_HTTPHEADER, $headers);
    }

    $postfields = array();
    if ($method === RequestInterface::METHOD_POST
      && $request->getFileParams()->count()
    ) {
      $postfields = array_merge(
        $postfields, $this->prepareFilePostfields($request->getFileParams()));
    }
    if ($method !== RequestInterface::METHOD_GET
      && $request->getBodyParams()->count()) {
      $postfields
        = array_merge($postfields, $request->getBodyParams()->export());
    }

    if ($postfields) {
      curl_setopt(
        $this->handle,
        CURLOPT_POSTFIELDS,
        $postfields);
    }

    $raw_response = curl_exec($this->handle);

    $status_code = curl_getinfo($this->handle, CURLINFO_HTTP_CODE);
    $curl_errno = curl_errno($this->handle);
    $curl_error = $curl_errno ? curl_error($this->handle) : null;

    $response_parts = $this->extractResponseHeadersAndBody($raw_response);

    $response->setStatusCode($status_code);
    $this->parseHeaders($response->getHeaders(), $response_parts[0]);
    $response->setBody($response_parts[1]);

    curl_close($this->handle);

    if ($curl_errno) {
      throw new Exception($curl_error, $curl_errno);
    }

    return $response;
  }
}
