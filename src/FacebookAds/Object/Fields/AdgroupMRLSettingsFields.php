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

class AdgroupMRLSettingsFields extends AbstractEnum {

  const MRL_CONFIG_ID = 'mrl_config_id';
  const MRL_IS_ENABLED = 'mrl_is_enabled';

  public function getFieldTypes() {
    return array(
      'mrl_config_id' => 'string',
      'mrl_is_enabled' => 'bool',
    );
  }
}
