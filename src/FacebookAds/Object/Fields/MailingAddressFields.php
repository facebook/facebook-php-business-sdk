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

class MailingAddressFields extends AbstractEnum {

  const CITY = 'city';
  const CITY_PAGE = 'city_page';
  const COUNTRY = 'country';
  const ID = 'id';
  const POSTAL_CODE = 'postal_code';
  const REGION = 'region';
  const STREET1 = 'street1';
  const STREET2 = 'street2';

  public function getFieldTypes() {
    return array(
      'city' => 'string',
      'city_page' => 'Page',
      'country' => 'string',
      'id' => 'string',
      'postal_code' => 'string',
      'region' => 'string',
      'street1' => 'string',
      'street2' => 'string',
    );
  }
}
