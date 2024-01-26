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

class CommerceOrderFields extends AbstractEnum {

  const BUYER_DETAILS = 'buyer_details';
  const CHANNEL = 'channel';
  const CREATED = 'created';
  const ESTIMATED_PAYMENT_DETAILS = 'estimated_payment_details';
  const ID = 'id';
  const IS_GROUP_BUY = 'is_group_buy';
  const IS_TEST_ORDER = 'is_test_order';
  const LAST_UPDATED = 'last_updated';
  const MERCHANT_ORDER_ID = 'merchant_order_id';
  const ORDER_STATUS = 'order_status';
  const SELECTED_SHIPPING_OPTION = 'selected_shipping_option';
  const SHIP_BY_DATE = 'ship_by_date';
  const SHIPPING_ADDRESS = 'shipping_address';

  public function getFieldTypes() {
    return array(
      'buyer_details' => 'Object',
      'channel' => 'string',
      'created' => 'string',
      'estimated_payment_details' => 'Object',
      'id' => 'string',
      'is_group_buy' => 'bool',
      'is_test_order' => 'bool',
      'last_updated' => 'string',
      'merchant_order_id' => 'string',
      'order_status' => 'Object',
      'selected_shipping_option' => 'Object',
      'ship_by_date' => 'string',
      'shipping_address' => 'Object',
    );
  }
}
