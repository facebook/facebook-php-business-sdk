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

class OrderIDAttributionsFields extends AbstractEnum {

  const APP_ID = 'app_id';
  const ATTRIBUTION_TYPE = 'attribution_type';
  const ATTRIBUTIONS = 'attributions';
  const CONVERSION_DEVICE = 'conversion_device';
  const DATASET_ID = 'dataset_id';
  const HOLDOUT_STATUS = 'holdout_status';
  const ORDER_ID = 'order_id';
  const ORDER_TIMESTAMP = 'order_timestamp';
  const PIXEL_ID = 'pixel_id';

  public function getFieldTypes() {
    return array(
      'app_id' => 'string',
      'attribution_type' => 'string',
      'attributions' => 'list<Object>',
      'conversion_device' => 'string',
      'dataset_id' => 'string',
      'holdout_status' => 'list<Object>',
      'order_id' => 'string',
      'order_timestamp' => 'datetime',
      'pixel_id' => 'string',
    );
  }
}
