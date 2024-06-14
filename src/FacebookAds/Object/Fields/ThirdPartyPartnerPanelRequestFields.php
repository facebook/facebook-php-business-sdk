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

class ThirdPartyPartnerPanelRequestFields extends AbstractEnum {

  const ADENTITIES_IDS = 'adentities_ids';
  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const MODIFIED_TIME = 'modified_time';
  const OWNER_INSTANCE_ID = 'owner_instance_id';
  const OWNER_PANEL_ID = 'owner_panel_id';
  const OWNER_PANEL_NAME = 'owner_panel_name';
  const STATUS = 'status';
  const STUDY_END_TIME = 'study_end_time';
  const STUDY_START_TIME = 'study_start_time';
  const STUDY_TYPE = 'study_type';

  public function getFieldTypes() {
    return array(
      'adentities_ids' => 'list<string>',
      'country' => 'string',
      'created_time' => 'datetime',
      'description' => 'string',
      'id' => 'string',
      'modified_time' => 'datetime',
      'owner_instance_id' => 'string',
      'owner_panel_id' => 'string',
      'owner_panel_name' => 'string',
      'status' => 'Status',
      'study_end_time' => 'datetime',
      'study_start_time' => 'datetime',
      'study_type' => 'StudyType',
    );
  }
}
