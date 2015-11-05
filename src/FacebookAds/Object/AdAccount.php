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

namespace FacebookAds\Object;

use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Traits\CannotCreate;
use FacebookAds\Object\Traits\CannotDelete;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Cursor;

class AdAccount extends AbstractCrudObject {
  use FieldValidation;
  use CannotCreate;
  use CannotDelete;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adaccounts';
  }

  /**
   * @return AdAccountFields
   */
  public static function getFieldsEnum() {
    return AdAccountFields::getInstance();
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
  public function getCampaigns(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Campaign::className(), $fields, $params);
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
  public function getAds(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(Ad::className(), $fields, $params);
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
   * @return TargetingDescription
   */
  public function getTargetingDescription(
    array $fields = array(), array $params = array()) {
    return $this->getOneByConnection(
      TargetingDescription::className(),
      $fields,
      $params,
      'targetingsentencelines');
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
   * @return Cursor
   */
  public function getAdPreviews(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdPreview::classname(), $fields, $params, 'generatepreviews');
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

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAgencies(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Agency::className(), $fields, $params, 'agencies');
  }

  /**
   * @param int $business_id
   * @param array $permitted_roles
   */
  public function grantAgencyAcccess($business_id, $permitted_roles) {
    $params = array(
      'business' => $business_id,
      'permitted_roles' => $permitted_roles,
    );

    $this->getApi()->call(
      '/'.$this->assureId().'/agencies',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $business_id
   */
  public function revokeAgencyAccess($business_id) {
    $params = array(
      'business' => $business_id,
    );

    $this->getApi()->call(
      '/'.$this->assureId().'/agencies',
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getMinimumBudgets(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      MinimumBudget::className(), $fields, $params, 'minimum_budgets');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdPlacePageSets(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdPlacePageSet::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdLabels(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdLabel::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getCampaignsByLabel(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Campaign::classname(), $fields, $params, 'campaignsbylabels');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdSetsByLabel(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdSet::classname(), $fields, $params, 'adsetsbylabels');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdsByLabel(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Ad::classname(), $fields, $params, 'adsbylabels');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdCreativesByLabel(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdCreative::classname(), $fields, $params, 'adcreativesbylabels');
  }
}
