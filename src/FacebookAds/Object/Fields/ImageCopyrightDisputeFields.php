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

class ImageCopyrightDisputeFields extends AbstractEnum {

  const APPEAL_FORM_DATA = 'appeal_form_data';
  const DISPUTE_FORM_DATA = 'dispute_form_data';
  const EXPIRATION_TIME = 'expiration_time';
  const ID = 'id';
  const MATCH_ID = 'match_id';
  const STATUS = 'status';
  const TIME_APPEALED = 'time_appealed';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';

  public function getFieldTypes() {
    return array(
      'appeal_form_data' => 'string',
      'dispute_form_data' => 'string',
      'expiration_time' => 'datetime',
      'id' => 'string',
      'match_id' => 'string',
      'status' => 'string',
      'time_appealed' => 'datetime',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
    );
  }
}
