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

class ALMGuidanceMetricsFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const ADOPTED_OBJECTS = 'adopted_objects';
  const GUIDANCE_NAME = 'guidance_name';
  const GUIDANCE_TYPE = 'guidance_type';
  const L28_ADOPTION = 'l28_adoption';
  const L28_AVAILABLE = 'l28_available';
  const L28_CLICK = 'l28_click';
  const L28_CONVERSION = 'l28_conversion';
  const L28_HAS_CLICK = 'l28_has_click';
  const L28_HAS_IMPRESSION = 'l28_has_impression';
  const L28_IMPRESSION = 'l28_impression';
  const L28_IS_ACTIONED = 'l28_is_actioned';
  const L28_IS_ADOPTED = 'l28_is_adopted';
  const L28_IS_AVAILABLE = 'l28_is_available';
  const L28_IS_PITCHED = 'l28_is_pitched';
  const L28_PITCH = 'l28_pitch';
  const L28D_ADOPTED_REVENUE = 'l28d_adopted_revenue';
  const LAST_ACTIONED_DS = 'last_actioned_ds';
  const LAST_ADOPTED_DS = 'last_adopted_ds';
  const LAST_PITCH_DS = 'last_pitch_ds';
  const PARENT_ADVERTISER_ID = 'parent_advertiser_id';
  const REPORT_DS = 'report_ds';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'adopted_objects' => 'list<Object>',
      'guidance_name' => 'string',
      'guidance_type' => 'string',
      'l28_adoption' => 'int',
      'l28_available' => 'int',
      'l28_click' => 'int',
      'l28_conversion' => 'int',
      'l28_has_click' => 'bool',
      'l28_has_impression' => 'bool',
      'l28_impression' => 'int',
      'l28_is_actioned' => 'bool',
      'l28_is_adopted' => 'bool',
      'l28_is_available' => 'bool',
      'l28_is_pitched' => 'bool',
      'l28_pitch' => 'int',
      'l28d_adopted_revenue' => 'float',
      'last_actioned_ds' => 'string',
      'last_adopted_ds' => 'string',
      'last_pitch_ds' => 'string',
      'parent_advertiser_id' => 'string',
      'report_ds' => 'string',
    );
  }
}
