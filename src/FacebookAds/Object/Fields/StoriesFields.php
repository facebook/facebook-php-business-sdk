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

class StoriesFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const MEDIA_ID = 'media_id';
  const MEDIA_TYPE = 'media_type';
  const POST_ID = 'post_id';
  const STATUS = 'status';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'string',
      'media_id' => 'string',
      'media_type' => 'string',
      'post_id' => 'string',
      'status' => 'string',
      'url' => 'string',
    );
  }
}
