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

class AdCustomDerivedMetricsFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const BUSINESS = 'business';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const CUSTOM_DERIVED_METRIC_TYPE = 'custom_derived_metric_type';
  const DELETION_TIME = 'deletion_time';
  const DELETOR = 'deletor';
  const DESCRIPTION = 'description';
  const FORMAT_TYPE = 'format_type';
  const FORMULA = 'formula';
  const HAS_ATTRIBUTION_WINDOWS = 'has_attribution_windows';
  const HAS_INLINE_ATTRIBUTION_WINDOW = 'has_inline_attribution_window';
  const ID = 'id';
  const NAME = 'name';
  const PERMISSION = 'permission';
  const SAVED_REPORT_ID = 'saved_report_id';
  const SCOPE = 'scope';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'business' => 'Business',
      'creation_time' => 'datetime',
      'creator' => 'Profile',
      'custom_derived_metric_type' => 'string',
      'deletion_time' => 'datetime',
      'deletor' => 'Profile',
      'description' => 'string',
      'format_type' => 'string',
      'formula' => 'string',
      'has_attribution_windows' => 'bool',
      'has_inline_attribution_window' => 'bool',
      'id' => 'string',
      'name' => 'string',
      'permission' => 'string',
      'saved_report_id' => 'string',
      'scope' => 'string',
    );
  }
}
