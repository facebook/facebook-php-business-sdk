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

class CPASCollaborationRequestFields extends AbstractEnum {

  const BRANDS = 'brands';
  const CONTACT_EMAIL = 'contact_email';
  const CONTACT_FIRST_NAME = 'contact_first_name';
  const CONTACT_LAST_NAME = 'contact_last_name';
  const ID = 'id';
  const PHONE_NUMBER = 'phone_number';
  const RECEIVER_BUSINESS = 'receiver_business';
  const REQUESTER_AGENCY_OR_BRAND = 'requester_agency_or_brand';
  const SENDER_CLIENT_BUSINESS = 'sender_client_business';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'brands' => 'list<string>',
      'contact_email' => 'string',
      'contact_first_name' => 'string',
      'contact_last_name' => 'string',
      'id' => 'string',
      'phone_number' => 'string',
      'receiver_business' => 'Business',
      'requester_agency_or_brand' => 'string',
      'sender_client_business' => 'Business',
      'status' => 'string',
    );
  }
}
