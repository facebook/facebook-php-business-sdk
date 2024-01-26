<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Search;

use FacebookAds\Enum\AbstractEnum;

/**
 * @method static TargetingSearchTypes getInstance()
 */
class TargetingSearchTypes extends AbstractEnum {

  const COUNTRY = 'adcountry';
  const EDUCATION = 'adeducationschool';
  const EMPLOYER = 'adworkemployer';
  const GEOLOCATION = 'adgeolocation';
  const GEOLOCATIONMETA = 'adgeolocationmeta';
  const INTEREST = 'adinterest';
  const INTEREST_SUGGESTION = 'adinterestsuggestion';
  const INTEREST_VALIDATE = 'adinterestvalid';
  const KEYWORD = 'adkeyword';
  const LOCALE = 'adlocale';
  const MAJOR = 'adeducationmajor';
  const POSITION = 'adworkposition';
  const RADIUS_SUGGESTION = 'adradiussuggestion';
  const TARGETING_CATEGORY = 'adTargetingCategory';
  const ZIPCODE = 'adzipcode';
}
