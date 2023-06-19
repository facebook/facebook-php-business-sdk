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

class AdImageFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const CREATED_TIME = 'created_time';
  const CREATIVES = 'creatives';
  const HASH = 'hash';
  const HEIGHT = 'height';
  const ID = 'id';
  const IS_ASSOCIATED_CREATIVES_IN_ADGROUPS = 'is_associated_creatives_in_adgroups';
  const NAME = 'name';
  const ORIGINAL_HEIGHT = 'original_height';
  const ORIGINAL_WIDTH = 'original_width';
  const OWNER_BUSINESS = 'owner_business';
  const PERMALINK_URL = 'permalink_url';
  const STATUS = 'status';
  const UPDATED_TIME = 'updated_time';
  const URL = 'url';
  const URL_128 = 'url_128';
  const WIDTH = 'width';
  const BYTES = 'bytes';
  const COPY_FROM = 'copy_from';
  const FILENAME = 'filename';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'created_time' => 'datetime',
      'creatives' => 'list<string>',
      'hash' => 'string',
      'height' => 'unsigned int',
      'id' => 'string',
      'is_associated_creatives_in_adgroups' => 'bool',
      'name' => 'string',
      'original_height' => 'unsigned int',
      'original_width' => 'unsigned int',
      'owner_business' => 'Business',
      'permalink_url' => 'string',
      'status' => 'Status',
      'updated_time' => 'datetime',
      'url' => 'string',
      'url_128' => 'string',
      'width' => 'unsigned int',
      'bytes' => 'Object',
      'copy_from' => 'Object',
      'filename' => 'file',
    );
  }
}
