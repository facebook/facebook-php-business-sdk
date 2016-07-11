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

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static AdActivityEventTypeValues getInstance()
 */
class AdActivityEventTypeValues extends AbstractEnum {

  const AD_ACCOUNT_UPDATE_SPEND_LIMIT = 'ad_account_update_spend_limit';
  const AD_ACCOUNT_RESET_SPEND_LIMIT = 'ad_account_reset_spend_limit';
  const AD_ACCOUNT_REMOVE_SPEND_LIMIT = 'ad_account_remove_spend_limit';
  const AD_ACCOUNT_SET_BUSINESS_INFORMATION = 'ad_account_set_business_information';
  const AD_ACCOUNT_UPDATE_STATUS = 'ad_account_update_status';
  const AD_ACCOUNT_ADD_USER_TO_ROLE = 'ad_account_add_user_to_role';
  const AD_ACCOUNT_REMOVE_USER_FROM_ROLE = 'ad_account_remove_user_from_role';
  const ADD_IMAGES = 'add_images';
  const EDIT_IMAGES = 'edit_images';
  const DELETE_IMAGES = 'delete_images';
  const AD_ACCOUNT_BILLING_CHARGE = 'ad_account_billing_charge';
  const AD_ACCOUNT_BILLING_CHARGE_FAILED = 'ad_account_billing_charge_failed';
  const AD_ACCOUNT_BILLING_CHARGEBACK = 'ad_account_billing_chargeback';
  const AD_ACCOUNT_BILLING_CHARGEBACK_REVERSAL = 'ad_account_billing_chargeback_reversal';
  const AD_ACCOUNT_BILLING_DECLINE = 'ad_account_billing_decline';
  const AD_ACCOUNT_BILLING_REFUND = 'ad_account_billing_refund';
  const BILLING_EVENT = 'billing_event';
  const ADD_FUNDING_SOURCE = 'add_funding_source';
  const REMOVE_FUNDING_SOURCE = 'remove_funding_source';
  const CREATE_CAMPAIGN_GROUP = 'create_campaign_group';
  const UPDATE_CAMPAIGN_NAME = 'update_campaign_name';
  const UPDATE_CAMPAIGN_RUN_STATUS = 'update_campaign_run_status';
  const UPDATE_CAMPAIGN_GROUP_SPEND_CAP = 'update_campaign_group_spend_cap';
  const CREATE_CAMPAIGN = 'create_campaign';
  const CREATE_CAMPAIGN_LEGACY = 'create_campaign_legacy';
  const UPDATE_CAMPAIGN_BUDGET = 'update_campaign_budget';
  const UPDATE_CAMPAIGN_DURATION = 'update_campaign_duration';
  const CREATE_AD_SET = 'create_ad_set';
  const UPDATE_AD_SET_BIDDING = 'update_ad_set_bidding';
  const UPDATE_AD_SET_BUDGET = 'update_ad_set_budget';
  const UPDATE_AD_SET_DURATION = 'update_ad_set_duration';
  const UPDATE_AD_SET_RUN_STATUS = 'update_ad_set_run_status';
  const UPDATE_AD_SET_NAME = 'update_ad_set_name';
  const CREATE_AD = 'create_ad';
  const UPDATE_AD_CREATIVE = 'update_ad_creative';
  const EDIT_AND_UPDATE_AD_CREATIVE = 'edit_and_update_ad_creative';
  const UPDATE_AD_BID_INFO = 'update_ad_bid_info';
  const UPDATE_AD_BID_TYPE = 'update_ad_bid_type';
  const UPDATE_AD_RUN_STATUS = 'update_ad_run_status';
  const UPDATE_AD_FRIENDLY_NAME = 'update_ad_friendly_name';
  const UPDATE_AD_TARGETS_SPEC = 'update_ad_targets_spec';
  const UPDATE_ADGROUP_STOP_DELIVERY = 'update_adgroup_stop_delivery';
  const UPDATE_AD_SET_TARGET_SPEC = 'update_ad_set_target_spec';
  const AD_REVIEW_APPROVED = 'ad_review_approved';
  const AD_REVIEW_DECLINED = 'ad_review_declined';
  const FIRST_DELIVERY_EVENT = 'first_delivery_event';
  const CREATE_AUDIENCE = 'create_audience';
  const UPDATE_AUDIENCE = 'update_audience';
  const DELETE_AUDIENCE = 'delete_audience';
  const SHARE_AUDIENCE = 'share_audience';
  const RECEIVE_AUDIENCE = 'receive_audience';
  const UNSHARE_AUDIENCE = 'unshare_audience';
  const REMOVE_SHARED_AUDIENCE = 'remove_shared_audience';
  const UNKNOWN = 'unknown';
  const FUNDING_EVENT_INITIATED = 'funding_event_initiated';
  const FUNDING_EVENT_SUCCESSFUL = 'funding_event_successful';
  const UPDATE_AD_LABELS = 'update_ad_labels';
}
