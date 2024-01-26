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

class ProductItemCommerceInsightsFields extends AbstractEnum {

  const MESSAGE_SENDS = 'message_sends';
  const ORGANIC_IMPRESSIONS = 'organic_impressions';
  const PAID_IMPRESSIONS = 'paid_impressions';

  public function getFieldTypes() {
    return array(
      'message_sends' => 'unsigned int',
      'organic_impressions' => 'unsigned int',
      'paid_impressions' => 'unsigned int',
    );
  }
}
