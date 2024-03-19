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

class InsightsValueFields extends AbstractEnum {

  const CAMPAIGN_ID = 'campaign_id';
  const END_TIME = 'end_time';
  const ENGAGEMENT_SOURCE = 'engagement_source';
  const MESSAGE_TYPE = 'message_type';
  const MESSAGING_CHANNEL = 'messaging_channel';
  const RECURRING_NOTIFICATIONS_ENTRY_POINT = 'recurring_notifications_entry_point';
  const RECURRING_NOTIFICATIONS_FREQUENCY = 'recurring_notifications_frequency';
  const RECURRING_NOTIFICATIONS_TOPIC = 'recurring_notifications_topic';
  const START_TIME = 'start_time';
  const VALUE = 'value';

  public function getFieldTypes() {
    return array(
      'campaign_id' => 'string',
      'end_time' => 'datetime',
      'engagement_source' => 'string',
      'message_type' => 'string',
      'messaging_channel' => 'string',
      'recurring_notifications_entry_point' => 'string',
      'recurring_notifications_frequency' => 'string',
      'recurring_notifications_topic' => 'string',
      'start_time' => 'datetime',
      'value' => 'Object',
    );
  }
}
