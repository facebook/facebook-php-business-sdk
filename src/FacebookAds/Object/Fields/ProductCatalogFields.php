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

class ProductCatalogFields extends AbstractEnum {

  const BUSINESS = 'business';
  const COMMERCE_MERCHANT_SETTINGS = 'commerce_merchant_settings';
  const DA_DISPLAY_SETTINGS = 'da_display_settings';
  const DEFAULT_IMAGE_URL = 'default_image_url';
  const FALLBACK_IMAGE_URL = 'fallback_image_url';
  const FEED_COUNT = 'feed_count';
  const ID = 'id';
  const IS_CATALOG_SEGMENT = 'is_catalog_segment';
  const LATEST_FEED_UPLOAD_SESSION = 'latest_feed_upload_session';
  const NAME = 'name';
  const PRODUCT_COUNT = 'product_count';
  const STORE_CATALOG_SETTINGS = 'store_catalog_settings';
  const VERTICAL = 'vertical';
  const CATALOG_SEGMENT_FILTER = 'catalog_segment_filter';
  const CATALOG_SEGMENT_PRODUCT_SET_ID = 'catalog_segment_product_set_id';
  const DESTINATION_CATALOG_SETTINGS = 'destination_catalog_settings';
  const FLIGHT_CATALOG_SETTINGS = 'flight_catalog_settings';
  const PARENT_CATALOG_ID = 'parent_catalog_id';
  const PARTNER_INTEGRATION = 'partner_integration';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'commerce_merchant_settings' => 'CommerceMerchantSettings',
      'da_display_settings' => 'ProductCatalogImageSettings',
      'default_image_url' => 'string',
      'fallback_image_url' => 'list<string>',
      'feed_count' => 'int',
      'id' => 'string',
      'is_catalog_segment' => 'bool',
      'latest_feed_upload_session' => 'ProductFeedUpload',
      'name' => 'string',
      'product_count' => 'int',
      'store_catalog_settings' => 'StoreCatalogSettings',
      'vertical' => 'string',
      'catalog_segment_filter' => 'Object',
      'catalog_segment_product_set_id' => 'string',
      'destination_catalog_settings' => 'map',
      'flight_catalog_settings' => 'map',
      'parent_catalog_id' => 'string',
      'partner_integration' => 'map',
    );
  }
}
