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
 * @method static AdFields getInstance()
 */
class AdFields extends AbstractArchivableCrudObjectFields {

  const ACCOUNT_ID = 'account_id';
  const BID_AMOUNT = 'bid_amount';
  const ADSET_ID = 'adset_id';
  const CAMPAIGN_ID = 'campaign_id';
  const CONVERSION_SPECS = 'conversion_specs';
  const CREATED_TIME = 'created_time';
  const AD_REVIEW_FEEDBACK = 'ad_review_feedback';
  const ID = 'id';
  const NAME = 'name';
  const RTB_FLAG = 'rtb_flag';
  const TARGETING = 'targeting';
  const TRACKING_SPECS = 'tracking_specs';
  const UPDATED_TIME = 'updated_time';
  const VIEW_TAGS = 'view_tags';
  const CREATIVE = 'creative';
  const SOCIAL_PREFS = 'social_prefs';
  const FAILED_DELIVERY_CHECKS = 'failed_delivery_checks';
  const REDOWNLOAD = 'redownload';
  const ADLABELS = 'adlabels';
  const ENGAGEMENT_AUDIENCE = 'engagement_audience';
  const EXECUTION_OPTIONS = 'execution_options';
}
