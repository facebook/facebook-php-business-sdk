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
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;

class AdGroup extends AbstractArchivableCrudObject
  implements CanRedownloadInterface {
  use FieldValidation;
  use AdLabelAwareCrudObjectTrait;

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
   * @var string
   */
  const STATUS_DISAPPROVED = 'DISAPPROVED';

  /**
   * @var string
   */
  const STATUS_PENDING_BILLING_INFO = 'PENDING_BILLING_INFO';

  /**
   * @var string
   */
  const STATUS_CREDIT_CARD_NEEDED = 'CREDIT_CARD_NEEDED';

  /**
   * @var string
   */
  const STATUS_DELETED = 'DELETED';

  /**
   * @var string
   */
  const STATUS_DISABLED = 'DISABLED';

  /**
   * @var string
   */
  const STATUS_ARCHIVED = 'ARCHIVED';

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adgroups';
  }

  /**
   * @return AdGroupFields
   */
  public static function getFieldsEnum() {
    return AdGroupFields::getInstance();
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
  public function getLeads(array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(Lead::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return TargetingDescription
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
   * @return Cursor
   */
  public function getInsights(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Insights::classname(), $fields, $params, 'insights');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return AsyncJobInsights
   */
  public function getInsightsAsync(
    array $fields = array(), array $params = array()) {
    return $this->createAsyncJob(
      AsyncJobInsights::className(), $fields, $params);
  }
}
