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

use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Cursor;

class AdSet extends AbstractArchivableCrudObject
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
   * @var string[]
   */
  protected static $fields = array(
    AdSetFields::ID,
    AdSetFields::NAME,
    AdSetFields::ACCOUNT_ID,
    AdSetFields::CAMPAIGN_GROUP_ID,
    AdSetFields::CAMPAIGN_STATUS,
    AdSetFields::CREATED_TIME,
    AdSetFields::START_TIME,
    AdSetFields::END_TIME,
    AdSetFields::DAILY_BUDGET,
    AdSetFields::LIFETIME_BUDGET,
    AdSetFields::BUDGET_REMAINING,
    AdSetFields::PACING_TYPE,
    AdSetFields::RF_PREDICTION_ID,
    AdSetFields::CAMPAIGN_SCHEDULE,
    AdSetFields::TARGETING,
    AdSetFields::BID_TYPE,
    AdSetFields::BID_INFO,
    AdSetFields::PROMOTED_OBJECT,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adcampaigns';
  }

  /**
   * @return string
   */
  public function getStatusFieldName() {
    return AdSetFields::CAMPAIGN_STATUS;
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdGroups(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdGroup::className(), $fields, $params);
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
  public function getStats(array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      AdStats::className(), $fields, $params, 'stats');
  }
}
