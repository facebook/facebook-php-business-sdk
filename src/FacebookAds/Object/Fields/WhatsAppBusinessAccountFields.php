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

class WhatsAppBusinessAccountFields extends AbstractEnum {

  const ACCOUNT_REVIEW_STATUS = 'account_review_status';
  const ANALYTICS = 'analytics';
  const BUSINESS_VERIFICATION_STATUS = 'business_verification_status';
  const COUNTRY = 'country';
  const CREATION_TIME = 'creation_time';
  const CURRENCY = 'currency';
  const HEALTH_STATUS = 'health_status';
  const ID = 'id';
  const IS_ENABLED_FOR_INSIGHTS = 'is_enabled_for_insights';
  const MESSAGE_TEMPLATE_NAMESPACE = 'message_template_namespace';
  const NAME = 'name';
  const ON_BEHALF_OF_BUSINESS_INFO = 'on_behalf_of_business_info';
  const OWNER_BUSINESS = 'owner_business';
  const OWNER_BUSINESS_INFO = 'owner_business_info';
  const OWNERSHIP_TYPE = 'ownership_type';
  const PRIMARY_FUNDING_ID = 'primary_funding_id';
  const PURCHASE_ORDER_NUMBER = 'purchase_order_number';
  const STATUS = 'status';
  const TIMEZONE_ID = 'timezone_id';

  public function getFieldTypes() {
    return array(
      'account_review_status' => 'string',
      'analytics' => 'Object',
      'business_verification_status' => 'string',
      'country' => 'string',
      'creation_time' => 'int',
      'currency' => 'string',
      'health_status' => 'WhatsAppBusinessHealthStatusForMessageSend',
      'id' => 'string',
      'is_enabled_for_insights' => 'bool',
      'message_template_namespace' => 'string',
      'name' => 'string',
      'on_behalf_of_business_info' => 'Object',
      'owner_business' => 'Business',
      'owner_business_info' => 'Object',
      'ownership_type' => 'string',
      'primary_funding_id' => 'string',
      'purchase_order_number' => 'string',
      'status' => 'string',
      'timezone_id' => 'string',
    );
  }
}
