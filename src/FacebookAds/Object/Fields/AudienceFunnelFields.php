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

class AudienceFunnelFields extends AbstractEnum {

  const AUDIENCE_TYPE_PARAM_NAME = 'audience_type_param_name';
  const AUDIENCE_TYPE_PARAM_TAGS = 'audience_type_param_tags';
  const CUSTOM_AUDIENCE_GROUPS_INFO = 'custom_audience_groups_info';

  public function getFieldTypes() {
    return array(
      'audience_type_param_name' => 'string',
      'audience_type_param_tags' => 'list<map<string, string>>',
      'custom_audience_groups_info' => 'list<map<string, list<string>>>',
    );
  }
}
