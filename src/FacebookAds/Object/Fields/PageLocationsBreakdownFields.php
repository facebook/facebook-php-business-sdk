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

class PageLocationsBreakdownFields extends AbstractEnum {

  const LOCATION_ID = 'location_id';
  const LOCATION_NAME = 'location_name';
  const LOCATION_TYPE = 'location_type';
  const NUM_PAGES = 'num_pages';
  const NUM_PAGES_ELIGIBLE_FOR_STORE_VISIT_REPORTING = 'num_pages_eligible_for_store_visit_reporting';
  const NUM_UNPUBLISHED_OR_CLOSED_PAGES = 'num_unpublished_or_closed_pages';
  const PARENT_COUNTRY_CODE = 'parent_country_code';
  const PARENT_REGION_ID = 'parent_region_id';
  const PARENT_REGION_NAME = 'parent_region_name';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'location_id' => 'string',
      'location_name' => 'string',
      'location_type' => 'string',
      'num_pages' => 'int',
      'num_pages_eligible_for_store_visit_reporting' => 'int',
      'num_unpublished_or_closed_pages' => 'int',
      'parent_country_code' => 'string',
      'parent_region_id' => 'int',
      'parent_region_name' => 'string',
      'id' => 'string',
    );
  }
}
