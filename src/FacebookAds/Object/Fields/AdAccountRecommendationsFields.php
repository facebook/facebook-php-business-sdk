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

class AdAccountRecommendationsFields extends AbstractEnum {

  const RECOMMENDATIONS = 'recommendations';
  const ASC_FRAGMENTATION_PARAMETERS = 'asc_fragmentation_parameters';
  const AUTOFLOW_PARAMETERS = 'autoflow_parameters';
  const FRAGMENTATION_PARAMETERS = 'fragmentation_parameters';
  const MUSIC_PARAMETERS = 'music_parameters';
  const RECOMMENDATION_SIGNATURE = 'recommendation_signature';
  const SCALE_GOOD_CAMPAIGN_PARAMETERS = 'scale_good_campaign_parameters';

  public function getFieldTypes() {
    return array(
      'recommendations' => 'list<Object>',
      'asc_fragmentation_parameters' => 'map',
      'autoflow_parameters' => 'map',
      'fragmentation_parameters' => 'map',
      'music_parameters' => 'map',
      'recommendation_signature' => 'string',
      'scale_good_campaign_parameters' => 'map',
    );
  }
}
