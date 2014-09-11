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

use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Traits\CannotCreate;
use FacebookAds\Object\Traits\CannotDelete;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Cursor;

class AdAccount extends AbstractCrudObject {
  use FieldValidation;
  use CannotCreate;
  use CannotDelete;

  /**
   * @var string[]
   */
  protected static $fields = array(
    AdAccountFields::ID,
    AdAccountFields::ACCOUNT_GROUPS,
    AdAccountFields::ACCOUNT_ID,
    AdAccountFields::ACCOUNT_STATUS,
    AdAccountFields::AGE,
    AdAccountFields::AGENCY_CLIENT_DECLARATION,
    AdAccountFields::AMOUNT_SPENT,
    AdAccountFields::BALANCE,
    AdAccountFields::BUSINESS_CITY,
    AdAccountFields::BUSINESS_COUNTRY_CODE,
    AdAccountFields::BUSINESS_NAME,
    AdAccountFields::BUSINESS_STATE,
    AdAccountFields::BUSINESS_STREET2,
    AdAccountFields::BUSINESS_STREET,
    AdAccountFields::BUSINESS_ZIP,
    AdAccountFields::CREATED_TIME,
    AdAccountFields::END_ADVERTISER,
    AdAccountFields::MEDIA_AGENCY,
    AdAccountFields::PARTNER,
    AdAccountFields::CAPABILITIES,
    AdAccountFields::CURRENCY,
    AdAccountFields::DAILY_SPEND_LIMIT,
    AdAccountFields::IS_PERSONAL,
    AdAccountFields::NAME,
    AdAccountFields::OFFSITE_PIXELS_TOS_ACCEPTED,
    AdAccountFields::SPEND_CAP,
    AdAccountFields::SPEND_CAP_ACTION,
    AdAccountFields::FUNDING_SOURCE,
    AdAccountFields::FUNDING_SOURCE_DETAILS,
    AdAccountFields::TIMEZONE_ID,
    AdAccountFields::TIMEZONE_NAME,
    AdAccountFields::TIMEZONE_OFFSET_HOURS_UTC,
    AdAccountFields::TOS_ACCEPTED,
    AdAccountFields::USERS,
    AdAccountFields::TAX_ID_STATUS,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adaccounts';
  }


  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getActivities(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Activity::className(), $fields, $params, 'activities');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdUsers(array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdUser::className(), $fields, $params);
  }

   /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdCampaigns(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdCampaign::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdSets(array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdSet::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdCampaignStats(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdStats::className(), $fields, $params, 'adcampaignstats');
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
  public function getAdGroupStats(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdStats::className(), $fields, $params, 'adgroupstats');
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
  public function getAdImages(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdImage::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdsPixels(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdsPixel::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdVideos(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdVideo::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getBroadCategoryTargeting(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      BroadCategoryTargeting::className(),
      $fields,
      $params,
      'broadtargetingcategories'
    );
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getConnectionObjects(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ConnectionObject::className(), $fields, $params, 'connectionobjects');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getCustomAudiences(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      CustomAudience::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getConversionPixels(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdConversionPixel::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getPartnerCategories(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      PartnerCategory::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getRateCards(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      RateCard::className(), $fields, $params, 'ratecard');
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
  public function getReachFrequencyPredictions(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ReachFrequencyPrediction::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getReportsStats(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdStats::className(), $fields, $params, 'reportstats');
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

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getTransactions(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Transaction::className(), $fields, $params, 'transactions');
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

  /**
   * @param array $fields
   * @param array $params
   * @return AdStats
   */
  public function getAdCampaignConversions(
    array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      AdStats::className(), $fields, $params, 'adcampaignconversions');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return AdStats
   */
  public function getAdgroupConversions(
    array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      AdStats::className(), $fields, $params, 'adgroupconversions');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdPreviews(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdPreview::classname(), $fields, $params, 'generatepreviews');
  }
}
