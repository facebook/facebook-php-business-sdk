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

use FacebookAds\Cursor;
use FacebookAds\Object\Fields\AdFields;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;

class Ad extends AbstractArchivableCrudObject
  implements CanRedownloadInterface {
  use FieldValidation;
  use AdLabelAwareCrudObjectTrait;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'ads';
  }

  /**
   * @return AdFields
   */
  public static function getFieldsEnum() {
    return AdFields::getInstance();
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
