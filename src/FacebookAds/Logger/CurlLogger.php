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

use FacebookAds\Http\Parameters;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;

class CurlLogger implements LoggerInterface {

  /**
   * @var string
   */
  const PARAM_DEFAULT_FLAG = 'd';

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
   * @var int
   */
  protected $escapeLevels = 0;

  /**
   * @var bool
   */
  protected $showSensitiveData = true;

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @var \ArrayObject
   */
  protected $sensitiveParameterList;

  /**
   * @param resource $handle
   */
  public function __construct($handle = null) {
    $this->handle = is_resource($handle) ? $handle : STDOUT;
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
   * @return string
   */
  public static function getParamFlag($method) {
    return $method === RequestInterface::METHOD_POST
      ? static::PARAM_POST_FLAG
      : static::PARAM_DEFAULT_FLAG;
  }

  /**
   * @param $param_name
   * @return string
   */
  public static function getPlaceholder($param_name) {
    return '<'.strtoupper($param_name).'>';
  }

  /**
   * Set how many times quotes should be escaped
   *
   * @param int $levels
   */
  public function setEscapeLevels($levels = 0) {
    $this->escapeLevels = $levels;
  }

  /**
   * @return int
   */
  public function getEscapeLevels() {
    return $this->escapeLevels;
  }

  /**
   * @param string $string
   * @return string
   */
  public function escape($string) {
    for ($i = 0; $i < $this->getEscapeLevels(); $i++) {
      $string = str_replace('"', '\"', $string);
    }

    return $string;
  }

  /**
   * Whether to show ids and tokens
   * @param $show
   */
  public function setShowSensitiveData($show) {
    $this->showSensitiveData = $show;
  }

  /**
   * @return bool
   */
  public function getShowSensitiveData() {
    return $this->showSensitiveData;
  }

  /**
   * @param \ArrayObject $list
   */
  public function setSensitiveParametersList(\ArrayObject $list) {
    $this->sensitiveParameterList = $list;
  }

  /**
   * @return \ArrayObject
   */
  public function getSensitiveParametersList() {
    if ($this->sensitiveParameterList === null) {
      $this->sensitiveParameterList = new \ArrayObject(array(
        'access_token',
        'appsecret_proof',
      ));
    }

    return $this->sensitiveParameterList;
  }

  /**
   * @param Parameters $params
   * @param string $flag
   * @param bool $is_file
   * @return string
   */
  protected function processParams(
    Parameters $params, $flag, $is_file = false) {
    $chunks = array();
    $file_mod = $is_file ? '@' : '';
    foreach ($params->export() as $name => $value ) {
      if (!$this->showSensitiveData
        && in_array(
          $name, $this->getSensitiveParametersList()->getArrayCopy())) {
        $value = static::getPlaceholder($name);
      }
      $chunks[$name] = '-'.$flag.' "'.$name.'='.$file_mod.$value.'"';
    }

    return $chunks;
  }

  /**
   * @param RequestInterface $request
   * @return string
   */
  protected function processUrl(RequestInterface $request) {
    $path = $request->getPath();
    if (!$this->showSensitiveData) {
      $path = preg_replace(
        array('/\/act_\d+(\/|$)/i', '/\/\d+(\/|$)/'),
        array('/act_<AD_ACCOUNT_ID>$1', '/<OBJECT_ID>$1'),
        $path);
    }

    return $request->getProtocol().$request->getDomain()
    .'/v'.$request->getGraphVersion().$path;
  }

  /**
   * @param mixed $level
   * @param string $message
   * @param array $context
   */
  public function log($level, $message, array $context = array()) {
    // We don't care for anything except requests
  }

  /**
   * @param string $level
   * @param RequestInterface $request
   * @param array $context
   */
  public function logRequest(
    $level, RequestInterface $request, array $context = array()) {

    $new_line = ' \\'.PHP_EOL.'  ';
    $method_flag = static::getMethodFlag($request->getMethod());
    $param_flag = static::getParamFlag($request->getMethod());
    $params = array_merge(
      $this->processParams($request->getQueryParams(), $param_flag),
      $this->processParams($request->getBodyParams(), $param_flag),
      $this->processParams($request->getFileParams(), $param_flag, true));

    $buffer = 'curl'.($method_flag ? ' -'.$method_flag : '');
    foreach ($params as $param) {
      $buffer .= $new_line.$param;
    }
    $buffer .= $new_line.$this->processUrl($request);

    fwrite($this->handle, $this->escape($buffer.PHP_EOL.PHP_EOL));
  }

  /**
   * @param string $level
   * @param ResponseInterface $response
   * @param array $context
   */
  public function logResponse(
    $level, ResponseInterface $response, array $context = array()) {
    // We don't care for anything except requests
  }
}
