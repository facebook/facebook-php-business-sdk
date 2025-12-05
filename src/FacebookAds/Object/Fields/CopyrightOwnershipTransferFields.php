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

class CopyrightOwnershipTransferFields extends AbstractEnum {

  const ASSETS = 'assets';
  const HAS_OWNERSHIP_BEEN_UPDATED = 'has_ownership_been_updated';
  const ID = 'id';
  const RECEIVING_RIGHTS_HOLDER = 'receiving_rights_holder';
  const SENDING_RIGHTS_HOLDER = 'sending_rights_holder';
  const STATUS = 'status';
  const TRANSFER_TERRITORIES = 'transfer_territories';
  const TRANSFER_TIME = 'transfer_time';

  public function getFieldTypes() {
    return array(
      'assets' => 'list<Object>',
      'has_ownership_been_updated' => 'bool',
      'id' => 'string',
      'receiving_rights_holder' => 'Profile',
      'sending_rights_holder' => 'Profile',
      'status' => 'string',
      'transfer_territories' => 'list<string>',
      'transfer_time' => 'datetime',
    );
  }
}
