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

class PartnershipAdContentSearchMediaFields extends AbstractEnum {

  const IG_AD_CODE_SPONSOR_COUNT = 'ig_ad_code_sponsor_count';
  const IG_AD_CODE_SPONSORS = 'ig_ad_code_sponsors';
  const IG_MEDIA = 'ig_media';
  const IG_MEDIA_HAS_PRODUCT_TAGS = 'ig_media_has_product_tags';
  const IS_AD_CODE_ELIGIBLE_FOR_BOOSTING_BY_TWO_SPONSORS = 'is_ad_code_eligible_for_boosting_by_two_sponsors';
  const IS_AD_CODE_ENTRY = 'is_ad_code_entry';

  public function getFieldTypes() {
    return array(
      'ig_ad_code_sponsor_count' => 'int',
      'ig_ad_code_sponsors' => 'list<FBPageAndInstagramAccount>',
      'ig_media' => 'IGMedia',
      'ig_media_has_product_tags' => 'bool',
      'is_ad_code_eligible_for_boosting_by_two_sponsors' => 'bool',
      'is_ad_code_entry' => 'bool',
    );
  }
}
