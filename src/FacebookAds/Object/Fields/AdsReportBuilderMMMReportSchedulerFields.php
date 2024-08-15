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

class AdsReportBuilderMMMReportSchedulerFields extends AbstractEnum {

  const AD_ACCOUNT_IDS = 'ad_account_ids';
  const FILTERING = 'filtering';
  const ID = 'id';
  const REPORT_NAME = 'report_name';
  const SCHEDULE_FREQUENCY = 'schedule_frequency';

  public function getFieldTypes() {
    return array(
      'ad_account_ids' => 'list<string>',
      'filtering' => 'list<Object>',
      'id' => 'string',
      'report_name' => 'string',
      'schedule_frequency' => 'string',
    );
  }
}
