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

class AudioReleaseFields extends AbstractEnum {

  const ALBUM_TITLE = 'album_title';
  const ASSET_AVAILABILITY_STATUS = 'asset_availability_status';
  const AUDIO_AVAILABILITY_STATUS = 'audio_availability_status';
  const AUDIO_RELEASE_IMAGE_URI = 'audio_release_image_uri';
  const CREATED_TIME = 'created_time';
  const DISPLAYED_ARTIST = 'displayed_artist';
  const EAN = 'ean';
  const GENRE = 'genre';
  const GRID = 'grid';
  const ID = 'id';
  const ISRC = 'isrc';
  const LABEL_NAME = 'label_name';
  const ORIGINAL_RELEASE_DATE = 'original_release_date';
  const PARENTAL_WARNING_TYPE = 'parental_warning_type';
  const PROPRIETARY_ID = 'proprietary_id';
  const UPC = 'upc';

  public function getFieldTypes() {
    return array(
      'album_title' => 'string',
      'asset_availability_status' => 'list<map<int, Object>>',
      'audio_availability_status' => 'string',
      'audio_release_image_uri' => 'string',
      'created_time' => 'datetime',
      'displayed_artist' => 'string',
      'ean' => 'string',
      'genre' => 'string',
      'grid' => 'string',
      'id' => 'string',
      'isrc' => 'string',
      'label_name' => 'string',
      'original_release_date' => 'datetime',
      'parental_warning_type' => 'string',
      'proprietary_id' => 'string',
      'upc' => 'string',
    );
  }
}
