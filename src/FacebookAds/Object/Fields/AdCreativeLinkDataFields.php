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

class AdCreativeLinkDataFields extends AbstractEnum {

  const AD_CONTEXT = 'ad_context';
  const ADDITIONAL_IMAGE_INDEX = 'additional_image_index';
  const APP_LINK_SPEC = 'app_link_spec';
  const ATTACHMENT_STYLE = 'attachment_style';
  const BRANDED_CONTENT_SHARED_TO_SPONSOR_STATUS = 'branded_content_shared_to_sponsor_status';
  const BRANDED_CONTENT_SPONSOR_PAGE_ID = 'branded_content_sponsor_page_id';
  const CALL_TO_ACTION = 'call_to_action';
  const CAPTION = 'caption';
  const CHILD_ATTACHMENTS = 'child_attachments';
  const COLLECTION_THUMBNAILS = 'collection_thumbnails';
  const CUSTOMIZATION_RULES_SPEC = 'customization_rules_spec';
  const DESCRIPTION = 'description';
  const EVENT_ID = 'event_id';
  const FORCE_SINGLE_LINK = 'force_single_link';
  const FORMAT_OPTION = 'format_option';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_LAYER_SPECS = 'image_layer_specs';
  const IMAGE_OVERLAY_SPEC = 'image_overlay_spec';
  const LINK = 'link';
  const MESSAGE = 'message';
  const MULTI_SHARE_END_CARD = 'multi_share_end_card';
  const MULTI_SHARE_OPTIMIZED = 'multi_share_optimized';
  const NAME = 'name';
  const OFFER_ID = 'offer_id';
  const PAGE_WELCOME_MESSAGE = 'page_welcome_message';
  const PICTURE = 'picture';
  const POST_CLICK_CONFIGURATION = 'post_click_configuration';
  const PREFERRED_IMAGE_TAGS = 'preferred_image_tags';
  const RETAILER_ITEM_IDS = 'retailer_item_ids';
  const SHOW_MULTIPLE_IMAGES = 'show_multiple_images';
  const STATIC_FALLBACK_SPEC = 'static_fallback_spec';
  const USE_FLEXIBLE_IMAGE_ASPECT_RATIO = 'use_flexible_image_aspect_ratio';

  public function getFieldTypes() {
    return array(
      'ad_context' => 'string',
      'additional_image_index' => 'int',
      'app_link_spec' => 'AdCreativeLinkDataAppLinkSpec',
      'attachment_style' => 'AttachmentStyle',
      'branded_content_shared_to_sponsor_status' => 'string',
      'branded_content_sponsor_page_id' => 'string',
      'call_to_action' => 'AdCreativeLinkDataCallToAction',
      'caption' => 'string',
      'child_attachments' => 'list<AdCreativeLinkDataChildAttachment>',
      'collection_thumbnails' => 'list<AdCreativeCollectionThumbnailInfo>',
      'customization_rules_spec' => 'list<AdCustomizationRuleSpec>',
      'description' => 'string',
      'event_id' => 'string',
      'force_single_link' => 'bool',
      'format_option' => 'FormatOption',
      'image_crops' => 'AdsImageCrops',
      'image_hash' => 'string',
      'image_layer_specs' => 'list<AdCreativeLinkDataImageLayerSpec>',
      'image_overlay_spec' => 'AdCreativeLinkDataImageOverlaySpec',
      'link' => 'string',
      'message' => 'string',
      'multi_share_end_card' => 'bool',
      'multi_share_optimized' => 'bool',
      'name' => 'string',
      'offer_id' => 'string',
      'page_welcome_message' => 'string',
      'picture' => 'string',
      'post_click_configuration' => 'AdCreativePostClickConfiguration',
      'preferred_image_tags' => 'list<string>',
      'retailer_item_ids' => 'list<string>',
      'show_multiple_images' => 'bool',
      'static_fallback_spec' => 'AdCreativeStaticFallbackSpec',
      'use_flexible_image_aspect_ratio' => 'bool',
    );
  }
}
