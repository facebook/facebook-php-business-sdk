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

class MeasurementUploadEventFields extends AbstractEnum {

  const AGGREGATION_LEVEL = 'aggregation_level';
  const CONVERSION_END_DATE = 'conversion_end_date';
  const CONVERSION_START_DATE = 'conversion_start_date';
  const EVENT_STATUS = 'event_status';
  const GROUP = 'group';
  const ID = 'id';
  const LOOKBACK_WINDOW = 'lookback_window';
  const MATCH_UNIVERSE = 'match_universe';
  const PARTNER = 'partner';
  const UPLOAD_END_TIME = 'upload_end_time';
  const UPLOAD_START_TIME = 'upload_start_time';
  const UPLOAD_TAG = 'upload_tag';
  const VERSION = 'version';

  public function getFieldTypes() {
    return array(
      'aggregation_level' => 'string',
      'conversion_end_date' => 'string',
      'conversion_start_date' => 'string',
      'event_status' => 'string',
      'group' => 'string',
      'id' => 'string',
      'lookback_window' => 'string',
      'match_universe' => 'string',
      'partner' => 'Business',
      'upload_end_time' => 'datetime',
      'upload_start_time' => 'datetime',
      'upload_tag' => 'string',
      'version' => 'string',
    );
  }
}
