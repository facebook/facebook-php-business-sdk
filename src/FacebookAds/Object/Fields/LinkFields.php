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

class LinkFields extends AbstractEnum {

  const CAPTION = 'caption';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const FROM = 'from';
  const ICON = 'icon';
  const ID = 'id';
  const LINK = 'link';
  const MESSAGE = 'message';
  const MULTI_SHARE_OPTIMIZED = 'multi_share_optimized';
  const NAME = 'name';
  const PRIVACY = 'privacy';
  const VIA = 'via';

  public function getFieldTypes() {
    return array(
      'caption' => 'string',
      'created_time' => 'datetime',
      'description' => 'string',
      'from' => 'Object',
      'icon' => 'string',
      'id' => 'string',
      'link' => 'string',
      'message' => 'string',
      'multi_share_optimized' => 'bool',
      'name' => 'string',
      'privacy' => 'Privacy',
      'via' => 'Object',
    );
  }
}
