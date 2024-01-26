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

class BusinessOwnedObjectOnBehalfOfRequestFields extends AbstractEnum {

  const BUSINESS_OWNED_OBJECT = 'business_owned_object';
  const ID = 'id';
  const RECEIVING_BUSINESS = 'receiving_business';
  const REQUESTING_BUSINESS = 'requesting_business';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'business_owned_object' => 'string',
      'id' => 'string',
      'receiving_business' => 'Business',
      'requesting_business' => 'Business',
      'status' => 'string',
    );
  }
}
