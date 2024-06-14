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

class ReportingAudienceFields extends AbstractEnum {

  const CUSTOM_AUDIENCES = 'custom_audiences';
  const CUSTOM_AUDIENCES_URL_PARAM_NAME = 'custom_audiences_url_param_name';
  const CUSTOM_AUDIENCES_URL_PARAM_TYPE = 'custom_audiences_url_param_type';

  public function getFieldTypes() {
    return array(
      'custom_audiences' => 'list<RawCustomAudience>',
      'custom_audiences_url_param_name' => 'string',
      'custom_audiences_url_param_type' => 'string',
    );
  }
}
