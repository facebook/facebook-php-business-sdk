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

class AdsTextSuggestionsFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const BODIES = 'bodies';
  const DESCRIPTIONS = 'descriptions';
  const INACTIVE_SESSION_TALLY = 'inactive_session_tally';
  const LONG = 'long';
  const SHORT = 'short';
  const TITLES = 'titles';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'bodies' => 'list<Object>',
      'descriptions' => 'list<Object>',
      'inactive_session_tally' => 'int',
      'long' => 'list<Object>',
      'short' => 'list<Object>',
      'titles' => 'list<Object>',
    );
  }
}
