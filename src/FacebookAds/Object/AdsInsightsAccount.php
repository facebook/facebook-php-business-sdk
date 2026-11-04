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
use FacebookAds\Object\Fields\AdsInsightsAccountFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsInsightsAccount extends AbstractCrudObject {

  /**
   * @return AdsInsightsAccountFields
   */
  public static function getFieldsEnum() {
    return AdsInsightsAccountFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genpost(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action_attribution_windows' => 'string',
      'action_breakdowns' => 'string',
      'action_report_time' => 'string',
      'am_call_tags' => 'string',
      'breakdowns' => 'string',
      'comparison_fields' => 'string',
      'comparison_time_ranges' => 'string',
      'date_preset' => 'string',
      'default_attribution_windows' => 'string',
      'default_summary' => 'string',
      'enable_trace' => 'string',
      'export_columns' => 'string',
      'export_format' => 'string',
      'export_name' => 'string',
      'fields' => 'string',
      'filtering' => 'string',
      'flog' => 'string',
      'graph_cache' => 'string',
      'include_zeros' => 'string',
      'level' => 'string',
      'limit' => 'string',
      'meta_breakdowns' => 'string',
      'product_id_limit' => 'string',
      'round_up_level' => 'string',
      'run_id' => 'string',
      'saber_setsuna_perf_request_id' => 'string',
      'scenario_run_id' => 'string',
      'sort' => 'string',
      'summary' => 'string',
      'summary_action_breakdowns' => 'string',
      'time_increment' => 'string',
      'time_range' => 'string',
      'time_ranges' => 'string',
      'use_account_attribution_setting' => 'string',
      'use_unified_attribution_setting' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/insights',
      new AdsInsightsAccountPost(),
      'EDGE',
      AdsInsightsAccountPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
