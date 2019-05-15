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

class AdContractFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_MGR_FBID = 'account_mgr_fbid';
  const ACCOUNT_MGR_NAME = 'account_mgr_name';
  const ADOPS_PERSON_NAME = 'adops_person_name';
  const ADVERTISER_ADDRESS_FBID = 'advertiser_address_fbid';
  const ADVERTISER_FBID = 'advertiser_fbid';
  const ADVERTISER_NAME = 'advertiser_name';
  const AGENCY_DISCOUNT = 'agency_discount';
  const AGENCY_NAME = 'agency_name';
  const BILL_TO_ADDRESS_FBID = 'bill_to_address_fbid';
  const BILL_TO_FBID = 'bill_to_fbid';
  const CAMPAIGN_NAME = 'campaign_name';
  const CREATED_BY = 'created_by';
  const CREATED_DATE = 'created_date';
  const CUSTOMER_IO = 'customer_io';
  const IO_NUMBER = 'io_number';
  const IO_TERMS = 'io_terms';
  const IO_TYPE = 'io_type';
  const LAST_UPDATED_BY = 'last_updated_by';
  const LAST_UPDATED_DATE = 'last_updated_date';
  const MAX_END_DATE = 'max_end_date';
  const MDC_FBID = 'mdc_fbid';
  const MEDIA_PLAN_NUMBER = 'media_plan_number';
  const MIN_START_DATE = 'min_start_date';
  const MSA_CONTRACT = 'msa_contract';
  const PAYMENT_TERMS = 'payment_terms';
  const REV_HOLD_FLAG = 'rev_hold_flag';
  const REV_HOLD_RELEASED_BY = 'rev_hold_released_by';
  const REV_HOLD_RELEASED_ON = 'rev_hold_released_on';
  const SALESREP_FBID = 'salesrep_fbid';
  const SALESREP_NAME = 'salesrep_name';
  const SOLD_TO_ADDRESS_FBID = 'sold_to_address_fbid';
  const SOLD_TO_FBID = 'sold_to_fbid';
  const STATUS = 'status';
  const SUBVERTICAL = 'subvertical';
  const THIRDPARTY_BILLED = 'thirdparty_billed';
  const THIRDPARTY_PASSWORD = 'thirdparty_password';
  const THIRDPARTY_UID = 'thirdparty_uid';
  const THIRDPARTY_URL = 'thirdparty_url';
  const VAT_COUNTRY = 'vat_country';
  const VERSION = 'version';
  const VERTICAL = 'vertical';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'account_mgr_fbid' => 'string',
      'account_mgr_name' => 'string',
      'adops_person_name' => 'string',
      'advertiser_address_fbid' => 'string',
      'advertiser_fbid' => 'string',
      'advertiser_name' => 'string',
      'agency_discount' => 'float',
      'agency_name' => 'string',
      'bill_to_address_fbid' => 'string',
      'bill_to_fbid' => 'string',
      'campaign_name' => 'string',
      'created_by' => 'string',
      'created_date' => 'unsigned int',
      'customer_io' => 'string',
      'io_number' => 'unsigned int',
      'io_terms' => 'string',
      'io_type' => 'string',
      'last_updated_by' => 'string',
      'last_updated_date' => 'unsigned int',
      'max_end_date' => 'unsigned int',
      'mdc_fbid' => 'string',
      'media_plan_number' => 'string',
      'min_start_date' => 'unsigned int',
      'msa_contract' => 'string',
      'payment_terms' => 'string',
      'rev_hold_flag' => 'bool',
      'rev_hold_released_by' => 'int',
      'rev_hold_released_on' => 'unsigned int',
      'salesrep_fbid' => 'string',
      'salesrep_name' => 'string',
      'sold_to_address_fbid' => 'string',
      'sold_to_fbid' => 'string',
      'status' => 'string',
      'subvertical' => 'string',
      'thirdparty_billed' => 'unsigned int',
      'thirdparty_password' => 'string',
      'thirdparty_uid' => 'string',
      'thirdparty_url' => 'string',
      'vat_country' => 'string',
      'version' => 'unsigned int',
      'vertical' => 'string',
    );
  }
}
