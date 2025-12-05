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

class ShadowIGScheduledMediaFields extends AbstractEnum {

  const CAPTION = 'caption';
  const ID = 'id';
  const MEDIA_TYPE = 'media_type';
  const MEDIA_URL = 'media_url';
  const PUBLISH_TIMESTAMP = 'publish_timestamp';
  const THUMBNAIL_URL = 'thumbnail_url';

  public function getFieldTypes() {
    return array(
      'caption' => 'string',
      'id' => 'string',
      'media_type' => 'string',
      'media_url' => 'string',
      'publish_timestamp' => 'int',
      'thumbnail_url' => 'string',
    );
  }
}
