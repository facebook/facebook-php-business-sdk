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

namespace FacebookAds\Object;

abstract class AbstractObject {

  /**
   * @var array
   */
  protected static $fields = array();

  /**
   * @var mixed[] set of key value pairs representing data
   */
  protected $data = array();

  public function __construct() {
    if (static::$fields) {
      $this->data = array_combine(
        static::$fields,
        array_fill(0, count(static::$fields), null));
    }
  }

  /**
   * @param string $name
   * @return mixed
   * @throws \InvalidArgumentException
   */
  public function __get($name) {
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    } else {
      throw new \InvalidArgumentException(
        $name.' is not a field of '.get_class($this));
    }
  }

  /**
   * @param string $name
   * @param mixed $value
   */
  public function __set($name, $value) {
    $this->data[$name] = $value;
  }

  /**
   * @param array
   * @return $this
   */
  public function setData(array $data) {
    $this->data = $data;
    return $this;
  }

  /**
   * @return array
   */
  public function getData() {
    return $this->data;
  }

  /**
   * @param mixed $value
   * @return mixed
   */
  protected function exportValue($value) {
    switch (true) {
      case $value === null :
        break;
      case $value instanceof AbstractObject :
        $value = $value->exportData();
        break;
      case is_array($value) :
        foreach ($value as $key => $sub_value) {
          if ($sub_value === null) {
            unset($value[$key]);
          } else {
            $value[$key] = $this->exportValue($sub_value);
          }
        }
        break;
    }
    return $value;
  }

  /**
   * @return array
   */
  public function exportData() {
    return $this->exportValue($this->data);
  }

  /**
   * @return array
   */
  public static function getFields() {
    return static::$fields;
  }

  /**
   * @return string
   */
  public static function className() {
    return get_called_class();
  }
}
