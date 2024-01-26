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

class AdCreativePhotoDataFields extends AbstractEnum {

  const BRANDED_CONTENT_SHARED_TO_SPONSOR_STATUS = 'branded_content_shared_to_sponsor_status';
  const BRANDED_CONTENT_SPONSOR_PAGE_ID = 'branded_content_sponsor_page_id';
  const CAPTION = 'caption';
  const IMAGE_HASH = 'image_hash';
  const PAGE_WELCOME_MESSAGE = 'page_welcome_message';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'branded_content_shared_to_sponsor_status' => 'string',
      'branded_content_sponsor_page_id' => 'string',
      'caption' => 'string',
      'image_hash' => 'string',
      'page_welcome_message' => 'string',
      'url' => 'string',
    );
  }
}
