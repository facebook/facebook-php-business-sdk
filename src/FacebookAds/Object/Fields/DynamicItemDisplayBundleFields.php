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

class DynamicItemDisplayBundleFields extends AbstractEnum {

  const ADDITIONAL_URLS = 'additional_urls';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const NAME = 'name';
  const PRODUCT_SET = 'product_set';
  const TEXT_TOKENS = 'text_tokens';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'additional_urls' => 'list<map<string, string>>',
      'description' => 'string',
      'id' => 'string',
      'name' => 'string',
      'product_set' => 'ProductSet',
      'text_tokens' => 'list<map<string, string>>',
      'url' => 'string',
    );
  }
}
