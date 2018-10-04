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

class AdCampaignDeliveryStatsFields extends AbstractEnum {

  const BID_RECOMMENDATION = 'bid_recommendation';
  const CURRENT_AVERAGE_COST = 'current_average_cost';
  const DELIVERY_WARNING = 'delivery_warning';
  const HAS_UNREALISTIC_HIGH_BID = 'has_unrealistic_high_bid';
  const LAST_SIGNIFICANT_EDIT_TS = 'last_significant_edit_ts';
  const LEARNING_STAGE_INFO = 'learning_stage_info';
  const RECOMMENDATIONS = 'recommendations';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'bid_recommendation' => 'int',
      'current_average_cost' => 'float',
      'delivery_warning' => 'list<string>',
      'has_unrealistic_high_bid' => 'bool',
      'last_significant_edit_ts' => 'int',
      'learning_stage_info' => 'AdCampaignLearningStageInfo',
      'recommendations' => 'list<Object>',
      'id' => 'string',
    );
  }
}
