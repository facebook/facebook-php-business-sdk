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

class TargetingSubscriberUniverseFields extends AbstractEnum {

  const MESSENGER_SUBSCRIBER_SOURCE = 'messenger_subscriber_source';
  const WHATSAPP_SUBSCRIBER_POOL = 'whatsapp_subscriber_pool';
  const WHATSAPP_SUBSCRIBER_SOURCE = 'whatsapp_subscriber_source';

  public function getFieldTypes() {
    return array(
      'messenger_subscriber_source' => 'IDName',
      'whatsapp_subscriber_pool' => 'IDName',
      'whatsapp_subscriber_source' => 'IDName',
    );
  }
}
