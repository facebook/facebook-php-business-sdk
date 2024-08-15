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

class ProductCatalogImageSettingsInternalFields extends AbstractEnum {

  const CAROUSEL_AD = 'carousel_ad';
  const SHOPS_PDP = 'shops_pdp';
  const SINGLE_AD = 'single_ad';

  public function getFieldTypes() {
    return array(
      'carousel_ad' => 'ProductCatalogImageSettingsOperation',
      'shops_pdp' => 'ProductCatalogImageSettingsOperation',
      'single_ad' => 'ProductCatalogImageSettingsOperation',
    );
  }
}
