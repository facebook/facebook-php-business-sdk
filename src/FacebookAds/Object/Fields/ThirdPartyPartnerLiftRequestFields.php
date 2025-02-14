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

class ThirdPartyPartnerLiftRequestFields extends AbstractEnum {

  const AD_ENTITIES = 'ad_entities';
  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const HOLDOUT_SIZE = 'holdout_size';
  const ID = 'id';
  const LEGACY_ADS_DATA_PARTNER_ID = 'legacy_ads_data_partner_id';
  const LEGACY_ADS_DATA_PARTNER_NAME = 'legacy_ads_data_partner_name';
  const MODIFIED_TIME = 'modified_time';
  const OWNER_INSTANCE_ID = 'owner_instance_id';
  const PARTNER_HOUSEHOLD_GRAPH_DATASET_ID = 'partner_household_graph_dataset_id';
  const REGION = 'region';
  const STATUS = 'status';
  const STUDY_CELLS = 'study_cells';
  const STUDY_END_TIME = 'study_end_time';
  const STUDY_START_TIME = 'study_start_time';

  public function getFieldTypes() {
    return array(
      'ad_entities' => 'list<string>',
      'country' => 'string',
      'created_time' => 'datetime',
      'description' => 'string',
      'holdout_size' => 'float',
      'id' => 'string',
      'legacy_ads_data_partner_id' => 'string',
      'legacy_ads_data_partner_name' => 'string',
      'modified_time' => 'datetime',
      'owner_instance_id' => 'string',
      'partner_household_graph_dataset_id' => 'string',
      'region' => 'string',
      'status' => 'Status',
      'study_cells' => 'list<string>',
      'study_end_time' => 'datetime',
      'study_start_time' => 'datetime',
    );
  }
}
