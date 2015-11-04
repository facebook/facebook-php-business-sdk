<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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
 * @method static AdCreativeFields getInstance()
 */
class AdCreativeFields extends AbstractEnum {
  const ACTOR_ID = 'actor_id';
  const ACTOR_IMAGE_HASH = 'actor_image_hash';
  const ACTOR_NAME = 'actor_name';
  const ADLABELS = 'adlabels';
  const APPLINK_TREATMENT = 'applink_treatment';
  const BODY = 'body';
  const CALL_TO_ACTION_TYPE = 'call_to_action_type';
  const DYNAMIC_AD_VOICE = 'dynamic_ad_voice';
  const FOLLOW_REDIRECT = 'follow_redirect';
  const ID = 'id';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_FILE = 'image_file';
  const IMAGE_URL = 'image_url';
  const IMAGE_CROPS = 'image_crops';
  const INSTAGRAM_ACTOR_ID = 'instagram_actor_id';
  const INSTAGRAM_PERMALINK_URL = 'instagram_permalink_url';
  const LINK_DEEP_LINK_URL = 'link_deep_link_url';
  const LINK_URL = 'link_url';
  const NAME = 'name';
  const OBJECT_ID = 'object_id';
  const OBJECT_STORY_ID = 'object_story_id';
  const OBJECT_STORY_SPEC = 'object_story_spec';
  const OBJECT_STORE_URL = 'object_store_url';
  const OBJECT_TYPE = 'object_type';
  const OBJECT_URL = 'object_url';
  const PLACE_PAGE_SET_ID = 'place_page_set_id';
  const PREVIEW_URL = 'preview_url';
  const PRODUCT_SET_ID = 'product_set_id';
  const RUN_STATUS = 'run_status';
  const TEMPLATE_URL = 'template_url';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TITLE = 'title';
  const URL_TAGS = 'url_tags';
  const VIDEO_ID = 'video_id';
}
