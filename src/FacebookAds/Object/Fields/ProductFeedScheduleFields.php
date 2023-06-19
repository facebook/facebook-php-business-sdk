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

class ProductFeedScheduleFields extends AbstractEnum {

  const DAY_OF_MONTH = 'day_of_month';
  const DAY_OF_WEEK = 'day_of_week';
  const HOUR = 'hour';
  const ID = 'id';
  const INTERVAL = 'interval';
  const INTERVAL_COUNT = 'interval_count';
  const MINUTE = 'minute';
  const TIMEZONE = 'timezone';
  const URL = 'url';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'day_of_month' => 'unsigned int',
      'day_of_week' => 'string',
      'hour' => 'unsigned int',
      'id' => 'string',
      'interval' => 'Interval',
      'interval_count' => 'unsigned int',
      'minute' => 'unsigned int',
      'timezone' => 'string',
      'url' => 'string',
      'username' => 'string',
    );
  }
}
