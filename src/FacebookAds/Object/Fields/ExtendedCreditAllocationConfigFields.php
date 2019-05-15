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

class ExtendedCreditAllocationConfigFields extends AbstractEnum {

  const CURRENCY_AMOUNT = 'currency_amount';
  const ID = 'id';
  const LIABILITY_TYPE = 'liability_type';
  const OWNING_BUSINESS = 'owning_business';
  const OWNING_CREDENTIAL = 'owning_credential';
  const PARTITION_TYPE = 'partition_type';
  const RECEIVING_BUSINESS = 'receiving_business';
  const RECEIVING_CREDENTIAL = 'receiving_credential';
  const REQUEST_STATUS = 'request_status';
  const SEND_BILL_TO = 'send_bill_to';

  public function getFieldTypes() {
    return array(
      'currency_amount' => 'CurrencyAmount',
      'id' => 'string',
      'liability_type' => 'string',
      'owning_business' => 'Business',
      'owning_credential' => 'ExtendedCredit',
      'partition_type' => 'string',
      'receiving_business' => 'Business',
      'receiving_credential' => 'ExtendedCredit',
      'request_status' => 'string',
      'send_bill_to' => 'string',
    );
  }
}
