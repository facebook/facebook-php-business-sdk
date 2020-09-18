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

class ProductSetFields extends AbstractEnum {

  const AUTO_CREATION_URL = 'auto_creation_url';
  const FILTER = 'filter';
  const ID = 'id';
  const LATEST_METADATA = 'latest_metadata';
  const LIVE_METADATA = 'live_metadata';
  const NAME = 'name';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_COUNT = 'product_count';
  const RETAILER_ID = 'retailer_id';
  const METADATA = 'metadata';

  public function getFieldTypes() {
    return array(
      'auto_creation_url' => 'string',
      'filter' => 'string',
      'id' => 'string',
      'latest_metadata' => 'ProductSetMetadata',
      'live_metadata' => 'ProductSetMetadata',
      'name' => 'string',
      'product_catalog' => 'ProductCatalog',
      'product_count' => 'unsigned int',
      'retailer_id' => 'string',
      'metadata' => 'map',
    );
  }
}
