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

namespace FacebookAds\Logger;

use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;

class CurlLogger implements LoggerInterface {

  /**
   * @var bool
   */
  protected $shouldEscapeQuotes = false;

  /**
   * @var bool
   */
  protected $showSensitiveData = true;

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @var array
   */
  protected $sensitiveParams = array('access_token', 'appsecret_proof');

  /**
   * @param resource $handle
   */
  public function __construct($handle = null) {
    $this->handle = $handle ?: STDOUT;
  }

  /**
   * Whether we should escape quotes in data parameters
   *
   * @param bool $escape
   */
  public function setEscapeQuotes($escape) {
    $this->shouldEscapeQuotes = $escape;
  }

  /**
   * Whether to show ids and tokens
   *
   * @param $show
   */
  public function setShowSensitiveData($show) {
    $this->showSensitiveData = $show;
  }

  /**
   * Logs with an arbitrary level.
   *
   * @param mixed $level
   * @param string $message
   * @param array $context
   */
  public function log($level, $message, array $context = array()) {
    // We don't care for anything about requests
  }

  /**
   * @param string $level
   * @param RequestInterface $request
   * @param array $context
   */
  public function logRequest(
    $level, RequestInterface $request, array $context = array()) {

    $curl = 'curl';
    $opt = '-d';

    switch ($request->getMethod()) {
      case RequestInterface::METHOD_GET :
        $curl .= ' -G';
        break;
      case RequestInterface::METHOD_POST :
        $opt = '-F';
        break;
      case RequestInterface::METHOD_PUT :
      case RequestInterface::METHOD_DELETE :
      $curl .= ' -X '.$request->getMethod();
        break;
      default :
        return;
    }

    $data = '';

    if ($request->getFileParams()->count()) {
      foreach ($request->getFileParams() as $key => $value) {
        $data .= '  '.$opt." '{$key}=@{$value}' \\".PHP_EOL;
      }
    }

    $param_ref = $request->getMethod() === RequestInterface::METHOD_GET
      ? $request->getQueryParams()
      : $request->getBodyParams();

    if ($param_ref->count()) {
      foreach ($param_ref->export() as $key => $value) {
        if (!$this->showSensitiveData
          && in_array($key, $this->sensitiveParams)) {

          $value = '<'.strtoupper($key).'>';
        }
        $data .= '  '.$opt." '{$key}={$value}' \\".PHP_EOL;
      }
    }

    if ($this->shouldEscapeQuotes) {
      $data = str_replace('"', '\"', $data);
    }

    $path = $request->getPath();
    if (!$this->showSensitiveData) {
      $path = preg_replace(
        array('/\/act_\d+(\/|$)/i', '/\/\d+(\/|$)/'),
        array('/act_<AD_ACCOUNT_ID>$1', '/<OBJECT_ID>$1'),
        $path);
    }

    $url = $request->getProtocol().$request->getDomain()
      .'/v'.$request->getGraphVersion().$path;

    $output = $curl.' \\'.PHP_EOL.$data.$url.PHP_EOL.PHP_EOL;

    fwrite($this->handle, $output);
  }

  /**
   * @param string $level
   * @param ResponseInterface $response
   * @param array $context
   */
  public function logResponse(
    $level, ResponseInterface $response, array $context = array()) {
    // We don't care for anything about requests
  }
}
