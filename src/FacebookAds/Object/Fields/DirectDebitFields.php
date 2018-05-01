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

class DirectDebitFields extends AbstractEnum {

  const BANK_ACCOUNT_LAST_4 = 'bank_account_last_4';
  const BANK_CODE_LAST_4 = 'bank_code_last_4';
  const BANK_NAME = 'bank_name';
  const DEFAULT_RECEIVING_METHOD_PRODUCTS = 'default_receiving_method_products';
  const DISPLAY_STRING = 'display_string';
  const ID = 'id';
  const LAST_FOUR_DIGITS = 'last_four_digits';
  const ONBOARDING_URL = 'onboarding_url';
  const OWNER_NAME = 'owner_name';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'bank_account_last_4' => 'string',
      'bank_code_last_4' => 'string',
      'bank_name' => 'string',
      'default_receiving_method_products' => 'list<string>',
      'display_string' => 'string',
      'id' => 'string',
      'last_four_digits' => 'string',
      'onboarding_url' => 'string',
      'owner_name' => 'string',
      'status' => 'int',
    );
  }
}
