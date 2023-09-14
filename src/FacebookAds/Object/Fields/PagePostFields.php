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

class PagePostFields extends AbstractEnum {

  const ACTIONS = 'actions';
  const ADMIN_CREATOR = 'admin_creator';
  const ALLOWED_ADVERTISING_OBJECTIVES = 'allowed_advertising_objectives';
  const APPLICATION = 'application';
  const BACKDATED_TIME = 'backdated_time';
  const CALL_TO_ACTION = 'call_to_action';
  const CAN_REPLY_PRIVATELY = 'can_reply_privately';
  const CHILD_ATTACHMENTS = 'child_attachments';
  const COMMENTS_MIRRORING_DOMAIN = 'comments_mirroring_domain';
  const COORDINATES = 'coordinates';
  const CREATED_TIME = 'created_time';
  const EVENT = 'event';
  const EXPANDED_HEIGHT = 'expanded_height';
  const EXPANDED_WIDTH = 'expanded_width';
  const FEED_TARGETING = 'feed_targeting';
  const FROM = 'from';
  const FULL_PICTURE = 'full_picture';
  const HEIGHT = 'height';
  const ICON = 'icon';
  const ID = 'id';
  const INSTAGRAM_ELIGIBILITY = 'instagram_eligibility';
  const IS_APP_SHARE = 'is_app_share';
  const IS_ELIGIBLE_FOR_PROMOTION = 'is_eligible_for_promotion';
  const IS_EXPIRED = 'is_expired';
  const IS_HIDDEN = 'is_hidden';
  const IS_INLINE_CREATED = 'is_inline_created';
  const IS_INSTAGRAM_ELIGIBLE = 'is_instagram_eligible';
  const IS_POPULAR = 'is_popular';
  const IS_PUBLISHED = 'is_published';
  const IS_SPHERICAL = 'is_spherical';
  const MESSAGE = 'message';
  const MESSAGE_TAGS = 'message_tags';
  const MULTI_SHARE_END_CARD = 'multi_share_end_card';
  const MULTI_SHARE_OPTIMIZED = 'multi_share_optimized';
  const PARENT_ID = 'parent_id';
  const PERMALINK_URL = 'permalink_url';
  const PICTURE = 'picture';
  const PLACE = 'place';
  const PRIVACY = 'privacy';
  const PROMOTABLE_ID = 'promotable_id';
  const PROMOTION_STATUS = 'promotion_status';
  const PROPERTIES = 'properties';
  const SCHEDULED_PUBLISH_TIME = 'scheduled_publish_time';
  const SHARES = 'shares';
  const STATUS_TYPE = 'status_type';
  const STORY = 'story';
  const STORY_TAGS = 'story_tags';
  const SUBSCRIBED = 'subscribed';
  const TARGET = 'target';
  const TARGETING = 'targeting';
  const TIMELINE_VISIBILITY = 'timeline_visibility';
  const UPDATED_TIME = 'updated_time';
  const VIA = 'via';
  const VIDEO_BUYING_ELIGIBILITY = 'video_buying_eligibility';
  const WIDTH = 'width';

  public function getFieldTypes() {
    return array(
      'actions' => 'list',
      'admin_creator' => 'Object',
      'allowed_advertising_objectives' => 'list<string>',
      'application' => 'Application',
      'backdated_time' => 'datetime',
      'call_to_action' => 'Object',
      'can_reply_privately' => 'bool',
      'child_attachments' => 'list',
      'comments_mirroring_domain' => 'string',
      'coordinates' => 'Object',
      'created_time' => 'datetime',
      'event' => 'Event',
      'expanded_height' => 'unsigned int',
      'expanded_width' => 'unsigned int',
      'feed_targeting' => 'Object',
      'from' => 'Object',
      'full_picture' => 'string',
      'height' => 'unsigned int',
      'icon' => 'string',
      'id' => 'string',
      'instagram_eligibility' => 'string',
      'is_app_share' => 'bool',
      'is_eligible_for_promotion' => 'bool',
      'is_expired' => 'bool',
      'is_hidden' => 'bool',
      'is_inline_created' => 'bool',
      'is_instagram_eligible' => 'bool',
      'is_popular' => 'bool',
      'is_published' => 'bool',
      'is_spherical' => 'bool',
      'message' => 'string',
      'message_tags' => 'list',
      'multi_share_end_card' => 'bool',
      'multi_share_optimized' => 'bool',
      'parent_id' => 'string',
      'permalink_url' => 'string',
      'picture' => 'string',
      'place' => 'Place',
      'privacy' => 'Privacy',
      'promotable_id' => 'string',
      'promotion_status' => 'string',
      'properties' => 'list',
      'scheduled_publish_time' => 'float',
      'shares' => 'Object',
      'status_type' => 'string',
      'story' => 'string',
      'story_tags' => 'list',
      'subscribed' => 'bool',
      'target' => 'Profile',
      'targeting' => 'Object',
      'timeline_visibility' => 'string',
      'updated_time' => 'datetime',
      'via' => 'Object',
      'video_buying_eligibility' => 'list<string>',
      'width' => 'unsigned int',
    );
  }
}
