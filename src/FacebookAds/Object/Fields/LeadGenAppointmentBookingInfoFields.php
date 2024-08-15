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

class LeadGenAppointmentBookingInfoFields extends AbstractEnum {

  const ADVERTISER_TIMEZONE_OFFSET = 'advertiser_timezone_offset';
  const APPOINTMENT_DURATIONS = 'appointment_durations';
  const APPOINTMENT_SLOTS_BY_DAY = 'appointment_slots_by_day';

  public function getFieldTypes() {
    return array(
      'advertiser_timezone_offset' => 'string',
      'appointment_durations' => 'list<string>',
      'appointment_slots_by_day' => 'list<LeadGenAppointmentSlotsByDay>',
    );
  }
}
