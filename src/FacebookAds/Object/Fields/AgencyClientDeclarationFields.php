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

class AgencyClientDeclarationFields extends AbstractEnum {

  const AGENCY_REPRESENTING_CLIENT = 'agency_representing_client';
  const CLIENT_BASED_IN_FRANCE = 'client_based_in_france';
  const CLIENT_CITY = 'client_city';
  const CLIENT_COUNTRY_CODE = 'client_country_code';
  const CLIENT_EMAIL_ADDRESS = 'client_email_address';
  const CLIENT_NAME = 'client_name';
  const CLIENT_POSTAL_CODE = 'client_postal_code';
  const CLIENT_PROVINCE = 'client_province';
  const CLIENT_STREET = 'client_street';
  const CLIENT_STREET2 = 'client_street2';
  const HAS_WRITTEN_MANDATE_FROM_ADVERTISER = 'has_written_mandate_from_advertiser';
  const IS_CLIENT_PAYING_INVOICES = 'is_client_paying_invoices';

  public function getFieldTypes() {
    return array(
      'agency_representing_client' => 'unsigned int',
      'client_based_in_france' => 'unsigned int',
      'client_city' => 'string',
      'client_country_code' => 'string',
      'client_email_address' => 'string',
      'client_name' => 'string',
      'client_postal_code' => 'string',
      'client_province' => 'string',
      'client_street' => 'string',
      'client_street2' => 'string',
      'has_written_mandate_from_advertiser' => 'unsigned int',
      'is_client_paying_invoices' => 'unsigned int',
    );
  }
}
