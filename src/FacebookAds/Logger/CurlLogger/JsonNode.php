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

namespace FacebookAds\Logger\CurlLogger;

final class JsonNode {

  /**
   * @var int
   */
  const INDENT_UNIT = 2;

  /**
   * @var int
   */
  const EXPLOSION_THRESHOLD = 78;

  /**
   * @var mixed
   */
  protected $value;

  /**
   * @var \ArrayObject
   */
  protected $children;

  /**
   * @param mixed $value
   * @return $this
   * @throws \InvalidArgumentException
   */
  public static function factory($value) {
    $object = new self();
    switch (true) {
      case is_object($value):
        $value = (array) $value;
        // fallthrough
      case is_array($value):
        foreach ($value as $key => $sub) {
          $object->getChildren()->offsetSet($key, self::factory($sub));
        }
        // fallthrough
      case is_null($value) || is_scalar($value):
        $object->setValue($value);
        break;
      default:
        throw new \InvalidArgumentException(
          gettype($value).' can\'t be encoded');
    }

    return $object;
  }

  public function __construct() {
    $this->children = new \ArrayObject();
  }

  /**
   * @return mixed
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * @param mixed $value
   * @return $this
   */
  public function setValue($value) {
    $this->value = $value;

    return $this;
  }

  /**
   * @return \ArrayObject
   */
  public function getChildren() {
    return $this->children;
  }

  /**
   * @return int
   */
  public function getMaxTreeChildrenCount() {
    $max = $this->getChildren()->count();

    /** @var JsonNode $child */
    foreach ($this->getChildren() as $child) {
      $ith = $child->getMaxTreeChildrenCount();
      $max = $ith > $max ? $ith : $max;
    }

    return $max;
  }

  /**
   * @param int $indent
   * @return string
   */
  protected function getPadding($indent) {
    return str_repeat(' ', $indent * self::INDENT_UNIT);
  }

  /**
   * @return mixed
   */
  protected function getLastChildKey() {
    if ($this->getChildren()->count() === 0) {
      return null;
    }

    $copy = $this->getChildren()->getArrayCopy();
    end($copy);

    return key($copy);
  }

  /**
   * @param int $indent
   * @return string
   */
  protected function encodeList($indent) {
    $value = $this->getValue();
    if (empty($value) || (array_keys($value) === range(0, count($value) - 1))) {
      $is_map = false;
    } else {
      $is_map = true;
    }

    ++$indent;
    $last_key = $this->getLastChildKey();

    $buffer = ($is_map ? '{' : '[')."\n";

    /** @var JsonNode $child */
    foreach ($this->getChildren() as $key => $child) {
      $buffer .= sprintf(
        "%s%s%s%s\n",
        $this->getPadding($indent),
        $is_map ? sprintf("%s: ", json_encode($key)) : '',
        $child->encode($indent),
        $key === $last_key ? '' : ',');
    }

    --$indent;
    $buffer .= $this->getPadding($indent).($is_map ? '}' : ']');

    return $buffer;
  }

  /**
   * @param int $indent
   * @return string
   */
  public function encode($indent = 0) {
    $value = $this->getValue();
    if (is_array($value) || is_object($value)) {
      if ($this->getMaxTreeChildrenCount() > 2) {
        return $this->encodeList($indent);
      }

      $ugly = json_encode($value);
      $output_prediction = $this->getPadding($indent).$ugly;
      if (strlen($output_prediction) > self::EXPLOSION_THRESHOLD) {
        return $this->encodeList($indent);
      }

      return $ugly;
    }

    return json_encode($value);
  }
}
