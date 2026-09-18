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
use FacebookAds\Object\Fields\AdAccountLightCampaignsFields;
use FacebookAds\Object\Values\AdAccountLightCampaignsGetDatePresetValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccountLightCampaigns extends AbstractCrudObject {

  /**
   * @return AdAccountLightCampaignsFields
   */
  public static function getFieldsEnum() {
    return AdAccountLightCampaignsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_draft_id' => 'int',
      'after' => 'string',
      'am_call_tags' => 'string',
      'before' => 'string',
      'comparison_time_ranges' => 'string',
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<string>',
      'fields' => 'string',
      'filtering' => 'string',
      'from_adtable' => 'bool',
      'include_drafts' => 'bool',
      'is_completed' => 'bool',
      'limit' => 'int',
      'offset' => 'int',
      'sort' => 'list<string>',
      'summary' => 'string',
      'time_range' => 'string',
      'use_employee_draft' => 'bool',
    );
    $enums = array(
      'date_preset_enum' => AdAccountLightCampaignsGetDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/light_campaigns',
      new AdAccountLightCampaignsGet(),
      'EDGE',
      AdAccountLightCampaignsGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
