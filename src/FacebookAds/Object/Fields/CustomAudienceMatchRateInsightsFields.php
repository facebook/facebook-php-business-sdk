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

class CustomAudienceMatchRateInsightsFields extends AbstractEnum {

  const EMAIL_QUALITY = 'email_quality';
  const EMAIL_UPLOAD_VOLUME_PCT = 'email_upload_volume_pct';
  const IS_ELIGIBLE = 'is_eligible';
  const MADID_QUALITY = 'madid_quality';
  const MADID_UPLOAD_VOLUME_PCT = 'madid_upload_volume_pct';
  const MATCH_RATE_SCORE = 'match_rate_score';
  const PHONE_QUALITY = 'phone_quality';
  const PHONE_UPLOAD_VOLUME_PCT = 'phone_upload_volume_pct';

  public function getFieldTypes() {
    return array(
      'email_quality' => 'string',
      'email_upload_volume_pct' => 'float',
      'is_eligible' => 'bool',
      'madid_quality' => 'string',
      'madid_upload_volume_pct' => 'float',
      'match_rate_score' => 'float',
      'phone_quality' => 'string',
      'phone_upload_volume_pct' => 'float',
    );
  }
}
