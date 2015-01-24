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

use FacebookAds\Cursor;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdGroup extends AbstractArchivableCrudObject
  implements CanRedownloadInterface {
  use FieldValidation;

  /**
   * @var string
   */
  const STATUS_ACTIVE = 'ACTIVE';

  /**
   * @var string
   */
  const STATUS_PAUSED = 'PAUSED';

  /**
   * @var string
   */
  const STATUS_CAMPAIGN_PAUSED = 'CAMPAIGN_PAUSED';

  /**
   * @var string
   */
  const STATUS_CAMPAIGN_GROUP_PAUSED = 'CAMPAIGN_GROUP_PAUSED';

  /**
   * @var string
   */
  const STATUS_PENDING_REVIEW = 'PENDING_REVIEW';

  /**
   * @var string
   */
  const STATUS_PREAPPROVED = 'PREAPPROVED';

  /**
   * @var string[]
   */
  protected static $fields = array(
    AdGroupFields::ID,
    AdGroupFields::ACCOUNT_ID,
    AdGroupFields::ADGROUP_STATUS,
    AdGroupFields::ADGROUP_REVIEW_FEEDBACK,
    AdGroupFields::BID_TYPE,
    AdGroupFields::BID_INFO,
    AdGroupFields::CAMPAIGN_ID,
    AdGroupFields::CAMPAIGN_GROUP_ID,
    AdGroupFields::CONVERSION_SPECS,
    AdGroupFields::CREATED_TIME,
    AdGroupFields::CREATIVE_IDS,
    AdGroupFields::FAILED_DELIVERY_CHECKS,
    AdGroupFields::NAME,
    AdGroupFields::TARGETING,
    AdGroupFields::TRACKING_SPECS,
    AdGroupFields::UPDATED_TIME,
    AdGroupFields::VIEW_TAGS,
    AdGroupFields::CREATIVE,
    AdGroupFields::OBJECTIVE,
    AdGroupFields::REDOWNLOAD,
    AdGroupFields::SOCIAL_PREFS,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adgroups';
  }

  /**
   * @return string
   */
  public function getStatusFieldName() {
    return AdGroupFields::ADGROUP_STATUS;
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdCreatives(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdCreative::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getTargetingDescription(
    array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      TargetingDescription::className(),
      $fields,
      $params,
      'targetingsentencelines'
    );
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getKeywordStat(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdStats::className(), $fields, $params, 'keywordstats');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdPreviews(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdPreview::className(), $fields, $params, 'previews');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return ReachEstimate
   */
  public function getReachEstimate(
    array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      ReachEstimate::className(), $fields, $params, 'reachestimate');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return AdStats
   */
  public function getStats(array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      AdStats::className(), $fields, $params, 'stats');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getClickTrackingTag(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ClickTrackingTag::className(), $fields, $params, 'trackingtag');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return AdStats
   */
  public function getConversions(
    array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      AdStats::className(), $fields, $params, 'conversions');
  }
}
