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

class AdCreativePlaceDataFields extends AbstractEnum {

  const ADDRESS_STRING = 'address_string';
  const LABEL = 'label';
  const LATITUDE = 'latitude';
  const LOCATION_SOURCE_ID = 'location_source_id';
  const LONGITUDE = 'longitude';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'address_string' => 'string',
      'label' => 'string',
      'latitude' => 'float',
      'location_source_id' => 'string',
      'longitude' => 'float',
      'type' => 'string',
    );
  }
}
