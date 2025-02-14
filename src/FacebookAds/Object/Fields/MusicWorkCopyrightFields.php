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

class MusicWorkCopyrightFields extends AbstractEnum {

  const AVAILABLE_UI_ACTIONS = 'available_ui_actions';
  const CLAIM_STATUS = 'claim_status';
  const CREATION_TIME = 'creation_time';
  const DISPLAYED_FB_MATCHES_COUNT = 'displayed_fb_matches_count';
  const DISPLAYED_IG_MATCHES_COUNT = 'displayed_ig_matches_count';
  const DISPLAYED_MATCHES_COUNT = 'displayed_matches_count';
  const HAS_REV_SHARE_ELIGIBLE_ISRCS = 'has_rev_share_eligible_isrcs';
  const ID = 'id';
  const IS_LINKING_REQUIRED_TO_MONETIZE_FOR_MANUAL_CLAIM = 'is_linking_required_to_monetize_for_manual_claim';
  const MATCH_RULE = 'match_rule';
  const STATUS = 'status';
  const TAGS = 'tags';
  const UPDATE_TIME = 'update_time';

  public function getFieldTypes() {
    return array(
      'available_ui_actions' => 'list<string>',
      'claim_status' => 'string',
      'creation_time' => 'datetime',
      'displayed_fb_matches_count' => 'int',
      'displayed_ig_matches_count' => 'int',
      'displayed_matches_count' => 'int',
      'has_rev_share_eligible_isrcs' => 'bool',
      'id' => 'string',
      'is_linking_required_to_monetize_for_manual_claim' => 'bool',
      'match_rule' => 'VideoCopyrightRule',
      'status' => 'string',
      'tags' => 'list<string>',
      'update_time' => 'datetime',
    );
  }
}
