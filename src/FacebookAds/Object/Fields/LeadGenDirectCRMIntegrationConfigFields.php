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

class LeadGenDirectCRMIntegrationConfigFields extends AbstractEnum {

  const AUTH_ID = 'auth_id';
  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const LEAD_GEN_DATA = 'lead_gen_data';
  const MATCHED_FIELDS = 'matched_fields';
  const MATCHED_FIELDS_LABELS = 'matched_fields_labels';
  const RESOURCES = 'resources';
  const THIRD_PARTY_APP_ID = 'third_party_app_id';

  public function getFieldTypes() {
    return array(
      'auth_id' => 'string',
      'creation_time' => 'datetime',
      'id' => 'string',
      'lead_gen_data' => 'LeadgenForm',
      'matched_fields' => 'list<map<string, string>>',
      'matched_fields_labels' => 'list<map<string, string>>',
      'resources' => 'list<map<string, string>>',
      'third_party_app_id' => 'string',
    );
  }
}
