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

class AdCreativeVideoDataFields extends AbstractEnum {

  const ADDITIONAL_IMAGE_INDEX = 'additional_image_index';
  const BRANDED_CONTENT_SHARED_TO_SPONSOR_STATUS = 'branded_content_shared_to_sponsor_status';
  const BRANDED_CONTENT_SPONSOR_PAGE_ID = 'branded_content_sponsor_page_id';
  const CALL_TO_ACTION = 'call_to_action';
  const COLLECTION_THUMBNAILS = 'collection_thumbnails';
  const CUSTOMIZATION_RULES_SPEC = 'customization_rules_spec';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_URL = 'image_url';
  const LINK_DESCRIPTION = 'link_description';
  const MESSAGE = 'message';
  const OFFER_ID = 'offer_id';
  const PAGE_WELCOME_MESSAGE = 'page_welcome_message';
  const POST_CLICK_CONFIGURATION = 'post_click_configuration';
  const RETAILER_ITEM_IDS = 'retailer_item_ids';
  const TARGETING = 'targeting';
  const TITLE = 'title';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'additional_image_index' => 'int',
      'branded_content_shared_to_sponsor_status' => 'string',
      'branded_content_sponsor_page_id' => 'string',
      'call_to_action' => 'AdCreativeLinkDataCallToAction',
      'collection_thumbnails' => 'list<AdCreativeCollectionThumbnailInfo>',
      'customization_rules_spec' => 'list<AdCustomizationRuleSpec>',
      'image_hash' => 'string',
      'image_url' => 'string',
      'link_description' => 'string',
      'message' => 'string',
      'offer_id' => 'string',
      'page_welcome_message' => 'string',
      'post_click_configuration' => 'AdCreativePostClickConfiguration',
      'retailer_item_ids' => 'list<string>',
      'targeting' => 'Targeting',
      'title' => 'string',
      'video_id' => 'string',
    );
  }
}
