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

class AdsImageCropsFields extends AbstractEnum {

  const FIELD_100X100 = '100x100';
  const FIELD_100X72 = '100x72';
  const FIELD_191X100 = '191x100';
  const FIELD_400X150 = '400x150';
  const FIELD_400X500 = '400x500';
  const FIELD_600X360 = '600x360';
  const FIELD_90X160 = '90x160';

  public function getFieldTypes() {
    return array(
      '100x100' => 'list<list>',
      '100x72' => 'list<list>',
      '191x100' => 'list<list>',
      '400x150' => 'list<list>',
      '400x500' => 'list<list>',
      '600x360' => 'list<list>',
      '90x160' => 'list<list>',
    );
  }
}
