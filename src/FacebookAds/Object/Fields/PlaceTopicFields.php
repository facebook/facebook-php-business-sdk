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

class PlaceTopicFields extends AbstractEnum {

  const COUNT = 'count';
  const HAS_CHILDREN = 'has_children';
  const ICON_URL = 'icon_url';
  const ID = 'id';
  const NAME = 'name';
  const PARENT_IDS = 'parent_ids';
  const PLURAL_NAME = 'plural_name';
  const TOP_SUBTOPIC_NAMES = 'top_subtopic_names';

  public function getFieldTypes() {
    return array(
      'count' => 'unsigned int',
      'has_children' => 'bool',
      'icon_url' => 'string',
      'id' => 'string',
      'name' => 'string',
      'parent_ids' => 'list<string>',
      'plural_name' => 'string',
      'top_subtopic_names' => 'list<string>',
    );
  }
}
