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

class AdCampaignOptimizationEventFields extends AbstractEnum {

  const CUSTOM_CONVERSION_ID = 'custom_conversion_id';
  const EVENT_SEQUENCE = 'event_sequence';
  const EVENT_TYPE = 'event_type';

  public function getFieldTypes() {
    return array(
      'custom_conversion_id' => 'string',
      'event_sequence' => 'unsigned int',
      'event_type' => 'string',
    );
  }
}
