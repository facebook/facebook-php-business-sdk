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

class AudioAssetFields extends AbstractEnum {

  const ALL_DDEX_FEATURED_ARTISTS = 'all_ddex_featured_artists';
  const ALL_DDEX_MAIN_ARTISTS = 'all_ddex_main_artists';
  const AUDIO_CLUSTER_ID = 'audio_cluster_id';
  const COVER_IMAGE_SOURCE = 'cover_image_source';
  const DISPLAY_ARTIST = 'display_artist';
  const DOWNLOAD_HD_URL = 'download_hd_url';
  const DOWNLOAD_SD_URL = 'download_sd_url';
  const DURATION_IN_MS = 'duration_in_ms';
  const FREEFORM_GENRE = 'freeform_genre';
  const GRID = 'grid';
  const ID = 'id';
  const IS_TEST = 'is_test';
  const ORIGINAL_RELEASE_DATE = 'original_release_date';
  const OWNER = 'owner';
  const PARENTAL_WARNING_TYPE = 'parental_warning_type';
  const SUBTITLE = 'subtitle';
  const TITLE = 'title';
  const TITLE_WITH_FEATURED_ARTISTS = 'title_with_featured_artists';
  const UPC = 'upc';

  public function getFieldTypes() {
    return array(
      'all_ddex_featured_artists' => 'string',
      'all_ddex_main_artists' => 'string',
      'audio_cluster_id' => 'string',
      'cover_image_source' => 'string',
      'display_artist' => 'string',
      'download_hd_url' => 'string',
      'download_sd_url' => 'string',
      'duration_in_ms' => 'int',
      'freeform_genre' => 'string',
      'grid' => 'string',
      'id' => 'string',
      'is_test' => 'bool',
      'original_release_date' => 'datetime',
      'owner' => 'Page',
      'parental_warning_type' => 'string',
      'subtitle' => 'string',
      'title' => 'string',
      'title_with_featured_artists' => 'string',
      'upc' => 'string',
    );
  }
}
