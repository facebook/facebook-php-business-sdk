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

class McomInvoiceDetailsFields extends AbstractEnum {

  const ADDITIONAL_AMOUNTS = 'additional_amounts';
  const BUYER_NOTES = 'buyer_notes';
  const CURRENCY_AMOUNT = 'currency_amount';
  const EXTERNAL_INVOICE_ID = 'external_invoice_id';
  const FEATURES = 'features';
  const INVOICE_CREATED = 'invoice_created';
  const INVOICE_ID = 'invoice_id';
  const INVOICE_INSTRUCTIONS = 'invoice_instructions';
  const INVOICE_INSTRUCTIONS_IMAGE_URL = 'invoice_instructions_image_url';
  const INVOICE_UPDATED = 'invoice_updated';
  const OUTSTANDING_AMOUNT = 'outstanding_amount';
  const PAID_AMOUNT = 'paid_amount';
  const PAYMENTS = 'payments';
  const PLATFORM_LOGO_URL = 'platform_logo_url';
  const PLATFORM_NAME = 'platform_name';
  const PRODUCT_ITEMS = 'product_items';
  const SHIPPING_ADDRESS = 'shipping_address';
  const STATUS = 'status';
  const TRACKING_INFO = 'tracking_info';

  public function getFieldTypes() {
    return array(
      'additional_amounts' => 'list<Object>',
      'buyer_notes' => 'string',
      'currency_amount' => 'Object',
      'external_invoice_id' => 'string',
      'features' => 'Object',
      'invoice_created' => 'int',
      'invoice_id' => 'string',
      'invoice_instructions' => 'string',
      'invoice_instructions_image_url' => 'string',
      'invoice_updated' => 'int',
      'outstanding_amount' => 'Object',
      'paid_amount' => 'Object',
      'payments' => 'list<Object>',
      'platform_logo_url' => 'string',
      'platform_name' => 'string',
      'product_items' => 'list<Object>',
      'shipping_address' => 'Object',
      'status' => 'string',
      'tracking_info' => 'Object',
    );
  }
}
