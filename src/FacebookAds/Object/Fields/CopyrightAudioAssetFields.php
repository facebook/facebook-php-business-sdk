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

class CopyrightAudioAssetFields extends AbstractEnum {

  const AUDIO_AVAILABILITY_STATUS = 'audio_availability_status';
  const AUDIO_LIBRARY_POLICY = 'audio_library_policy';
  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const REFERENCE_FILES = 'reference_files';
  const TITLE = 'title';
  const UPDATE_TIME = 'update_time';

  public function getFieldTypes() {
    return array(
      'audio_availability_status' => 'string',
      'audio_library_policy' => 'list<map<string, list<map<string, Object>>>>',
      'creation_time' => 'datetime',
      'id' => 'string',
      'reference_files' => 'list<Object>',
      'title' => 'string',
      'update_time' => 'datetime',
    );
  }
}
