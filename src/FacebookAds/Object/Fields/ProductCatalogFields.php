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

class ProductCatalogFields extends AbstractEnum {

  const AD_ACCOUNT_TO_COLLABORATIVE_ADS_SHARE_SETTINGS = 'ad_account_to_collaborative_ads_share_settings';
  const AGENCY_COLLABORATIVE_ADS_SHARE_SETTINGS = 'agency_collaborative_ads_share_settings';
  const BUSINESS = 'business';
  const CATALOG_STORE = 'catalog_store';
  const COMMERCE_MERCHANT_SETTINGS = 'commerce_merchant_settings';
  const CREATOR_USER = 'creator_user';
  const DA_DISPLAY_SETTINGS = 'da_display_settings';
  const DEFAULT_IMAGE_URL = 'default_image_url';
  const FALLBACK_IMAGE_URL = 'fallback_image_url';
  const FEED_COUNT = 'feed_count';
  const ID = 'id';
  const IS_CATALOG_SEGMENT = 'is_catalog_segment';
  const IS_LOCAL_CATALOG = 'is_local_catalog';
  const NAME = 'name';
  const OWNER_BUSINESS = 'owner_business';
  const PRODUCT_COUNT = 'product_count';
  const STORE_CATALOG_SETTINGS = 'store_catalog_settings';
  const USER_ACCESS_EXPIRE_TIME = 'user_access_expire_time';
  const VERTICAL = 'vertical';
  const ADDITIONAL_VERTICAL_OPTION = 'additional_vertical_option';
  const CATALOG_SEGMENT_FILTER = 'catalog_segment_filter';
  const CATALOG_SEGMENT_PRODUCT_SET_ID = 'catalog_segment_product_set_id';
  const DESTINATION_CATALOG_SETTINGS = 'destination_catalog_settings';
  const FLIGHT_CATALOG_SETTINGS = 'flight_catalog_settings';
  const PARENT_CATALOG_ID = 'parent_catalog_id';
  const PARTNER_INTEGRATION = 'partner_integration';

  public function getFieldTypes() {
    return array(
      'ad_account_to_collaborative_ads_share_settings' => 'CollaborativeAdsShareSettings',
      'agency_collaborative_ads_share_settings' => 'CollaborativeAdsShareSettings',
      'business' => 'Business',
      'catalog_store' => 'StoreCatalogSettings',
      'commerce_merchant_settings' => 'CommerceMerchantSettings',
      'creator_user' => 'User',
      'da_display_settings' => 'ProductCatalogImageSettings',
      'default_image_url' => 'string',
      'fallback_image_url' => 'list<string>',
      'feed_count' => 'int',
      'id' => 'string',
      'is_catalog_segment' => 'bool',
      'is_local_catalog' => 'bool',
      'name' => 'string',
      'owner_business' => 'Business',
      'product_count' => 'int',
      'store_catalog_settings' => 'StoreCatalogSettings',
      'user_access_expire_time' => 'datetime',
      'vertical' => 'string',
      'additional_vertical_option' => 'AdditionalVerticalOption',
      'catalog_segment_filter' => 'Object',
      'catalog_segment_product_set_id' => 'string',
      'destination_catalog_settings' => 'map',
      'flight_catalog_settings' => 'map',
      'parent_catalog_id' => 'string',
      'partner_integration' => 'map',
    );
  }
}
