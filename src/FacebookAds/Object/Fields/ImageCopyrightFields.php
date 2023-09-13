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

class ImageCopyrightFields extends AbstractEnum {

  const ARTIST = 'artist';
  const COPYRIGHT_MONITORING_STATUS = 'copyright_monitoring_status';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const CUSTOM_ID = 'custom_id';
  const DESCRIPTION = 'description';
  const FILENAME = 'filename';
  const ID = 'id';
  const IMAGE = 'image';
  const MATCHES_COUNT = 'matches_count';
  const ORIGINAL_CONTENT_CREATION_DATE = 'original_content_creation_date';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const TAGS = 'tags';
  const TITLE = 'title';
  const UPDATE_TIME = 'update_time';

  public function getFieldTypes() {
    return array(
      'artist' => 'string',
      'copyright_monitoring_status' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'string',
      'custom_id' => 'string',
      'description' => 'string',
      'filename' => 'string',
      'id' => 'string',
      'image' => 'Photo',
      'matches_count' => 'unsigned int',
      'original_content_creation_date' => 'datetime',
      'ownership_countries' => 'VideoCopyrightGeoGate',
      'tags' => 'list<string>',
      'title' => 'string',
      'update_time' => 'datetime',
    );
  }
}
