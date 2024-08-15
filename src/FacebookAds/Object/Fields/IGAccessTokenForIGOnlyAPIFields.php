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

class IGAccessTokenForIGOnlyAPIFields extends AbstractEnum {

  const ACCESS_TOKEN = 'access_token';
  const EXPIRES_IN = 'expires_in';
  const TOKEN_TYPE = 'token_type';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'access_token' => 'string',
      'expires_in' => 'int',
      'token_type' => 'string',
      'id' => 'string',
    );
  }
}
