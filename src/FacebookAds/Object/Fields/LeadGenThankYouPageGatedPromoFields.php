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

class LeadGenThankYouPageGatedPromoFields extends AbstractEnum {

  const ID = 'id';
  const ONLINE_OFFER_URL = 'online_offer_url';
  const ONLINE_PROMO_CODE = 'online_promo_code';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'online_offer_url' => 'string',
      'online_promo_code' => 'string',
    );
  }
}
