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

class VideoPollFields extends AbstractEnum {

  const CLOSE_AFTER_VOTING = 'close_after_voting';
  const DEFAULT_OPEN = 'default_open';
  const ID = 'id';
  const QUESTION = 'question';
  const SHOW_GRADIENT = 'show_gradient';
  const SHOW_RESULTS = 'show_results';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'close_after_voting' => 'bool',
      'default_open' => 'bool',
      'id' => 'string',
      'question' => 'string',
      'show_gradient' => 'bool',
      'show_results' => 'bool',
      'status' => 'Status',
    );
  }
}
