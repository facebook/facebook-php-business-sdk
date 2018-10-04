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

class PartnerIntegrationLinkedFields extends AbstractEnum {

  const ADS_PIXEL = 'ads_pixel';
  const APPLICATION = 'application';
  const COMPLETED_INTEGRATION_TYPES = 'completed_integration_types';
  const EXTERNAL_ID = 'external_id';
  const HAS_OAUTH_TOKEN = 'has_oauth_token';
  const ID = 'id';
  const NAME = 'name';
  const OFFLINE_CONVERSION_DATA_SET = 'offline_conversion_data_set';
  const PARTNER = 'partner';
  const PARTNER_PROFILE = 'partner_profile';
  const PRODUCT_CATALOG = 'product_catalog';
  const SETUP_STATUS = 'setup_status';
  const GTM_ACCOUNT_ID = 'gtm_account_id';
  const GTM_CONTAINER_ID = 'gtm_container_id';

  public function getFieldTypes() {
    return array(
      'ads_pixel' => 'AdsPixel',
      'application' => 'Application',
      'completed_integration_types' => 'list<string>',
      'external_id' => 'string',
      'has_oauth_token' => 'bool',
      'id' => 'string',
      'name' => 'string',
      'offline_conversion_data_set' => 'OfflineConversionDataSet',
      'partner' => 'string',
      'partner_profile' => 'Object',
      'product_catalog' => 'ProductCatalog',
      'setup_status' => 'string',
      'gtm_account_id' => 'string',
      'gtm_container_id' => 'string',
    );
  }
}
