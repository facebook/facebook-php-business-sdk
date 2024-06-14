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

class AnalyticsPlatformMetricsConfigFields extends AbstractEnum {

  const HAS_A2U = 'has_a2u';
  const HAS_API_CALLS = 'has_api_calls';
  const HAS_APP_INVITES = 'has_app_invites';
  const HAS_FB_LOGIN = 'has_fb_login';
  const HAS_GAME_REQUESTS = 'has_game_requests';
  const HAS_PAYMENTS = 'has_payments';
  const HAS_REFERRALS = 'has_referrals';
  const HAS_STORIES = 'has_stories';
  const HAS_STRUCTURED_REQUESTS = 'has_structured_requests';

  public function getFieldTypes() {
    return array(
      'has_a2u' => 'bool',
      'has_api_calls' => 'bool',
      'has_app_invites' => 'bool',
      'has_fb_login' => 'bool',
      'has_game_requests' => 'bool',
      'has_payments' => 'bool',
      'has_referrals' => 'bool',
      'has_stories' => 'bool',
      'has_structured_requests' => 'bool',
    );
  }
}
