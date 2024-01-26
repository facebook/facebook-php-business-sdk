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

class LeadGenThankYouPageFields extends AbstractEnum {

  const BODY = 'body';
  const BUSINESS_PHONE_NUMBER = 'business_phone_number';
  const BUTTON_TEXT = 'button_text';
  const BUTTON_TYPE = 'button_type';
  const COUNTRY_CODE = 'country_code';
  const ENABLE_MESSENGER = 'enable_messenger';
  const ID = 'id';
  const LEAD_GEN_USE_CASE = 'lead_gen_use_case';
  const STATUS = 'status';
  const TITLE = 'title';
  const WEBSITE_URL = 'website_url';

  public function getFieldTypes() {
    return array(
      'body' => 'string',
      'business_phone_number' => 'string',
      'button_text' => 'string',
      'button_type' => 'string',
      'country_code' => 'string',
      'enable_messenger' => 'bool',
      'id' => 'string',
      'lead_gen_use_case' => 'string',
      'status' => 'string',
      'title' => 'string',
      'website_url' => 'string',
    );
  }
}
