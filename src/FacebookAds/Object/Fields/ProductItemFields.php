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

class ProductItemFields extends AbstractEnum {

  const ADDITIONAL_IMAGE_CDN_URLS = 'additional_image_cdn_urls';
  const ADDITIONAL_IMAGE_URLS = 'additional_image_urls';
  const ADDITIONAL_VARIANT_ATTRIBUTES = 'additional_variant_attributes';
  const AGE_GROUP = 'age_group';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const BRAND = 'brand';
  const CAPABILITY_TO_REVIEW_STATUS = 'capability_to_review_status';
  const CATEGORY = 'category';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
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
  const DESCRIPTION = 'description';
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
  const IMPORTER_ADDRESS = 'importer_address';
  const IMPORTER_NAME = 'importer_name';
  const INVALIDATION_ERRORS = 'invalidation_errors';
  const INVENTORY = 'inventory';
  const MANUFACTURER_INFO = 'manufacturer_info';
  const MANUFACTURER_PART_NUMBER = 'manufacturer_part_number';
  const MARKED_FOR_PRODUCT_LAUNCH = 'marked_for_product_launch';
  const MATERIAL = 'material';
  const MOBILE_LINK = 'mobile_link';
  const NAME = 'name';
  const ORDERING_INDEX = 'ordering_index';
  const ORIGIN_COUNTRY = 'origin_country';
  const PARENT_PRODUCT_ID = 'parent_product_id';
  const PATTERN = 'pattern';
  const POST_CONVERSION_SIGNAL_BASED_ENFORCEMENT_APPEAL_ELIGIBILITY = 'post_conversion_signal_based_enforcement_appeal_eligibility';
  const PRICE = 'price';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_FEED = 'product_feed';
  const PRODUCT_GROUP = 'product_group';
  const PRODUCT_LOCAL_INFO = 'product_local_info';
  const PRODUCT_TYPE = 'product_type';
  const QUANTITY_TO_SELL_ON_FACEBOOK = 'quantity_to_sell_on_facebook';
  const RETAILER_ID = 'retailer_id';
  const RETAILER_PRODUCT_GROUP_ID = 'retailer_product_group_id';
  const REVIEW_REJECTION_REASONS = 'review_rejection_reasons';
  const REVIEW_STATUS = 'review_status';
  const SALE_PRICE = 'sale_price';
  const SALE_PRICE_END_DATE = 'sale_price_end_date';
  const SALE_PRICE_START_DATE = 'sale_price_start_date';
  const SHIPPING_WEIGHT_UNIT = 'shipping_weight_unit';
  const SHIPPING_WEIGHT_VALUE = 'shipping_weight_value';
  const SHORT_DESCRIPTION = 'short_description';
  const SIZE = 'size';
  const START_DATE = 'start_date';
  const TAGS = 'tags';
  const URL = 'url';
  const VIDEO_FETCH_STATUS = 'video_fetch_status';
  const VISIBILITY = 'visibility';
  const WA_COMPLIANCE_CATEGORY = 'wa_compliance_category';
  const ADDITIONAL_UPLOADED_IMAGE_IDS = 'additional_uploaded_image_ids';
  const ANDROID_APP_NAME = 'android_app_name';
  const ANDROID_CLASS = 'android_class';
  const ANDROID_PACKAGE = 'android_package';
  const ANDROID_URL = 'android_url';
  const CHECKOUT_URL = 'checkout_url';
  const COMMERCE_TAX_CATEGORY = 'commerce_tax_category';
  const IOS_APP_NAME = 'ios_app_name';
  const IOS_APP_STORE_ID = 'ios_app_store_id';
  const IOS_URL = 'ios_url';
  const IPAD_APP_NAME = 'ipad_app_name';
  const IPAD_APP_STORE_ID = 'ipad_app_store_id';
  const IPAD_URL = 'ipad_url';
  const IPHONE_APP_NAME = 'iphone_app_name';
  const IPHONE_APP_STORE_ID = 'iphone_app_store_id';
  const IPHONE_URL = 'iphone_url';
  const LAUNCH_DATE = 'launch_date';
  const RETURN_POLICY_DAYS = 'return_policy_days';
  const WINDOWS_PHONE_APP_ID = 'windows_phone_app_id';
  const WINDOWS_PHONE_APP_NAME = 'windows_phone_app_name';
  const WINDOWS_PHONE_URL = 'windows_phone_url';

