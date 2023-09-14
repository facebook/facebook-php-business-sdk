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

class AdAssetFeedSpecAssetCustomizationRuleFields extends AbstractEnum {

  const BODY_LABEL = 'body_label';
  const CALL_TO_ACTION_LABEL = 'call_to_action_label';
  const CALL_TO_ACTION_TYPE_LABEL = 'call_to_action_type_label';
  const CAPTION_LABEL = 'caption_label';
  const CAROUSEL_LABEL = 'carousel_label';
  const CUSTOMIZATION_SPEC = 'customization_spec';
  const DESCRIPTION_LABEL = 'description_label';
  const IMAGE_LABEL = 'image_label';
  const IS_DEFAULT = 'is_default';
  const LINK_URL_LABEL = 'link_url_label';
  const PRIORITY = 'priority';
  const TITLE_LABEL = 'title_label';
  const VIDEO_LABEL = 'video_label';

  public function getFieldTypes() {
    return array(
      'body_label' => 'AdAssetFeedSpecAssetLabel',
      'call_to_action_label' => 'AdAssetFeedSpecAssetLabel',
      'call_to_action_type_label' => 'AdAssetFeedSpecAssetLabel',
      'caption_label' => 'AdAssetFeedSpecAssetLabel',
      'carousel_label' => 'AdAssetFeedSpecAssetLabel',
      'customization_spec' => 'AdAssetCustomizationRuleCustomizationSpec',
      'description_label' => 'AdAssetFeedSpecAssetLabel',
      'image_label' => 'AdAssetFeedSpecAssetLabel',
      'is_default' => 'bool',
      'link_url_label' => 'AdAssetFeedSpecAssetLabel',
      'priority' => 'int',
      'title_label' => 'AdAssetFeedSpecAssetLabel',
      'video_label' => 'AdAssetFeedSpecAssetLabel',
    );
  }
}
