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

class DynamicPostChildAttachmentFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const IMAGE_URL = 'image_url';
  const LINK = 'link';
  const PLACE_ID = 'place_id';
  const PRODUCT_ID = 'product_id';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'image_url' => 'string',
      'link' => 'string',
      'place_id' => 'string',
      'product_id' => 'string',
      'title' => 'string',
    );
  }
}
