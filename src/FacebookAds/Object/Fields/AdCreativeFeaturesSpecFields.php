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

class AdCreativeFeaturesSpecFields extends AbstractEnum {

  const ADVANTAGE_PLUS_CREATIVE = 'advantage_plus_creative';
  const APP_HIGHLIGHTS = 'app_highlights';
  const AUDIO = 'audio';
  const CAROUSEL_TO_VIDEO = 'carousel_to_video';
  const CATALOG_FEED_TAG = 'catalog_feed_tag';
  const CUSTOMIZE_PRODUCT_RECOMMENDATION = 'customize_product_recommendation';
  const CV_TRANSFORMATION = 'cv_transformation';
  const DESCRIPTION_AUTOMATION = 'description_automation';
  const DHA_OPTIMIZATION = 'dha_optimization';
  const IG_GLADOS_FEED = 'ig_glados_feed';
  const IMAGE_AUTO_CROP = 'image_auto_crop';
  const IMAGE_BACKGROUND_GEN = 'image_background_gen';
  const IMAGE_ENHANCEMENT = 'image_enhancement';
  const IMAGE_TEMPLATES = 'image_templates';
  const IMAGE_TOUCHUPS = 'image_touchups';
  const IMAGE_UNCROP = 'image_uncrop';
  const INLINE_COMMENT = 'inline_comment';
  const MEDIA_LIQUIDITY_ANIMATED_IMAGE = 'media_liquidity_animated_image';
  const MEDIA_ORDER = 'media_order';
  const MEDIA_TYPE_AUTOMATION = 'media_type_automation';
  const PRODUCT_EXTENSIONS = 'product_extensions';
  const PRODUCT_METADATA_AUTOMATION = 'product_metadata_automation';
  const PRODUCT_TAGS = 'product_tags';
  const PROFILE_CARD = 'profile_card';
  const SITE_EXTENSIONS = 'site_extensions';
  const STANDARD_ENHANCEMENTS = 'standard_enhancements';
  const STANDARD_ENHANCEMENTS_CATALOG = 'standard_enhancements_catalog';
  const TEXT_GENERATION = 'text_generation';
  const TEXT_OPTIMIZATIONS = 'text_optimizations';
  const VIDEO_AUTO_CROP = 'video_auto_crop';
  const VIDEO_HIGHLIGHT = 'video_highlight';

  public function getFieldTypes() {
    return array(
      'advantage_plus_creative' => 'AdCreativeFeatureDetails',
      'app_highlights' => 'AdCreativeFeatureDetails',
      'audio' => 'AdCreativeFeatureDetails',
      'carousel_to_video' => 'AdCreativeFeatureDetails',
      'catalog_feed_tag' => 'AdCreativeFeatureDetails',
      'customize_product_recommendation' => 'AdCreativeFeatureDetails',
      'cv_transformation' => 'AdCreativeFeatureDetails',
      'description_automation' => 'AdCreativeFeatureDetails',
      'dha_optimization' => 'AdCreativeFeatureDetails',
      'ig_glados_feed' => 'AdCreativeFeatureDetails',
      'image_auto_crop' => 'AdCreativeFeatureDetails',
      'image_background_gen' => 'AdCreativeFeatureDetails',
      'image_enhancement' => 'AdCreativeFeatureDetails',
      'image_templates' => 'AdCreativeFeatureDetails',
      'image_touchups' => 'AdCreativeFeatureDetails',
      'image_uncrop' => 'AdCreativeFeatureDetails',
      'inline_comment' => 'AdCreativeFeatureDetails',
      'media_liquidity_animated_image' => 'AdCreativeFeatureDetails',
      'media_order' => 'AdCreativeFeatureDetails',
      'media_type_automation' => 'AdCreativeFeatureDetails',
      'product_extensions' => 'AdCreativeFeatureDetails',
      'product_metadata_automation' => 'AdCreativeFeatureDetails',
      'product_tags' => 'AdCreativeFeatureDetails',
      'profile_card' => 'AdCreativeFeatureDetails',
      'site_extensions' => 'AdCreativeFeatureDetails',
      'standard_enhancements' => 'AdCreativeFeatureDetails',
      'standard_enhancements_catalog' => 'AdCreativeFeatureDetails',
      'text_generation' => 'AdCreativeFeatureDetails',
      'text_optimizations' => 'AdCreativeFeatureDetails',
      'video_auto_crop' => 'AdCreativeFeatureDetails',
      'video_highlight' => 'AdCreativeFeatureDetails',
    );
  }
}
