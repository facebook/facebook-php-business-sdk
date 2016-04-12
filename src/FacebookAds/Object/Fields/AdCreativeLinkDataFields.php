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

class AdCreativeLinkDataFields extends AbstractEnum {

  const ADDITIONAL_IMAGE_INDEX = 'additional_image_index';
  const APP_LINK_SPEC = 'app_link_spec';
  const ATTACHMENT_STYLE = 'attachment_style';
  const BRANDED_CONTENT_SPONSOR_PAGE_ID = 'branded_content_sponsor_page_id';
  const CALL_TO_ACTION = 'call_to_action';
  const CANVAS_ENABLED = 'canvas_enabled';
  const CAPTION = 'caption';
  const CHILD_ATTACHMENTS = 'child_attachments';
  const DESCRIPTION = 'description';
  const EVENT_ID = 'event_id';
  const FORCE_SINGLE_LINK = 'force_single_link';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const LINK = 'link';
  const MESSAGE = 'message';
  const MULTI_SHARE_END_CARD = 'multi_share_end_card';
  const MULTI_SHARE_OPTIMIZED = 'multi_share_optimized';
  const NAME = 'name';
  const PICTURE = 'picture';

  public function getFieldTypes() {
    return array(
      'additional_image_index' => 'int',
      'app_link_spec' => 'AdCreativeLinkDataAppLinkSpec',
      'attachment_style' => 'AttachmentStyle',
      'branded_content_sponsor_page_id' => 'string',
      'call_to_action' => 'AdCreativeLinkDataCallToAction',
      'canvas_enabled' => 'bool',
      'caption' => 'string',
      'child_attachments' => 'list<AdCreativeLinkDataChildAttachment>',
      'description' => 'string',
      'event_id' => 'string',
      'force_single_link' => 'bool',
      'image_crops' => 'AdsImageCrops',
      'image_hash' => 'string',
      'link' => 'string',
      'message' => 'string',
      'multi_share_end_card' => 'bool',
      'multi_share_optimized' => 'bool',
      'name' => 'string',
      'picture' => 'string',
    );
  }
}
