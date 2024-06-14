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

class EntWithSponsorFields extends AbstractEnum {

  const ID = 'id';
  const OWNER_LINKED_INSTAGRAM_USER_V1_ID = 'owner_linked_instagram_user_v1_id';
  const OWNER_PICTURE = 'owner_picture';
  const POST_ID = 'post_id';
  const POST_INFO = 'post_info';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'owner_linked_instagram_user_v1_id' => 'string',
      'owner_picture' => 'string',
      'post_id' => 'string',
      'post_info' => 'Post',
    );
  }
}
