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

class ProductCatalogProductsPostFields extends AbstractEnum {

  const ADDITIONAL_IMAGE_CDN_URLS = 'additional_image_cdn_urls';
  const ADDITIONAL_IMAGE_URLS = 'additional_image_urls';
  const ADDITIONAL_VARIANT_ATTRIBUTES = 'additional_variant_attributes';
  const AGE_GROUP = 'age_group';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const AVAILABLE_QUANTITY_TO_SELL_ON_FACEBOOK = 'available_quantity_to_sell_on_facebook';
  const BASE_COMMISSION_RATE = 'base_commission_rate';
  const BRAND = 'brand';
  const CAPABILITIES_DISABLED_BY_USER = 'capabilities_disabled_by_user';
  const CAPABILITY_FEATURES = 'capability_features';
  const CAPABILITY_TO_REVIEW_STATUS = 'capability_to_review_status';
  const CATEGORY = 'category';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CHANNELS_TO_INTEGRITY_STATUS = 'channels_to_integrity_status';
  const COLOR = 'color';
  const COMMERCE_INSIGHTS = 'commerce_insights';
  const CONDITION = 'condition';
  const CURRENCY = 'currency';
  const CUSTOM_DATA = 'custom_data';
  const CUSTOM_LABEL_0 = 'custom_label_0';
  const CUSTOM_LABEL_1 = 'custom_label_1';
  const CUSTOM_LABEL_2 = 'custom_label_2';
  const CUSTOM_LABEL_3 = 'custom_label_3';
  const CUSTOM_LABEL_4 = 'custom_label_4';
  const CUSTOM_NUMBER_0 = 'custom_number_0';
  const CUSTOM_NUMBER_1 = 'custom_number_1';
  const CUSTOM_NUMBER_2 = 'custom_number_2';
  const CUSTOM_NUMBER_3 = 'custom_number_3';
  const CUSTOM_NUMBER_4 = 'custom_number_4';
  const DA_DISPLAY_PREVIEW_URL = 'da_display_preview_url';
  const DESCRIPTION = 'description';
  const ENABLED_CAPABILITY_TO_REVIEW_STATUS = 'enabled_capability_to_review_status';
  const ERRORS = 'errors';
  const EXPIRATION_DATE = 'expiration_date';
  const FB_PRODUCT_CATEGORY = 'fb_product_category';
  const GENDER = 'gender';
  const GTIN = 'gtin';
  const ID = 'id';
  const IMAGE_CDN_URLS = 'image_cdn_urls';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGE_URL = 'image_url';
  const IMAGES = 'images';
  const IMPORTER_NAME = 'importer_name';
  const INVALIDATION_ERRORS = 'invalidation_errors';
  const INVENTORY = 'inventory';
  const IS_BUNDLE_HERO = 'is_bundle_hero';
  const MANUFACTURER_INFO = 'manufacturer_info';
  const MANUFACTURER_PART_NUMBER = 'manufacturer_part_number';
  const MATERIAL = 'material';
  const MOBILE_LINK = 'mobile_link';
  const NAME = 'name';
  const ORDERING_INDEX = 'ordering_index';
  const ORIGIN_COUNTRY = 'origin_country';
  const OVERRIDE_DETAILS = 'override_details';
  const PATTERN = 'pattern';
  const POST_CONVERSION_SIGNAL_BASED_ENFORCEMENT_APPEAL_ELIGIBILITY = 'post_conversion_signal_based_enforcement_appeal_eligibility';
  const PRICE = 'price';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_FEED = 'product_feed';
  const PRODUCT_GROUP = 'product_group';
  const PRODUCT_PRIORITY_0 = 'product_priority_0';
  const PRODUCT_PRIORITY_1 = 'product_priority_1';
  const PRODUCT_PRIORITY_2 = 'product_priority_2';
  const PRODUCT_PRIORITY_3 = 'product_priority_3';
  const PRODUCT_PRIORITY_4 = 'product_priority_4';
  const PRODUCT_RELATIONSHIP = 'product_relationship';
  const PRODUCT_SETS = 'product_sets';
  const PRODUCT_TYPE = 'product_type';
  const QUANTITY_TO_SELL_ON_FACEBOOK = 'quantity_to_sell_on_facebook';
  const RETAILER_ID = 'retailer_id';
  const RETAILER_PRODUCT_GROUP_ID = 'retailer_product_group_id';
  const REVIEW_REJECTION_REASONS = 'review_rejection_reasons';
  const REVIEW_STATUS = 'review_status';
  const RICH_TEXT_DESCRIPTION = 'rich_text_description';
  const SALE_PRICE = 'sale_price';
  const SALE_PRICE_END_DATE = 'sale_price_end_date';
  const SALE_PRICE_START_DATE = 'sale_price_start_date';
  const SHIPPING_WEIGHT_UNIT = 'shipping_weight_unit';
  const SHIPPING_WEIGHT_VALUE = 'shipping_weight_value';
  const SHORT_DESCRIPTION = 'short_description';
  const SIZE = 'size';
  const STATUS = 'status';
  const TAGS = 'tags';
  const URL = 'url';
  const VALIDATION_ERRORS = 'validation_errors';
  const VENDOR_ID = 'vendor_id';
  const VIDEO_FETCH_STATUS = 'video_fetch_status';
  const VIDEOS = 'videos';
  const VIDEOS_METADATA = 'videos_metadata';
  const VISIBILITY = 'visibility';
  const WA_COMPLIANCE_CATEGORY = 'wa_compliance_category';

