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

class VideoListFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const LAST_MODIFIED = 'last_modified';
  const OWNER = 'owner';
  const SEASON_NUMBER = 'season_number';
  const THUMBNAIL = 'thumbnail';
  const TITLE = 'title';
  const VIDEOS_COUNT = 'videos_count';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'description' => 'string',
      'id' => 'string',
      'last_modified' => 'datetime',
      'owner' => 'Object',
      'season_number' => 'int',
      'thumbnail' => 'string',
      'title' => 'string',
      'videos_count' => 'int',
    );
  }
}
