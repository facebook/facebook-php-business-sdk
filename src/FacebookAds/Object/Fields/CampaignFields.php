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
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class CampaignFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ADLABELS = 'adlabels';
  const BUYING_TYPE = 'buying_type';
  const CAN_USE_SPEND_CAP = 'can_use_spend_cap';
  const CONFIGURED_STATUS = 'configured_status';
  const CREATED_TIME = 'created_time';
  const EFFECTIVE_STATUS = 'effective_status';
  const ID = 'id';
  const NAME = 'name';
  const OBJECTIVE = 'objective';
  const RECOMMENDATIONS = 'recommendations';
  const SPEND_CAP = 'spend_cap';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const STOP_TIME = 'stop_time';
  const UPDATED_TIME = 'updated_time';
  const EXECUTION_OPTIONS = 'execution_options';
  const PROMOTED_OBJECT = 'promoted_object';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'adlabels' => 'list<AdLabel>',
      'buying_type' => 'string',
      'can_use_spend_cap' => 'bool',
      'configured_status' => 'ConfiguredStatus',
      'created_time' => 'datetime',
      'effective_status' => 'EffectiveStatus',
      'id' => 'string',
      'name' => 'string',
      'objective' => 'string',
      'recommendations' => 'list<AdRecommendation>',
      'spend_cap' => 'string',
      'start_time' => 'datetime',
      'status' => 'Status',
      'stop_time' => 'datetime',
      'updated_time' => 'datetime',
      'execution_options' => 'ExecutionOptions',
      'promoted_object' => 'Object',
    );
  }
}
