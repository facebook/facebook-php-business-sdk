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

namespace FacebookAdsDocsRunner\Docsmith;

use FacebookAds\Http\Parameters;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Logger\CurlLogger;

class DocsmithCurlLogger extends CurlLogger {

  /**
   * @var string
   */
  const COMMENT_OPEN = '#';

  /**
   * @var string
   */
  const CURL_VARIABLE_SIGN = '%';

  /**
   * @var string
   */
  const PRODUCTION_TIER_DOMAIN = 'graph.facebook.com';

  /**
   * @var array
   */
  protected $placeholders = array();

  /**
   * @var \ArrayObject|null
   */
  protected $instructionIgnoreList;

  /**
   * @var \ArrayObject|null
   */
  protected $paramsIgnoreList;

  /**
   * @var \ArrayObject|null
   */
  protected $paramsEnforceList;

  /**
   * @param string $param_name
   * @return string
   */
  public static function getPlaceholder($param_name) {
    return static::CURL_VARIABLE_SIGN.$param_name;
  }

  /**
   * @return \ArrayObject
   */
  protected function getInstructionIgnoreList() {
    if ($this->instructionIgnoreList === null) {
      $this->instructionIgnoreList = new \ArrayObject();
    }

    return $this->instructionIgnoreList;
  }

  /**
   * @return \ArrayObject
   */
  protected function getParamsIgnoreList() {
    if ($this->paramsIgnoreList === null) {
      $this->paramsIgnoreList = new \ArrayObject(array(
        'appsecret_proof',
      ));
    }

    return $this->paramsIgnoreList;
  }

  /**
   * @return \ArrayObject
   */
  protected function getParamsEnforceList() {
    if ($this->paramsEnforceList === null) {
      $this->paramsEnforceList = new \ArrayObject(array(
        'access_token',
      ));
    }

    return $this->paramsEnforceList;
  }

  /**
   * @param string $arg
   * @param mixed $value
   */
  public function addPlaceholder($arg, $value) {
    $this->placeholders[$arg] = $value;
  }

  /**
   * @param mixed $value
   * @return string|null
   */
  public function getPlaceholderByValue($value) {
    foreach ($this->placeholders as $varname => $value2) {
      if ($value === $value2) {
        return $varname;
      }
    }

    return null;
  }

  /**
   * @param string $buffer
   */
  protected function flush($buffer) {
    fwrite($this->handle, $buffer."\n");
  }

  /**
   * @param $instruction_type
   * @param array $argv
   */
  protected function instructPassthru($instruction_type, array $argv) {
    $buffer = sprintf(
      '%s _DOC %s %s',
      static::COMMENT_OPEN,
      $instruction_type,
      count($argv) > 0 ? '['.implode(', ', $argv).']' : '');

    $this->flush($buffer);
  }

  /**
   * @param array|\Traversable $variable
   * @return array|\Traversable
   */
  protected function anonimizeTraversable($variable) {
    foreach ($variable as &$param) {
      $param = $this->anonimize($param);
    }

    return $variable;
  }

  /**
   * @param Object $variable
   * @return Object
   */
  protected function anonimizeObject($variable) {
    foreach (get_object_vars($variable) as $param_name) {
      $variable->{$param_name} = $this->anonimize($variable->{$param_name});
    }

    return $variable;
  }

  /**
   * @param int|float|string|bool $variable
   * @return int|float|string|bool
   */
  protected function anonimizeScalar($variable) {
    $param = $this->getPlaceholderByValue($variable);
    if ($param !== null) {
      $variable = static::getPlaceholder($param);
    }

    return $variable;
  }

  /**
   * @param mixed $variable
   * @return mixed
   */
  public function anonimize($variable) {
    if (is_array($variable) || $variable instanceof \Traversable) {
      return $this->anonimizeTraversable($variable);
    } else if (is_object($variable)) {
      return $this->anonimizeObject($variable);
    } else if (is_scalar($variable)) {
      return $this->anonimizeScalar($variable);
    }

    return $variable;
  }

  /**
   * @param Parameters $params
   * @param string $flag
   * @param bool $is_file
   * @return string
   */
  protected function processParams(Parameters $params, $flag, $is_file) {
    $params = clone $params;
    foreach ($this->getParamsIgnoreList() as $param) {
      $params->offsetExists($param) && $params->offsetUnset($param);
    }

    $params = $this->anonimize($params);

    foreach ($this->getParamsEnforceList() as $param) {
      $params->offsetExists($param) && $params->offsetSet(
        $param, static::getPlaceholder($param));
    }

    return parent::processParams(
      new DocsmithCurlParameters($params), $flag, false);
  }

  /**
   * @param RequestInterface $request
   * @return string
   */
  protected function processUrl(RequestInterface $request) {
    $request = clone $request;

    // Force production (without prod.)
    $request->setDomain(static::PRODUCTION_TIER_DOMAIN);

    $components = explode('/', $request->getPath());
    foreach ($components as &$component) {
      $varname = $this->getPlaceholderByValue($component);
      if ($varname !== null) {
        $component = static::getPlaceholder($varname);
      }
    }

    $request = clone $request;
    $request->setPath(implode('/', $components));

    return parent::processUrl($request);
  }

  /**
   * @param string $instruction_type
   * @param array $argv
   */
  public function instruct($instruction_type, array $argv = array()) {
    if (!in_array(
      $instruction_type,
      $this->getInstructionIgnoreList()->getArrayCopy())) {

      $this->instructPassthru($instruction_type, $argv);
    }
  }
}
