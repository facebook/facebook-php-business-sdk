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

class CallAdsPhoneDataFields extends AbstractEnum {

  const CALL_ADS_PHONE_DATA_USE_CASE = 'call_ads_phone_data_use_case';
  const CALLBACK_VARIANT = 'callback_variant';
  const DESTINATION_WEBSITE_URL = 'destination_website_url';
  const ID = 'id';
  const PAGE = 'page';
  const PHONE_NUMBER = 'phone_number';

  public function getFieldTypes() {
    return array(
      'call_ads_phone_data_use_case' => 'string',
      'callback_variant' => 'string',
      'destination_website_url' => 'string',
      'id' => 'string',
      'page' => 'Page',
      'phone_number' => 'string',
    );
  }
}
