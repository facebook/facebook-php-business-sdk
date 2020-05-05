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

class AdAccountActivityFields extends AbstractEnum {

  const CREATED_BY = 'created_by';
  const CREATED_TIME = 'created_time';
  const CREDIT_NEW = 'credit_new';
  const CREDIT_OLD = 'credit_old';
  const CURRENCY_NEW = 'currency_new';
  const CURRENCY_OLD = 'currency_old';
  const DAILY_SPEND_LIMIT_NEW = 'daily_spend_limit_new';
  const DAILY_SPEND_LIMIT_OLD = 'daily_spend_limit_old';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const FUNDING_ID_NEW = 'funding_id_new';
  const FUNDING_ID_OLD = 'funding_id_old';
  const GRACE_PERIOD_TIME_NEW = 'grace_period_time_new';
  const GRACE_PERIOD_TIME_OLD = 'grace_period_time_old';
  const ID = 'id';
  const MANAGER_ID_NEW = 'manager_id_new';
  const MANAGER_ID_OLD = 'manager_id_old';
  const NAME_NEW = 'name_new';
  const NAME_OLD = 'name_old';
  const SPEND_CAP_NEW = 'spend_cap_new';
  const SPEND_CAP_OLD = 'spend_cap_old';
  const STATUS_NEW = 'status_new';
  const STATUS_OLD = 'status_old';
  const TERMS_NEW = 'terms_new';
  const TERMS_OLD = 'terms_old';
  const TIER_NEW = 'tier_new';
  const TIER_OLD = 'tier_old';
  const TIME_UPDATED_NEW = 'time_updated_new';
  const TIME_UPDATED_OLD = 'time_updated_old';

  public function getFieldTypes() {
    return array(
      'created_by' => 'Profile',
      'created_time' => 'datetime',
      'credit_new' => 'Object',
      'credit_old' => 'Object',
      'currency_new' => 'string',
      'currency_old' => 'string',
      'daily_spend_limit_new' => 'Object',
      'daily_spend_limit_old' => 'Object',
      'event_time' => 'datetime',
      'event_type' => 'string',
      'funding_id_new' => 'string',
      'funding_id_old' => 'string',
      'grace_period_time_new' => 'int',
      'grace_period_time_old' => 'int',
      'id' => 'string',
      'manager_id_new' => 'Profile',
      'manager_id_old' => 'Profile',
      'name_new' => 'string',
      'name_old' => 'string',
      'spend_cap_new' => 'Object',
      'spend_cap_old' => 'Object',
      'status_new' => 'string',
      'status_old' => 'string',
      'terms_new' => 'int',
      'terms_old' => 'int',
      'tier_new' => 'string',
      'tier_old' => 'string',
      'time_updated_new' => 'datetime',
      'time_updated_old' => 'datetime',
    );
  }
}
