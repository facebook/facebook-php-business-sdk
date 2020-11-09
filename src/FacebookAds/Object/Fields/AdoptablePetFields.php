<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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

  const ADDRESS = 'address';
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

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
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
    );
  }
}
