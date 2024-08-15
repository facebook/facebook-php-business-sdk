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

class EventExternalTicketInfoFields extends AbstractEnum {

  const ID = 'id';
  const MAX_SALES_PRICE = 'max_sales_price';
  const MIN_SALES_PRICE = 'min_sales_price';
  const SALES_STATUS = 'sales_status';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'max_sales_price' => 'CurrencyAmount',
      'min_sales_price' => 'CurrencyAmount',
      'sales_status' => 'string',
    );
  }
}
