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

class ProductItemLocalInfoFields extends AbstractEnum {

  const AVAILABILITY_CIRCLE_ORIGIN = 'availability_circle_origin';
  const AVAILABILITY_CIRCLE_RADIUS = 'availability_circle_radius';
  const AVAILABILITY_CIRCLE_RADIUS_UNIT = 'availability_circle_radius_unit';
  const AVAILABILITY_POLYGON_COORDINATES = 'availability_polygon_coordinates';
  const AVAILABILITY_POSTAL_CODES = 'availability_postal_codes';
  const AVAILABILITY_SOURCE = 'availability_source';
  const ID = 'id';
  const INFERRED_CIRCLE_ORIGIN = 'inferred_circle_origin';
  const INFERRED_CIRCLE_RADIUS = 'inferred_circle_radius';

  public function getFieldTypes() {
    return array(
      'availability_circle_origin' => 'ProductItemLocalInfoLatLongShape',
      'availability_circle_radius' => 'float',
      'availability_circle_radius_unit' => 'string',
      'availability_polygon_coordinates' => 'list<ProductItemLocalInfoLatLongShape>',
      'availability_postal_codes' => 'list<string>',
      'availability_source' => 'string',
      'id' => 'string',
      'inferred_circle_origin' => 'ProductItemLocalInfoLatLongShape',
      'inferred_circle_radius' => 'float',
    );
  }
}
