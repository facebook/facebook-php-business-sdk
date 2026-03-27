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

class PlacementSoftOptOutFields extends AbstractEnum {

  const AUDIENCE_NETWORK_POSITIONS = 'audience_network_positions';
  const FACEBOOK_POSITIONS = 'facebook_positions';
  const INSTAGRAM_POSITIONS = 'instagram_positions';
  const MESSENGER_POSITIONS = 'messenger_positions';
  const OCULUS_POSITIONS = 'oculus_positions';
  const THREADS_POSITIONS = 'threads_positions';
  const WHATSAPP_POSITIONS = 'whatsapp_positions';

  public function getFieldTypes() {
    return array(
      'audience_network_positions' => 'list<string>',
      'facebook_positions' => 'list<string>',
      'instagram_positions' => 'list<string>',
      'messenger_positions' => 'list<string>',
      'oculus_positions' => 'list<string>',
      'threads_positions' => 'list<string>',
      'whatsapp_positions' => 'list<string>',
    );
  }
}
