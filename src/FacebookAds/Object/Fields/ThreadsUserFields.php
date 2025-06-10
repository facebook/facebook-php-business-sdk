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

class ThreadsUserFields extends AbstractEnum {

  const THREADS_USER_ID = 'threads_user_id';
  const THREADS_USER_PROFILE_PIC = 'threads_user_profile_pic';

  public function getFieldTypes() {
    return array(
      'threads_user_id' => 'string',
      'threads_user_profile_pic' => 'string',
    );
  }
}
