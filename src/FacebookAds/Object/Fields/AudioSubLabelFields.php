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

class AudioSubLabelFields extends AbstractEnum {

  const EXPIRATION_TIMESTAMP = 'expiration_timestamp';
  const FLAGGED_TIMESTAMP = 'flagged_timestamp';
  const ID = 'id';
  const LABEL_NAME = 'label_name';
  const LAST_UPDATE_TIMESTAMP = 'last_update_timestamp';
  const NUM_AUDIO_TRACKS = 'num_audio_tracks';
  const STATE = 'state';

  public function getFieldTypes() {
    return array(
      'expiration_timestamp' => 'datetime',
      'flagged_timestamp' => 'datetime',
      'id' => 'string',
      'label_name' => 'string',
      'last_update_timestamp' => 'datetime',
      'num_audio_tracks' => 'int',
      'state' => 'string',
    );
  }
}
