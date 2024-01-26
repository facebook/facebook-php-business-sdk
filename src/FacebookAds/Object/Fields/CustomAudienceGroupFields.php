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

class CustomAudienceGroupFields extends AbstractEnum {

  const AUDIENCE_TYPE_PARAM_NAME = 'audience_type_param_name';
  const EXISTING_CUSTOMER_TAG = 'existing_customer_tag';
  const NEW_CUSTOMER_TAG = 'new_customer_tag';

  public function getFieldTypes() {
    return array(
      'audience_type_param_name' => 'string',
      'existing_customer_tag' => 'string',
      'new_customer_tag' => 'string',
    );
  }
}
