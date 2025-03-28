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

class AdCreativeRegionalRegulationDisclaimerFields extends AbstractEnum {

  const AUSTRALIA_FINSERV = 'australia_finserv';
  const INDIA_FINSERV = 'india_finserv';
  const SINGAPORE_UNIVERSAL = 'singapore_universal';
  const TAIWAN_FINSERV = 'taiwan_finserv';
  const TAIWAN_UNIVERSAL = 'taiwan_universal';

  public function getFieldTypes() {
    return array(
      'australia_finserv' => 'Object',
      'india_finserv' => 'Object',
      'singapore_universal' => 'Object',
      'taiwan_finserv' => 'Object',
      'taiwan_universal' => 'Object',
    );
  }
}
