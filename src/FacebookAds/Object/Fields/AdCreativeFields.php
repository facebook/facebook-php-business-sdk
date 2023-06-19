<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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

class AdCreativeFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACTOR_ID = 'actor_id';
  const ADLABELS = 'adlabels';
  const APPLINK_TREATMENT = 'applink_treatment';
  const ASSET_FEED_SPEC = 'asset_feed_spec';
  const AUTHORIZATION_CATEGORY = 'authorization_category';
  const AUTO_UPDATE = 'auto_update';
  const BODY = 'body';
  const BRANDED_CONTENT = 'branded_content';
  const BRANDED_CONTENT_SPONSOR_PAGE_ID = 'branded_content_sponsor_page_id';
  const BUNDLE_FOLDER_ID = 'bundle_folder_id';
  const CALL_TO_ACTION_TYPE = 'call_to_action_type';
  const CATEGORIZATION_CRITERIA = 'categorization_criteria';
  const CATEGORY_MEDIA_SOURCE = 'category_media_source';
  const COLLABORATIVE_ADS_LSB_IMAGE_BANK_ID = 'collaborative_ads_lsb_image_bank_id';
  const DEGREES_OF_FREEDOM_SPEC = 'degrees_of_freedom_spec';
  const DESTINATION_SET_ID = 'destination_set_id';
  const DYNAMIC_AD_VOICE = 'dynamic_ad_voice';
  const EFFECTIVE_AUTHORIZATION_CATEGORY = 'effective_authorization_category';
  const EFFECTIVE_INSTAGRAM_MEDIA_ID = 'effective_instagram_media_id';
  const EFFECTIVE_INSTAGRAM_STORY_ID = 'effective_instagram_story_id';
  const EFFECTIVE_OBJECT_STORY_ID = 'effective_object_story_id';
  const ENABLE_DIRECT_INSTALL = 'enable_direct_install';
  const ENABLE_LAUNCH_INSTANT_APP = 'enable_launch_instant_app';
  const FACEBOOK_BRANDED_CONTENT = 'facebook_branded_content';
  const ID = 'id';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_URL = 'image_url';
  const INSTAGRAM_ACTOR_ID = 'instagram_actor_id';
  const INSTAGRAM_BRANDED_CONTENT = 'instagram_branded_content';
  const INSTAGRAM_PERMALINK_URL = 'instagram_permalink_url';
  const INSTAGRAM_STORY_ID = 'instagram_story_id';
  const INSTAGRAM_USER_ID = 'instagram_user_id';
  const INTERACTIVE_COMPONENTS_SPEC = 'interactive_components_spec';
  const LINK_DEEP_LINK_URL = 'link_deep_link_url';
  const LINK_DESTINATION_DISPLAY_URL = 'link_destination_display_url';
  const LINK_OG_ID = 'link_og_id';
  const LINK_URL = 'link_url';
  const MESSENGER_SPONSORED_MESSAGE = 'messenger_sponsored_message';
  const NAME = 'name';
  const OBJECT_ID = 'object_id';
  const OBJECT_STORE_URL = 'object_store_url';
  const OBJECT_STORY_ID = 'object_story_id';
  const OBJECT_STORY_SPEC = 'object_story_spec';
  const OBJECT_TYPE = 'object_type';
  const OBJECT_URL = 'object_url';
  const OMNICHANNEL_LINK_SPEC = 'omnichannel_link_spec';
  const PLACE_PAGE_SET_ID = 'place_page_set_id';
  const PLATFORM_CUSTOMIZATIONS = 'platform_customizations';
  const PLAYABLE_ASSET_ID = 'playable_asset_id';
  const PORTRAIT_CUSTOMIZATIONS = 'portrait_customizations';
  const PRODUCT_SET_ID = 'product_set_id';
  const RECOMMENDER_SETTINGS = 'recommender_settings';
  const SOURCE_INSTAGRAM_MEDIA_ID = 'source_instagram_media_id';
  const STATUS = 'status';
  const TEMPLATE_URL = 'template_url';
  const TEMPLATE_URL_SPEC = 'template_url_spec';
  const THUMBNAIL_ID = 'thumbnail_id';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TITLE = 'title';
  const URL_TAGS = 'url_tags';
  const USE_PAGE_ACTOR_OVERRIDE = 'use_page_actor_override';
  const VIDEO_ID = 'video_id';
  const CALL_TO_ACTION = 'call_to_action';
  const IMAGE_FILE = 'image_file';
  const IS_DCO_INTERNAL = 'is_dco_internal';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'actor_id' => 'string',
      'adlabels' => 'list<AdLabel>',
      'applink_treatment' => 'string',
      'asset_feed_spec' => 'AdAssetFeedSpec',
      'authorization_category' => 'string',
      'auto_update' => 'bool',
      'body' => 'string',
      'branded_content' => 'AdCreativeBrandedContentAds',
      'branded_content_sponsor_page_id' => 'string',
      'bundle_folder_id' => 'string',
      'call_to_action_type' => 'CallToActionType',
      'categorization_criteria' => 'string',
      'category_media_source' => 'string',
      'collaborative_ads_lsb_image_bank_id' => 'string',
      'degrees_of_freedom_spec' => 'AdCreativeDegreesOfFreedomSpec',
      'destination_set_id' => 'string',
      'dynamic_ad_voice' => 'string',
      'effective_authorization_category' => 'string',
      'effective_instagram_media_id' => 'string',
      'effective_instagram_story_id' => 'string',
      'effective_object_story_id' => 'string',
      'enable_direct_install' => 'bool',
      'enable_launch_instant_app' => 'bool',
      'facebook_branded_content' => 'AdCreativeFacebookBrandedContent',
      'id' => 'string',
      'image_crops' => 'AdsImageCrops',
      'image_hash' => 'string',
      'image_url' => 'string',
      'instagram_actor_id' => 'string',
      'instagram_branded_content' => 'AdCreativeInstagramBrandedContent',
      'instagram_permalink_url' => 'string',
      'instagram_story_id' => 'string',
      'instagram_user_id' => 'string',
      'interactive_components_spec' => 'AdCreativeInteractiveComponentsSpec',
      'link_deep_link_url' => 'string',
      'link_destination_display_url' => 'string',
      'link_og_id' => 'string',
      'link_url' => 'string',
      'messenger_sponsored_message' => 'string',
      'name' => 'string',
      'object_id' => 'string',
      'object_store_url' => 'string',
      'object_story_id' => 'string',
      'object_story_spec' => 'AdCreativeObjectStorySpec',
      'object_type' => 'ObjectType',
      'object_url' => 'string',
      'omnichannel_link_spec' => 'AdCreativeOmnichannelLinkSpec',
      'place_page_set_id' => 'string',
      'platform_customizations' => 'AdCreativePlatformCustomization',
      'playable_asset_id' => 'string',
      'portrait_customizations' => 'AdCreativePortraitCustomizations',
      'product_set_id' => 'string',
      'recommender_settings' => 'AdCreativeRecommenderSettings',
      'source_instagram_media_id' => 'string',
      'status' => 'Status',
      'template_url' => 'string',
      'template_url_spec' => 'AdCreativeTemplateURLSpec',
      'thumbnail_id' => 'string',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'url_tags' => 'string',
      'use_page_actor_override' => 'bool',
      'video_id' => 'string',
      'call_to_action' => 'Object',
      'image_file' => 'string',
      'is_dco_internal' => 'bool',
    );
  }
}
