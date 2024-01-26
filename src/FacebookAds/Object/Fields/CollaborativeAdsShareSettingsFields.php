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

class CollaborativeAdsShareSettingsFields extends AbstractEnum {

  const AGENCY_BUSINESS = 'agency_business';
  const ID = 'id';
  const PRODUCT_CATALOG_PROXY_ID = 'product_catalog_proxy_id';
  const UTM_CAMPAIGN = 'utm_campaign';
  const UTM_MEDIUM = 'utm_medium';
  const UTM_SOURCE = 'utm_source';

  public function getFieldTypes() {
    return array(
      'agency_business' => 'Business',
      'id' => 'string',
      'product_catalog_proxy_id' => 'string',
      'utm_campaign' => 'string',
      'utm_medium' => 'string',
      'utm_source' => 'string',
    );
  }
}
