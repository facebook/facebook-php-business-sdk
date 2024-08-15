<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;
use FacebookAds\ApiConfig;
use FacebookAds\TypeChecker;
use FacebookAds\Enum\EmptyEnum;
class AbstractObject {
  /**
   * @var mixed[] set of key value pairs representing data
   */
  protected $data = array();
  protected $_type_checker;

  public function __construct() {
    $this->data = static::getFieldsEnum()->getValuesMap();
    $this->_type_checker = new TypeChecker(
      static::getFieldTypes(), static::getReferencedEnums());
  }

  protected static function getFieldTypes() {
    $fields_enum = static::getFieldsEnum();
    if (method_exists($fields_enum, 'getFieldTypes')) {
      return $fields_enum->getFieldTypes();
    } else {
      return array();
    }
  }

  protected static function getReferencedEnums() {
    return array();
  }

  /**
   * @param string $name
   * @param mixed $value
   */
  public function __set($name, $value) {
    if (ApiConfig::TYPE_CHECKER_STRICT_MODE
      && $this->_type_checker->isValidParam($name)
    ) {
      if ($this->_type_checker->isValidParamPair($name, $value)) {
        $this->data[$name] = $value;
      } else {
        throw new \InvalidArgumentException(
          $name." and ".$this->exportValue($value)
          ." are not a valid type value pair");
      }
    } else {
      $this->data[$name] = $value;
    }
    return $this;
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
   * @return boolean
   */
  public function __isset($name) {
    return array_key_exists($name, $this->data);
  }
  /**
   * @param array
   * @return $this
   */
  public function setData(array $data) {
    foreach ($data as $key => $value) {
      $this->{$key} = $value;
    }
    // Handle class-specific situations
    if (method_exists($this, 'setDataTrigger')) {
      $this->setDataTrigger($data);
    }

    return $this;
  }
  /**
   * Like setData but will skip field validation
   *
   * @param array
   * @return $this
   */
  public function setDataWithoutValidation(array $data) {
    foreach ($data as $key => $value) {
      $this->data[$key] = $value;
    }
    // Handle class-specific situations
    if (method_exists($this, 'setDataTrigger')) {
      $this->setDataTrigger($data);
    }
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
    $result = $value;
    switch (true) {
      case $value === null:
        break;
      case $value instanceof AbstractObject:
        $result = $value->exportData();
        break;
      case is_array($value):
        $result = array();
        foreach ($value as $key => $sub_value) {
          if ($sub_value !== null) {
            $result[$key] = $this->exportValue($sub_value);
          }
        }
        break;
    }
    return $result;
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
  public function exportAllData() {
    return $this->exportValue($this->data);
  }
  /**
   * @return EmptyEnum
   */
  public static function getFieldsEnum() {
    return EmptyEnum::getInstance();
  }
  /**
   * @return array
   */
  public static function getFields() {
    return static::getFieldsEnum()->getValues();
  }
  /**
   * @return string
   */
  public static function className() {
    return get_called_class();
  }
}
