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

class BusinessActivityLogEventFields extends AbstractEnum {

  const ACTED_UPON_BUSINESS_ID = 'acted_upon_business_id';
  const ACTED_UPON_BUSINESS_NAME = 'acted_upon_business_name';
  const ACTED_UPON_BUSINESS_OBJECT_ID = 'acted_upon_business_object_id';
  const ACTED_UPON_BUSINESS_OBJECT_NAME = 'acted_upon_business_object_name';
  const ACTED_UPON_BUSINESS_OBJECT_TYPE = 'acted_upon_business_object_type';
  const ACTED_UPON_USER_ID = 'acted_upon_user_id';
  const ACTED_UPON_USER_NAME = 'acted_upon_user_name';
  const ACTING_BUSINESS_ID = 'acting_business_id';
  const ACTING_BUSINESS_NAME = 'acting_business_name';
  const ACTING_USER_ID = 'acting_user_id';
  const ACTING_USER_NAME = 'acting_user_name';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const EXTRA_DATA = 'extra_data';
  const TARGET_BUSINESS_ID = 'target_business_id';
  const TARGET_BUSINESS_NAME = 'target_business_name';
  const TARGET_BUSINESS_OBJECT_ID = 'target_business_object_id';
  const TARGET_BUSINESS_OBJECT_NAME = 'target_business_object_name';
  const TARGET_BUSINESS_OBJECT_TYPE = 'target_business_object_type';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'acted_upon_business_id' => 'string',
      'acted_upon_business_name' => 'string',
      'acted_upon_business_object_id' => 'string',
      'acted_upon_business_object_name' => 'string',
      'acted_upon_business_object_type' => 'string',
      'acted_upon_user_id' => 'string',
      'acted_upon_user_name' => 'string',
      'acting_business_id' => 'string',
      'acting_business_name' => 'string',
      'acting_user_id' => 'string',
      'acting_user_name' => 'string',
      'event_time' => 'unsigned int',
      'event_type' => 'string',
      'extra_data' => 'list<Object>',
      'target_business_id' => 'string',
      'target_business_name' => 'string',
      'target_business_object_id' => 'string',
      'target_business_object_name' => 'string',
      'target_business_object_type' => 'string',
      'id' => 'string',
    );
  }
}
