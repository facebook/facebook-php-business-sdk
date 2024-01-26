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

class AdCustomizationRuleSpecFields extends AbstractEnum {

  const CAPTION = 'caption';
  const CUSTOMIZATION_SPEC = 'customization_spec';
  const DESCRIPTION = 'description';
  const IMAGE_HASH = 'image_hash';
  const LINK = 'link';
  const MESSAGE = 'message';
  const NAME = 'name';
  const PRIORITY = 'priority';
  const TEMPLATE_URL_SPEC = 'template_url_spec';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'caption' => 'string',
      'customization_spec' => 'Object',
      'description' => 'string',
      'image_hash' => 'string',
      'link' => 'string',
      'message' => 'string',
      'name' => 'string',
      'priority' => 'int',
      'template_url_spec' => 'AdCreativeTemplateURLSpec',
      'video_id' => 'int',
    );
  }
}
