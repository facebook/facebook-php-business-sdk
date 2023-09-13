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

class GameItemFields extends AbstractEnum {

  const COUNT = 'count';
  const CREATED = 'created';
  const EXT_ID = 'ext_id';
  const ID = 'id';
  const ITEM_DEF = 'item_def';
  const OWNER = 'owner';
  const STATUS = 'status';
  const UPDATED = 'updated';

  public function getFieldTypes() {
    return array(
      'count' => 'int',
      'created' => 'datetime',
      'ext_id' => 'string',
      'id' => 'string',
      'item_def' => 'string',
      'owner' => 'User',
      'status' => 'string',
      'updated' => 'datetime',
    );
  }
}
