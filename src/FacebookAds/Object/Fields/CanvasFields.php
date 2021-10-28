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

class CanvasFields extends AbstractEnum {

  const BACKGROUND_COLOR = 'background_color';
  const BODY_ELEMENTS = 'body_elements';
  const BUSINESS_ID = 'business_id';
  const CANVAS_LINK = 'canvas_link';
  const COLLECTION_HERO_IMAGE = 'collection_hero_image';
  const COLLECTION_HERO_VIDEO = 'collection_hero_video';
  const COLLECTION_THUMBNAILS = 'collection_thumbnails';
  const ELEMENT_PAYLOAD = 'element_payload';
  const ELEMENTS = 'elements';
  const FB_BODY_ELEMENTS = 'fb_body_elements';
  const ID = 'id';
  const IS_HIDDEN = 'is_hidden';
  const IS_PUBLISHED = 'is_published';
  const LAST_EDITOR = 'last_editor';
  const LINKED_DOCUMENTS = 'linked_documents';
  const NAME = 'name';
  const OWNER = 'owner';
  const PROPERTY_LIST = 'property_list';
  const SOURCE_TEMPLATE = 'source_template';
  const STORE_URL = 'store_url';
  const STYLE_LIST = 'style_list';
  const TAGS = 'tags';
  const UI_PROPERTY_LIST = 'ui_property_list';
  const UNUSED_BODY_ELEMENTS = 'unused_body_elements';
  const UPDATE_TIME = 'update_time';
  const USE_RETAILER_ITEM_IDS = 'use_retailer_item_ids';

  public function getFieldTypes() {
    return array(
      'background_color' => 'string',
      'body_elements' => 'list<Object>',
      'business_id' => 'string',
      'canvas_link' => 'string',
      'collection_hero_image' => 'Photo',
      'collection_hero_video' => 'AdVideo',
      'collection_thumbnails' => 'list<CanvasCollectionThumbnail>',
      'element_payload' => 'string',
      'elements' => 'list<RichMediaElement>',
      'fb_body_elements' => 'list<Object>',
      'id' => 'string',
      'is_hidden' => 'bool',
      'is_published' => 'bool',
      'last_editor' => 'User',
      'linked_documents' => 'list<Canvas>',
      'name' => 'string',
      'owner' => 'Page',
      'property_list' => 'list<string>',
      'source_template' => 'CanvasTemplate',
      'store_url' => 'string',
      'style_list' => 'list<string>',
      'tags' => 'list<string>',
      'ui_property_list' => 'list<string>',
      'unused_body_elements' => 'list<Object>',
      'update_time' => 'int',
      'use_retailer_item_ids' => 'bool',
    );
  }
}
