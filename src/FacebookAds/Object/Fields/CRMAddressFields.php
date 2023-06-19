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

class CRMAddressFields extends AbstractEnum {

  const CITY = 'city';
  const CNPJ_TAX_ID = 'cnpj_tax_id';
  const COUNTRY = 'country';
  const ID = 'id';
  const POSTAL_CODE = 'postal_code';
  const REGISTRATION_LABEL = 'registration_label';
  const REGISTRATION_NUMBER = 'registration_number';
  const STATE = 'state';
  const STREET1 = 'street1';
  const STREET2 = 'street2';
  const STREET3 = 'street3';
  const STREET4 = 'street4';
  const VALIDATION_STATUS = 'validation_status';
  const VAT_TAX_ID = 'vat_tax_id';

  public function getFieldTypes() {
    return array(
      'city' => 'string',
      'cnpj_tax_id' => 'string',
      'country' => 'string',
      'id' => 'string',
      'postal_code' => 'string',
      'registration_label' => 'string',
      'registration_number' => 'string',
      'state' => 'string',
      'street1' => 'string',
      'street2' => 'string',
      'street3' => 'string',
      'street4' => 'string',
      'validation_status' => 'string',
      'vat_tax_id' => 'string',
    );
  }
}
