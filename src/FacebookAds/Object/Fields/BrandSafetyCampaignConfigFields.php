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

class BrandSafetyCampaignConfigFields extends AbstractEnum {

  const COMMENT_MODERATION_FILTER = 'comment_moderation_filter';
  const FB_COMMENT_MODERATION_FILTER = 'fb_comment_moderation_filter';
  const IG_COMMENT_MODERATION_FILTER = 'ig_comment_moderation_filter';
  const THREADS_COMMENT_MODERATION_FILTER = 'threads_comment_moderation_filter';

  public function getFieldTypes() {
    return array(
      'comment_moderation_filter' => 'string',
      'fb_comment_moderation_filter' => 'string',
      'ig_comment_moderation_filter' => 'string',
      'threads_comment_moderation_filter' => 'string',
    );
  }
}
