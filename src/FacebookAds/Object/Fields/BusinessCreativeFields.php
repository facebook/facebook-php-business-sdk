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

class BusinessCreativeFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const DURATION = 'duration';
  const HASH = 'hash';
  const HEIGHT = 'height';
  const ID = 'id';
  const NAME = 'name';
  const THUMBNAIL = 'thumbnail';
  const TYPE = 'type';
  const URL = 'url';
  const VIDEO_ID = 'video_id';
  const WIDTH = 'width';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'duration' => 'int',
      'hash' => 'string',
      'height' => 'int',
      'id' => 'string',
      'name' => 'string',
      'thumbnail' => 'string',
      'type' => 'string',
      'url' => 'string',
      'video_id' => 'string',
      'width' => 'int',
    );
  }
}
