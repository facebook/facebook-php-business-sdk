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

class CommerceOrderTransactionDetailFields extends AbstractEnum {

  const NET_PAYMENT_AMOUNT = 'net_payment_amount';
  const ORDER_DETAILS = 'order_details';
  const PAYOUT_REFERENCE_ID = 'payout_reference_id';
  const PROCESSING_FEE = 'processing_fee';
  const TAX_RATE = 'tax_rate';
  const TRANSACTION_DATE = 'transaction_date';
  const TRANSACTION_TYPE = 'transaction_type';
  const TRANSFER_ID = 'transfer_id';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'net_payment_amount' => 'Object',
      'order_details' => 'CommerceOrder',
      'payout_reference_id' => 'string',
      'processing_fee' => 'Object',
      'tax_rate' => 'string',
      'transaction_date' => 'string',
      'transaction_type' => 'string',
      'transfer_id' => 'string',
      'id' => 'string',
    );
  }
}
