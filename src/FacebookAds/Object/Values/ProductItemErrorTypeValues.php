<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static ProductItemErrorTypeValues getInstance()
 */
class ProductItemErrorTypeValues extends AbstractEnum {

  const ADDRESS_BLOCKLISTED_IN_MARKET = 'ADDRESS_BLOCKLISTED_IN_MARKET';
  const AGGREGATED_LOCALIZATION_ISSUES = 'AGGREGATED_LOCALIZATION_ISSUES';
  const APP_HAS_NO_AEM_SETUP = 'APP_HAS_NO_AEM_SETUP';
  const AR_DELETED_DUE_TO_UPDATE = 'AR_DELETED_DUE_TO_UPDATE';
  const AR_POLICY_VIOLATED = 'AR_POLICY_VIOLATED';
  const AVAILABLE = 'AVAILABLE';
  const BAD_QUALITY_IMAGE = 'BAD_QUALITY_IMAGE';
  const BIG_CATALOG_WITH_ALL_ITEMS_IN_STOCK = 'BIG_CATALOG_WITH_ALL_ITEMS_IN_STOCK';
  const BIZ_MSG_AI_AGENT_DISABLED_BY_USER = 'BIZ_MSG_AI_AGENT_DISABLED_BY_USER';
  const BIZ_MSG_GEN_AI_POLICY_VIOLATED = 'BIZ_MSG_GEN_AI_POLICY_VIOLATED';
  const CANNOT_EDIT_SUBSCRIPTION_PRODUCTS = 'CANNOT_EDIT_SUBSCRIPTION_PRODUCTS';
  const CATALOG_NOT_CONNECTED_TO_EVENT_SOURCE = 'CATALOG_NOT_CONNECTED_TO_EVENT_SOURCE';
  const CHECKOUT_DISABLED_BY_USER = 'CHECKOUT_DISABLED_BY_USER';
  const COMMERCE_ACCOUNT_LEGAL_ADDRESS_INVALID = 'COMMERCE_ACCOUNT_LEGAL_ADDRESS_INVALID';
  const COMMERCE_ACCOUNT_NOT_LEGALLY_COMPLIANT = 'COMMERCE_ACCOUNT_NOT_LEGALLY_COMPLIANT';
  const CRAWLED_AVAILABILITY_MISMATCH = 'CRAWLED_AVAILABILITY_MISMATCH';
  const DA_DISABLED_BY_USER = 'DA_DISABLED_BY_USER';
  const DA_POLICY_UNFIT_FOR_AUDIENCE = 'DA_POLICY_UNFIT_FOR_AUDIENCE';
  const DA_POLICY_VIOLATION = 'DA_POLICY_VIOLATION';
  const DELETED_ITEM = 'DELETED_ITEM';
  const DIGITAL_GOODS_NOT_AVAILABLE_FOR_CHECKOUT = 'DIGITAL_GOODS_NOT_AVAILABLE_FOR_CHECKOUT';
  const DUPLICATE_IMAGES = 'DUPLICATE_IMAGES';
  const DUPLICATE_TITLE_AND_DESCRIPTION = 'DUPLICATE_TITLE_AND_DESCRIPTION';
  const EMPTY_AVAILABILITY = 'EMPTY_AVAILABILITY';
  const EMPTY_CONDITION = 'EMPTY_CONDITION';
  const EMPTY_DESCRIPTION = 'EMPTY_DESCRIPTION';
  const EMPTY_IMAGE_URL = 'EMPTY_IMAGE_URL';
  const EMPTY_PRICE = 'EMPTY_PRICE';
  const EMPTY_PRODUCT_URL = 'EMPTY_PRODUCT_URL';
  const EMPTY_SELLER_DESCRIPTION = 'EMPTY_SELLER_DESCRIPTION';
  const EMPTY_TITLE = 'EMPTY_TITLE';
  const EXTERNAL_MERCHANT_ID_MISMATCH = 'EXTERNAL_MERCHANT_ID_MISMATCH';
  const GENERIC_INVALID_FIELD = 'GENERIC_INVALID_FIELD';
  const GROUPS_DISABLED_BY_USER = 'GROUPS_DISABLED_BY_USER';
  const HIDDEN_UNTIL_PRODUCT_LAUNCH = 'HIDDEN_UNTIL_PRODUCT_LAUNCH';
  const ILLEGAL_PRODUCT_CATEGORY = 'ILLEGAL_PRODUCT_CATEGORY';
  const IMAGE_FETCH_FAILED = 'IMAGE_FETCH_FAILED';
  const IMAGE_FETCH_FAILED_BAD_GATEWAY = 'IMAGE_FETCH_FAILED_BAD_GATEWAY';
  const IMAGE_FETCH_FAILED_FILE_SIZE_EXCEEDED = 'IMAGE_FETCH_FAILED_FILE_SIZE_EXCEEDED';
  const IMAGE_FETCH_FAILED_FORBIDDEN = 'IMAGE_FETCH_FAILED_FORBIDDEN';
  const IMAGE_FETCH_FAILED_LINK_BROKEN = 'IMAGE_FETCH_FAILED_LINK_BROKEN';
  const IMAGE_FETCH_FAILED_TIMED_OUT = 'IMAGE_FETCH_FAILED_TIMED_OUT';
  const IMAGE_RESOLUTION_LOW = 'IMAGE_RESOLUTION_LOW';
  const INACTIVE_SHOPIFY_PRODUCT = 'INACTIVE_SHOPIFY_PRODUCT';
  const INVALID_COMMERCE_TAX_CATEGORY = 'INVALID_COMMERCE_TAX_CATEGORY';
  const INVALID_CONSOLIDATED_LOCALITY_INFORMATION = 'INVALID_CONSOLIDATED_LOCALITY_INFORMATION';
  const INVALID_CONTENT_ID = 'INVALID_CONTENT_ID';
  const INVALID_DEALER_COMMUNICATION_PARAMETERS = 'INVALID_DEALER_COMMUNICATION_PARAMETERS';
  const INVALID_DMA_CODES = 'INVALID_DMA_CODES';
  const INVALID_FB_PAGE_ID = 'INVALID_FB_PAGE_ID';
  const INVALID_IMAGES = 'INVALID_IMAGES';
  const INVALID_MONETIZER_RETURN_POLICY = 'INVALID_MONETIZER_RETURN_POLICY';
  const INVALID_OFFER_DISCLAIMER_URL = 'INVALID_OFFER_DISCLAIMER_URL';
  const INVALID_OFFER_END_DATE = 'INVALID_OFFER_END_DATE';
  const INVALID_PRE_ORDER_PARAMS = 'INVALID_PRE_ORDER_PARAMS';
  const INVALID_RANGE_FOR_AREA_SIZE = 'INVALID_RANGE_FOR_AREA_SIZE';
  const INVALID_RANGE_FOR_BUILT_UP_AREA_SIZE = 'INVALID_RANGE_FOR_BUILT_UP_AREA_SIZE';
  const INVALID_RANGE_FOR_NUM_OF_BATHS = 'INVALID_RANGE_FOR_NUM_OF_BATHS';
  const INVALID_RANGE_FOR_NUM_OF_BEDS = 'INVALID_RANGE_FOR_NUM_OF_BEDS';
  const INVALID_RANGE_FOR_NUM_OF_ROOMS = 'INVALID_RANGE_FOR_NUM_OF_ROOMS';
  const INVALID_RANGE_FOR_PARKING_SPACES = 'INVALID_RANGE_FOR_PARKING_SPACES';
  const INVALID_SHELTER_PAGE_ID = 'INVALID_SHELTER_PAGE_ID';
  const INVALID_SHIPPING_PROFILE_PARAMS = 'INVALID_SHIPPING_PROFILE_PARAMS';
  const INVALID_SUBSCRIPTION_DISABLE_PARAMS = 'INVALID_SUBSCRIPTION_DISABLE_PARAMS';
  const INVALID_SUBSCRIPTION_ENABLE_PARAMS = 'INVALID_SUBSCRIPTION_ENABLE_PARAMS';
  const INVALID_SUBSCRIPTION_PARAMS = 'INVALID_SUBSCRIPTION_PARAMS';
  const INVALID_TAX_EXTENSION_STATE = 'INVALID_TAX_EXTENSION_STATE';
  const INVALID_VEHICLE_STATE = 'INVALID_VEHICLE_STATE';
  const INVALID_VIRTUAL_TOUR_URL_DOMAIN = 'INVALID_VIRTUAL_TOUR_URL_DOMAIN';
  const INVENTORY_ZERO_AVAILABILITY_IN_STOCK = 'INVENTORY_ZERO_AVAILABILITY_IN_STOCK';
  const IN_ANOTHER_PRODUCT_LAUNCH = 'IN_ANOTHER_PRODUCT_LAUNCH';
  const ITEM_GROUP_NOT_SPECIFIED = 'ITEM_GROUP_NOT_SPECIFIED';
  const ITEM_NOT_SHIPPABLE_FOR_SCA_SHOP = 'ITEM_NOT_SHIPPABLE_FOR_SCA_SHOP';
  const ITEM_OVERRIDE_EMPTY_AVAILABILITY = 'ITEM_OVERRIDE_EMPTY_AVAILABILITY';
  const ITEM_OVERRIDE_EMPTY_PRICE = 'ITEM_OVERRIDE_EMPTY_PRICE';
  const ITEM_OVERRIDE_NOT_VISIBLE = 'ITEM_OVERRIDE_NOT_VISIBLE';
  const ITEM_PRICE_NOT_POSITIVE = 'ITEM_PRICE_NOT_POSITIVE';
  const ITEM_STALE_OUT_OF_STOCK = 'ITEM_STALE_OUT_OF_STOCK';
  const MARKETPLACE_DISABLED_BY_USER = 'MARKETPLACE_DISABLED_BY_USER';
  const MARKETPLACE_PARTNER_AUCTION_NO_BID_CLOSE_TIME = 'MARKETPLACE_PARTNER_AUCTION_NO_BID_CLOSE_TIME';
  const MARKETPLACE_PARTNER_CURRENCY_NOT_VALID = 'MARKETPLACE_PARTNER_CURRENCY_NOT_VALID';
  const MARKETPLACE_PARTNER_LISTING_COUNTRY_NOT_MATCH_CATALOG = 'MARKETPLACE_PARTNER_LISTING_COUNTRY_NOT_MATCH_CATALOG';
  const MARKETPLACE_PARTNER_LISTING_LIMIT_EXCEEDED = 'MARKETPLACE_PARTNER_LISTING_LIMIT_EXCEEDED';
  const MARKETPLACE_PARTNER_MISSING_LATLONG = 'MARKETPLACE_PARTNER_MISSING_LATLONG';
  const MARKETPLACE_PARTNER_MISSING_SHIPPING_COST = 'MARKETPLACE_PARTNER_MISSING_SHIPPING_COST';
  const MARKETPLACE_PARTNER_NOT_LOCAL_ITEM = 'MARKETPLACE_PARTNER_NOT_LOCAL_ITEM';
  const MARKETPLACE_PARTNER_NOT_SHIPPED_ITEM = 'MARKETPLACE_PARTNER_NOT_SHIPPED_ITEM';
  const MARKETPLACE_PARTNER_POLICY_VIOLATION = 'MARKETPLACE_PARTNER_POLICY_VIOLATION';
  const MARKETPLACE_PARTNER_RULE_LISTING_LIMIT_EXCEEDED = 'MARKETPLACE_PARTNER_RULE_LISTING_LIMIT_EXCEEDED';
  const MARKETPLACE_PARTNER_SELLER_BANNED = 'MARKETPLACE_PARTNER_SELLER_BANNED';
  const MARKETPLACE_PARTNER_SELLER_NOT_VALID = 'MARKETPLACE_PARTNER_SELLER_NOT_VALID';
  const MINI_SHOPS_DISABLED_BY_USER = 'MINI_SHOPS_DISABLED_BY_USER';
  const MISSING_CHECKOUT = 'MISSING_CHECKOUT';
  const MISSING_CHECKOUT_CURRENCY = 'MISSING_CHECKOUT_CURRENCY';
  const MISSING_COLOR = 'MISSING_COLOR';
  const MISSING_COUNTRY_OVERRIDE_IN_SHIPPING_PROFILE = 'MISSING_COUNTRY_OVERRIDE_IN_SHIPPING_PROFILE';
  const MISSING_EVENT = 'MISSING_EVENT';
  const MISSING_INDIA_COMPLIANCE_FIELDS = 'MISSING_INDIA_COMPLIANCE_FIELDS';
  const MISSING_SHIPPING_PROFILE = 'MISSING_SHIPPING_PROFILE';
  const MISSING_SIZE = 'MISSING_SIZE';
  const MISSING_TAX_CATEGORY = 'MISSING_TAX_CATEGORY';
  const NEGATIVE_COMMUNITY_FEEDBACK = 'NEGATIVE_COMMUNITY_FEEDBACK';
  const NEGATIVE_PRICE = 'NEGATIVE_PRICE';
  const NOT_ENOUGH_IMAGES = 'NOT_ENOUGH_IMAGES';
  const NOT_ENOUGH_UNIQUE_PRODUCTS = 'NOT_ENOUGH_UNIQUE_PRODUCTS';
  const NO_CONTENT_ID = 'NO_CONTENT_ID';
  const OVERLAY_DISCLAIMER_EXCEEDED_MAX_LENGTH = 'OVERLAY_DISCLAIMER_EXCEEDED_MAX_LENGTH';
  const PART_OF_PRODUCT_LAUNCH = 'PART_OF_PRODUCT_LAUNCH';
  const PASSING_MULTIPLE_CONTENT_IDS = 'PASSING_MULTIPLE_CONTENT_IDS';
  const PRODUCT_DOMINANT_CURRENCY_MISMATCH = 'PRODUCT_DOMINANT_CURRENCY_MISMATCH';
  const PRODUCT_EXPIRED = 'PRODUCT_EXPIRED';
  const PRODUCT_ITEM_HIDDEN_FROM_ALL_SHOPS = 'PRODUCT_ITEM_HIDDEN_FROM_ALL_SHOPS';
  const PRODUCT_ITEM_INVALID_PARTNER_TOKENS = 'PRODUCT_ITEM_INVALID_PARTNER_TOKENS';
  const PRODUCT_ITEM_NOT_INCLUDED_IN_ANY_SHOP = 'PRODUCT_ITEM_NOT_INCLUDED_IN_ANY_SHOP';
  const PRODUCT_ITEM_NOT_VISIBLE = 'PRODUCT_ITEM_NOT_VISIBLE';
  const PRODUCT_NOT_APPROVED = 'PRODUCT_NOT_APPROVED';
  const PRODUCT_NOT_DOMINANT_CURRENCY = 'PRODUCT_NOT_DOMINANT_CURRENCY';
  const PRODUCT_OUT_OF_STOCK = 'PRODUCT_OUT_OF_STOCK';
  const PRODUCT_URL_EQUALS_DOMAIN = 'PRODUCT_URL_EQUALS_DOMAIN';
  const PROPERTY_PRICE_CURRENCY_NOT_SUPPORTED = 'PROPERTY_PRICE_CURRENCY_NOT_SUPPORTED';
  const PROPERTY_PRICE_TOO_HIGH = 'PROPERTY_PRICE_TOO_HIGH';
  const PROPERTY_PRICE_TOO_LOW = 'PROPERTY_PRICE_TOO_LOW';
  const PROPERTY_UNIT_PRICE_CURRENCY_MISMATCH_ITEM_PRICE_CURRENCY = 'PROPERTY_UNIT_PRICE_CURRENCY_MISMATCH_ITEM_PRICE_CURRENCY';
  const PROPERTY_VALUE_CONTAINS_HTML_TAGS = 'PROPERTY_VALUE_CONTAINS_HTML_TAGS';
  const PROPERTY_VALUE_DESCRIPTION_CONTAINS_OFF_PLATFORM_LINK = 'PROPERTY_VALUE_DESCRIPTION_CONTAINS_OFF_PLATFORM_LINK';
  const PROPERTY_VALUE_FORMAT = 'PROPERTY_VALUE_FORMAT';
  const PROPERTY_VALUE_MISSING = 'PROPERTY_VALUE_MISSING';
  const PROPERTY_VALUE_MISSING_WARNING = 'PROPERTY_VALUE_MISSING_WARNING';
  const PROPERTY_VALUE_NON_POSITIVE = 'PROPERTY_VALUE_NON_POSITIVE';
  const PROPERTY_VALUE_STRING_EXCEEDS_LENGTH = 'PROPERTY_VALUE_STRING_EXCEEDS_LENGTH';
  const PROPERTY_VALUE_STRING_TOO_SHORT = 'PROPERTY_VALUE_STRING_TOO_SHORT';
  const PROPERTY_VALUE_UPPERCASE = 'PROPERTY_VALUE_UPPERCASE';
  const PROPERTY_VALUE_UPPERCASE_WARNING = 'PROPERTY_VALUE_UPPERCASE_WARNING';
  const PURCHASE_RATE_BELOW_ADDTOCART = 'PURCHASE_RATE_BELOW_ADDTOCART';
  const PURCHASE_RATE_BELOW_VIEWCONTENT = 'PURCHASE_RATE_BELOW_VIEWCONTENT';
  const QUALITY_DUPLICATED_DESCRIPTION = 'QUALITY_DUPLICATED_DESCRIPTION';
  const QUALITY_ITEM_LINK_BROKEN = 'QUALITY_ITEM_LINK_BROKEN';
  const QUALITY_ITEM_LINK_REDIRECTING = 'QUALITY_ITEM_LINK_REDIRECTING';
  const RETAILER_ID_NOT_PROVIDED = 'RETAILER_ID_NOT_PROVIDED';
  const SHOPIFY_INVALID_RETAILER_ID = 'SHOPIFY_INVALID_RETAILER_ID';
  const SHOPIFY_ITEM_MISSING_SHIPPING_PROFILE = 'SHOPIFY_ITEM_MISSING_SHIPPING_PROFILE';
  const SHOPS_POLICY_VIOLATION = 'SHOPS_POLICY_VIOLATION';
  const SUBSCRIPTION_INFO_NOT_ENABLED_FOR_FEED = 'SUBSCRIPTION_INFO_NOT_ENABLED_FOR_FEED';
  const TAX_CATEGORY_NOT_SUPPORTED_IN_UK = 'TAX_CATEGORY_NOT_SUPPORTED_IN_UK';
  const UNIQUE_PRODUCT_IDENTIFIER_MISSING = 'UNIQUE_PRODUCT_IDENTIFIER_MISSING';
  const UNMATCHED_EVENTS = 'UNMATCHED_EVENTS';
  const UNSUPPORTED_PRODUCT_CATEGORY = 'UNSUPPORTED_PRODUCT_CATEGORY';
  const VARIANT_ATTRIBUTE_ISSUE = 'VARIANT_ATTRIBUTE_ISSUE';
  const VIDEO_FETCH_FAILED = 'VIDEO_FETCH_FAILED';
  const VIDEO_FETCH_FAILED_BAD_GATEWAY = 'VIDEO_FETCH_FAILED_BAD_GATEWAY';
  const VIDEO_FETCH_FAILED_FILE_SIZE_EXCEEDED = 'VIDEO_FETCH_FAILED_FILE_SIZE_EXCEEDED';
  const VIDEO_FETCH_FAILED_FORBIDDEN = 'VIDEO_FETCH_FAILED_FORBIDDEN';
  const VIDEO_FETCH_FAILED_LINK_BROKEN = 'VIDEO_FETCH_FAILED_LINK_BROKEN';
  const VIDEO_FETCH_FAILED_TIMED_OUT = 'VIDEO_FETCH_FAILED_TIMED_OUT';
  const VIDEO_NOT_DOWNLOADABLE = 'VIDEO_NOT_DOWNLOADABLE';
  const WHATSAPP_DISABLED_BY_USER = 'WHATSAPP_DISABLED_BY_USER';
  const WHATSAPP_MARKETING_MESSAGE_DISABLED_BY_USER = 'WHATSAPP_MARKETING_MESSAGE_DISABLED_BY_USER';
  const WHATSAPP_MARKETING_MESSAGE_POLICY_VIOLATION = 'WHATSAPP_MARKETING_MESSAGE_POLICY_VIOLATION';
  const WHATSAPP_POLICY_VIOLATION = 'WHATSAPP_POLICY_VIOLATION';
}
