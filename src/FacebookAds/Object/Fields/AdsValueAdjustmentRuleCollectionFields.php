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

class AdsValueAdjustmentRuleCollectionFields extends AbstractEnum {

  const ID = 'id';
  const IS_DEFAULT_SETTING = 'is_default_setting';
  const LAST_ATTACH_TIME = 'last_attach_time';
  const NAME = 'name';
  const PRODUCT_TYPE = 'product_type';
  const STATUS = 'status';
  const RULES = 'rules';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'is_default_setting' => 'bool',
      'last_attach_time' => 'datetime',
      'name' => 'string',
      'product_type' => 'string',
      'status' => 'string',
      'rules' => 'list<map>',
    );
  }
}
