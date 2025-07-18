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
  const AUDIOS = 'audios';
  const AUTOTRANSLATE = 'autotranslate';
  const BODIES = 'bodies';
  const CALL_ADS_CONFIGURATION = 'call_ads_configuration';
  const CALL_TO_ACTION_TYPES = 'call_to_action_types';
  const CALL_TO_ACTIONS = 'call_to_actions';
  const CAPTIONS = 'captions';
  const CAROUSELS = 'carousels';
  const CTWA_CONSENT_DATA = 'ctwa_consent_data';
  const DESCRIPTIONS = 'descriptions';
  const EVENTS = 'events';
  const GROUPS = 'groups';
  const IMAGES = 'images';
  const LINK_URLS = 'link_urls';
  const MESSAGE_EXTENSIONS = 'message_extensions';
  const ONSITE_DESTINATIONS = 'onsite_destinations';
  const OPTIMIZATION_TYPE = 'optimization_type';
  const PROMOTIONAL_METADATA = 'promotional_metadata';
  const REASONS_TO_SHOP = 'reasons_to_shop';
  const SHOPS_BUNDLE = 'shops_bundle';
  const TITLES = 'titles';
  const TRANSLATIONS = 'translations';
  const UPCOMING_EVENTS = 'upcoming_events';
  const VIDEOS = 'videos';

  public function getFieldTypes() {
    return array(
      'ad_formats' => 'list<string>',
      'additional_data' => 'AdAssetFeedAdditionalData',
      'app_product_page_id' => 'string',
      'asset_customization_rules' => 'list<AdAssetFeedSpecAssetCustomizationRule>',
      'audios' => 'list<Object>',
      'autotranslate' => 'list<string>',
      'bodies' => 'list<AdAssetFeedSpecBody>',
      'call_ads_configuration' => 'Object',
      'call_to_action_types' => 'list<CallToActionTypes>',
      'call_to_actions' => 'list<AdAssetFeedSpecCallToAction>',
      'captions' => 'list<AdAssetFeedSpecCaption>',
      'carousels' => 'list<AdAssetFeedSpecCarousel>',
      'ctwa_consent_data' => 'list<Object>',
      'descriptions' => 'list<AdAssetFeedSpecDescription>',
      'events' => 'list<AdAssetFeedSpecEvents>',
      'groups' => 'list<AdAssetFeedSpecGroupRule>',
      'images' => 'list<AdAssetFeedSpecImage>',
      'link_urls' => 'list<AdAssetFeedSpecLinkURL>',
      'message_extensions' => 'list<AdAssetMessageExtensions>',
      'onsite_destinations' => 'list<AdAssetOnsiteDestinations>',
      'optimization_type' => 'string',
      'promotional_metadata' => 'Object',
      'reasons_to_shop' => 'bool',
      'shops_bundle' => 'bool',
      'titles' => 'list<AdAssetFeedSpecTitle>',
      'translations' => 'list<Object>',
      'upcoming_events' => 'list<Object>',
      'videos' => 'list<AdAssetFeedSpecVideo>',
    );
  }
}