  public function getFieldTypes() {
    return array(
      'additional_image_cdn_urls' => 'list<list<object>>',
      'additional_image_urls' => 'list<string>',
      'additional_variant_attributes' => 'list<object>',
      'age_group' => 'AgeGroup',
      'applinks' => 'object',
      'availability' => 'Availability',
      'available_quantity_to_sell_on_facebook' => 'int',
      'base_commission_rate' => 'int',
      'brand' => 'string',
      'capabilities_disabled_by_user' => 'list<string>',
      'capability_features' => 'list<string>',
      'capability_to_review_status' => 'list<object>',
      'category' => 'string',
      'category_specific_fields' => 'map<mixed, mixed>',
      'channels_to_integrity_status' => 'object',
      'color' => 'string',
      'commerce_insights' => 'object',
      'condition' => 'Condition',
      'currency' => 'string',
      'custom_data' => 'list<object>',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_number_0' => 'string',
      'custom_number_1' => 'string',
      'custom_number_2' => 'string',
      'custom_number_3' => 'string',
      'custom_number_4' => 'string',
      'da_display_preview_url' => 'string',
      'description' => 'string',
      'enabled_capability_to_review_status' => 'list<object>',
      'errors' => 'list<object>',
      'expiration_date' => 'string',
      'fb_product_category' => 'string',
      'gender' => 'Gender',
      'gtin' => 'string',
      'id' => 'int',
      'image_cdn_urls' => 'list<object>',
      'image_fetch_status' => 'string',
      'image_url' => 'string',
      'images' => 'list<string>',
      'importer_name' => 'string',
      'invalidation_errors' => 'list<object>',
      'inventory' => 'int',
      'is_bundle_hero' => 'bool',
      'manufacturer_info' => 'string',
      'manufacturer_part_number' => 'string',
      'material' => 'string',
      'mobile_link' => 'string',
      'name' => 'string',
      'ordering_index' => 'int',
      'origin_country' => 'string',
      'override_details' => 'object',
      'pattern' => 'string',
      'post_conversion_signal_based_enforcement_appeal_eligibility' => 'bool',
      'price' => 'string',
      'product_catalog' => 'object',
      'product_feed' => 'object',
      'product_group' => 'object',
      'product_priority_0' => 'float',
      'product_priority_1' => 'float',
      'product_priority_2' => 'float',
      'product_priority_3' => 'float',
      'product_priority_4' => 'float',
      'product_relationship' => 'string',
      'product_sets' => 'object',
      'product_type' => 'string',
      'quantity_to_sell_on_facebook' => 'int',
      'retailer_id' => 'string',
      'retailer_product_group_id' => 'string',
      'review_rejection_reasons' => 'list<string>',
      'review_status' => 'string',
      'rich_text_description' => 'string',
      'sale_price' => 'string',
      'sale_price_end_date' => 'string',
      'sale_price_start_date' => 'string',
      'shipping_weight_unit' => 'string',
      'shipping_weight_value' => 'float',
      'short_description' => 'string',
      'size' => 'string',
      'status' => 'string',
      'tags' => 'list<string>',
      'url' => 'string',
      'validation_errors' => 'object',
      'vendor_id' => 'string',
      'video_fetch_status' => 'string',
      'videos' => 'list<object>',
      'videos_metadata' => 'object',
      'visibility' => 'string',
      'wa_compliance_category' => 'string',
    );
  }
}
