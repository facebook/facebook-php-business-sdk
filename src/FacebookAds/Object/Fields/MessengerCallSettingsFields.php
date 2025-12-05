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

class MessengerCallSettingsFields extends AbstractEnum {

  const AUDIO_ENABLED = 'audio_enabled';
  const CALL_HOURS = 'call_hours';
  const CALL_ROUTING = 'call_routing';
  const ICON_ENABLED = 'icon_enabled';
  const VIDEO = 'video';

  public function getFieldTypes() {
    return array(
      'audio_enabled' => 'bool',
      'call_hours' => 'Object',
      'call_routing' => 'string',
      'icon_enabled' => 'bool',
      'video' => 'string',
    );
  }
}
