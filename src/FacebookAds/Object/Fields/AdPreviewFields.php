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

class AdPreviewFields extends AbstractEnum {

  const BODY = 'body';
  const TRANSFORMATION_SPEC = 'transformation_spec';
  const CREATIVE = 'creative';
  const POST = 'post';
  const AD_FORMAT = 'ad_format';
  const PRODUCT_ITEM_IDS = 'product_item_ids';

  public function getFieldTypes() {
    return array(
      'body' => 'string',
      'transformation_spec' => 'Object',
    );
  }
}
