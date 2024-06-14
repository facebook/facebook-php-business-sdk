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

class VideoAssetFields extends AbstractEnum {

  const BROADCAST_ID = 'broadcast_id';
  const BROADCAST_PLANNED_START_TIME = 'broadcast_planned_start_time';
  const CAN_VIEWER_EDIT = 'can_viewer_edit';
  const COPYRIGHT_MONITORING_STATUS = 'copyright_monitoring_status';
  const CREATED_TIME = 'created_time';
  const CREATOR = 'creator';
  const DESCRIPTION = 'description';
  const DOWNLOAD_HD_URL = 'download_hd_url';
  const DOWNLOAD_SD_URL = 'download_sd_url';
  const EMBEDDABLE = 'embeddable';
  const EXPIRATION = 'expiration';
  const FEED_TYPE = 'feed_type';
  const ID = 'id';
  const IS_CROSSPOSTING_ELIGIBLE = 'is_crossposting_eligible';
  const IS_CROSSPOSTING_WITHIN_BM_ELIGIBLE = 'is_crossposting_within_bm_eligible';
  const IS_CROSSPOSTING_WITHIN_BM_ENABLED = 'is_crossposting_within_bm_enabled';
  const IS_EPISODE = 'is_episode';
  const IS_FEATURED = 'is_featured';
  const IS_LIVE_PREMIERE = 'is_live_premiere';
  const IS_VIDEO_ASSET = 'is_video_asset';
  const LAST_ADDED_TIME = 'last_added_time';
  const LATEST_CREATOR = 'latest_creator';
  const LATEST_OWNED_DESCRIPTION = 'latest_owned_description';
  const LATEST_OWNED_TITLE = 'latest_owned_title';
  const LENGTH = 'length';
  const LIVE_STATUS = 'live_status';
  const NO_STORY = 'no_story';
  const OWNER_NAME = 'owner_name';
  const OWNER_PICTURE = 'owner_picture';
  const OWNER_POST_STATE = 'owner_post_state';
  const PERMALINK_URL = 'permalink_url';
  const PICTURE = 'picture';
  const POSTS_COUNT = 'posts_count';
  const POSTS_IDS = 'posts_ids';
  const POSTS_STATUS = 'posts_status';
  const PREMIERE_LIVING_ROOM_STATUS = 'premiere_living_room_status';
  const PUBLISHED = 'published';
  const SCHEDULED_PUBLISH_TIME = 'scheduled_publish_time';
  const SECRET = 'secret';
  const SECURE_STREAM_URL = 'secure_stream_url';
  const SOCIAL_ACTIONS = 'social_actions';
  const STATUS = 'status';
  const STREAM_URL = 'stream_url';
  const THUMBNAIL_WHILE_ENCODING = 'thumbnail_while_encoding';
  const TITLE = 'title';
  const VIEWS = 'views';

  public function getFieldTypes() {
    return array(
      'broadcast_id' => 'string',
      'broadcast_planned_start_time' => 'datetime',
      'can_viewer_edit' => 'bool',
      'copyright_monitoring_status' => 'string',
      'created_time' => 'datetime',
      'creator' => 'User',
      'description' => 'string',
      'download_hd_url' => 'string',
      'download_sd_url' => 'string',
      'embeddable' => 'bool',
      'expiration' => 'Object',
      'feed_type' => 'string',
      'id' => 'string',
      'is_crossposting_eligible' => 'bool',
      'is_crossposting_within_bm_eligible' => 'bool',
      'is_crossposting_within_bm_enabled' => 'bool',
      'is_episode' => 'bool',
      'is_featured' => 'bool',
      'is_live_premiere' => 'bool',
      'is_video_asset' => 'bool',
      'last_added_time' => 'datetime',
      'latest_creator' => 'User',
      'latest_owned_description' => 'string',
      'latest_owned_title' => 'string',
      'length' => 'float',
      'live_status' => 'string',
      'no_story' => 'bool',
      'owner_name' => 'string',
      'owner_picture' => 'string',
      'owner_post_state' => 'string',
      'permalink_url' => 'string',
      'picture' => 'string',
      'posts_count' => 'unsigned int',
      'posts_ids' => 'list<string>',
      'posts_status' => 'Object',
      'premiere_living_room_status' => 'string',
      'published' => 'bool',
      'scheduled_publish_time' => 'datetime',
      'secret' => 'bool',
      'secure_stream_url' => 'string',
      'social_actions' => 'bool',
      'status' => 'VideoStatus',
      'stream_url' => 'string',
      'thumbnail_while_encoding' => 'string',
      'title' => 'string',
      'views' => 'unsigned int',
    );
  }
}
