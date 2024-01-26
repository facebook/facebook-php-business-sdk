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

class VideoCopyrightFields extends AbstractEnum {

  const CONTENT_CATEGORY = 'content_category';
  const COPYRIGHT_CONTENT_ID = 'copyright_content_id';
  const CREATOR = 'creator';
  const EXCLUDED_OWNERSHIP_SEGMENTS = 'excluded_ownership_segments';
  const ID = 'id';
  const IN_CONFLICT = 'in_conflict';
  const MONITORING_STATUS = 'monitoring_status';
  const MONITORING_TYPE = 'monitoring_type';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const REFERENCE_FILE = 'reference_file';
  const REFERENCE_FILE_DISABLED = 'reference_file_disabled';
  const REFERENCE_FILE_DISABLED_BY_OPS = 'reference_file_disabled_by_ops';
  const REFERENCE_OWNER_ID = 'reference_owner_id';
  const RULE_IDS = 'rule_ids';
  const TAGS = 'tags';
  const WHITELISTED_IDS = 'whitelisted_ids';

  public function getFieldTypes() {
    return array(
      'content_category' => 'string',
      'copyright_content_id' => 'string',
      'creator' => 'User',
      'excluded_ownership_segments' => 'list<VideoCopyrightSegment>',
      'id' => 'string',
      'in_conflict' => 'bool',
      'monitoring_status' => 'string',
      'monitoring_type' => 'string',
      'ownership_countries' => 'VideoCopyrightGeoGate',
      'reference_file' => 'CopyrightReferenceContainer',
      'reference_file_disabled' => 'bool',
      'reference_file_disabled_by_ops' => 'bool',
      'reference_owner_id' => 'string',
      'rule_ids' => 'list<VideoCopyrightRule>',
      'tags' => 'list<string>',
      'whitelisted_ids' => 'list<string>',
    );
  }
}
