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

class GroupFields extends AbstractEnum {

  const ARCHIVED = 'archived';
  const COVER = 'cover';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const EMAIL = 'email';
  const ICON = 'icon';
  const ID = 'id';
  const INSTALL = 'install';
  const LINK = 'link';
  const MEMBER_COUNT = 'member_count';
  const MEMBER_REQUEST_COUNT = 'member_request_count';
  const NAME = 'name';
  const PARENT = 'parent';
  const PERMISSIONS = 'permissions';
  const PRIVACY = 'privacy';
  const PURPOSE = 'purpose';
  const SUBDOMAIN = 'subdomain';
  const UPDATED_TIME = 'updated_time';
  const VENUE = 'venue';

  public function getFieldTypes() {
    return array(
      'archived' => 'bool',
      'cover' => 'CoverPhoto',
      'created_time' => 'datetime',
      'description' => 'string',
      'email' => 'string',
      'icon' => 'string',
      'id' => 'string',
      'install' => 'Object',
      'link' => 'string',
      'member_count' => 'unsigned int',
      'member_request_count' => 'unsigned int',
      'name' => 'string',
      'parent' => 'Object',
      'permissions' => 'list<string>',
      'privacy' => 'string',
      'purpose' => 'string',
      'subdomain' => 'string',
      'updated_time' => 'datetime',
      'venue' => 'Location',
    );
  }
}
