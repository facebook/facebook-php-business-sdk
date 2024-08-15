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
 * @method static CustomAudienceMultikeySchemaFields getInstance()
 */
class CustomAudienceMultikeySchemaFields extends AbstractEnum {

  const EXTERN_ID = 'EXTERN_ID';
  const EMAIL = 'EMAIL';
  const PHONE = 'PHONE';
  const GENDER = 'GEN';
  const BIRTH_YEAR = 'DOBY';
  const BIRTH_MONTH = 'DOBM';
  const BIRTH_DATE = 'DOBD';
  const LAST_NAME = 'LN';
  const FIRST_NAME = 'FN';
  const FIRST_NAME_INITIAL = 'FI';
  const CITY = 'CT';
  const STATE = 'ST';
  const ZIP = 'ZIP';
  const MADID = 'MADID';
  const COUNTRY = 'COUNTRY';
  const FB_USER_ID = 'APPUID';
  const LOOKALIKE_VALUE = 'LOOKALIKE_VALUE';
}
