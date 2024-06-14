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

class AdsNamingTemplateFields extends AbstractEnum {

  const API_FIELDS = 'api_fields';
  const API_VERSION = 'api_version';
  const FIELD_ORDER = 'field_order';
  const ID = 'id';
  const LEVEL = 'level';
  const SEPARATOR = 'separator';
  const TEMPLATE_VERSION = 'template_version';
  const USER_DEFINED_FIELDS = 'user_defined_fields';
  const VALUE_SEPARATOR = 'value_separator';

  public function getFieldTypes() {
    return array(
      'api_fields' => 'list<list<map<string, list<map<string, string>>>>>',
      'api_version' => 'string',
      'field_order' => 'list<string>',
      'id' => 'string',
      'level' => 'Level',
      'separator' => 'string',
      'template_version' => 'string',
      'user_defined_fields' => 'list<list<map<string, list<string>>>>',
      'value_separator' => 'string',
    );
  }
}
