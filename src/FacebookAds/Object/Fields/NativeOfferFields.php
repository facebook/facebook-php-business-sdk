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

class NativeOfferFields extends AbstractEnum {

  const BARCODE_PHOTO = 'barcode_photo';
  const BARCODE_PHOTO_URI = 'barcode_photo_uri';
  const BARCODE_TYPE = 'barcode_type';
  const BARCODE_VALUE = 'barcode_value';
  const BLOCK_RESHARES = 'block_reshares';
  const DETAILS = 'details';
  const DISABLE_LOCATION = 'disable_location';
  const DISCOUNTS = 'discounts';
  const EXPIRATION_TIME = 'expiration_time';
  const ID = 'id';
  const INSTORE_CODE = 'instore_code';
  const LOCATION_TYPE = 'location_type';
  const MAX_SAVE_COUNT = 'max_save_count';
  const ONLINE_CODE = 'online_code';
  const PAGE = 'page';
  const PAGE_SET_ID = 'page_set_id';
  const REDEMPTION_CODE = 'redemption_code';
  const REDEMPTION_LINK = 'redemption_link';
  const SAVE_COUNT = 'save_count';
  const TERMS = 'terms';
  const TITLE = 'title';
  const TOTAL_UNIQUE_CODES = 'total_unique_codes';
  const UNIQUE_CODES = 'unique_codes';
  const UNIQUE_CODES_FILE_CODE_TYPE = 'unique_codes_file_code_type';
  const UNIQUE_CODES_FILE_NAME = 'unique_codes_file_name';
  const UNIQUE_CODES_FILE_UPLOAD_STATUS = 'unique_codes_file_upload_status';

  public function getFieldTypes() {
    return array(
      'barcode_photo' => 'string',
      'barcode_photo_uri' => 'string',
      'barcode_type' => 'string',
      'barcode_value' => 'string',
      'block_reshares' => 'bool',
      'details' => 'string',
      'disable_location' => 'bool',
      'discounts' => 'list<NativeOfferDiscount>',
      'expiration_time' => 'datetime',
      'id' => 'string',
      'instore_code' => 'string',
      'location_type' => 'string',
      'max_save_count' => 'int',
      'online_code' => 'string',
      'page' => 'Page',
      'page_set_id' => 'string',
      'redemption_code' => 'string',
      'redemption_link' => 'string',
      'save_count' => 'int',
      'terms' => 'string',
      'title' => 'string',
      'total_unique_codes' => 'string',
      'unique_codes' => 'string',
      'unique_codes_file_code_type' => 'string',
      'unique_codes_file_name' => 'string',
      'unique_codes_file_upload_status' => 'string',
    );
  }
}
