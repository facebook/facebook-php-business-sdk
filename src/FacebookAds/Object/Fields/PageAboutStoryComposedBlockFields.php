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

class PageAboutStoryComposedBlockFields extends AbstractEnum {

  const DEPTH = 'depth';
  const ENTITY_RANGES = 'entity_ranges';
  const INLINE_STYLE_RANGES = 'inline_style_ranges';
  const TEXT = 'text';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'depth' => 'int',
      'entity_ranges' => 'list<PageAboutStoryComposedBlockEntityRanges>',
      'inline_style_ranges' => 'list<PageAboutStoryComposedBlockInlineStyle>',
      'text' => 'string',
      'type' => 'string',
    );
  }
}
