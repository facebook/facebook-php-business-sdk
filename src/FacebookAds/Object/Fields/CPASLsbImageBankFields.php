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

class CPASLsbImageBankFields extends AbstractEnum {

  const AD_GROUP_ID = 'ad_group_id';
  const CATALOG_SEGMENT_PROXY_ID = 'catalog_segment_proxy_id';
  const ID = 'id';
  const AGENCY_BUSINESS_ID = 'agency_business_id';
  const BACKUP_IMAGE_URLS = 'backup_image_urls';

  public function getFieldTypes() {
    return array(
      'ad_group_id' => 'string',
      'catalog_segment_proxy_id' => 'string',
      'id' => 'string',
      'agency_business_id' => 'unsigned int',
      'backup_image_urls' => 'list<string>',
    );
  }
}
