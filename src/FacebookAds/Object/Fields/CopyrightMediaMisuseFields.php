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

class CopyrightMediaMisuseFields extends AbstractEnum {

  const AUDIO_SEGMENTS = 'audio_segments';
  const CREATION_TIME = 'creation_time';
  const DISABLED_AUDIO_SEGMENTS = 'disabled_audio_segments';
  const DISABLED_VIDEO_SEGMENTS = 'disabled_video_segments';
  const ENTIRE_FILE_ISSUE = 'entire_file_issue';
  const ENTIRE_FILE_ISSUE_REASONS = 'entire_file_issue_reasons';
  const EXPIRATION_TIME = 'expiration_time';
  const ID = 'id';
  const MEDIA_ASSET_ID = 'media_asset_id';
  const REASONS = 'reasons';
  const REQUESTED_AUDIO_SEGMENTS = 'requested_audio_segments';
  const REQUESTED_VIDEO_SEGMENTS = 'requested_video_segments';
  const RESOLUTION_TYPE = 'resolution_type';
  const STATUS = 'status';
  const UPDATE_TIME = 'update_time';
  const VIDEO_COPYRIGHT = 'video_copyright';
  const VIDEO_SEGMENTS = 'video_segments';

  public function getFieldTypes() {
    return array(
      'audio_segments' => 'list<Object>',
      'creation_time' => 'datetime',
      'disabled_audio_segments' => 'list<Object>',
      'disabled_video_segments' => 'list<Object>',
      'entire_file_issue' => 'bool',
      'entire_file_issue_reasons' => 'list<string>',
      'expiration_time' => 'datetime',
      'id' => 'string',
      'media_asset_id' => 'string',
      'reasons' => 'list<string>',
      'requested_audio_segments' => 'list<Object>',
      'requested_video_segments' => 'list<Object>',
      'resolution_type' => 'string',
      'status' => 'string',
      'update_time' => 'datetime',
      'video_copyright' => 'VideoCopyright',
      'video_segments' => 'list<Object>',
    );
  }
}
