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

class OrganizationFields extends AbstractEnum {

  const HQ_COUNTRY = 'hq_country';
  const ID = 'id';
  const LEGAL_ENTITY_NAME = 'legal_entity_name';
  const MASTER_BM_ID = 'master_bm_id';
  const OWNER_BUSINESS = 'owner_business';

  public function getFieldTypes() {
    return array(
      'hq_country' => 'string',
      'id' => 'string',
      'legal_entity_name' => 'string',
      'master_bm_id' => 'string',
      'owner_business' => 'Business',
    );
  }
}
