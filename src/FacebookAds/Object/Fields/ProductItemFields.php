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

class ProductItemFields extends AbstractEnum {

  const ADDITIONAL_IMAGE_CDN_URLS = 'additional_image_cdn_urls';
  const ADDITIONAL_IMAGE_URLS = 'additional_image_urls';
  const ADDITIONAL_VARIANT_ATTRIBUTES = 'additional_variant_attributes';
  const AGE_GROUP = 'age_group';
  const APPLINKS = 'applinks';
  const AR_DATA = 'ar_data';
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
  const DESCRIPTION = 'description';
  const EXPIRATION_DATE = 'expiration_date';
  const FB_PRODUCT_CATEGORY = 'fb_product_category';
  const GENDER = 'gender';
  const GTIN = 'gtin';
  const ID = 'id';
  const IMAGE_CDN_URLS = 'image_cdn_urls';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGE_URL = 'image_url';
  const IMAGES = 'images';
  const INVALIDATION_ERRORS = 'invalidation_errors';
  const INVENTORY = 'inventory';
  const MANUFACTURER_PART_NUMBER = 'manufacturer_part_number';
  const MARKED_FOR_PRODUCT_LAUNCH = 'marked_for_product_launch';
  const MATERIAL = 'material';
  const MOBILE_LINK = 'mobile_link';
  const NAME = 'name';
  const ORDERING_INDEX = 'ordering_index';
  const PARENT_PRODUCT_ID = 'parent_product_id';
  const PATTERN = 'pattern';
  const PRICE = 'price';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_FEED = 'product_feed';
  const PRODUCT_GROUP = 'product_group';
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
  const URL = 'url';
  const VISIBILITY = 'visibility';
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
  const OFFER_PRICE_AMOUNT = 'offer_price_amount';
  const OFFER_PRICE_END_DATE = 'offer_price_end_date';
  const OFFER_PRICE_START_DATE = 'offer_price_start_date';
  const RETURN_POLICY_DAYS = 'return_policy_days';
  const WINDOWS_PHONE_APP_ID = 'windows_phone_app_id';
  const WINDOWS_PHONE_APP_NAME = 'windows_phone_app_name';
  const WINDOWS_PHONE_URL = 'windows_phone_url';

  public function getFieldTypes() {
    return array(
      'additional_image_cdn_urls' => 'list<map<string, string>>',
      'additional_image_urls' => 'list<string>',
      'additional_variant_attributes' => 'map<string, string>',
      'age_group' => 'AgeGroup',
      'applinks' => 'CatalogItemAppLinks',
      'ar_data' => 'ProductItemARData',
      'availability' => 'Availability',
      'brand' => 'string',
      'capability_to_review_status' => 'map<Object, Object>',
      'category' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'color' => 'string',
      'commerce_insights' => 'ProductItemCommerceInsights',
      'condition' => 'Condition',
      'currency' => 'string',
      'custom_data' => 'map<string, string>',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'description' => 'string',
      'expiration_date' => 'string',
      'fb_product_category' => 'string',
      'gender' => 'Gender',
      'gtin' => 'string',
      'id' => 'string',
      'image_cdn_urls' => 'map<string, string>',
      'image_fetch_status' => 'ImageFetchStatus',
      'image_url' => 'string',
      'images' => 'list<string>',
      'invalidation_errors' => 'list<Object>',
      'inventory' => 'int',
      'manufacturer_part_number' => 'string',
      'marked_for_product_launch' => 'string',
      'material' => 'string',
      'mobile_link' => 'string',
      'name' => 'string',
      'ordering_index' => 'int',
      'parent_product_id' => 'string',
      'pattern' => 'string',
      'price' => 'string',
      'product_catalog' => 'ProductCatalog',
      'product_feed' => 'ProductFeed',
      'product_group' => 'ProductGroup',
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
      'url' => 'string',
      'visibility' => 'Visibility',
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
      'offer_price_amount' => 'unsigned int',
      'offer_price_end_date' => 'datetime',
      'offer_price_start_date' => 'datetime',
      'return_policy_days' => 'unsigned int',
      'windows_phone_app_id' => 'string',
      'windows_phone_app_name' => 'string',
      'windows_phone_url' => 'string',
    );
  }
}
