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

class AppData implements ArrayAccess {

  private $application_tracking_enabled;
  private $advertiser_tracking_enabled;
  private $app_user_id;
  private $campaign_ids;
  private $consider_views;
  private $extinfo;
  private $include_dwell_data;
  private $include_video_data;
  private $install_referrer;
  private $installer_package;
  private $receipt_data;
  private $url_schemes;
  private $windows_attribution_id;

  protected static $param_types = array(
    'application_tracking_enabled' => 'bool',
    'advertiser_tracking_enabled' => 'bool',
    'app_user_id' => 'string',
    'campaign_ids' => 'string',
    'consider_views' => 'bool',
    'extinfo' => 'FacebookAds\Object\ServerSide\ExtendedDeviceInfo',
    'include_dwell_data' => 'bool',
    'include_video_data' => 'bool',
    'install_referrer' => 'string',
    'installer_package' => 'string',
    'receipt_data' => 'string',
    'url_schemes' => 'string',
    'windows_attribution_id' => 'string',
  );

  protected static $attributeMap = array(
    'application_tracking_enabled' => 'application_tracking_enabled',
    'advertiser_tracking_enabled' => 'advertiser_tracking_enabled',
    'app_user_id' => 'app_user_id',
    'campaign_ids' => 'campaign_ids',
    'consider_views' => 'consider_views',
    'extinfo' => 'extinfo',
    'include_dwell_data' => 'include_dwell_data',
    'include_video_data' => 'include_video_data',
    'install_referrer' => 'install_referrer',
    'installer_package' => 'installer_package',
    'receipt_data' => 'receipt_data',
    'url_schemes' => 'url_schemes',
    'windows_attribution_id' => 'windows_attribution_id',
  );

  protected static $setters = array(
    'application_tracking_enabled' => 'setApplicationTrackingEnabled',
    'advertiser_tracking_enabled' => 'setAdvertiserTrackingEnabled',
    'app_user_id' => 'setAppUserId',
    'campaign_ids' => 'setCampaignIds',
    'consider_views' => 'setConsiderViews',
    'extinfo' => 'setExtinfo',
    'include_dwell_data' => 'setIncludeDwellData',
    'include_video_data' => 'setIncludeVideoData',
    'install_referrer' => 'setInstallReferrer',
    'installer_package' => 'setInstallerPackage',
    'receipt_data' => 'setReceiptData',
    'url_schemes' => 'setUrlSchemes',
    'windows_attribution_id' => 'setWindowsAttributionId',
  );

  protected static $getters = array(
    'application_tracking_enabled' => 'getApplicationTrackingEnabled',
    'advertiser_tracking_enabled' => 'getAdvertiserTrackingEnabled',
    'app_user_id' => 'getAppUserId',
    'campaign_ids' => 'getCampaignIds',
    'consider_views' => 'getConsiderViews',
    'extinfo' => 'getExtinfo',
    'include_dwell_data' => 'getIncludeDwellData',
    'include_video_data' => 'getIncludeVideoData',
    'install_referrer' => 'getInstallReferrer',
    'installer_package' => 'getInstallerPackage',
    'receipt_data' => 'getReceiptData',
    'url_schemes' => 'getUrlSchemes',
    'windows_attribution_id' => 'getWindowsAttributionId',
  );

  protected $container = array();

