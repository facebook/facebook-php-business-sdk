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

class ExtendedCreditApplicationFields extends AbstractEnum {

  const BILLING_COUNTRY = 'billing_country';
  const CITY = 'city';
  const CNPJ = 'cnpj';
  const COUNTRY = 'country';
  const DUNS_NUMBER = 'duns_number';
  const ID = 'id';
  const INVOICE_EMAIL_ADDRESS = 'invoice_email_address';
  const LEGAL_ENTITY_NAME = 'legal_entity_name';
  const PHONE_NUMBER = 'phone_number';
  const POSTAL_CODE = 'postal_code';
  const PRODUCT_TYPE = 'product_type';
  const REGISTRATION_NUMBER = 'registration_number';
  const RUN_ID = 'run_id';
  const STATE = 'state';
  const STATUS = 'status';
  const STREET1 = 'street1';
  const STREET2 = 'street2';
  const SUBMITTER = 'submitter';
  const TAX_ID = 'tax_id';
  const TERMS = 'terms';

  public function getFieldTypes() {
    return array(
      'billing_country' => 'string',
      'city' => 'string',
      'cnpj' => 'string',
      'country' => 'string',
      'duns_number' => 'string',
      'id' => 'string',
      'invoice_email_address' => 'string',
      'legal_entity_name' => 'string',
      'phone_number' => 'string',
      'postal_code' => 'string',
      'product_type' => 'string',
      'registration_number' => 'string',
      'run_id' => 'string',
      'state' => 'string',
      'status' => 'string',
      'street1' => 'string',
      'street2' => 'string',
      'submitter' => 'User',
      'tax_id' => 'string',
      'terms' => 'string',
    );
  }
}
