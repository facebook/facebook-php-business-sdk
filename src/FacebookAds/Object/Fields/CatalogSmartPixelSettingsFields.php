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

class CatalogSmartPixelSettingsFields extends AbstractEnum {

  const CATALOG = 'catalog';
  const CBB_CUSTOM_OVERRIDE_FILTERS = 'cbb_custom_override_filters';
  const CBB_DEFAULT_FILTER = 'cbb_default_filter';
  const CBB_OVERRIDE_TYPE_FIELD_MAPPING = 'cbb_override_type_field_mapping';
  const DEFAULTS = 'defaults';
  const FILTERS = 'filters';
  const ID = 'id';
  const IS_CBB_ENABLED = 'is_cbb_enabled';
  const IS_CREATE_ENABLED = 'is_create_enabled';
  const IS_DELETE_ENABLED = 'is_delete_enabled';
  const IS_UPDATE_ENABLED = 'is_update_enabled';
  const PIXEL = 'pixel';
  const PROPERTY_FILTER = 'property_filter';
  const TRUSTED_DOMAINS = 'trusted_domains';

  public function getFieldTypes() {
    return array(
      'catalog' => 'ProductCatalog',
      'cbb_custom_override_filters' => 'list<Object>',
      'cbb_default_filter' => 'list<Object>',
      'cbb_override_type_field_mapping' => 'list<Object>',
      'defaults' => 'list<Object>',
      'filters' => 'list<Object>',
      'id' => 'string',
      'is_cbb_enabled' => 'bool',
      'is_create_enabled' => 'bool',
      'is_delete_enabled' => 'bool',
      'is_update_enabled' => 'bool',
      'pixel' => 'AdsPixel',
      'property_filter' => 'list<string>',
      'trusted_domains' => 'list<string>',
    );
  }
}
