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

class AdCreativeMediaSourcingSpecFields extends AbstractEnum {

  const BODIES = 'bodies';
  const DESCRIPTIONS = 'descriptions';
  const IMAGES = 'images';
  const PUSH_METADATA_IDS = 'push_metadata_ids';
  const RELATED_MEDIA = 'related_media';
  const TITLES = 'titles';
  const VIDEOS = 'videos';

  public function getFieldTypes() {
    return array(
      'bodies' => 'list<Object>',
      'descriptions' => 'list<Object>',
      'images' => 'list<Object>',
      'push_metadata_ids' => 'list<unsigned int>',
      'related_media' => 'Object',
      'titles' => 'list<Object>',
      'videos' => 'list<Object>',
    );
  }
}