  public function __construct(array $data = null) {
    $this->container['application_tracking_enabled'] = isset($data['application_tracking_enabled']) ? $data['application_tracking_enabled'] : null;
    $this->container['advertiser_tracking_enabled'] = isset($data['advertiser_tracking_enabled']) ? $data['advertiser_tracking_enabled'] : null;
    $this->container['app_user_id'] = isset($data['app_user_id']) ? $data['app_user_id'] : null;
    $this->container['campaign_ids'] = isset($data['campaign_ids']) ? $data['campaign_ids'] : null;
    $this->container['consider_views'] = isset($data['consider_views']) ? $data['consider_views'] : null;
    $this->container['extinfo'] = isset($data['extinfo']) ? $data['extinfo'] : null;
    $this->container['include_dwell_data'] = isset($data['include_dwell_data']) ? $data['include_dwell_data'] : null;
    $this->container['include_video_data'] = isset($data['include_video_data']) ? $data['include_video_data'] : null;
    $this->container['install_referrer'] = isset($data['install_referrer']) ? $data['install_referrer'] : null;
    $this->container['installer_package'] = isset($data['installer_package']) ? $data['installer_package'] : null;
    $this->container['receipt_data'] = isset($data['receipt_data']) ? $data['receipt_data'] : null;
    $this->container['url_schemes'] = isset($data['url_schemes']) ? $data['url_schemes'] : null;
    $this->container['windows_attribution_id'] = isset($data['windows_attribution_id']) ? $data['windows_attribution_id'] : null;
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

  public function setApplicationTrackingEnabled($application_tracking_enabled) {
    $this->container['application_tracking_enabled'] = $application_tracking_enabled;

    return $this;
  }

  public function setAdvertiserTrackingEnabled($advertiser_tracking_enabled) {
    $this->container['advertiser_tracking_enabled'] = $advertiser_tracking_enabled;

    return $this;
  }

  public function setAppUserId($app_user_id) {
    $this->container['app_user_id'] = $app_user_id;

    return $this;
  }

  public function setCampaignIds($campaign_ids) {
    $this->container['campaign_ids'] = $campaign_ids;

    return $this;
  }

  public function setConsiderViews($consider_views) {
    $this->container['consider_views'] = $consider_views;

    return $this;
  }

  public function setExtinfo($extinfo) {
    $this->container['extinfo'] = $extinfo;

    return $this;
  }

  public function setIncludeDwellData($include_dwell_data) {
    $this->container['include_dwell_data'] = $include_dwell_data;

    return $this;
  }

  public function setIncludeVideoData($include_video_data) {
    $this->container['include_video_data'] = $include_video_data;

    return $this;
  }

  public function setInstallReferrer($install_referrer) {
    $this->container['install_referrer'] = $install_referrer;

    return $this;
  }

  public function setInstallerPackage($installer_package) {
    $this->container['installer_package'] = $installer_package;

    return $this;
  }

  public function setReceiptData($receipt_data) {
    $this->container['receipt_data'] = $receipt_data;

    return $this;
  }

  public function setUrlSchemes($url_schemes) {
    $this->container['url_schemes'] = $url_schemes;

    return $this;
  }

  public function  setWindowsAttributionId($windows_attribution_id) {
    $this->container['windows_attribution_id'] = $windows_attribution_id;

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

  /**
   * Noramlize
   * @return array
   */
  public function normalize() {
    $normalized_payload = array();
    
    $normalized_payload['app_user_id']= $this->getAppUserId();
    $normalized_payload['campaign_ids'] = $this->getCampaignIds();
    $normalized_payload['consider_views'] = $this->getConsiderViews();
    $normalized_payload['extinfo'] = isset($this->container['extinfo'])? $this->getExtinfo()->normalize() : null;
    $normalized_payload['include_dwell_data'] = $this->getIncludeDwellData();
    $normalized_payload['include_video_data']= $this->getIncludeVideoData();
    $normalized_payload['install_referrer'] = $this->getInstallReferrer();
    $normalized_payload['installer_package'] = $this->getInstallerPackage();
    $normalized_payload['receipt_data'] = $this->getReceiptData();
    $normalized_payload['url_schemes'] = $this->getUrlSchemes();
    $normalized_payload['windows_attribution_id'] = $this->getWindowsAttributionId();

    $normalized_payload = array_filter($normalized_payload);

    // The following two booleans are set after array_filter because they are required and 
    // shouldn't be removed when falsy
    $normalized_payload['application_tracking_enabled'] = $this->getApplicationTrackingEnabled();
    $normalized_payload['advertiser_tracking_enabled'] = $this->getAdvertiserTrackingEnabled();

    return $normalized_payload;
  }

  public function getApplicationTrackingEnabled() {
    return $this->container['application_tracking_enabled'];
  }

  public function getAdvertiserTrackingEnabled() {
    return $this->container['advertiser_tracking_enabled'];
  }

  public function getAppUserId() {
    return $this->container['app_user_id'];
  }

  public function getCampaignIds() {
    return $this->container['campaign_ids'];
  }

  public function getConsiderViews() {
    return $this->container['consider_views'];
  }

  public function getExtinfo() {
    return $this->container['extinfo'];
  }

  public function getIncludeDwellData() {
    return $this->container['include_dwell_data'];
  }

  public function getIncludeVideoData() {
    return $this->container['include_video_data'];
  }

  public function getInstallReferrer() {
    return $this->container['install_referrer'];
  }

  public function getInstallerPackage() {
    return $this->container['installer_package'];
  }

  public function getReceiptData() {
    return $this->container['receipt_data'];
  }

  public function getUrlSchemes() {
    return $this->container['url_schemes'];
  }

  public function  getWindowsAttributionId() {
    return $this->container['windows_attribution_id'];
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
