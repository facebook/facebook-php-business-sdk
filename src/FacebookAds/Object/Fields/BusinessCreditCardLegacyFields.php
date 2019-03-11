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

class BusinessCreditCardLegacyFields extends AbstractEnum {

  const ADDRESS = 'address';
  const BUSINESS_ID = 'business_id';
  const CREDIT_CARD_SUFFIX = 'credit_card_suffix';
  const CREDIT_CARD_TYPE = 'credit_card_type';
  const EXPIRATION_MONTH = 'expiration_month';
  const EXPIRATION_YEAR = 'expiration_year';
  const FIRST_NAME = 'first_name';
  const FRAUD_STATUS = 'fraud_status';
  const ID = 'id';
  const LAST_NAME = 'last_name';
  const MIDDLE_NAME = 'middle_name';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'business_id' => 'string',
      'credit_card_suffix' => 'string',
      'credit_card_type' => 'string',
      'expiration_month' => 'int',
      'expiration_year' => 'int',
      'first_name' => 'string',
      'fraud_status' => 'string',
      'id' => 'string',
      'last_name' => 'string',
      'middle_name' => 'string',
    );
  }
}
