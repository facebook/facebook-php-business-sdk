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

class AudioIsrcFields extends AbstractEnum {

  const ALL_KG_FEATURED_ARTISTS = 'all_kg_featured_artists';
  const ALL_KG_MAIN_ARTISTS = 'all_kg_main_artists';
  const ARTIST_PROFILE_PICTURE_URL = 'artist_profile_picture_url';
  const ID = 'id';
  const ISRC = 'isrc';
  const PUBLISHING_RIGHTS_DATA = 'publishing_rights_data';
  const TOP_SEARCHABLE_ARTIST_ID = 'top_searchable_artist_id';
  const TOP_SEARCHABLE_ARTIST_NAME = 'top_searchable_artist_name';
  const TOP_SEARCHABLE_ARTIST_PROFILE_PIC_URL = 'top_searchable_artist_profile_pic_url';

  public function getFieldTypes() {
    return array(
      'all_kg_featured_artists' => 'string',
      'all_kg_main_artists' => 'string',
      'artist_profile_picture_url' => 'string',
      'id' => 'string',
      'isrc' => 'string',
      'publishing_rights_data' => 'Object',
      'top_searchable_artist_id' => 'string',
      'top_searchable_artist_name' => 'string',
      'top_searchable_artist_profile_pic_url' => 'string',
    );
  }
}
