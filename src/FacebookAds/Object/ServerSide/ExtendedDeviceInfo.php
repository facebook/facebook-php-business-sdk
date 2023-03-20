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

class ExtendedDeviceInfo implements ArrayAccess {

  const EXT_INFO_VERSION        = 0;
  const APP_PACKAGE_NAME        = 1;
  const SHORT_VERSION           = 2;
  const LONG_VERSION            = 3;
  const OS_VERSION              = 4;
  const DEVICE_MODEL_NAME       = 5;
  const LOCALE                  = 6;
  const TIMEZONE_ABBREVIATION   = 7;
  const CARRIER                 = 8;
  const SCREEN_WIDTH            = 9;
  const SCREEN_HEIGHT           = 10;
  const SCREEN_DENSITY          = 11;
  const CPU_CORE_COUNT          = 12;
  const TOTAL_DISK_SPACE_GB     = 13;
  const FREE_DISK_SPACE_GB      = 14;
  const DEVICE_TIME_ZONE        = 15;

  protected static $param_types = array(
    'ext_info_version' => 'string',
    'app_package_name' => 'string',
    'short_version' => 'string',
    'long_version' => 'string',
    'os_version' => 'string',
    'device_model_name' => 'string',
    'locale' => 'string',
    'timezone_abbreviation' => 'string',
    'carrier' => 'string',
    'screen_width' => 'int',
    'screen_height' => 'int',
    'screen_density' => 'string',
    'cpu_core_count' => 'int',
    'total_disk_space_gb' => 'int',
    'free_disk_space_gb' => 'int',
    'device_time_zone' => 'string',
  );

  protected static $attributeMap = array(
    'ext_info_version' => 'ext_info_version',
    'app_package_name' => 'app_package_name',
    'short_version' => 'short_version',
    'long_version' => 'long_version',
    'os_version' => 'os_version',
    'device_model_name' => 'device_model_name',
    'locale' => 'locale',
    'timezone_abbreviation' => 'timezone_abbreviation',
    'carrier' => 'carrier',
    'screen_width' => 'screen_width',
    'screen_height' => 'screen_height',
    'screen_density' => 'screen_density',
    'cpu_core_count' => 'cpu_core_count',
    'total_disk_space_gb' => 'total_disk_space_gb',
    'free_disk_space_gb' => 'free_disk_space_gb',
    'device_time_zone' => 'device_time_zone',
  );

  protected static $setters = array(
    'ext_info_version' => 'setExtInfoVersion',
    'app_package_name' => 'setAppPackageName',
    'short_version' => 'setShortVersion',
    'long_version' => 'setLongVersion',
    'os_version' => 'setOsVersion',
    'device_model_name' => 'setDeviceModelName',
    'locale' => 'setLocale',
    'timezone_abbreviation' => 'setTimezoneAbbreviation',
    'carrier' => 'setCarrier',
    'screen_width' => 'setScreenWidth',
    'screen_height' => 'setScreenHeight',
    'screen_density' => 'setScreenDensity',
    'cpu_core_count' => 'setCpuCoreCount',
    'total_disk_space_gb' => 'setTotalDiskSpaceGb',
    'free_disk_space_gb' => 'setFreeDiskSpaceGb',
    'device_time_zone' => 'setDeviceTimeZone',
  );

  protected static $getters = array(
    'ext_info_version' => 'getExtInfoVersion',
    'app_package_name' => 'getAppPackageName',
    'short_version' => 'getShortVersion',
    'long_version' => 'getLongVersion',
    'os_version' => 'getOsVersion',
    'device_model_name' => 'getDeviceModelName',
    'locale' => 'getLocale',
    'timezone_abbreviation' => 'getTimezoneAbbreviation',
    'carrier' => 'getCarrier',
    'screen_width' => 'getScreenWidth',
    'screen_height' => 'getScreenHeight',
    'screen_density' => 'getScreenDensity',
    'cpu_core_count' => 'getCpuCoreCount',
    'total_disk_space_gb' => 'getTotalDiskSpaceGb',
    'free_disk_space_gb' => 'getFreeDiskSpaceGb',
    'device_time_zone' => 'getDeviceTimeZone',
  );

  protected $container = array();

  public function __construct(array $data = null) {
    $this->container['ext_info_version'] = isset($data['ext_info_version']) ? $data['ext_info_version'] : null;
    $this->container['app_package_name'] = isset($data['app_package_name']) ? $data['app_package_name'] : null;
    $this->container['short_version'] = isset($data['short_version']) ? $data['short_version'] : null;
    $this->container['long_version'] = isset($data['long_version']) ? $data['long_version'] : null;
    $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
    $this->container['device_model_name'] = isset($data['device_model_name']) ? $data['device_model_name'] : null;
    $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
    $this->container['timezone_abbreviation'] = isset($data['timezone_abbreviation']) ? $data['timezone_abbreviation'] : null;
    $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
    $this->container['screen_width'] = isset($data['screen_width']) ? $data['screen_width'] : null;
    $this->container['screen_height'] = isset($data['screen_height']) ? $data['screen_height'] : null;
    $this->container['screen_density'] = isset($data['screen_density']) ? $data['screen_density'] : null;
    $this->container['cpu_core_count'] = isset($data['cpu_core_count']) ? $data['cpu_core_count'] : null;
    $this->container['total_disk_space_gb'] = isset($data['total_disk_space_gb']) ? $data['total_disk_space_gb'] : null;
    $this->container['free_disk_space_gb'] = isset($data['free_disk_space_gb']) ? $data['free_disk_space_gb'] : null;
    $this->container['device_time_zone'] = isset($data['device_time_zone']) ? $data['device_time_zone'] : null;
  }

