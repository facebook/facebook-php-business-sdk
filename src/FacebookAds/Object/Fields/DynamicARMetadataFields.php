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

class DynamicARMetadataFields extends AbstractEnum {

  const ANCHOR_POINT = 'anchor_point';
  const CONTAINER_EFFECT_ENUM = 'container_effect_enum';
  const EFFECT_ICON_URL = 'effect_icon_url';
  const EFFECT_ID = 'effect_id';
  const ID = 'id';
  const PLATFORMS = 'platforms';
  const SCALE_FACTOR = 'scale_factor';
  const SHADOW_TEXTURE_URL = 'shadow_texture_url';
  const SOURCE_URL = 'source_url';
  const STATE = 'state';
  const TAGS = 'tags';
  const VARIANT_PICKER_URL = 'variant_picker_url';

  public function getFieldTypes() {
    return array(
      'anchor_point' => 'list<float>',
      'container_effect_enum' => 'int',
      'effect_icon_url' => 'string',
      'effect_id' => 'string',
      'id' => 'string',
      'platforms' => 'list<string>',
      'scale_factor' => 'list<float>',
      'shadow_texture_url' => 'string',
      'source_url' => 'string',
      'state' => 'string',
      'tags' => 'list<string>',
      'variant_picker_url' => 'string',
    );
  }
}
