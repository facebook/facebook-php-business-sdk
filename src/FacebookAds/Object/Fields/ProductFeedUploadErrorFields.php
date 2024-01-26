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

class ProductFeedUploadErrorFields extends AbstractEnum {

  const AFFECTED_SURFACES = 'affected_surfaces';
  const DESCRIPTION = 'description';
  const ERROR_TYPE = 'error_type';
  const ID = 'id';
  const SEVERITY = 'severity';
  const SUMMARY = 'summary';
  const TOTAL_COUNT = 'total_count';

  public function getFieldTypes() {
    return array(
      'affected_surfaces' => 'list<AffectedSurfaces>',
      'description' => 'string',
      'error_type' => 'string',
      'id' => 'string',
      'severity' => 'Severity',
      'summary' => 'string',
      'total_count' => 'unsigned int',
    );
  }
}
