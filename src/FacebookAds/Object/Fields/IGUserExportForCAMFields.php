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

class IGUserExportForCAMFields extends AbstractEnum {

  const AGE_BUCKET = 'age_bucket';
  const BIOGRAPHY = 'biography';
  const COUNTRY = 'country';
  const EMAIL = 'email';
  const GENDER = 'gender';
  const HAS_BRAND_PARTNERSHIP_EXPERIENCE = 'has_brand_partnership_experience';
  const ID = 'id';
  const IS_ACCOUNT_VERIFIED = 'is_account_verified';
  const IS_PAID_PARTNERSHIP_MESSAGES_ENABLED = 'is_paid_partnership_messages_enabled';
  const MESSAGING_ID = 'messaging_id';
  const ONBOARDED_STATUS = 'onboarded_status';
  const PAST_BRAND_PARTNERSHIP_PARTNERS = 'past_brand_partnership_partners';
  const PORTFOLIO_URL = 'portfolio_url';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'age_bucket' => 'string',
      'biography' => 'string',
      'country' => 'string',
      'email' => 'string',
      'gender' => 'string',
      'has_brand_partnership_experience' => 'bool',
      'id' => 'string',
      'is_account_verified' => 'bool',
      'is_paid_partnership_messages_enabled' => 'bool',
      'messaging_id' => 'string',
      'onboarded_status' => 'bool',
      'past_brand_partnership_partners' => 'list<string>',
      'portfolio_url' => 'string',
      'username' => 'string',
    );
  }
}
