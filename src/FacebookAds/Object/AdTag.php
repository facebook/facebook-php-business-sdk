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
use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdTagFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdTag extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @var string[]
   */
  protected static $fields = array(
    AdTagFields::ID,
    AdTagFields::NAME
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adtags';
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdCampaigns(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdCampaign::className(),
      $fields,
      $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdSets(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(AdSet::className(), $fields, $params);
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
   * @param array $adcampaigns
   * @return array
   */
  public function tagAdCampaigns(array $adcampaigns) {
    $adcampaign_ids = array_map(
      function($adcampaign) {
        return $adcampaign->{AdCampaignFields::ID};
      },
      $adcampaigns);
    return $this->addTagToObjects(
      'adcampaign_groups',
      'campaign_groups',
      $adcampaign_ids);
  }

  /**
   * @param array $adsets
   * @return array
   */
  public function tagAdSets(array $adsets) {
    $adset_ids = array_map(
      function($adset) {
        return $adset->{AdSetFields::ID};
      },
      $adsets);
    return $this->addTagToObjects(
      'adcampaigns',
      'campaigns',
      $adset_ids);
  }

  /**
   * @param array $adgroups
   * @return array
   */
  public function tagAdGroups(array $adgroups) {
    $adgroup_ids = array_map(
      function($adgroup) {
        return $adgroup->{AdGroupFields::ID};
      },
      $adgroups);
    return $this->addTagToObjects(
      'adgroups',
      'adgroups',
      $adgroup_ids);
  }

  /**
   * @param string $endpoint
   * @param string $tag_type
   * @param array $ids
   * @return array
   */
  protected function addTagToObjects($endpoint, $tag_type, array $ids) {
    $params = array();
    $params[$tag_type] = $ids;

    return $this->getApi()->call(
      '/'.$this->{AdTagFields::ID}.'/'.$endpoint,
      RequestInterface::METHOD_POST,
      $params)->getContent();
  }
}
