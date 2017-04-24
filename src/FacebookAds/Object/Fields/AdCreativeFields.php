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
 * This class is auto-genereated.
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
  const BODY = 'body';
  const CALL_TO_ACTION_TYPE = 'call_to_action_type';
  const EFFECTIVE_INSTAGRAM_STORY_ID = 'effective_instagram_story_id';
  const EFFECTIVE_OBJECT_STORY_ID = 'effective_object_story_id';
  const ID = 'id';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_URL = 'image_url';
  const INSTAGRAM_ACTOR_ID = 'instagram_actor_id';
  const INSTAGRAM_PERMALINK_URL = 'instagram_permalink_url';
  const INSTAGRAM_STORY_ID = 'instagram_story_id';
  const LINK_OG_ID = 'link_og_id';
  const LINK_URL = 'link_url';
  const NAME = 'name';
  const OBJECT_ID = 'object_id';
  const OBJECT_STORY_ID = 'object_story_id';
  const OBJECT_STORY_SPEC = 'object_story_spec';
  const OBJECT_TYPE = 'object_type';
  const OBJECT_URL = 'object_url';
  const PLATFORM_CUSTOMIZATIONS = 'platform_customizations';
  const PRODUCT_SET_ID = 'product_set_id';
  const STATUS = 'status';
  const TEMPLATE_URL = 'template_url';
  const TEMPLATE_URL_SPEC = 'template_url_spec';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TITLE = 'title';
  const URL_TAGS = 'url_tags';
  const USE_PAGE_ACTOR_OVERRIDE = 'use_page_actor_override';
  const VIDEO_ID = 'video_id';
  const CALL_TO_ACTION = 'call_to_action';
  const DYNAMIC_AD_VOICE = 'dynamic_ad_voice';
  const IMAGE_FILE = 'image_file';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'actor_id' => 'string',
      'adlabels' => 'list<AdLabel>',
      'applink_treatment' => 'ApplinkTreatment',
      'body' => 'string',
      'call_to_action_type' => 'CallToActionType',
      'effective_instagram_story_id' => 'string',
      'effective_object_story_id' => 'string',
      'id' => 'string',
      'image_crops' => 'AdsImageCrops',
      'image_hash' => 'string',
      'image_url' => 'string',
      'instagram_actor_id' => 'string',
      'instagram_permalink_url' => 'string',
      'instagram_story_id' => 'string',
      'link_og_id' => 'string',
      'link_url' => 'string',
      'name' => 'string',
      'object_id' => 'string',
      'object_story_id' => 'string',
      'object_story_spec' => 'AdCreativeObjectStorySpec',
      'object_type' => 'ObjectType',
      'object_url' => 'string',
      'platform_customizations' => 'Object',
      'product_set_id' => 'string',
      'status' => 'Status',
      'template_url' => 'string',
      'template_url_spec' => 'Object',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'url_tags' => 'string',
      'use_page_actor_override' => 'bool',
      'video_id' => 'string',
      'call_to_action' => 'Object',
      'dynamic_ad_voice' => 'DynamicAdVoice',
      'image_file' => 'string',
    );
  }
}
