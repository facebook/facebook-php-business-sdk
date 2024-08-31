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

class AdCreativeMarketingMessageStructuredSpecFields extends AbstractEnum {

  const BUTTONS = 'buttons';
  const FOOTER = 'footer';
  const GREETING = 'greeting';
  const IS_OPTIMIZED_TEXT = 'is_optimized_text';
  const LANGUAGE = 'language';
  const REFERENCED_ADGROUP_ID = 'referenced_adgroup_id';
  const WHATS_APP_BUSINESS_PHONE_NUMBER_ID = 'whats_app_business_phone_number_id';

  public function getFieldTypes() {
    return array(
      'buttons' => 'list<Object>',
      'footer' => 'string',
      'greeting' => 'string',
      'is_optimized_text' => 'bool',
      'language' => 'string',
      'referenced_adgroup_id' => 'string',
      'whats_app_business_phone_number_id' => 'string',
    );
  }
}
