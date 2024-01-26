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

class AudiencePermissionForActionsFields extends AbstractEnum {

  const CAN_EDIT = 'can_edit';
  const CAN_SEE_INSIGHT = 'can_see_insight';
  const CAN_SHARE = 'can_share';
  const SUBTYPE_SUPPORTS_LOOKALIKE = 'subtype_supports_lookalike';
  const SUPPORTS_RECIPIENT_LOOKALIKE = 'supports_recipient_lookalike';

  public function getFieldTypes() {
    return array(
      'can_edit' => 'bool',
      'can_see_insight' => 'bool',
      'can_share' => 'bool',
      'subtype_supports_lookalike' => 'bool',
      'supports_recipient_lookalike' => 'bool',
    );
  }
}
