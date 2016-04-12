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

class AdAccountRoasFields extends AbstractEnum {

  const ADGROUP_ID = 'adgroup_id';
  const ARPU_180D = 'arpu_180d';
  const ARPU_1D = 'arpu_1d';
  const ARPU_30D = 'arpu_30d';
  const ARPU_365D = 'arpu_365d';
  const ARPU_3D = 'arpu_3d';
  const ARPU_7D = 'arpu_7d';
  const ARPU_90D = 'arpu_90d';
  const CAMPAIGN_GROUP_ID = 'campaign_group_id';
  const CAMPAIGN_ID = 'campaign_id';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const INSTALLS = 'installs';
  const REVENUE = 'revenue';
  const REVENUE_180D = 'revenue_180d';
  const REVENUE_1D = 'revenue_1d';
  const REVENUE_30D = 'revenue_30d';
  const REVENUE_365D = 'revenue_365d';
  const REVENUE_3D = 'revenue_3d';
  const REVENUE_7D = 'revenue_7d';
  const REVENUE_90D = 'revenue_90d';
  const SPEND = 'spend';
  const YIELD_180D = 'yield_180d';
  const YIELD_1D = 'yield_1d';
  const YIELD_30D = 'yield_30d';
  const YIELD_365D = 'yield_365d';
  const YIELD_3D = 'yield_3d';
  const YIELD_7D = 'yield_7d';
  const YIELD_90D = 'yield_90d';

  public function getFieldTypes() {
    return array(
      'adgroup_id' => 'string',
      'arpu_180d' => 'float',
      'arpu_1d' => 'float',
      'arpu_30d' => 'float',
      'arpu_365d' => 'float',
      'arpu_3d' => 'float',
      'arpu_7d' => 'float',
      'arpu_90d' => 'float',
      'campaign_group_id' => 'string',
      'campaign_id' => 'string',
      'date_start' => 'string',
      'date_stop' => 'string',
      'installs' => 'unsigned int',
      'revenue' => 'float',
      'revenue_180d' => 'float',
      'revenue_1d' => 'float',
      'revenue_30d' => 'float',
      'revenue_365d' => 'float',
      'revenue_3d' => 'float',
      'revenue_7d' => 'float',
      'revenue_90d' => 'float',
      'spend' => 'float',
      'yield_180d' => 'float',
      'yield_1d' => 'float',
      'yield_30d' => 'float',
      'yield_365d' => 'float',
      'yield_3d' => 'float',
      'yield_7d' => 'float',
      'yield_90d' => 'float',
    );
  }
}
