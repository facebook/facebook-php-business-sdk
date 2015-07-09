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
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Object\Traits\ObjectValidation;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;

class AdCampaign extends AbstractArchivableCrudObject {
  use FieldValidation;
  use ObjectValidation;
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
   * @return string
   */
  protected function getEndpoint() {
    return 'adcampaign_groups';
  }

  /**
   * @return AdCampaignFields
   */
  public static function getFieldsEnum() {
    return AdCampaignFields::getInstance();
  }

  /**
   * @return string
   */
  public function getStatusFieldName() {
    return AdCampaignFields::STATUS;
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
  public function getAdGroups(array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdGroup::className(), $fields, $params);
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
