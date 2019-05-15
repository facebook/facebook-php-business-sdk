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

class DirectDealFields extends AbstractEnum {

  const ADBREAKS_ENABLED = 'adbreaks_enabled';
  const ADSET = 'adset';
  const ADVERTISER = 'advertiser';
  const ADVERTISER_LEAD_EMAIL = 'advertiser_lead_email';
  const ADVERTISER_PAGE = 'advertiser_page';
  const CPE_AMOUNT = 'cpe_amount';
  const CPE_CURRENCY = 'cpe_currency';
  const END_TIME = 'end_time';
  const ID = 'id';
  const LIFETIME_BUDGET_AMOUNT = 'lifetime_budget_amount';
  const LIFETIME_BUDGET_CURRENCY = 'lifetime_budget_currency';
  const LIFETIME_IMPRESSIONS = 'lifetime_impressions';
  const NAME = 'name';
  const PAGES = 'pages';
  const PLACEMENTS = 'placements';
  const PRICED_BY = 'priced_by';
  const PUBLISHER_NAME = 'publisher_name';
  const REVIEW_REQUIREMENT = 'review_requirement';
  const SALES_LEAD_EMAIL = 'sales_lead_email';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const TARGETING = 'targeting';
  const THIRD_PARTY_IDS = 'third_party_ids';
  const THIRD_PARTY_INTEGRATED_DEAL = 'third_party_integrated_deal';

  public function getFieldTypes() {
    return array(
      'adbreaks_enabled' => 'bool',
      'adset' => 'AdSet',
      'advertiser' => 'Object',
      'advertiser_lead_email' => 'string',
      'advertiser_page' => 'string',
      'cpe_amount' => 'int',
      'cpe_currency' => 'string',
      'end_time' => 'int',
      'id' => 'string',
      'lifetime_budget_amount' => 'int',
      'lifetime_budget_currency' => 'string',
      'lifetime_impressions' => 'int',
      'name' => 'string',
      'pages' => 'list<string>',
      'placements' => 'list<string>',
      'priced_by' => 'string',
      'publisher_name' => 'string',
      'review_requirement' => 'string',
      'sales_lead_email' => 'string',
      'start_time' => 'int',
      'status' => 'string',
      'targeting' => 'Targeting',
      'third_party_ids' => 'list<string>',
      'third_party_integrated_deal' => 'bool',
    );
  }
}
