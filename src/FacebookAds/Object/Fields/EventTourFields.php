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

class EventTourFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const DOMINANT_COLOR = 'dominant_color';
  const END_TIME = 'end_time';
  const ID = 'id';
  const IS_PAST = 'is_past';
  const LAST_EVENT_TIMESTAMP = 'last_event_timestamp';
  const NAME = 'name';
  const NUM_EVENTS = 'num_events';
  const PHOTO = 'photo';
  const SCHEDULED_PUBLISH_TIMESTAMP = 'scheduled_publish_timestamp';
  const START_TIME = 'start_time';
  const TICKETING_URI = 'ticketing_uri';
  const VIDEO = 'video';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'dominant_color' => 'string',
      'end_time' => 'string',
      'id' => 'string',
      'is_past' => 'bool',
      'last_event_timestamp' => 'int',
      'name' => 'string',
      'num_events' => 'int',
      'photo' => 'Photo',
      'scheduled_publish_timestamp' => 'int',
      'start_time' => 'string',
      'ticketing_uri' => 'string',
      'video' => 'AdVideo',
    );
  }
}
