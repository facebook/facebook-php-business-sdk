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

  const AD_ACCOUNT_ID = 'ad_account_id';
  const AD_ACCOUNT_NAME = 'ad_account_name';
  const BRANDS = 'brands';
  const CATALOG_SEGMENT = 'catalog_segment';
  const CONTACT_EMAIL = 'contact_email';
  const CONTACT_FIRST_NAME = 'contact_first_name';
  const CONTACT_LAST_NAME = 'contact_last_name';
  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const PHONE_NUMBER = 'phone_number';
  const RECEIVER_BUSINESS = 'receiver_business';
  const REQUESTER_AGENCY_OR_BRAND = 'requester_agency_or_brand';
  const SELLER_ID = 'seller_id';
  const SENDER_BUSINESS = 'sender_business';
  const SENDER_CLIENT_BUSINESS = 'sender_client_business';
  const SHOP_URL = 'shop_url';
  const SOURCE = 'source';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'ad_account_name' => 'string',
      'brands' => 'list<string>',
      'catalog_segment' => 'ProductCatalog',
      'contact_email' => 'string',
      'contact_first_name' => 'string',
      'contact_last_name' => 'string',
      'creation_time' => 'datetime',
      'id' => 'string',
      'phone_number' => 'string',
      'receiver_business' => 'Business',
      'requester_agency_or_brand' => 'string',
      'seller_id' => 'string',
      'sender_business' => 'Business',
      'sender_client_business' => 'Business',
      'shop_url' => 'string',
      'source' => 'string',
      'status' => 'string',
    );
  }
}
