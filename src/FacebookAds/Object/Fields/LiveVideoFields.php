<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
  const LIVE_ENCODERS = 'live_encoders';
  const LIVE_VIEWS = 'live_views';
  const OVERLAY_URL = 'overlay_url';
  const PERMALINK_URL = 'permalink_url';
  const PLANNED_START_TIME = 'planned_start_time';
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
      'embed_html' => 'string',
      'from' => 'Object',
      'id' => 'string',
      'ingest_streams' => 'list<LiveVideoInputStream>',
      'is_manual_mode' => 'bool',
      'is_reference_only' => 'bool',
      'live_encoders' => 'list<LiveEncoder>',
      'live_views' => 'unsigned int',
      'overlay_url' => 'string',
      'permalink_url' => 'Object',
      'planned_start_time' => 'datetime',
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
