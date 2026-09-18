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

class AdCreativeGetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACTOR_ID = 'actor_id';
  const ACTOR_TYPE = 'actor_type';
  const ADLABELS = 'adlabels';
  const APPLINK_TREATMENT = 'applink_treatment';
  const ASSET_FEED_SPEC = 'asset_feed_spec';
  const AUTHORIZATION_CATEGORY = 'authorization_category';
  const BODY = 'body';
  const BRANDED_CONTENT = 'branded_content';
  const BRANDED_CONTENT_BOOSTING_TYPE = 'branded_content_boosting_type';
  const BUNDLE_FOLDER_ID = 'bundle_folder_id';
  const CALL_TO_ACTION = 'call_to_action';
  const CALL_TO_ACTION_TYPE = 'call_to_action_type';
  const CATEGORIZATION_CRITERIA = 'categorization_criteria';
  const CATEGORY_MEDIA_SOURCE = 'category_media_source';
  const CONTEXTUAL_MULTI_ADS = 'contextual_multi_ads';
  const CREATIVE_SOURCING_SPEC = 'creative_sourcing_spec';
  const DEGREES_OF_FREEDOM_SPEC = 'degrees_of_freedom_spec';
  const DESTINATION_SPEC = 'destination_spec';
  const DYNAMIC_AD_VOICE = 'dynamic_ad_voice';
  const EFFECTIVE_AUTHORIZATION_CATEGORY = 'effective_authorization_category';
  const EFFECTIVE_INSTAGRAM_MEDIA_ID = 'effective_instagram_media_id';
  const EFFECTIVE_INSTAGRAM_STORY_ID = 'effective_instagram_story_id';
  const EFFECTIVE_OBJECT_STORY_ID = 'effective_object_story_id';
  const ENABLE_DIRECT_INSTALL = 'enable_direct_install';
  const ENABLE_LAUNCH_INSTANT_APP = 'enable_launch_instant_app';
  const EXISTING_POST_TITLE = 'existing_post_title';
  const FACEBOOK_BRANDED_CONTENT = 'facebook_branded_content';
  const FORMAT_TRANSFORMATION_SPEC = 'format_transformation_spec';
  const GENERATIVE_ASSET_SPEC = 'generative_asset_spec';
  const ID = 'id';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_URL = 'image_url';
  const INSTAGRAM_BRANDED_CONTENT = 'instagram_branded_content';
  const INSTAGRAM_PERMALINK_URL = 'instagram_permalink_url';
  const INSTAGRAM_USER_ID = 'instagram_user_id';
  const INTERACTIVE_COMPONENTS_SPEC = 'interactive_components_spec';
  const LINK_OG_ID = 'link_og_id';
  const LINK_URL = 'link_url';
  const MEDIA_SOURCING_SPEC = 'media_sourcing_spec';
  const MEDIA_TYPE = 'media_type';
  const NAME = 'name';
  const OBJECT_ID = 'object_id';
  const OBJECT_STORE_URL = 'object_store_url';
  const OBJECT_STORY_ID = 'object_story_id';
  const OBJECT_STORY_SPEC = 'object_story_spec';
  const OBJECT_TYPE = 'object_type';
  const OBJECT_URL = 'object_url';
  const OMNICHANNEL_LINK_SPEC = 'omnichannel_link_spec';
  const PAGE_ID = 'page_id';
  const PAGE_WELCOME_MESSAGE = 'page_welcome_message';
  const PHOTO_ALBUM_SOURCE_OBJECT_STORY_ID = 'photo_album_source_object_story_id';
  const PLACE_PAGE_SET_ID = 'place_page_set_id';
  const PLATFORM_CUSTOMIZATIONS = 'platform_customizations';
  const PLAYABLE_ASSET_ID = 'playable_asset_id';
  const PORTRAIT_CUSTOMIZATIONS = 'portrait_customizations';
  const PRODUCT_SET_ID = 'product_set_id';
  const RECOMMENDER_SETTINGS = 'recommender_settings';
  const REGIONAL_REGULATION_DISCLAIMER_SPEC = 'regional_regulation_disclaimer_spec';
  const SOURCE_FACEBOOK_POST_ID = 'source_facebook_post_id';
  const SOURCE_INSTAGRAM_MEDIA_ID = 'source_instagram_media_id';
  const STATUS = 'status';
  const TEMPLATE_URL = 'template_url';
  const TEMPLATE_URL_SPEC = 'template_url_spec';
  const THREADS_MEDIA_ID = 'threads_media_id';
  const THREADS_USER_ID = 'threads_user_id';
  const THUMBNAIL_ID = 'thumbnail_id';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TITLE = 'title';
  const UCA_DRAFT_VERSION = 'uca_draft_version';
  const URL_TAGS = 'url_tags';
  const USE_PAGE_ACTOR_OVERRIDE = 'use_page_actor_override';
  const VIDEO_ID = 'video_id';
  const VISUAL_HASH = 'visual_hash';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'actor_id' => 'int',
      'actor_type' => 'ActorType',
      'adlabels' => 'list<object>',
      'applink_treatment' => 'ApplinkTreatment',
      'asset_feed_spec' => 'object',
      'authorization_category' => 'AuthorizationCategory',
      'body' => 'string',
      'branded_content' => 'object',
      'branded_content_boosting_type' => 'BrandedContentBoostingType',
      'bundle_folder_id' => 'int',
      'call_to_action' => 'object',
      'call_to_action_type' => 'CallToActionType',
      'categorization_criteria' => 'CategorizationCriteria',
      'category_media_source' => 'CategoryMediaSource',
      'contextual_multi_ads' => 'object',
      'creative_sourcing_spec' => 'object',
      'degrees_of_freedom_spec' => 'object',
      'destination_spec' => 'object',
      'dynamic_ad_voice' => 'string',
      'effective_authorization_category' => 'EffectiveAuthorizationCategory',
      'effective_instagram_media_id' => 'int',
      'effective_instagram_story_id' => 'int',
      'effective_object_story_id' => 'string',
      'enable_direct_install' => 'bool',
      'enable_launch_instant_app' => 'bool',
      'existing_post_title' => 'string',
      'facebook_branded_content' => 'object',
      'format_transformation_spec' => 'list<object>',
      'generative_asset_spec' => 'object',
      'id' => 'int',
      'image_crops' => 'object',
      'image_hash' => 'string',
      'image_url' => 'string',
      'instagram_branded_content' => 'object',
      'instagram_permalink_url' => 'string',
      'instagram_user_id' => 'int',
      'interactive_components_spec' => 'object',
      'link_og_id' => 'int',
      'link_url' => 'string',
      'media_sourcing_spec' => 'object',
      'media_type' => 'MediaType',
      'name' => 'string',
      'object_id' => 'int',
      'object_store_url' => 'string',
      'object_story_id' => 'string',
      'object_story_spec' => 'object',
      'object_type' => 'ObjectType',
      'object_url' => 'string',
      'omnichannel_link_spec' => 'object',
      'page_id' => 'int',
      'page_welcome_message' => 'string',
      'photo_album_source_object_story_id' => 'string',
      'place_page_set_id' => 'int',
      'platform_customizations' => 'object',
      'playable_asset_id' => 'int',
      'portrait_customizations' => 'object',
      'product_set_id' => 'int',
      'recommender_settings' => 'object',
      'regional_regulation_disclaimer_spec' => 'object',
      'source_facebook_post_id' => 'int',
      'source_instagram_media_id' => 'int',
      'status' => 'string',
      'template_url' => 'string',
      'template_url_spec' => 'object',
      'threads_media_id' => 'int',
      'threads_user_id' => 'int',
      'thumbnail_id' => 'int',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'uca_draft_version' => 'int',
      'url_tags' => 'string',
      'use_page_actor_override' => 'bool',
      'video_id' => 'int',
      'visual_hash' => 'int',
    );
  }
}
