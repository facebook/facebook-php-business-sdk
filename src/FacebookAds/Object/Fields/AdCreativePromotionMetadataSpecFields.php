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

class AdCreativePromotionMetadataSpecFields extends AbstractEnum {

  const END_DATE = 'end_date';
  const ID = 'id';
  const PROMOTION_SOURCE = 'promotion_source';
  const PROMOTION_TYPE = 'promotion_type';
  const PROMOTION_VALUE = 'promotion_value';
  const REQUIRED_CODE = 'required_code';
  const START_DATE = 'start_date';

  public function getFieldTypes() {
    return array(
      'end_date' => 'datetime',
      'id' => 'string',
      'promotion_source' => 'string',
      'promotion_type' => 'string',
      'promotion_value' => 'float',
      'required_code' => 'string',
      'start_date' => 'datetime',
    );
  }
}
