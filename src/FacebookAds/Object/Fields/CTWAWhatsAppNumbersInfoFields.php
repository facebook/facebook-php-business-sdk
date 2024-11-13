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

class CTWAWhatsAppNumbersInfoFields extends AbstractEnum {

  const CAN_MANAGE_WA_FLOWS = 'can_manage_wa_flows';
  const FORMATTED_WHATSAPP_NUMBER = 'formatted_whatsapp_number';
  const IS_BUSINESS_NUMBER = 'is_business_number';
  const NUMBER_COUNTRY_PREFIX = 'number_country_prefix';
  const PAGE_WHATSAPP_NUMBER_ID = 'page_whatsapp_number_id';
  const WABA_ID = 'waba_id';
  const WHATSAPP_NUMBER = 'whatsapp_number';
  const WHATSAPP_SMB_DEVICE = 'whatsapp_smb_device';

  public function getFieldTypes() {
    return array(
      'can_manage_wa_flows' => 'bool',
      'formatted_whatsapp_number' => 'string',
      'is_business_number' => 'bool',
      'number_country_prefix' => 'string',
      'page_whatsapp_number_id' => 'string',
      'waba_id' => 'string',
      'whatsapp_number' => 'string',
      'whatsapp_smb_device' => 'string',
    );
  }
}
