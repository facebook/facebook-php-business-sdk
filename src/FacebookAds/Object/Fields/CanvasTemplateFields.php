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

class CanvasTemplateFields extends AbstractEnum {

  const CHANNELS = 'channels';
  const DESCRIPTION = 'description';
  const DOCUMENT = 'document';
  const ID = 'id';
  const IS_MULTI_TAB_SUPPORTABLE = 'is_multi_tab_supportable';
  const IS_NEW = 'is_new';
  const NAME = 'name';
  const OBJECTIVES = 'objectives';
  const OWNER_ID = 'owner_id';
  const REQUIRED_CAPABILITIES = 'required_capabilities';
  const SNAPSHOT_PHOTO = 'snapshot_photo';
  const STATUS = 'status';
  const SUB_VERTICALS = 'sub_verticals';
  const VERTICALS = 'verticals';

  public function getFieldTypes() {
    return array(
      'channels' => 'list<map<string, list<map<string, string>>>>',
      'description' => 'string',
      'document' => 'Canvas',
      'id' => 'string',
      'is_multi_tab_supportable' => 'bool',
      'is_new' => 'bool',
      'name' => 'string',
      'objectives' => 'list<map<Object, Object>>',
      'owner_id' => 'User',
      'required_capabilities' => 'list<string>',
      'snapshot_photo' => 'Photo',
      'status' => 'string',
      'sub_verticals' => 'list<string>',
      'verticals' => 'list<map<string, string>>',
    );
  }
}
