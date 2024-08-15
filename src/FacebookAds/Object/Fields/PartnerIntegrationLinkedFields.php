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

class PartnerIntegrationLinkedFields extends AbstractEnum {

  const ADS_PIXEL = 'ads_pixel';
  const APPLICATION = 'application';
  const COMPLETED_INTEGRATION_TYPES = 'completed_integration_types';
  const EXTERNAL_BUSINESS_CONNECTION_ID = 'external_business_connection_id';
  const EXTERNAL_ID = 'external_id';
  const HAS_OAUTH_TOKEN = 'has_oauth_token';
  const ID = 'id';
  const MBE_APP_ID = 'mbe_app_id';
  const MBE_ASSET_ID = 'mbe_asset_id';
  const MBE_EXTERNAL_BUSINESS_ID = 'mbe_external_business_id';
  const NAME = 'name';
  const OFFLINE_CONVERSION_DATA_SET = 'offline_conversion_data_set';
  const PAGE = 'page';
  const PARTNER = 'partner';
  const PRODUCT_CATALOG = 'product_catalog';
  const SETUP_STATUS = 'setup_status';

  public function getFieldTypes() {
    return array(
      'ads_pixel' => 'AdsPixel',
      'application' => 'Application',
      'completed_integration_types' => 'list<string>',
      'external_business_connection_id' => 'string',
      'external_id' => 'string',
      'has_oauth_token' => 'bool',
      'id' => 'string',
      'mbe_app_id' => 'string',
      'mbe_asset_id' => 'string',
      'mbe_external_business_id' => 'string',
      'name' => 'string',
      'offline_conversion_data_set' => 'OfflineConversionDataSet',
      'page' => 'Page',
      'partner' => 'string',
      'product_catalog' => 'ProductCatalog',
      'setup_status' => 'string',
    );
  }
}
