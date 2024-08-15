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

class LiveVideoFields extends AbstractEnum {

  const AD_BREAK_CONFIG = 'ad_break_config';
  const AD_BREAK_FAILURE_REASON = 'ad_break_failure_reason';
  const BROADCAST_START_TIME = 'broadcast_start_time';
  const COPYRIGHT = 'copyright';
  const CREATION_TIME = 'creation_time';
  const DASH_INGEST_URL = 'dash_ingest_url';
  const DASH_PREVIEW_URL = 'dash_preview_url';
  const DESCRIPTION = 'description';
  const EMBED_HTML = 'embed_html';
  const FROM = 'from';
  const ID = 'id';
  const INGEST_STREAMS = 'ingest_streams';
  const IS_MANUAL_MODE = 'is_manual_mode';
  const IS_REFERENCE_ONLY = 'is_reference_only';
  const LIVE_VIEWS = 'live_views';
  const OVERLAY_URL = 'overlay_url';
  const PERMALINK_URL = 'permalink_url';
  const PLANNED_START_TIME = 'planned_start_time';
  const RECOMMENDED_ENCODER_SETTINGS = 'recommended_encoder_settings';
  const SECONDS_LEFT = 'seconds_left';
  const SECURE_STREAM_URL = 'secure_stream_url';
  const STATUS = 'status';
  const STREAM_URL = 'stream_url';
  const TARGETING = 'targeting';
  const TITLE = 'title';
  const TOTAL_VIEWS = 'total_views';
  const VIDEO = 'video';

  public function getFieldTypes() {
    return array(
      'ad_break_config' => 'LiveVideoAdBreakConfig',
      'ad_break_failure_reason' => 'string',
      'broadcast_start_time' => 'datetime',
      'copyright' => 'VideoCopyright',
      'creation_time' => 'datetime',
      'dash_ingest_url' => 'string',
      'dash_preview_url' => 'string',
      'description' => 'string',
      'embed_html' => 'Object',
      'from' => 'Object',
      'id' => 'string',
      'ingest_streams' => 'list<LiveVideoInputStream>',
      'is_manual_mode' => 'bool',
      'is_reference_only' => 'bool',
      'live_views' => 'unsigned int',
      'overlay_url' => 'string',
      'permalink_url' => 'string',
      'planned_start_time' => 'datetime',
      'recommended_encoder_settings' => 'LiveVideoRecommendedEncoderSettings',
      'seconds_left' => 'int',
      'secure_stream_url' => 'string',
      'status' => 'string',
      'stream_url' => 'string',
      'targeting' => 'LiveVideoTargeting',
      'title' => 'string',
      'total_views' => 'string',
      'video' => 'AdVideo',
    );
  }
}
