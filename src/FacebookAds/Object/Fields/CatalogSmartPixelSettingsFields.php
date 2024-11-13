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

class CatalogSmartPixelSettingsFields extends AbstractEnum {

  const ALLOWED_DOMAINS = 'allowed_domains';
  const AVAILABLE_PROPERTY_FILTERS = 'available_property_filters';
  const CATALOG = 'catalog';
  const CBB_CUSTOM_OVERRIDE_FILTERS = 'cbb_custom_override_filters';
  const CBB_DEFAULT_FILTER = 'cbb_default_filter';
  const DEFAULTS = 'defaults';
  const FILTERS = 'filters';
  const ID = 'id';
  const IS_CBB_ENABLED = 'is_cbb_enabled';
  const IS_CREATE_ENABLED = 'is_create_enabled';
  const IS_DELETE_ENABLED = 'is_delete_enabled';
  const IS_UPDATE_ENABLED = 'is_update_enabled';
  const MICRODATA_FORMAT_PRECEDENCE = 'microdata_format_precedence';
  const PIXEL = 'pixel';
  const PROPERTY_FILTER = 'property_filter';
  const TRUSTED_DOMAINS = 'trusted_domains';

  public function getFieldTypes() {
    return array(
      'allowed_domains' => 'list<string>',
      'available_property_filters' => 'list<string>',
      'catalog' => 'ProductCatalog',
      'cbb_custom_override_filters' => 'list<Object>',
      'cbb_default_filter' => 'list<map<string, list<string>>>',
      'defaults' => 'list<map<string, string>>',
      'filters' => 'list<map<string, list<string>>>',
      'id' => 'string',
      'is_cbb_enabled' => 'bool',
      'is_create_enabled' => 'bool',
      'is_delete_enabled' => 'bool',
      'is_update_enabled' => 'bool',
      'microdata_format_precedence' => 'list<string>',
      'pixel' => 'AdsPixel',
      'property_filter' => 'list<string>',
      'trusted_domains' => 'list<string>',
    );
  }
}
