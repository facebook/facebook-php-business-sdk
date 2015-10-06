<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

/**
 * @method static AdSetFields getInstance()
 */
class AdSetFields extends AbstractArchivableCrudObjectFields {

  const ACCOUNT_ID = 'account_id';
  const ADSET_SCHEDULE = 'adset_schedule';
  const BID_AMOUNT = 'bid_amount';
  const BILLING_EVENT = 'billing_event';
  const BUDGET_REMAINING = 'budget_remaining';
  const CAMPAIGN_ID = 'campaign_id';
  const CREATED_TIME = 'created_time';
  const CREATIVE_SEQUENCE = 'creative_sequence';
  const DAILY_BUDGET = 'daily_budget';
  const END_TIME = 'end_time';
  const ID = 'id';
  const IS_AUTOBID = 'is_autobid';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const LIFETIME_IMPS = 'lifetime_imps';
  const NAME = 'name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const PACING_TYPE = 'pacing_type';
  const RF_PREDICTION_ID = 'rf_prediction_id';
  const START_TIME = 'start_time';
  const UPDATED_TIME = 'updated_time';
  const TARGETING = 'targeting';
  const PROMOTED_OBJECT = 'promoted_object';
  const ADLABELS = 'adlabels';
  const PRODUCT_AD_BEHAVIOR = 'product_ad_behavior';
}
