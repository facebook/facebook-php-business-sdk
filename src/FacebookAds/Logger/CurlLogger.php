<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

use FacebookAds\Http\FileParameter;
use FacebookAds\Http\Parameters;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Logger\CurlLogger\JsonAwareParameters;

class CurlLogger implements LoggerInterface {

  /**
   * @var string
   */
  const PARAM_DEFAULT_FLAG = 'd';

  /**
   * @var string
   */
  const PARAM_URLENCODE_FLAG = '-data-urlencode';

  /**
   * @var string
   */
  const PARAM_POST_FLAG = 'F';

  /**
   * @var string
   */
  const METHOD_DEFAULT_FLAG = '';

  /**
   * @var string
   */
  const METHOD_GET_FLAG = 'G';

  /**
   * @var string
   */
  const METHOD_PUT_FLAG = 'X PUT';

  /**
   * @var string
   */
  const METHOD_DELETE_FLAG = 'X DELETE';

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @var bool
   */
  protected $jsonPrettyPrint = false;

  /**
   * @param resource $handle
   */
  public function __construct($handle = null) {
    if (!defined('STDOUT')) {
      define('STDOUT', fopen('php://stdout', 'w'));
    }
    $this->handle = is_resource($handle) ? $handle : STDOUT;
  }

  /**
   * @return bool
   */
  public function isJsonPrettyPrint() {
    return $this->jsonPrettyPrint;
  }

  /**
   * @param bool $json_pretty_print
   * @return $this
   */
  public function setJsonPrettyPrint($json_pretty_print) {
    $this->jsonPrettyPrint = $json_pretty_print;
    return $this;
  }

  /**
   * @param string $method
   * @return string
   */
  public static function getMethodFlag($method) {
    switch ($method) {
      case RequestInterface::METHOD_GET:
        return static::METHOD_GET_FLAG;
      case RequestInterface::METHOD_PUT:
        return static::METHOD_PUT_FLAG;
      case RequestInterface::METHOD_DELETE:
        return static::METHOD_DELETE_FLAG;
    }

    return static::METHOD_DEFAULT_FLAG;
  }

  /**
   * @param string $method
   * @param string $value
   * @return string
   */
  public static function getParamFlag($method, $value) {
    return $method === RequestInterface::METHOD_POST
      ? static::PARAM_POST_FLAG
      : (strstr($value, "\n")
        ? static::PARAM_URLENCODE_FLAG
        : static::PARAM_DEFAULT_FLAG);
  }

  /**
   * @param string $string
   * @param int $indent
   * @return string
   */
  protected function indent($string, $indent) {
    return str_replace("\n", " \n".str_repeat(' ', $indent), $string);
  }

  /**
   * @param Parameters $params
   * @param string $method
   * @param bool $is_file
   * @return string
   */
  protected function processParams(Parameters $params, $method, $is_file) {
    $chunks = array();
    if ($this->isJsonPrettyPrint()) {
      $params = new JsonAwareParameters($params);
    }
    foreach ($params->export() as $name => $value) {
      if ($is_file && $params->offsetGet($name) instanceof FileParameter) {
        $value = "@" . $this->normalizeFileParam($params->offsetGet($name));
      } else {
        $value = addcslashes(
          strpos($value, "\n") !== false
            ? $this->indent($value, 2)
            : $value,
          '\'');
      }
      $chunks[$name] = sprintf(
        '-%s \'%s=%s\'',
        $this->getParamFlag($method, $value),
        $name,
        $value);
    }

    return $chunks;
  }

  /**
   * @param FileParameter $file_param
   * @return string
   */
  protected function normalizeFileParam(FileParameter $file_param) {
    return sprintf('%s%s%s%s%s',
      $file_param->getPath(),
      $file_param->getMimeType() != null ? ";type=" : "",
      $file_param->getMimeType(),
      $file_param->getName() != null ? ";name=" : "",
      $file_param->getName());
  }

  /**
   * @param RequestInterface $request
   * @return string
   */
  protected function processUrl(RequestInterface $request) {
    return $request->getProtocol().$request->getDomain()
      .'/v'.$request->getGraphVersion().$request->getPath();
  }

  /**
   * @param string $buffer
   */
  protected function flush($buffer) {
    fwrite($this->handle, $buffer.PHP_EOL.PHP_EOL);
  }

  /**
   * @param mixed $level
   * @param string $message
   * @param array $context
   */
  public function log($level, $message, array $context = array()) {
    // We only care about requests
  }

  /**
   * @param array $array
   * @param mixed $key
   * @return mixed
   */
  protected function removeArrayKey(array &$array, $key) {
    if (array_key_exists($key, $array)) {
      $value = $array[$key];
      unset($array[$key]);
      return $value;
    } else {
      return null;
    }
  }

  /**
   * @param array $params
   * @return array
   */
  protected function sortParams(array $params) {
    $access_token = $this->removeArrayKey($params, 'access_token');
    $appsecret_proof = $this->removeArrayKey($params, 'appsecret_proof');
    $access_token !== null && $params['access_token'] = $access_token;
    $appsecret_proof !== null && $params['appsecret_proof'] = $appsecret_proof;

    return $params;
  }

  /**
   * @param string $level
   * @param RequestInterface $request
   * @param array $context
   */
  public function logRequest(
    $level, RequestInterface $request, array $context = array()) {

    $new_line = ' \\'.PHP_EOL.'  ';
    $method = $request->getMethod();
    $method_flag = static::getMethodFlag($method);
    $params = $this->sortParams(array_merge(
      $this->processParams($request->getQueryParams(), $method, false),
      $this->processParams($request->getBodyParams(), $method, false),
      $this->processParams($request->getFileParams(), $method, true)));

    $buffer = 'curl'.($method_flag ? ' -'.$method_flag : '');
    foreach ($params as $param) {
      $buffer .= $new_line.$param;
    }
    $buffer .= $new_line.$this->processUrl($request);

    $this->flush($buffer);
  }

  /**
   * @param string $level
   * @param ResponseInterface $response
   * @param array $context
   */
  public function logResponse(
    $level, ResponseInterface $response, array $context = array()) {
    // We only care about requests
  }
}
