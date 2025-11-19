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

namespace FacebookAds\Object\ServerSide;

use ArrayAccess;

/**
 * Server-Side AttributionSetting
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class AttributionSetting implements ArrayAccess {

  private $inactivity_window_hours;
  private $reattribution_window_hours;

  protected static $param_types = array(
    'inactivity_window_hours' => 'int',
    'reattribution_window_hours' => 'int',
  );

  protected static $attributeMap = array(
    'inactivity_window_hours' => 'inactivity_window_hours',
    'reattribution_window_hours' => 'reattribution_window_hours',
  );

  protected static $setters = array(
    'inactivity_window_hours' => 'setInactivityWindowHours',
    'reattribution_window_hours' => 'setReattributionWindowHours',
  );

  protected static $getters = array(
    'inactivity_window_hours' => 'getInactivityWindowHours',
    'reattribution_window_hours' => 'getReattributionWindowHours',
  );

  protected $container = array();

  public function __construct(?array $data = null) {
    $this->container['inactivity_window_hours'] = isset($data['inactivity_window_hours']) ? $data['inactivity_window_hours'] : null;
    $this->container['reattribution_window_hours'] = isset($data['reattribution_window_hours']) ? $data['reattribution_window_hours'] : null;
  }

  public static function paramTypes() {
    return self::$param_types;
  }

  public static function attributeMap() {
    return self::$attributeMap;
  }

  public static function setters() {
    return self::$setters;
  }

  public static function getters() {
    return self::$getters;
  }

  public function listInvalidProperties() {
    $invalid_properties = array();
    return $invalid_properties;
  }

  public function valid() {
    return true;
  }

  /**
   * Sets inactivity_window_hours
   * @param int $inactivity_window_hours The inactivity window in hours.
   * @return $this
   */
  public function setInactivityWindowHours($inactivity_window_hours) {
    $this->container['inactivity_window_hours'] = $inactivity_window_hours;

    return $this;
  }

  /**
   * Sets reattribution_window_hours
   * @param int $reattribution_window_hours The reattribution window in hours.
   * @return $this
   */
  public function setReattributionWindowHours($reattribution_window_hours) {
    $this->container['reattribution_window_hours'] = $reattribution_window_hours;

    return $this;
  }

  /**
   * Gets inactivity window hours.
   * @return int
   */
  public function getInactivityWindowHours() {
    return $this->container['inactivity_window_hours'];
  }

  /**
   * Gets reattribution window hours.
   * @return int
   */
  public function getReattributionWindowHours() {
    return $this->container['reattribution_window_hours'];
  }

  /**
   * Returns true if offset exists. False otherwise.
   * @param integer $offset Offset
   * @return boolean
   */
  public function offsetExists($offset) : bool {
    return isset($this->container[$offset]);
  }

  /**
   * Gets offset.
   * @param integer $offset Offset
   * @return mixed
   */
  public function offsetGet($offset) : mixed {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

  /**
   * Sets value based on offset.
   * @param integer $offset Offset
   * @param mixed $value Value to be set
   * @return void
   */
  public function offsetSet($offset, $value) : void {
    if (is_null($offset)) {
      $this->container[] = $value;
    } else {
      $this->container[$offset] = $value;
    }
  }

  /**
   * Unsets offset.
   * @param integer $offset Offset
   * @return void
   */
  public function offsetUnset($offset) : void {
    unset($this->container[$offset]);
  }

  public function normalize() {
    $normalized_payload = array();

    $normalized_payload['inactivity_window_hours'] = $this->getInactivityWindowHours();
    $normalized_payload['reattribution_window_hours'] = $this->getReattributionWindowHours();
    return $normalized_payload;
  }

  /**
   * Gets the string presentation of the object
   * @return string
   */
  public function __toString() {
    if (defined('JSON_PRETTY_PRINT')) {
      return json_encode($this, JSON_PRETTY_PRINT);
    }

    return json_encode($this);
  }
}
