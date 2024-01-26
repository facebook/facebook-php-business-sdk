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

class ProfileFields extends AbstractEnum {

  const CAN_POST = 'can_post';
  const ID = 'id';
  const LINK = 'link';
  const NAME = 'name';
  const PIC = 'pic';
  const PIC_CROP = 'pic_crop';
  const PIC_LARGE = 'pic_large';
  const PIC_SMALL = 'pic_small';
  const PIC_SQUARE = 'pic_square';
  const PROFILE_TYPE = 'profile_type';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'can_post' => 'bool',
      'id' => 'string',
      'link' => 'string',
      'name' => 'string',
      'pic' => 'string',
      'pic_crop' => 'ProfilePictureSource',
      'pic_large' => 'string',
      'pic_small' => 'string',
      'pic_square' => 'string',
      'profile_type' => 'ProfileType',
      'username' => 'string',
    );
  }
}
