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

class BusinessImageFields extends AbstractEnum {

  const BUSINESS = 'business';
  const CREATION_TIME = 'creation_time';
  const HASH = 'hash';
  const HEIGHT = 'height';
  const ID = 'id';
  const MEDIA_LIBRARY_URL = 'media_library_url';
  const NAME = 'name';
  const URL = 'url';
  const URL_128 = 'url_128';
  const WIDTH = 'width';
  const AD_PLACEMENTS_VALIDATION_ONLY = 'ad_placements_validation_only';
  const BYTES = 'bytes';
  const CREATIVE_FOLDER_ID = 'creative_folder_id';
  const VALIDATION_AD_PLACEMENTS = 'validation_ad_placements';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'creation_time' => 'datetime',
      'hash' => 'string',
      'height' => 'int',
      'id' => 'string',
      'media_library_url' => 'string',
      'name' => 'string',
      'url' => 'string',
      'url_128' => 'string',
      'width' => 'int',
      'ad_placements_validation_only' => 'bool',
      'bytes' => 'string',
      'creative_folder_id' => 'string',
      'validation_ad_placements' => 'list<ValidationAdPlacements>',
    );
  }
}
