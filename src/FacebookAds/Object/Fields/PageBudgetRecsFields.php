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

class PageBudgetRecsFields extends AbstractEnum {

  const AMOUNT_OFFSET = 'amount_offset';
  const BUDGET_DELTA = 'budget_delta';
  const CAMPAIGN_LENGTH = 'campaign_length';
  const CURRENCY = 'currency';
  const DISPLAY_AMOUNT = 'display_amount';
  const REACH = 'reach';
  const REACH_INTERVAL = 'reach_interval';
  const VALUE = 'value';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'amount_offset' => 'int',
      'budget_delta' => 'int',
      'campaign_length' => 'int',
      'currency' => 'string',
      'display_amount' => 'string',
      'reach' => 'int',
      'reach_interval' => 'Object',
      'value' => 'int',
      'id' => 'string',
    );
  }
}
