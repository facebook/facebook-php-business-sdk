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

class AdCampaignGroupActivityFields extends AbstractEnum {

  const BUDGET_LIMIT_NEW = 'budget_limit_new';
  const BUDGET_LIMIT_OLD = 'budget_limit_old';
  const BUYING_TYPE_NEW = 'buying_type_new';
  const BUYING_TYPE_OLD = 'buying_type_old';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const ID = 'id';
  const IS_AUTOBID_NEW = 'is_autobid_new';
  const IS_AUTOBID_OLD = 'is_autobid_old';
  const IS_AVERAGE_PRICE_PACING_NEW = 'is_average_price_pacing_new';
  const IS_AVERAGE_PRICE_PACING_OLD = 'is_average_price_pacing_old';
  const NAME_NEW = 'name_new';
  const NAME_OLD = 'name_old';
  const OBJECTIVE_NEW = 'objective_new';
  const OBJECTIVE_OLD = 'objective_old';
  const PACING_TYPE = 'pacing_type';
  const RUN_STATUS_NEW = 'run_status_new';
  const RUN_STATUS_OLD = 'run_status_old';
  const SPEND_CAP_NEW = 'spend_cap_new';
  const SPEND_CAP_OLD = 'spend_cap_old';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED_NEW = 'time_updated_new';
  const TIME_UPDATED_OLD = 'time_updated_old';

  public function getFieldTypes() {
    return array(
      'budget_limit_new' => 'Object',
      'budget_limit_old' => 'Object',
      'buying_type_new' => 'string',
      'buying_type_old' => 'string',
      'event_time' => 'datetime',
      'event_type' => 'string',
      'id' => 'string',
      'is_autobid_new' => 'bool',
      'is_autobid_old' => 'bool',
      'is_average_price_pacing_new' => 'bool',
      'is_average_price_pacing_old' => 'bool',
      'name_new' => 'string',
      'name_old' => 'string',
      'objective_new' => 'ObjectiveNew',
      'objective_old' => 'ObjectiveOld',
      'pacing_type' => 'int',
      'run_status_new' => 'string',
      'run_status_old' => 'string',
      'spend_cap_new' => 'int',
      'spend_cap_old' => 'int',
      'time_created' => 'datetime',
      'time_updated_new' => 'datetime',
      'time_updated_old' => 'datetime',
    );
  }
}
