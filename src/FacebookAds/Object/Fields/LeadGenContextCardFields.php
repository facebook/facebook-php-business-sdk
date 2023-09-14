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

class LeadGenContextCardFields extends AbstractEnum {

  const BUTTON_TEXT = 'button_text';
  const CONTENT = 'content';
  const COVER_PHOTO = 'cover_photo';
  const ID = 'id';
  const STYLE = 'style';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'button_text' => 'string',
      'content' => 'list<string>',
      'cover_photo' => 'Photo',
      'id' => 'string',
      'style' => 'string',
      'title' => 'string',
    );
  }
}
