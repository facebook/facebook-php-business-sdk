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

class AdActivityFields extends AbstractEnum {

  const ACTOR_ID = 'actor_id';
  const ACTOR_NAME = 'actor_name';
  const APPLICATION_ID = 'application_id';
  const APPLICATION_NAME = 'application_name';
  const DATE_TIME_IN_TIMEZONE = 'date_time_in_timezone';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const EXTRA_DATA = 'extra_data';
  const OBJECT_ID = 'object_id';
  const OBJECT_NAME = 'object_name';
  const OBJECT_TYPE = 'object_type';
  const TRANSLATED_EVENT_TYPE = 'translated_event_type';

  public function getFieldTypes() {
    return array(
      'actor_id' => 'string',
      'actor_name' => 'string',
      'application_id' => 'string',
      'application_name' => 'string',
      'date_time_in_timezone' => 'string',
      'event_time' => 'datetime',
      'event_type' => 'EventType',
      'extra_data' => 'string',
      'object_id' => 'string',
      'object_name' => 'string',
      'object_type' => 'string',
      'translated_event_type' => 'string',
    );
  }
}
