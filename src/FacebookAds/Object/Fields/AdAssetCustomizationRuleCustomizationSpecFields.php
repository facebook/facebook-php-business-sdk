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

class AdAssetCustomizationRuleCustomizationSpecFields extends AbstractEnum {

  const AGE_MAX = 'age_max';
  const AGE_MIN = 'age_min';
  const AUDIENCE_NETWORK_POSITIONS = 'audience_network_positions';
  const DEVICE_PLATFORMS = 'device_platforms';
  const FACEBOOK_POSITIONS = 'facebook_positions';
  const GEO_LOCATIONS = 'geo_locations';
  const INSTAGRAM_POSITIONS = 'instagram_positions';
  const LOCALES = 'locales';
  const MESSENGER_POSITIONS = 'messenger_positions';
  const PUBLISHER_PLATFORMS = 'publisher_platforms';

  public function getFieldTypes() {
    return array(
      'age_max' => 'unsigned int',
      'age_min' => 'unsigned int',
      'audience_network_positions' => 'list<string>',
      'device_platforms' => 'list<DevicePlatforms>',
      'facebook_positions' => 'list<string>',
      'geo_locations' => 'TargetingGeoLocation',
      'instagram_positions' => 'list<string>',
      'locales' => 'list<unsigned int>',
      'messenger_positions' => 'list<string>',
      'publisher_platforms' => 'list<string>',
    );
  }
}
