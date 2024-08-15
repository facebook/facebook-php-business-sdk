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

class McomInvoiceListsFields extends AbstractEnum {

  const INVOICE_DETAILS = 'invoice_details';
  const INVOICE_IDS = 'invoice_ids';
  const PAGE_ID = 'page_id';

  public function getFieldTypes() {
    return array(
      'invoice_details' => 'list<McomInvoiceDetails>',
      'invoice_ids' => 'list<string>',
      'page_id' => 'string',
    );
  }
}
