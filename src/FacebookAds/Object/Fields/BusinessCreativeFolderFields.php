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

class BusinessCreativeFolderFields extends AbstractEnum {

  const BUSINESS = 'business';
  const CREATION_TIME = 'creation_time';
  const CREATIVE_INSIGHT_PERMISSIONS = 'creative_insight_permissions';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const MEDIA_LIBRARY_URL = 'media_library_url';
  const NAME = 'name';
  const OWNER_BUSINESS = 'owner_business';
  const PARENT_FOLDER_ID = 'parent_folder_id';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'creation_time' => 'datetime',
      'creative_insight_permissions' => 'list<map<string, string>>',
      'description' => 'string',
      'id' => 'string',
      'media_library_url' => 'string',
      'name' => 'string',
      'owner_business' => 'Business',
      'parent_folder_id' => 'string',
    );
  }
}
