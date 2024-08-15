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

class MessagingFeatureStatusFields extends AbstractEnum {

  const HOP_V2 = 'hop_v2';
  const IG_MULTI_APP = 'ig_multi_app';
  const MSGR_MULTI_APP = 'msgr_multi_app';

  public function getFieldTypes() {
    return array(
      'hop_v2' => 'bool',
      'ig_multi_app' => 'bool',
      'msgr_multi_app' => 'bool',
    );
  }
}
