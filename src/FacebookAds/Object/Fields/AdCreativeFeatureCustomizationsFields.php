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

class AdCreativeFeatureCustomizationsFields extends AbstractEnum {

  const ASPECT_RATIO_CONFIG = 'aspect_ratio_config';
  const BACKGROUND_COLOR = 'background_color';
  const CATALOG_FEED_TAG_NAME = 'catalog_feed_tag_name';
  const FB_FEED_TAG_NAME = 'fb_feed_tag_name';
  const FB_REELS_TAG_NAME = 'fb_reels_tag_name';
  const FB_STORY_TAG_NAME = 'fb_story_tag_name';
  const FONT_NAME = 'font_name';
  const IG_FEED_TAG_NAME = 'ig_feed_tag_name';
  const IG_REELS_TAG_NAME = 'ig_reels_tag_name';
  const IG_STREAM_TAG_NAME = 'ig_stream_tag_name';
  const IMAGE_CROP_STYLE = 'image_crop_style';
  const PE_CAROUSEL = 'pe_carousel';
  const SHOWCASE_CARD_DISPLAY = 'showcase_card_display';
  const TEXT_EXTRACTION = 'text_extraction';
  const TEXT_STYLE = 'text_style';

  public function getFieldTypes() {
    return array(
      'aspect_ratio_config' => 'Object',
      'background_color' => 'string',
      'catalog_feed_tag_name' => 'string',
      'fb_feed_tag_name' => 'string',
      'fb_reels_tag_name' => 'string',
      'fb_story_tag_name' => 'string',
      'font_name' => 'string',
      'ig_feed_tag_name' => 'string',
      'ig_reels_tag_name' => 'string',
      'ig_stream_tag_name' => 'string',
      'image_crop_style' => 'string',
      'pe_carousel' => 'Object',
      'showcase_card_display' => 'string',
      'text_extraction' => 'Object',
      'text_style' => 'string',
    );
  }
}
