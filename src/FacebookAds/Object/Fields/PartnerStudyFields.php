<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class PartnerStudyFields extends AbstractEnum {

  const ADDITIONAL_INFO = 'additional_info';
  const BRAND = 'brand';
  const CLIENT_NAME = 'client_name';
  const EMAILS = 'emails';
  const ID = 'id';
  const INPUT_IDS = 'input_ids';
  const IS_EXPORT = 'is_export';
  const LIFT_STUDY = 'lift_study';
  const LOCATION = 'location';
  const MATCH_FILE_DS = 'match_file_ds';
  const NAME = 'name';
  const PARTNER_DEFINED_ID = 'partner_defined_id';
  const PARTNER_HOUSEHOLD_GRAPH_DATASET_ID = 'partner_household_graph_dataset_id';
  const STATUS = 'status';
  const STUDY_END_DATE = 'study_end_date';
  const STUDY_START_DATE = 'study_start_date';
  const STUDY_TYPE = 'study_type';
  const SUBMIT_DATE = 'submit_date';

  public function getFieldTypes() {
    return array(
      'additional_info' => 'string',
      'brand' => 'string',
      'client_name' => 'string',
      'emails' => 'string',
      'id' => 'string',
      'input_ids' => 'list<string>',
      'is_export' => 'bool',
      'lift_study' => 'AdStudy',
      'location' => 'string',
      'match_file_ds' => 'string',
      'name' => 'string',
      'partner_defined_id' => 'string',
      'partner_household_graph_dataset_id' => 'string',
      'status' => 'string',
      'study_end_date' => 'datetime',
      'study_start_date' => 'datetime',
      'study_type' => 'string',
      'submit_date' => 'datetime',
    );
  }
}
