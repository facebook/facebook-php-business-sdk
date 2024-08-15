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

  protected static $param_types = array(
    'scope' => 'string',
    'visit_time' => 'int',
    'ad_id' => 'string',
    'adset_id' => 'string',
    'campaign_id' => 'string',
    'attribution_share' => 'float',
    'attribution_model' => 'FacebookAds\Object\ServerSide\AttributionModel',
    'attr_window' => 'int',
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
  );

  protected $container = array();

  public function __construct(array $data = null) {
    $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    $this->container['visit_time'] = isset($data['visit_time']) ? $data['visit_time'] : null;
    $this->container['ad_id'] = isset($data['ad_id']) ? $data['ad_id'] : null;
    $this->container['adset_id'] = isset($data['adset_id']) ? $data['adset_id'] : null;
    $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
    $this->container['attribution_share'] = isset($data['attribution_share']) ? $data['attribution_share'] : null;
    $this->container['attribution_model'] = isset($data['attribution_model']) ? $data['attribution_model'] : null;
    $this->container['attr_window'] = isset($data['attr_window']) ? $data['attr_window'] : null;
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
