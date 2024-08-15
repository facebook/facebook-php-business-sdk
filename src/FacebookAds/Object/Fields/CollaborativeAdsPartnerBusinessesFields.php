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

class CollaborativeAdsPartnerBusinessesFields extends AbstractEnum {

  const COLLABORATIVE_ADS_PARTNER_BUSINESSES_INFO = 'collaborative_ads_partner_businesses_info';
  const DEDICATED_PARTNER_BUSINESS_INFO = 'dedicated_partner_business_info';

  public function getFieldTypes() {
    return array(
      'collaborative_ads_partner_businesses_info' => 'list<Business>',
      'dedicated_partner_business_info' => 'Business',
    );
  }
}
