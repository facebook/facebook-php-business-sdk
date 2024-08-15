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

class CreatorAssetCreativeFields extends AbstractEnum {

  const ID = 'id';
  const IMAGE_URL = 'image_url';
  const MODERATION_STATUS = 'moderation_status';
  const PRODUCT_ITEM_RETAILER_ID = 'product_item_retailer_id';
  const PRODUCT_URL = 'product_url';
  const RETAILER_ID = 'retailer_id';
  const VIDEO_URL = 'video_url';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'image_url' => 'string',
      'moderation_status' => 'string',
      'product_item_retailer_id' => 'string',
      'product_url' => 'string',
      'retailer_id' => 'string',
      'video_url' => 'string',
    );
  }
}
