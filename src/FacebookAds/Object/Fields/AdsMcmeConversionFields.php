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

class AdsMcmeConversionFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IS_ARCHIVED = 'is_archived';
  const MCME_CONVERSION_TYPE = 'mcme_conversion_type';
  const NAME = 'name';
  const OMNICHANNEL_OBJECT_ID = 'omnichannel_object_id';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'description' => 'string',
      'id' => 'string',
      'is_archived' => 'bool',
      'mcme_conversion_type' => 'string',
      'name' => 'string',
      'omnichannel_object_id' => 'string',
    );
  }
}
