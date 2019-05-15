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

class LookalikeSpecFields extends AbstractEnum {

  const COUNTRY = 'country';
  const IS_FINANCIAL_SERVICE = 'is_financial_service';
  const ORIGIN = 'origin';
  const ORIGIN_EVENT_NAME = 'origin_event_name';
  const ORIGIN_EVENT_SOURCE_NAME = 'origin_event_source_name';
  const ORIGIN_EVENT_SOURCE_TYPE = 'origin_event_source_type';
  const PRODUCT_SET_NAME = 'product_set_name';
  const RATIO = 'ratio';
  const STARTING_RATIO = 'starting_ratio';
  const TARGET_COUNTRIES = 'target_countries';
  const TARGET_COUNTRY_NAMES = 'target_country_names';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'country' => 'string',
      'is_financial_service' => 'bool',
      'origin' => 'list<Object>',
      'origin_event_name' => 'string',
      'origin_event_source_name' => 'string',
      'origin_event_source_type' => 'string',
      'product_set_name' => 'string',
      'ratio' => 'float',
      'starting_ratio' => 'float',
      'target_countries' => 'list<string>',
      'target_country_names' => 'list',
      'type' => 'string',
    );
  }
}
