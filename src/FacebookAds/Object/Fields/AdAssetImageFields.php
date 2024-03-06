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

class AdAssetImageFields extends AbstractEnum {

  const HASH = 'hash';
  const ID = 'id';
  const IMAGE_CROPS = 'image_crops';
  const NAME = 'name';
  const TAG = 'tag';
  const URL = 'url';
  const URL_TAGS = 'url_tags';

  public function getFieldTypes() {
    return array(
      'hash' => 'string',
      'id' => 'string',
      'image_crops' => 'AdsImageCrops',
      'name' => 'string',
      'tag' => 'string',
      'url' => 'string',
      'url_tags' => 'string',
    );
  }
}
