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

class AdAssetFeedSpecFields extends AbstractEnum {

  const AD_FORMATS = 'ad_formats';
  const ADDITIONAL_DATA = 'additional_data';
  const APP_PRODUCT_PAGE_ID = 'app_product_page_id';
  const ASSET_CUSTOMIZATION_RULES = 'asset_customization_rules';
  const AUTOTRANSLATE = 'autotranslate';
  const BODIES = 'bodies';
  const CALL_TO_ACTION_TYPES = 'call_to_action_types';
  const CALL_TO_ACTIONS = 'call_to_actions';
  const CAPTIONS = 'captions';
  const CAROUSELS = 'carousels';
  const DESCRIPTIONS = 'descriptions';
  const EVENTS = 'events';
  const GROUPS = 'groups';
  const IMAGES = 'images';
  const LINK_URLS = 'link_urls';
  const OPTIMIZATION_TYPE = 'optimization_type';
  const TITLES = 'titles';
  const VIDEOS = 'videos';

  public function getFieldTypes() {
    return array(
      'ad_formats' => 'list<string>',
      'additional_data' => 'Object',
      'app_product_page_id' => 'string',
      'asset_customization_rules' => 'list<Object>',
      'autotranslate' => 'list<string>',
      'bodies' => 'list<AdAssetFeedSpecBody>',
      'call_to_action_types' => 'list<CallToActionTypes>',
      'call_to_actions' => 'list<Object>',
      'captions' => 'list<AdAssetFeedSpecCaption>',
      'carousels' => 'list<Object>',
      'descriptions' => 'list<AdAssetFeedSpecDescription>',
      'events' => 'list<Object>',
      'groups' => 'list<AdAssetFeedSpecGroupRule>',
      'images' => 'list<AdAssetFeedSpecImage>',
      'link_urls' => 'list<AdAssetFeedSpecLinkURL>',
      'optimization_type' => 'string',
      'titles' => 'list<AdAssetFeedSpecTitle>',
      'videos' => 'list<AdAssetFeedSpecVideo>',
    );
  }
}
