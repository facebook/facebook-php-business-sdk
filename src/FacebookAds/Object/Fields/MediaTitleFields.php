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

class MediaTitleFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CONTENT_CATEGORY = 'content_category';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const FB_PAGE_ALIAS = 'fb_page_alias';
  const FB_PAGE_ID = 'fb_page_id';
  const GENRES = 'genres';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const KG_FB_ID = 'kg_fb_id';
  const MEDIA_TITLE_ID = 'media_title_id';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TITLE = 'title';
  const TITLE_DISPLAY_NAME = 'title_display_name';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VISIBILITY = 'visibility';
  const WIKI_DATA_ITEM = 'wiki_data_item';

  public function getFieldTypes() {
    return array(
      'applinks' => 'CatalogItemAppLinks',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'content_category' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'fb_page_alias' => 'string',
      'fb_page_id' => 'Page',
      'genres' => 'list<string>',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'kg_fb_id' => 'string',
      'media_title_id' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'title' => 'string',
      'title_display_name' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
      'visibility' => 'Visibility',
      'wiki_data_item' => 'string',
    );
  }
}
