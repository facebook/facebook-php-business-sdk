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

class PagePostExperimentFields extends AbstractEnum {

  const AUTO_RESOLVE_SETTINGS = 'auto_resolve_settings';
  const CONTROL_VIDEO_ID = 'control_video_id';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DECLARED_WINNING_TIME = 'declared_winning_time';
  const DECLARED_WINNING_VIDEO_ID = 'declared_winning_video_id';
  const DESCRIPTION = 'description';
  const EXPERIMENT_VIDEO_IDS = 'experiment_video_ids';
  const ID = 'id';
  const INSIGHT_SNAPSHOTS = 'insight_snapshots';
  const NAME = 'name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const PUBLISH_STATUS = 'publish_status';
  const PUBLISH_TIME = 'publish_time';
  const SCHEDULED_EXPERIMENT_TIMESTAMP = 'scheduled_experiment_timestamp';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'auto_resolve_settings' => 'Object',
      'control_video_id' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'User',
      'declared_winning_time' => 'datetime',
      'declared_winning_video_id' => 'string',
      'description' => 'string',
      'experiment_video_ids' => 'list<string>',
      'id' => 'string',
      'insight_snapshots' => 'list<map<datetime, list<map<int, Object>>>>',
      'name' => 'string',
      'optimization_goal' => 'string',
      'publish_status' => 'string',
      'publish_time' => 'datetime',
      'scheduled_experiment_timestamp' => 'datetime',
      'updated_time' => 'datetime',
    );
  }
}
