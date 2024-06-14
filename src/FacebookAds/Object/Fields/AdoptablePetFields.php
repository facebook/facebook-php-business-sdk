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

class AdoptablePetFields extends AbstractEnum {

  const ADOPTABLE_PET_ID = 'adoptable_pet_id';
  const ADOPTION_APPLICATION_FORM_URL = 'adoption_application_form_url';
  const AGE_BUCKET = 'age_bucket';
  const ANIMAL_TYPE = 'animal_type';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const BREED = 'breed';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const COAT_LENGTH = 'coat_length';
  const COLOR = 'color';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const FEATURES = 'features';
  const GENDER = 'gender';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const NAME = 'name';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SECONDARY_COLOR = 'secondary_color';
  const SHELTER_EMAIL = 'shelter_email';
  const SHELTER_NAME = 'shelter_name';
  const SHELTER_PAGE_ID = 'shelter_page_id';
  const SHELTER_PHONE = 'shelter_phone';
  const SIZE = 'size';
  const TERTIARY_COLOR = 'tertiary_color';
  const URL = 'url';
  const VISIBILITY = 'visibility';

  public function getFieldTypes() {
    return array(
      'adoptable_pet_id' => 'string',
      'adoption_application_form_url' => 'string',
      'age_bucket' => 'string',
      'animal_type' => 'string',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'string',
      'breed' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'coat_length' => 'string',
      'color' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'features' => 'list<string>',
      'gender' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'name' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'secondary_color' => 'string',
      'shelter_email' => 'string',
      'shelter_name' => 'string',
      'shelter_page_id' => 'Page',
      'shelter_phone' => 'string',
      'size' => 'string',
      'tertiary_color' => 'string',
      'url' => 'string',
      'visibility' => 'Visibility',
    );
  }
}
