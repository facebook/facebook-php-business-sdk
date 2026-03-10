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

class AdCampaignPlacementGetFields extends AbstractEnum {

  const EFFECTIVE_AUDIENCE_NETWORK_POSITIONS = 'effective_audience_network_positions';
  const EFFECTIVE_DEVICE_PLATFORMS = 'effective_device_platforms';
  const EFFECTIVE_FACEBOOK_POSITIONS = 'effective_facebook_positions';
  const EFFECTIVE_INSTAGRAM_POSITIONS = 'effective_instagram_positions';
  const EFFECTIVE_MESSENGER_POSITIONS = 'effective_messenger_positions';
  const EFFECTIVE_OCULUS_POSITIONS = 'effective_oculus_positions';
  const EFFECTIVE_PUBLISHER_PLATFORMS = 'effective_publisher_platforms';
  const METADATA = 'metadata';
  const RECOMMENDATIONS = 'recommendations';

  public function getFieldTypes() {
    return array(
      'effective_audience_network_positions' => 'list<EffectiveAudienceNetworkPositions>',
      'effective_device_platforms' => 'list<EffectiveDevicePlatforms>',
      'effective_facebook_positions' => 'list<EffectiveFacebookPositions>',
      'effective_instagram_positions' => 'list<EffectiveInstagramPositions>',
      'effective_messenger_positions' => 'list<EffectiveMessengerPositions>',
      'effective_oculus_positions' => 'list<EffectiveOculusPositions>',
      'effective_publisher_platforms' => 'list<EffectivePublisherPlatforms>',
      'metadata' => 'object',
      'recommendations' => 'list<object>',
    );
  }
}
