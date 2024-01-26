<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
