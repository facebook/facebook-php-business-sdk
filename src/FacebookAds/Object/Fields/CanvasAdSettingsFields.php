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

class CanvasAdSettingsFields extends AbstractEnum {

  const IS_CANVAS_COLLECTION_ELIGIBLE = 'is_canvas_collection_eligible';
  const LEAD_FORM_CREATED_TIME = 'lead_form_created_time';
  const LEAD_FORM_NAME = 'lead_form_name';
  const LEAD_GEN_FORM_ID = 'lead_gen_form_id';
  const LEADS_COUNT = 'leads_count';
  const PRODUCT_SET_ID = 'product_set_id';
  const USE_RETAILER_ITEM_IDS = 'use_retailer_item_ids';

  public function getFieldTypes() {
    return array(
      'is_canvas_collection_eligible' => 'bool',
      'lead_form_created_time' => 'unsigned int',
      'lead_form_name' => 'string',
      'lead_gen_form_id' => 'string',
      'leads_count' => 'int',
      'product_set_id' => 'string',
      'use_retailer_item_ids' => 'bool',
    );
  }
}
