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

class AdCreativePostClickConfigurationFields extends AbstractEnum {

  const POST_CLICK_ITEM_DESCRIPTION = 'post_click_item_description';
  const POST_CLICK_ITEM_HEADLINE = 'post_click_item_headline';

  public function getFieldTypes() {
    return array(
      'post_click_item_description' => 'string',
      'post_click_item_headline' => 'string',
    );
  }
}
