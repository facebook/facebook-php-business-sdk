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

class ProductEventStatFields extends AbstractEnum {

  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const DEVICE_TYPE = 'device_type';
  const EVENT = 'event';
  const EVENT_SOURCE = 'event_source';
  const TOTAL_CONTENT_IDS_MATCHED_OTHER_CATALOGS = 'total_content_ids_matched_other_catalogs';
  const TOTAL_MATCHED_CONTENT_IDS = 'total_matched_content_ids';
  const TOTAL_UNMATCHED_CONTENT_IDS = 'total_unmatched_content_ids';
  const UNIQUE_CONTENT_IDS_MATCHED_OTHER_CATALOGS = 'unique_content_ids_matched_other_catalogs';
  const UNIQUE_MATCHED_CONTENT_IDS = 'unique_matched_content_ids';
  const UNIQUE_UNMATCHED_CONTENT_IDS = 'unique_unmatched_content_ids';

  public function getFieldTypes() {
    return array(
      'date_start' => 'string',
      'date_stop' => 'string',
      'device_type' => 'DeviceType',
      'event' => 'Event',
      'event_source' => 'ExternalEventSource',
      'total_content_ids_matched_other_catalogs' => 'int',
      'total_matched_content_ids' => 'int',
      'total_unmatched_content_ids' => 'int',
      'unique_content_ids_matched_other_catalogs' => 'int',
      'unique_matched_content_ids' => 'int',
      'unique_unmatched_content_ids' => 'int',
    );
  }
}
