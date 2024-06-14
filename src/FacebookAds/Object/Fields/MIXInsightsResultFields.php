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

class MIXInsightsResultFields extends AbstractEnum {

  const DAILY_AGE_GENDER_BREAKDOWN = 'daily_age_gender_breakdown';
  const DAILY_AUDIO_LIBRARY_VALUES = 'daily_audio_library_values';
  const DAILY_UGC_VALUES = 'daily_ugc_values';
  const DAILY_VALUES = 'daily_values';
  const METRIC = 'metric';
  const MONTHLY_AUDIO_LIBRARY_VALUES = 'monthly_audio_library_values';
  const MONTHLY_UGC_VALUES = 'monthly_ugc_values';
  const MONTHLY_VALUES = 'monthly_values';
  const PERCENT_GROWTH = 'percent_growth';
  const SHIELDED_FIELDS = 'shielded_fields';
  const TOTAL_AGE_GENDER_BREAKDOWN = 'total_age_gender_breakdown';
  const TOTAL_AUDIO_LIBRARY_VALUE = 'total_audio_library_value';
  const TOTAL_COUNTRY_BREAKDOWN = 'total_country_breakdown';
  const TOTAL_LOCALE_BREAKDOWN = 'total_locale_breakdown';
  const TOTAL_PRODUCT_BREAKDOWN = 'total_product_breakdown';
  const TOTAL_UGC_VALUE = 'total_ugc_value';
  const TOTAL_VALUE = 'total_value';
  const TRENDING_AGE = 'trending_age';
  const TRENDING_GENDER = 'trending_gender';
  const TRENDING_INTEREST = 'trending_interest';
  const TRENDING_TERRITORY = 'trending_territory';

  public function getFieldTypes() {
    return array(
      'daily_age_gender_breakdown' => 'list<map<string, list<map<string, int>>>>',
      'daily_audio_library_values' => 'list<map<string, int>>',
      'daily_ugc_values' => 'list<map<string, int>>',
      'daily_values' => 'list<map<string, int>>',
      'metric' => 'string',
      'monthly_audio_library_values' => 'list<map<string, int>>',
      'monthly_ugc_values' => 'list<map<string, int>>',
      'monthly_values' => 'list<map<string, int>>',
      'percent_growth' => 'float',
      'shielded_fields' => 'list<map<string, list<map<string, bool>>>>',
      'total_age_gender_breakdown' => 'list<map<string, int>>',
      'total_audio_library_value' => 'int',
      'total_country_breakdown' => 'list<map<string, int>>',
      'total_locale_breakdown' => 'list<map<string, int>>',
      'total_product_breakdown' => 'list<map<string, int>>',
      'total_ugc_value' => 'int',
      'total_value' => 'int',
      'trending_age' => 'list<map<string, list<map<string, float>>>>',
      'trending_gender' => 'list<map<string, list<map<string, float>>>>',
      'trending_interest' => 'list<map<string, list<map<string, float>>>>',
      'trending_territory' => 'list<map<string, list<map<string, float>>>>',
    );
  }
}
