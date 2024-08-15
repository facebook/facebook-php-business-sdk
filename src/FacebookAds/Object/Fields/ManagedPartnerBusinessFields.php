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

class ManagedPartnerBusinessFields extends AbstractEnum {

  const AD_ACCOUNT = 'ad_account';
  const CATALOG_SEGMENT = 'catalog_segment';
  const EXTENDED_CREDIT = 'extended_credit';
  const PAGE = 'page';
  const SELLER_BUSINESS_INFO = 'seller_business_info';
  const SELLER_BUSINESS_STATUS = 'seller_business_status';
  const TEMPLATE = 'template';

  public function getFieldTypes() {
    return array(
      'ad_account' => 'AdAccount',
      'catalog_segment' => 'ProductCatalog',
      'extended_credit' => 'ManagedPartnerExtendedCredit',
      'page' => 'Page',
      'seller_business_info' => 'Object',
      'seller_business_status' => 'string',
      'template' => 'list<Object>',
    );
  }
}
