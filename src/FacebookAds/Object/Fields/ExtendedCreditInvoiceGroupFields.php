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

class ExtendedCreditInvoiceGroupFields extends AbstractEnum {

  const AUTO_ENROLL = 'auto_enroll';
  const BILL_TO_ADDRESS = 'bill_to_address';
  const CUSTOMER_PO_NUMBER = 'customer_po_number';
  const EMAIL = 'email';
  const EMAILS = 'emails';
  const ID = 'id';
  const LIABLE_ADDRESS = 'liable_address';
  const NAME = 'name';
  const SOLD_TO_ADDRESS = 'sold_to_address';

  public function getFieldTypes() {
    return array(
      'auto_enroll' => 'bool',
      'bill_to_address' => 'CRMAddress',
      'customer_po_number' => 'string',
      'email' => 'Object',
      'emails' => 'list<string>',
      'id' => 'string',
      'liable_address' => 'CRMAddress',
      'name' => 'string',
      'sold_to_address' => 'CRMAddress',
    );
  }
}
