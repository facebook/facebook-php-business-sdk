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
 * Server-Side AttributionData
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class AttributionData implements ArrayAccess {

  private $scope;
  private $visit_time;
  private $ad_id;
  private $adset_id;
  private $campaign_id;
  private $attribution_share;
  private $attribution_model;
  private $attr_window;
  private $attribution_value;
  private $attribution_source;
  private $touchpoint_type;
  private $touchpoint_ts;
  private $attribution_method;
  private $decline_reason;
  private $auditing_token;
  private $linkage_key;
  private $attribution_setting;

  protected static $param_types = array(
    'scope' => 'string',
    'visit_time' => 'int',
    'ad_id' => 'string',
    'adset_id' => 'string',
    'campaign_id' => 'string',
    'attribution_share' => 'float',
    'attribution_model' => 'FacebookAds\Object\ServerSide\AttributionModel',
    'attr_window' => 'int',
    'attribution_value' => 'float',
    'attribution_source' => 'string',
    'touchpoint_type' => 'string',
    'touchpoint_ts' => 'int',
    'attribution_method' => 'FacebookAds\Object\ServerSide\AttributionMethod',
    'decline_reason' => 'FacebookAds\Object\ServerSide\DeclineReason',
    'auditing_token' => 'string',
    'linkage_key' => 'string',
    'attribution_setting' => 'FacebookAds\Object\ServerSide\AttributionSetting',
  );

  protected static $attributeMap = array(
    'scope' => 'scope',
    'visit_time' => 'visit_time',
    'ad_id' => 'ad_id',
    'adset_id' => 'adset_id',
    'campaign_id' => 'campaign_id',
    'attribution_share' => 'attribution_share',
    'attribution_model' => 'attribution_model',
    'attr_window' => 'attr_window',
    'attribution_value' => 'attribution_value',
    'attribution_source' => 'attribution_source',
    'touchpoint_type' => 'touchpoint_type',
    'touchpoint_ts' => 'touchpoint_ts',
    'attribution_method' => 'attribution_method',
    'decline_reason' => 'decline_reason',
    'auditing_token' => 'auditing_token',
    'linkage_key' => 'linkage_key',
    'attribution_setting' => 'attribution_setting',
  );

  protected static $setters = array(
    'scope' => 'setScope',
    'visit_time' => 'setVisitTime',
    'ad_id' => 'setAdId',
    'adset_id' => 'setAdsetId',
    'campaign_id' => 'setCampaignId',
    'attribution_share' => 'setAttributionShare',
    'attribution_model' => 'setAttributionModel',
    'attr_window' => 'setAttrWindow',
    'attribution_value' => 'setAttributionValue',
    'attribution_source' => 'setAttributionSource',
    'touchpoint_type' => 'setTouchpointType',
    'touchpoint_ts' => 'setTouchpointTs',
    'attribution_method' => 'setAttributionMethod',
    'decline_reason' => 'setDeclineReason',
    'auditing_token' => 'setAuditingToken',
    'linkage_key' => 'setLinkageKey',
    'attribution_setting' => 'setAttributionSetting',
  );

  protected static $getters = array(
    'scope' => 'getScope',
    'visit_time' => 'getVisitTime',
    'ad_id' => 'getAdId',
    'adset_id' => 'getAdsetId',
    'campaign_id' => 'getCampaignId',
    'attribution_share' => 'getAttributionShare',
    'attribution_model' => 'getAttributionModel',
    'attr_window' => 'getAttrWindow',
    'attribution_value' => 'getAttributionValue',
    'attribution_source' => 'getAttributionSource',
    'touchpoint_type' => 'getTouchpointType',
    'touchpoint_ts' => 'getTouchpointTs',
    'attribution_method' => 'getAttributionMethod',
    'decline_reason' => 'getDeclineReason',
    'auditing_token' => 'getAuditingToken',
    'linkage_key' => 'getLinkageKey',
    'attribution_setting' => 'getAttributionSetting',
  );

  protected $container = array();

  public function __construct(?array $data = null) {
    $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    $this->container['visit_time'] = isset($data['visit_time']) ? $data['visit_time'] : null;
    $this->container['ad_id'] = isset($data['ad_id']) ? $data['ad_id'] : null;
    $this->container['adset_id'] = isset($data['adset_id']) ? $data['adset_id'] : null;
    $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
    $this->container['attribution_share'] = isset($data['attribution_share']) ? $data['attribution_share'] : null;
    $this->container['attribution_model'] = isset($data['attribution_model']) ? $data['attribution_model'] : null;
    $this->container['attr_window'] = isset($data['attr_window']) ? $data['attr_window'] : null;
    $this->container['attribution_value'] = isset($data['attribution_value']) ? $data['attribution_value'] : null;
    $this->container['attribution_source'] = isset($data['attribution_source']) ? $data['attribution_source'] : null;
    $this->container['touchpoint_type'] = isset($data['touchpoint_type']) ? $data['touchpoint_type'] : null;
    $this->container['touchpoint_ts'] = isset($data['touchpoint_ts']) ? $data['touchpoint_ts'] : null;
    $this->container['attribution_method'] = isset($data['attribution_method']) ? $data['attribution_method'] : null;
    $this->container['decline_reason'] = isset($data['decline_reason']) ? $data['decline_reason'] : null;
    $this->container['auditing_token'] = isset($data['auditing_token']) ? $data['auditing_token'] : null;
    $this->container['linkage_key'] = isset($data['linkage_key']) ? $data['linkage_key'] : null;
    $this->container['attribution_setting'] = isset($data['attribution_setting']) ? $data['attribution_setting'] : null;
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
   * Sets scope
   * @param string $scope Touchpoint type.
   * @return $this
   */
  public function setScope($scope) {
    $this->container['scope'] = $scope;

    return $this;
  }

  /**
   * Sets visit_time
   * @param int $visit_time A Unix timestamp in seconds indicating time that the campaign_id or fbc was first received.
   * @return $this
   */
  public function setEventTime($visit_time) {
    $this->container['visit_time'] = $visit_time;

    return $this;
  }

  /**
   * Sets ad_id
   * @param string $ad_id Meta-provided ad id from URL/deeplink.
   * @return $this
   */
  public function setAdId($ad_id) {
    $this->container['ad_id'] = $ad_id;

    return $this;
  }

  /**
   * Sets adset_id
   * @param string $adset_id Meta-provided adset id from URL/deeplink.
   * @return $this
   */
  public function setAdsetId($adset_id) {
    $this->container['adset_id'] = $adset_id;

    return $this;
  }

  /**
   * Sets campaign_id
   * @param string $campaign_id Meta-provided campaign id from URL/deeplink.
   * @return $this
   */
  public function setCampaignId($campaign_id) {
    $this->container['campaign_id'] = $campaign_id;

    return $this;
  }

  /**
   * Sets attribution_share
   * @param float $attribution_share [0-1] weight of credit assigned to the visit.
   * @return $this
   */
  public function setAttributionShare($attribution_share) {
    $this->container['attribution_share'] = $attribution_share;

    return $this;
  }

  /**
   * Sets attribution_model
   * @param string $attribution_model Attribution model used to attribute the event.
   * @return $this
   */
  public function setAttributionModel($attribution_model) {
    $this->container['attribution_model'] = $attribution_model;

    return $this;
  }

  /**
   * Sets attr_window
   * @param string $attr_window Attribution window in days.
   * @return $this
   */
  public function setAttrWindow($attr_window) {
    $this->container['attr_window'] = $attr_window;

    return $this;
  }

  /**
   * Sets attribution_value
   * @param float $attribution_value The share of value generated by this click-conversion pair that is attributed to Meta.
   * @return $this
   */
  public function setAttributionValue($attribution_value) {
    $this->container['attribution_value'] = $attribution_value;

    return $this;
  }

  /**
   * Sets attribution_source
   * @param string $attribution_source The attribution source to differentiate the source of the data, e.g. whether this is from AMM or Custom Attribution or any other sources.
   * @return $this
   */
  public function setAttributionSource($attribution_source) {
    $this->container['attribution_source'] = $attribution_source;

    return $this;
  }

  /**
   * Sets touchpoint_type
   * @param string $touchpoint_type The engagement type that caused the original credited conversion.
   * @return $this
   */
  public function setTouchpointType($touchpoint_type) {
    $this->container['touchpoint_type'] = $touchpoint_type;

    return $this;
  }

  /**
   * Sets touchpoint_ts
   * @param int $touchpoint_ts The time when the touchpoint event occurred with the ad that the install was credited to.
   * @return $this
   */
  public function setTouchpointTs($touchpoint_ts) {
    $this->container['touchpoint_ts'] = $touchpoint_ts;

    return $this;
  }

  /**
   * Sets attribution_method
   * @param string $attribution_method The attribution method used to attribute the event.
   * @return $this
   */
  public function setAttributionMethod($attribution_method) {
    $this->container['attribution_method'] = $attribution_method;

    return $this;
  }

  /**
   * Sets decline_reason
   * @param string $decline_reason The decline reason for the attribution.
   * @return $this
   */
  public function setDeclineReason($decline_reason) {
    $this->container['decline_reason'] = $decline_reason;

    return $this;
  }

  /**
   * Sets auditing_token
   * @param string $auditing_token The auditing token for the attribution.
   * @return $this
   */
  public function setAuditingToken($auditing_token) {
    $this->container['auditing_token'] = $auditing_token;

    return $this;
  }

  /**
   * Sets linkage_key
   * @param string $linkage_key The linkage key for the attribution.
   * @return $this
   */
  public function setLinkageKey($linkage_key) {
    $this->container['linkage_key'] = $linkage_key;

    return $this;
  }

  /**
   * Sets attribution_setting
   * @param AttributionSetting $attribution_setting The attribution setting for the attribution.
   * @return $this
   */
  public function setAttributionSetting($attribution_setting) {
    $this->container['attribution_setting'] = $attribution_setting;

    return $this;
  }

  /**
   * Gets touchpoint type.
   * @return string
   */
  public function getScope() {
    return $this->container['scope'];
  }

  /**
   * Gets the Unix timestamp in seconds indicating time that the campaign_id or fbc was first received.
   * @return int
   */
  public function getVisitTime() {
    return $this->container['visit_time'];
  }

  /**
   * Gets Meta-provided ad id from URL/deeplink.
   * @return string
   */
  public function getAdId() {
    return $this->container['ad_id'];
  }

  /**
   * Gets Meta-provided adset id from URL/deeplink.
   * @return string
   */
  public function getAdsetId() {
    return $this->container['adset_id'];
  }

  /**
   * Gets Meta-provided campaign id from URL/deeplink.
   * @return string
   */
  public function getCampaignId() {
    return $this->container['campaign_id'];
  }

  /**
   * Gets attribution share.
   * @return float
   */
  public function getAttributionShare() {
    return $this->container['attribution_share'];
  }

  /**
   * Gets attribution model used to attribute the event.
   * @return string
   */
  public function getAttributionModel() {
    return $this->container['attribution_model'];
  }

  /**
   * Gets attribution window in days.
   * @return string
   */
  public function getAttrWindow() {
    return $this->container['attr_window'];
  }

  /**
   * Gets attribution value.
   * @return float
   */
  public function getAttributionValue() {
    return $this->container['attribution_value'];
  }

  /**
   * Gets attribution source.
   * @return string
   */
  public function getAttributionSource() {
    return $this->container['attribution_source'];
  }

  /**
   * Gets touchpoint type.
   * @return string
   */
  public function getTouchpointType() {
    return $this->container['touchpoint_type'];
  }

  /**
   * Gets touchpoint timestamp.
   * @return int
   */
  public function getTouchpointTs() {
    return $this->container['touchpoint_ts'];
  }

  /**
   * Gets attribution method.
   * @return string
   */
  public function getAttributionMethod() {
    return $this->container['attribution_method'];
  }

  /**
   * Gets decline reason.
   * @return string
   */
  public function getDeclineReason() {
    return $this->container['decline_reason'];
  }

  /**
   * Gets auditing token.
   * @return string
   */
  public function getAuditingToken() {
    return $this->container['auditing_token'];
  }

  /**
   * Gets linkage key.
   * @return string
   */
  public function getLinkageKey() {
    return $this->container['linkage_key'];
  }

  /**
   * Gets attribution setting.
   * @return AttributionSetting
   */
  public function getAttributionSetting() {
    return $this->container['attribution_setting'];
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

    $normalized_payload['scope'] = $this->getScope();
    $normalized_payload['visit_time'] = $this->getVisitTime();
    $normalized_payload['ad_id'] = $this->getAdId();
    $normalized_payload['adset_id'] = $this->getAdsetId();
    $normalized_payload['campaign_id'] = $this->getCampaignId();
    $normalized_payload['attribution_share'] = $this->getAttributionShare();
    $normalized_payload['attribution_model'] = $this->getAttributionModel();
    $normalized_payload['attr_window'] = $this->getAttrWindow();
    $normalized_payload['attribution_value'] = $this->getAttributionValue();
    $normalized_payload['attribution_source'] = $this->getAttributionSource();
    $normalized_payload['touchpoint_type'] = $this->getTouchpointType();
    $normalized_payload['touchpoint_ts'] = $this->getTouchpointTs();
    $normalized_payload['attribution_method'] = $this->getAttributionMethod();
    $normalized_payload['decline_reason'] = $this->getDeclineReason();
    $normalized_payload['auditing_token'] = $this->getAuditingToken();
    $normalized_payload['linkage_key'] = $this->getLinkageKey();
    $attribution_setting = $this->getAttributionSetting();
    $normalized_payload['attribution_setting'] = $attribution_setting != null ? $attribution_setting->normalize() : null;
    return $normalized_payload;
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
