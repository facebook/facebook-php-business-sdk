<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAds;

class TypeChecker {

  const ABSTRACT_OBJECT_PREFIX = "FacebookAds\\Object\\";
  private $type_data;
  private $enum_data;
  private $primitive_types = ["unsigned int", "int", "bool", "string",
    "Object", "datetime", "float"];

  public function __construct($type_check_info, $type_check_enum) {
    $this->type_data = $type_check_info;
    $this->enum_data = $type_check_enum;
  }

  public function isPrimitiveType($param) {
    return (in_array($param, $this->primitive_types) ||
      array_key_exists($param, $this->enum_data));
  }

  public function convertStringToPrimType($primitive_type, $value) {
    if (array_key_exists($primitive_type, $this->enum_data)) {
      return $value;
    } elseif (in_array($primitive_type, array("unsigned int", "int"))) {
      return intval($value);
    } elseif ($primitive_type === "bool") {
      return boolval($value);
    } elseif ($primitive_type === "float") {
      return floatval($value);
    } elseif ($primitive_type === "datetime") {
      return $value;
    } elseif ($primitive_type === "string") {
      return $value;
    } elseif ($primitive_type === "Object") {
      return $value;
    } else {
      if (ApiConfig::TYPE_CHECKER_STRICT_MODE) {
        throw new \Exception("Not a primitive type");
      } else {
        return $value;
      }
    }
  }

  public function getType($param) {
    if (array_key_exists($param, $this->type_data)) {
      return $this->type_data[$param];
    } else {
      return null;
    }
  }

  public function isValidParam($param) {
    return array_key_exists($param, $this->type_data);
  }

  public function isValidParamPair($param, $value) {
    if ($this->isValidParam($param)) {
      $type = $this->type_data[$param];
      return $this->checkType($type, $value);
    }
    return false;
  }

  public function checkType($type, $value, $allow_array_for_obj = true) {
    if ($value === null || $type === null || $type === "Object") {
      return true;
    } else if (array_key_exists($type, $this->enum_data)) {
      return in_array($value, $this->enum_data[$type]);
    } else if ($type === "file") {
      return file_exists($value);
    } else if ($type === "list" || $type === "map") {
      return is_array($value);
    } else if ($type === "bool") {
      return is_bool($value);
    } else if ($type === "int" || $type === "unsigned int" || $type === "float") {
      return is_numeric($value);
    } else if ($type === "string" || $type === "datetime") {
      return is_string($value) || is_numeric($value) || is_bool($value);
    } else if ($this->isTypeCollection($type, "list")) {
      $sub_types = $this->getTypeFromCollection($type, "list");
      $sub_type = $sub_types[0];
      if (is_array($value)) {
        if (empty($value)) {
          return true;
        }
        $all_object_same_type = true;
        foreach ($value as $key => $sub_value) {
          $all_object_same_type = ($all_object_same_type &&
            $this->checkType($sub_type, $sub_value));
        }
        return $all_object_same_type;
      } else {
        return $this->checkType($sub_type, $value);
      }
    } else if ($this->isTypeCollection($type, "map")) {
      if (is_array($value)) {
        $sub_types = $this->getTypeFromCollection($type, "map");
        if (count($sub_types) === 1) {
          $sub_key_type = 'string';
          $sub_value_type = $sub_types[0];
        } else {
          $sub_key_type = $sub_types[0];
          $sub_value_type = $sub_types[1];
        }
        $all_object_same_type = true;
        foreach ($value as $key => $sub_value) {
          $all_object_same_type = ($all_object_same_type &&
            $this->checkType($sub_key_type, $key) &&
            $this->checkType($sub_value_type, $sub_value));
        }
        return $all_object_same_type;
      }
    } else {
      // the type is an object
      if ($allow_array_for_obj && is_array($value)) {
        return true;
      }
      if (!$this->startsWith($type, self::ABSTRACT_OBJECT_PREFIX)) {
        $type = self::ABSTRACT_OBJECT_PREFIX.$type;
      }
      return is_a($value, $type);
    }
    return false;
  }

  public function isAbstractObject($value) {
    if (is_object($value)) {
      $cls_name = get_class($value);
      return $this->startsWith($cls_name, self::ABSTRACT_OBJECT_PREFIX);
    }
    return false;
  }

  private function startsWith($string, $prefix) {
    return $prefix === "" ||
      strrpos($string, $prefix, -strlen($string)) !== false;
  }

  public function isListParam($param) {
    if ($this->isValidParam($param)) {
      return $this->isTypeCollection($this->type_data[$param], "list");
    }
    return false;
  }

  public function isMapParam($param) {
    if ($this->isValidParam($param)) {
      return $this->isTypeCollection($this->type_data[$param], "map");
    }
    return false;
  }

  public function isFileParam($param) {
    if ($this->isValidParam($param)) {
      return ($this->type_data[$param] === "file");
    }
    return false;
  }

  public function isTypeCollection($type, $collection) {
    $len_of_collection = strlen($collection);
    $typeCollection = substr($type, 0, $len_of_collection);
    return ($collection === $typeCollection);
  }

  public function getTypeFromCollection($type, $collection) {
    return explode(",", trim(substr($type, strlen($collection)), "<>"));
  }
}