  public function getFieldTypes() {
    return array(
      'additional_image_cdn_urls' => 'list<list<map<string, string>>>',
      'additional_image_urls' => 'list<string>',
      'additional_variant_attributes' => 'list<map<string, string>>',
      'age_group' => 'AgeGroup',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'Availability',
      'brand' => 'string',
      'capability_to_review_status' => 'list<map<Object, Object>>',
      'category' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'color' => 'string',
      'commerce_insights' => 'ProductItemCommerceInsights',
      'condition' => 'Condition',
      'currency' => 'string',
      'custom_data' => 'list<map<string, string>>',
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
      'description' => 'string',
      'errors' => 'list<ProductItemError>',
      'expiration_date' => 'string',
      'fb_product_category' => 'string',
      'gender' => 'Gender',
      'gtin' => 'string',
      'id' => 'string',
      'image_cdn_urls' => 'list<map<string, string>>',
      'image_fetch_status' => 'ImageFetchStatus',
      'image_url' => 'string',
      'images' => 'list<string>',
      'importer_address' => 'ProductItemImporterAddress',
      'importer_name' => 'string',
      'invalidation_errors' => 'list<Object>',
      'inventory' => 'int',
      'manufacturer_info' => 'string',
      'manufacturer_part_number' => 'string',
      'marked_for_product_launch' => 'string',
      'material' => 'string',
      'mobile_link' => 'string',
      'name' => 'string',
      'ordering_index' => 'int',
      'origin_country' => 'string',
      'parent_product_id' => 'string',
      'pattern' => 'string',
      'post_conversion_signal_based_enforcement_appeal_eligibility' => 'bool',
      'price' => 'string',
      'product_catalog' => 'ProductCatalog',
      'product_feed' => 'ProductFeed',
      'product_group' => 'ProductGroup',
      'product_local_info' => 'ProductItemLocalInfo',
      'product_type' => 'string',
      'quantity_to_sell_on_facebook' => 'int',
      'retailer_id' => 'string',
      'retailer_product_group_id' => 'string',
      'review_rejection_reasons' => 'list<string>',
      'review_status' => 'ReviewStatus',
      'sale_price' => 'string',
      'sale_price_end_date' => 'string',
      'sale_price_start_date' => 'string',
      'shipping_weight_unit' => 'ShippingWeightUnit',
      'shipping_weight_value' => 'float',
      'short_description' => 'string',
      'size' => 'string',
      'start_date' => 'string',
      'tags' => 'list<string>',
      'url' => 'string',
      'video_fetch_status' => 'VideoFetchStatus',
      'visibility' => 'Visibility',
      'wa_compliance_category' => 'string',
      'additional_uploaded_image_ids' => 'list<string>',
      'android_app_name' => 'string',
      'android_class' => 'string',
      'android_package' => 'string',
      'android_url' => 'string',
      'checkout_url' => 'string',
      'commerce_tax_category' => 'CommerceTaxCategory',
      'ios_app_name' => 'string',
      'ios_app_store_id' => 'unsigned int',
      'ios_url' => 'string',
      'ipad_app_name' => 'string',
      'ipad_app_store_id' => 'unsigned int',
      'ipad_url' => 'string',
      'iphone_app_name' => 'string',
      'iphone_app_store_id' => 'unsigned int',
      'iphone_url' => 'string',
      'launch_date' => 'string',
      'return_policy_days' => 'unsigned int',
      'windows_phone_app_id' => 'string',
      'windows_phone_app_name' => 'string',
      'windows_phone_url' => 'string',
    );
  }
}
