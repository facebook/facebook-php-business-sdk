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

class ExtendedCreditFields extends AbstractEnum {

  const ALLOCATED_AMOUNT = 'allocated_amount';
  const BALANCE = 'balance';
  const CREDIT_AVAILABLE = 'credit_available';
  const CREDIT_TYPE = 'credit_type';
  const ID = 'id';
  const IS_ACCESS_REVOKED = 'is_access_revoked';
  const IS_AUTOMATED_EXPERIENCE = 'is_automated_experience';
  const LEGAL_ENTITY_NAME = 'legal_entity_name';
  const LIABLE_ADDRESS = 'liable_address';
  const LIABLE_BIZ_NAME = 'liable_biz_name';
  const MAX_BALANCE = 'max_balance';
  const ONLINE_MAX_BALANCE = 'online_max_balance';
  const OWNER_BUSINESS = 'owner_business';
  const OWNER_BUSINESS_NAME = 'owner_business_name';
  const PARTITION_FROM = 'partition_from';
  const RECEIVING_CREDIT_ALLOCATION_CONFIG = 'receiving_credit_allocation_config';
  const SEND_BILL_TO_ADDRESS = 'send_bill_to_address';
  const SEND_BILL_TO_BIZ_NAME = 'send_bill_to_biz_name';
  const SOLD_TO_ADDRESS = 'sold_to_address';

  public function getFieldTypes() {
    return array(
      'allocated_amount' => 'CurrencyAmount',
      'balance' => 'CurrencyAmount',
      'credit_available' => 'CurrencyAmount',
      'credit_type' => 'string',
      'id' => 'string',
      'is_access_revoked' => 'bool',
      'is_automated_experience' => 'bool',
      'legal_entity_name' => 'string',
      'liable_address' => 'CRMAddress',
      'liable_biz_name' => 'string',
      'max_balance' => 'CurrencyAmount',
      'online_max_balance' => 'CurrencyAmount',
      'owner_business' => 'Business',
      'owner_business_name' => 'string',
      'partition_from' => 'string',
      'receiving_credit_allocation_config' => 'ExtendedCreditAllocationConfig',
      'send_bill_to_address' => 'CRMAddress',
      'send_bill_to_biz_name' => 'string',
      'sold_to_address' => 'CRMAddress',
    );
  }
}
