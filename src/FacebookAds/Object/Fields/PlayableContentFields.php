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

class PlayableContentFields extends AbstractEnum {

  const ID = 'id';
  const NAME = 'name';
  const OWNER = 'owner';
  const APP_ID = 'app_id';
  const SESSION_ID = 'session_id';
  const SOURCE = 'source';
  const SOURCE_URL = 'source_url';
  const SOURCE_ZIP = 'source_zip';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'name' => 'string',
      'owner' => 'Profile',
      'app_id' => 'string',
      'session_id' => 'string',
      'source' => 'file',
      'source_url' => 'string',
      'source_zip' => 'file',
    );
  }
}
