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

class AdColumnSizesFields extends AbstractEnum {

  const ADMARKET_ACCOUNT = 'admarket_account';
  const APP_ID = 'app_id';
  const COLUMNS = 'columns';
  const ID = 'id';
  const OWNER = 'owner';
  const PAGE = 'page';
  const REPORT = 'report';
  const TAB = 'tab';
  const VIEW = 'view';

  public function getFieldTypes() {
    return array(
      'admarket_account' => 'AdAccount',
      'app_id' => 'string',
      'columns' => 'list<map<string, string>>',
      'id' => 'string',
      'owner' => 'User',
      'page' => 'string',
      'report' => 'string',
      'tab' => 'string',
      'view' => 'string',
    );
  }
}
