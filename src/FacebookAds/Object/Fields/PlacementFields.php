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

class PlacementFields extends AbstractEnum {

  const AUDIENCE_NETWORK_POSITIONS = 'audience_network_positions';
  const DEVICE_PLATFORMS = 'device_platforms';
  const EFFECTIVE_AUDIENCE_NETWORK_POSITIONS = 'effective_audience_network_positions';
  const EFFECTIVE_DEVICE_PLATFORMS = 'effective_device_platforms';
  const EFFECTIVE_FACEBOOK_POSITIONS = 'effective_facebook_positions';
  const EFFECTIVE_INSTAGRAM_POSITIONS = 'effective_instagram_positions';
  const EFFECTIVE_MESSENGER_POSITIONS = 'effective_messenger_positions';
  const EFFECTIVE_OCULUS_POSITIONS = 'effective_oculus_positions';
  const EFFECTIVE_PUBLISHER_PLATFORMS = 'effective_publisher_platforms';
  const EFFECTIVE_THREADS_POSITIONS = 'effective_threads_positions';
  const EFFECTIVE_WHATSAPP_POSITIONS = 'effective_whatsapp_positions';
  const FACEBOOK_POSITIONS = 'facebook_positions';
  const INSTAGRAM_POSITIONS = 'instagram_positions';
  const MESSENGER_POSITIONS = 'messenger_positions';
  const OCULUS_POSITIONS = 'oculus_positions';
  const PUBLISHER_PLATFORMS = 'publisher_platforms';
  const THREADS_POSITIONS = 'threads_positions';
  const WHATSAPP_POSITIONS = 'whatsapp_positions';

  public function getFieldTypes() {
    return array(
      'audience_network_positions' => 'list<string>',
      'device_platforms' => 'list<DevicePlatforms>',
      'effective_audience_network_positions' => 'list<string>',
      'effective_device_platforms' => 'list<EffectiveDevicePlatforms>',
      'effective_facebook_positions' => 'list<string>',
      'effective_instagram_positions' => 'list<string>',
      'effective_messenger_positions' => 'list<string>',
      'effective_oculus_positions' => 'list<string>',
      'effective_publisher_platforms' => 'list<string>',
      'effective_threads_positions' => 'list<string>',
      'effective_whatsapp_positions' => 'list<string>',
      'facebook_positions' => 'list<string>',
      'instagram_positions' => 'list<string>',
      'messenger_positions' => 'list<string>',
      'oculus_positions' => 'list<string>',
      'publisher_platforms' => 'list<string>',
      'threads_positions' => 'list<string>',
      'whatsapp_positions' => 'list<string>',
    );
  }
}
