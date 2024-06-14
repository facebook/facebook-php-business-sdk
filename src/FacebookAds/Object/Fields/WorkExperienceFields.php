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

class WorkExperienceFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const EMPLOYER = 'employer';
  const END_DATE = 'end_date';
  const FROM = 'from';
  const ID = 'id';
  const LOCATION = 'location';
  const POSITION = 'position';
  const PROJECTS = 'projects';
  const START_DATE = 'start_date';
  const WITH = 'with';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'employer' => 'Page',
      'end_date' => 'string',
      'from' => 'User',
      'id' => 'string',
      'location' => 'Page',
      'position' => 'Page',
      'projects' => 'list<Object>',
      'start_date' => 'string',
      'with' => 'list<User>',
    );
  }
}
