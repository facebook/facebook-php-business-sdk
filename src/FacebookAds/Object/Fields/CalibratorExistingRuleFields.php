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

class CalibratorExistingRuleFields extends AbstractEnum {

  const FIELD_7D_VOLUME = '7d_volume';
  const CREATION_SOURCE = 'creation_source';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const EVENT_TYPE = 'event_type';
  const ID = 'id';
  const RULE = 'rule';
  const RULE_TYPE = 'rule_type';
  const SAMPLE_URLS = 'sample_urls';
  const STATUS = 'status';
  const TRANSFORMS = 'transforms';

  public function getFieldTypes() {
    return array(
      '7d_volume' => 'int',
      'creation_source' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'string',
      'event_type' => 'string',
      'id' => 'string',
      'rule' => 'string',
      'rule_type' => 'string',
      'sample_urls' => 'list<string>',
      'status' => 'string',
      'transforms' => 'list<string>',
    );
  }
}
