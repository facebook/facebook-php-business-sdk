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

class PageAboutStoryFields extends AbstractEnum {

  const COMPOSED_TEXT = 'composed_text';
  const COVER_PHOTO = 'cover_photo';
  const ENTITY_MAP = 'entity_map';
  const ID = 'id';
  const IS_PUBLISHED = 'is_published';
  const PAGE_ID = 'page_id';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'composed_text' => 'list<PageAboutStoryComposedBlock>',
      'cover_photo' => 'Photo',
      'entity_map' => 'list<Object>',
      'id' => 'string',
      'is_published' => 'bool',
      'page_id' => 'string',
      'title' => 'string',
    );
  }
}
