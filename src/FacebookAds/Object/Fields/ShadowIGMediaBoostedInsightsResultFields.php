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

class ShadowIGMediaBoostedInsightsResultFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const NAME = 'name';
  const ORGANIC_MEDIA_ID = 'organic_media_id';
  const SOURCE_TYPE = 'source_type';
  const TITLE = 'title';
  const VALUES = 'values';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'name' => 'string',
      'organic_media_id' => 'string',
      'source_type' => 'string',
      'title' => 'string',
      'values' => 'list<Object>',
    );
  }
}
