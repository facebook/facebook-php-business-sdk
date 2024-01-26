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

class AdCreativeLinkDataCallToActionValueFields extends AbstractEnum {

  const APP_DESTINATION = 'app_destination';
  const APP_LINK = 'app_link';
  const APPLICATION = 'application';
  const EVENT_ID = 'event_id';
  const LEAD_GEN_FORM_ID = 'lead_gen_form_id';
  const LINK = 'link';
  const LINK_CAPTION = 'link_caption';
  const LINK_FORMAT = 'link_format';
  const PAGE = 'page';
  const PRODUCT_LINK = 'product_link';
  const WHATSAPP_NUMBER = 'whatsapp_number';

  public function getFieldTypes() {
    return array(
      'app_destination' => 'string',
      'app_link' => 'string',
      'application' => 'string',
      'event_id' => 'string',
      'lead_gen_form_id' => 'string',
      'link' => 'string',
      'link_caption' => 'string',
      'link_format' => 'string',
      'page' => 'string',
      'product_link' => 'string',
      'whatsapp_number' => 'string',
    );
  }
}
