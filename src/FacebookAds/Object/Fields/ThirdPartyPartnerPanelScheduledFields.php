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

class ThirdPartyPartnerPanelScheduledFields extends AbstractEnum {

  const ADENTITIES_IDS = 'adentities_ids';
  const CADENCE = 'cadence';
  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const END_TIME = 'end_time';
  const ID = 'id';
  const MODIFIED_TIME = 'modified_time';
  const OWNER_INSTANCE_ID = 'owner_instance_id';
  const OWNER_PANEL_ID = 'owner_panel_id';
  const OWNER_PANEL_NAME = 'owner_panel_name';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const STUDY_TYPE = 'study_type';

  public function getFieldTypes() {
    return array(
      'adentities_ids' => 'list<string>',
      'cadence' => 'string',
      'country' => 'string',
      'created_time' => 'datetime',
      'description' => 'string',
      'end_time' => 'datetime',
      'id' => 'string',
      'modified_time' => 'datetime',
      'owner_instance_id' => 'string',
      'owner_panel_id' => 'string',
      'owner_panel_name' => 'string',
      'start_time' => 'datetime',
      'status' => 'Status',
      'study_type' => 'StudyType',
    );
  }
}
