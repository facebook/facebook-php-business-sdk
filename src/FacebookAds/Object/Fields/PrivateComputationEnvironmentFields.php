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

class PrivateComputationEnvironmentFields extends AbstractEnum {

  const PUBLISHER_ACCOUNT_ID = 'publisher_account_id';
  const PUBLISHER_PCE_DEPLOYMENT_STATUS = 'publisher_pce_deployment_status';
  const PUBLISHER_PCE_ID = 'publisher_pce_id';
  const PUBLISHER_REGION = 'publisher_region';
  const PUBLISHER_VPC_ID = 'publisher_vpc_id';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'publisher_account_id' => 'string',
      'publisher_pce_deployment_status' => 'int',
      'publisher_pce_id' => 'string',
      'publisher_region' => 'string',
      'publisher_vpc_id' => 'string',
      'id' => 'string',
    );
  }
}