  public static function paramTypes() {
    return $self::param_types;
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

  /**
   * show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties() {
    $invalid_properties = array();
    return $invalid_properties;
  }

  /**
   * validate all the properties in the model
   * return true if all passed
   *
   * @return bool True if all properties are valid
   */
  public function valid() {
    return true;
  }

  public function setExtInfoVersion($ext_info_version) {
    $this->container['ext_info_version'] = $ext_info_version;

    return $this;
  }

  public function setAppPackageName($app_package_name) {
    $this->container['app_package_name'] = $app_package_name;

    return $this;
  }

  public function setShortVersion($short_version) {
    $this->container['short_version'] = $short_version;

    return $this;
  }

  public function setLongVersion($long_version) {
    $this->container['long_version'] = $long_version;

    return $this;
  }

  public function setOsVersion($os_version) {
    $this->container['os_version'] = $os_version;

    return $this;
  }

  public function setDeviceModelName($device_model_name) {
    $this->container['device_model_name'] = $device_model_name;

    return $this;
  }

  public function setLocale($locale) {
    $this->container['locale'] = $locale;

    return $this;
  }

  public function setTimezoneAbbreviation($timezone_abbreviation) {
    $this->container['timezone_abbreviation'] = $timezone_abbreviation;

    return $this;
  }

  public function setCarrier($carrier) {
    $this->container['carrier'] = $carrier;

    return $this;
  }

  public function setScreenWidth($screen_width) {
    $this->container['screen_width'] = $screen_width;

    return $this;
  }

  public function setScreenHeight($screen_height) {
    $this->container['screen_height'] = $screen_height;

    return $this;
  }

  public function setScreenDensity($screen_density) {
    $this->container['screen_density'] = $screen_density;

    return $this;
  }

  public function setCpuCoreCount($cpu_core_count) {
    $this->container['cpu_core_count'] = $cpu_core_count;

    return $this;
  }

  public function setTotalDiskSpaceGb($total_disk_space_gb) {
    $this->container['total_disk_space_gb'] = $total_disk_space_gb;

    return $this;
  }

  public function setFreeDiskSpaceGb($free_disk_space_gb) {
    $this->container['free_disk_space_gb'] = $free_disk_space_gb;

    return $this;
  }

  public function setDeviceTimeZone($device_time_zone) {
    $this->container['device_time_zone'] = $device_time_zone;

    return $this;
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
    $extended_device_info_array = array();
    $extended_device_info_array[self::EXT_INFO_VERSION] = $this->getExtInfoVersion();
    $extended_device_info_array[self::APP_PACKAGE_NAME] = $this->getAppPackageName();
    $extended_device_info_array[self::SHORT_VERSION] = $this->getShortVersion();
    $extended_device_info_array[self::LONG_VERSION] = $this->getLongVersion();
    $extended_device_info_array[self::OS_VERSION] = $this->getOsVersion();
    $extended_device_info_array[self::DEVICE_MODEL_NAME] = $this->getDeviceModelName();
    $extended_device_info_array[self::LOCALE] = $this->getLocale();
    $extended_device_info_array[self::TIMEZONE_ABBREVIATION] = $this->getTimezoneAbbreviation();
    $extended_device_info_array[self::CARRIER] = $this->getCarrier();
    $extended_device_info_array[self::SCREEN_WIDTH] = $this->getScreenWidth();
    $extended_device_info_array[self::SCREEN_HEIGHT] = $this->getScreenHeight();
    $extended_device_info_array[self::SCREEN_DENSITY] = $this->getScreenDensity();
    $extended_device_info_array[self::CPU_CORE_COUNT] = $this->getCpuCoreCount();
    $extended_device_info_array[self::TOTAL_DISK_SPACE_GB] = $this->getTotalDiskSpaceGb();
    $extended_device_info_array[self::FREE_DISK_SPACE_GB] = $this->getFreeDiskSpaceGb();
    $extended_device_info_array[self::DEVICE_TIME_ZONE] = $this->getDeviceTimeZone();

    return $extended_device_info_array;
  }

  public function getExtInfoVersion() {
    return $this->container['ext_info_version'];
  }

  public function getAppPackageName() {
    return $this->container['app_package_name'];
  }

  public function getShortVersion() {
    return $this->container['short_version'];
  }

  public function getLongVersion() {
    return $this->container['long_version'];
  }

  public function getOsVersion() {
    return $this->container['os_version'];
  }

  public function getDeviceModelName() {
    return $this->container['device_model_name'];
  }

  public function getLocale() {
    return $this->container['locale'];
  }

  public function getTimezoneAbbreviation() {
    return $this->container['timezone_abbreviation'];
  }

  public function getCarrier() {
    return $this->container['carrier'];
  }

  public function getScreenWidth() {
    return $this->container['screen_width'];
  }

  public function getScreenHeight() {
    return $this->container['screen_height'];
  }

  public function getScreenDensity() {
    return $this->container['screen_density'];
  }

  public function getCpuCoreCount() {
    return $this->container['cpu_core_count'];
  }

  public function getTotalDiskSpaceGb() {
    return $this->container['total_disk_space_gb'];
  }

  public function getFreeDiskSpaceGb() {
    return $this->container['free_disk_space_gb'];
  }

  public function getDeviceTimeZone() {
    return $this->container['device_time_zone'];
  }

  /**
   * Gets the string presentation of the object
   * @return string
   */
  public function __toString() {
    if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
      return json_encode($this, JSON_PRETTY_PRINT);
    }

    return json_encode($this);
  }

}
