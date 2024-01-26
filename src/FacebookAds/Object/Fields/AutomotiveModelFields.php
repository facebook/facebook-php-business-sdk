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

class AutomotiveModelFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const AUTOMOTIVE_MODEL_ID = 'automotive_model_id';
  const AVAILABILITY = 'availability';
  const BODY_STYLE = 'body_style';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const CUSTOM_LABEL_0 = 'custom_label_0';
  const DESCRIPTION = 'description';
  const DRIVETRAIN = 'drivetrain';
  const EXTERIOR_COLOR = 'exterior_color';
  const FINANCE_DESCRIPTION = 'finance_description';
  const FINANCE_TYPE = 'finance_type';
  const FUEL_TYPE = 'fuel_type';
  const GENERATION = 'generation';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const INTERIOR_COLOR = 'interior_color';
  const INTERIOR_UPHOLSTERY = 'interior_upholstery';
  const MAKE = 'make';
  const MODEL = 'model';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TITLE = 'title';
  const TRANSMISSION = 'transmission';
  const TRIM = 'trim';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VISIBILITY = 'visibility';
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'applinks' => 'CatalogItemAppLinks',
      'automotive_model_id' => 'string',
      'availability' => 'string',
      'body_style' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'custom_label_0' => 'string',
      'description' => 'string',
      'drivetrain' => 'string',
      'exterior_color' => 'string',
      'finance_description' => 'string',
      'finance_type' => 'string',
      'fuel_type' => 'string',
      'generation' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'interior_color' => 'string',
      'interior_upholstery' => 'string',
      'make' => 'string',
      'model' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'title' => 'string',
      'transmission' => 'string',
      'trim' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
      'visibility' => 'Visibility',
      'year' => 'int',
    );
  }
}
