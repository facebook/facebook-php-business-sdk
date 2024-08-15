<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\Object\Fields\ProductAudienceFields;

class ProductAudience extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   * @return string
   */
  protected function getEndpoint() {
    return 'product_audiences';
  }

  /**
   * @return ProductAudienceFields
   */
  public static function getFieldsEnum() {
    return ProductAudienceFields::getInstance();
  }
}
