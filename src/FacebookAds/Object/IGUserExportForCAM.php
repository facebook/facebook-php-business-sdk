<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\IGUserExportForCAMFields;
use FacebookAds\Object\Values\IGUserExportForCAMCreatorCountriesValues;
use FacebookAds\Object\Values\IGUserExportForCAMCreatorGenderValues;
use FacebookAds\Object\Values\IGUserExportForCAMMajorAudienceCountriesValues;
use FacebookAds\Object\Values\IGUserExportForCAMMajorAudienceGenderValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class IGUserExportForCAM extends AbstractCrudObject {

  /**
   * @return IGUserExportForCAMFields
   */
  public static function getFieldsEnum() {
    return IGUserExportForCAMFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CreatorCountries'] = IGUserExportForCAMCreatorCountriesValues::getInstance()->getValues();
    $ref_enums['CreatorGender'] = IGUserExportForCAMCreatorGenderValues::getInstance()->getValues();
    $ref_enums['MajorAudienceCountries'] = IGUserExportForCAMMajorAudienceCountriesValues::getInstance()->getValues();
    $ref_enums['MajorAudienceGender'] = IGUserExportForCAMMajorAudienceGenderValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getBrandedContentMedia(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/branded_content_media',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'breakdown' => 'breakdown_enum',
      'metrics' => 'list<metrics_enum>',
      'period' => 'period_enum',
      'time_range' => 'time_range_enum',
    );
    $enums = array(
      'breakdown_enum' => array(
        'AGE',
        'FOLLOW_TYPE',
        'GENDER',
        'MEDIA_TYPE',
        'TOP_CITIES',
        'TOP_COUNTRIES',
      ),
      'metrics_enum' => array(
        'CREATOR_ENGAGED_ACCOUNTS',
        'CREATOR_REACH',
        'REELS_HOOK_RATE',
        'REELS_INTERACTION_RATE',
        'TOTAL_FOLLOWERS',
      ),
      'period_enum' => array(
        'DAY',
        'OVERALL',
      ),
      'time_range_enum' => array(
        'LAST_14_DAYS',
        'LAST_90_DAYS',
        'LIFETIME',
        'THIS_MONTH',
        'THIS_WEEK',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRecentMedia(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/recent_media',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new IGUserExportForCAM(),
      'NODE',
      IGUserExportForCAM::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
