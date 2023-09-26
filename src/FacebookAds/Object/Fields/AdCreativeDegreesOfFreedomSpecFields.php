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

class AdCreativeDegreesOfFreedomSpecFields extends AbstractEnum {

  const AD_HANDLE_TYPE = 'ad_handle_type';
  const CREATIVE_FEATURES_SPEC = 'creative_features_spec';
  const DEGREES_OF_FREEDOM_TYPE = 'degrees_of_freedom_type';
  const IMAGE_TRANSFORMATION_TYPES = 'image_transformation_types';
  const MULTI_MEDIA_TRANSFORMATION_TYPE = 'multi_media_transformation_type';
  const STORIES_TRANSFORMATION_TYPES = 'stories_transformation_types';
  const TEXT_TRANSFORMATION_TYPES = 'text_transformation_types';
  const VIDEO_TRANSFORMATION_TYPES = 'video_transformation_types';

  public function getFieldTypes() {
    return array(
      'ad_handle_type' => 'string',
      'creative_features_spec' => 'AdCreativeFeaturesSpec',
      'degrees_of_freedom_type' => 'string',
      'image_transformation_types' => 'list<string>',
      'multi_media_transformation_type' => 'string',
      'stories_transformation_types' => 'list<string>',
      'text_transformation_types' => 'list<string>',
      'video_transformation_types' => 'list<string>',
    );
  }
}
