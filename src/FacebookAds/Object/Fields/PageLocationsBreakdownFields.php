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
    );
  }
}
