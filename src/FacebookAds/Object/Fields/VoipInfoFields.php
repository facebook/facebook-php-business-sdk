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

class VoipInfoFields extends AbstractEnum {

  const HAS_MOBILE_APP = 'has_mobile_app';
  const HAS_PERMISSION = 'has_permission';
  const IS_CALLABLE = 'is_callable';
  const IS_CALLABLE_WEBRTC = 'is_callable_webrtc';
  const IS_PUSHABLE = 'is_pushable';
  const REASON_CODE = 'reason_code';
  const REASON_DESCRIPTION = 'reason_description';

  public function getFieldTypes() {
    return array(
      'has_mobile_app' => 'bool',
      'has_permission' => 'bool',
      'is_callable' => 'bool',
      'is_callable_webrtc' => 'bool',
      'is_pushable' => 'bool',
      'reason_code' => 'unsigned int',
      'reason_description' => 'string',
    );
  }
}
