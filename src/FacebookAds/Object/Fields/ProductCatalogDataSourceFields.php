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

class ProductCatalogDataSourceFields extends AbstractEnum {

  const APP_ID = 'app_id';
  const ID = 'id';
  const INGESTION_SOURCE_TYPE = 'ingestion_source_type';
  const NAME = 'name';
  const UPLOAD_TYPE = 'upload_type';

  public function getFieldTypes() {
    return array(
      'app_id' => 'string',
      'id' => 'string',
      'ingestion_source_type' => 'string',
      'name' => 'string',
      'upload_type' => 'string',
    );
  }
}
