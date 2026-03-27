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

class AdAccountLiveVideoAdvertiserFields extends AbstractEnum {

  const IS_LVA_TOGGLE_ON = 'is_lva_toggle_on';
  const LVA_DEFAULT_BUDGET = 'lva_default_budget';
  const LVA_DEFAULT_DURATION_S = 'lva_default_duration_s';
  const SHOULD_DEFAULT_CURRENT_LIVE = 'should_default_current_live';
  const SHOULD_DEFAULT_SCHEDULED_LIVE = 'should_default_scheduled_live';
  const SHOULD_DEFAULT_TOGGLE_ON_FROM_MODEL = 'should_default_toggle_on_from_model';
  const SHOULD_SHOW_LVA_TOGGLE = 'should_show_lva_toggle';

  public function getFieldTypes() {
    return array(
      'is_lva_toggle_on' => 'bool',
      'lva_default_budget' => 'int',
      'lva_default_duration_s' => 'int',
      'should_default_current_live' => 'bool',
      'should_default_scheduled_live' => 'bool',
      'should_default_toggle_on_from_model' => 'bool',
      'should_show_lva_toggle' => 'bool',
    );
  }
}
