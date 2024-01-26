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

class AdgroupMetadataFields extends AbstractEnum {

  const AD_STANDARD_ENHANCEMENTS_EDIT_SOURCE = 'ad_standard_enhancements_edit_source';
  const ADGROUP_CREATION_SOURCE = 'adgroup_creation_source';
  const ADGROUP_EDIT_SOURCE = 'adgroup_edit_source';
  const CAROUSEL_STYLE = 'carousel_style';
  const CAROUSEL_WITH_STATIC_CARD_STYLE = 'carousel_with_static_card_style';

  public function getFieldTypes() {
    return array(
      'ad_standard_enhancements_edit_source' => 'int',
      'adgroup_creation_source' => 'string',
      'adgroup_edit_source' => 'string',
      'carousel_style' => 'string',
      'carousel_with_static_card_style' => 'string',
    );
  }
}
