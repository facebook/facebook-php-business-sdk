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

class MessengerBusinessTemplateFields extends AbstractEnum {

  const CATEGORY = 'category';
  const COMPONENTS = 'components';
  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const LANGUAGE = 'language';
  const LANGUAGE_COUNT = 'language_count';
  const LAST_UPDATED_TIME = 'last_updated_time';
  const LIBRARY_TEMPLATE_NAME = 'library_template_name';
  const NAME = 'name';
  const REJECTED_REASON = 'rejected_reason';
  const REJECTION_REASONS = 'rejection_reasons';
  const SPECIFIC_REJECTION_REASONS = 'specific_rejection_reasons';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'category' => 'string',
      'components' => 'list<Object>',
      'creation_time' => 'int',
      'id' => 'string',
      'language' => 'string',
      'language_count' => 'int',
      'last_updated_time' => 'datetime',
      'library_template_name' => 'string',
      'name' => 'string',
      'rejected_reason' => 'string',
      'rejection_reasons' => 'Object',
      'specific_rejection_reasons' => 'Object',
      'status' => 'string',
    );
  }
}
