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

class LeadFields extends AbstractEnum {

  const AD_ID = 'ad_id';
  const AD_NAME = 'ad_name';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const CREATED_TIME = 'created_time';
  const CUSTOM_DISCLAIMER_RESPONSES = 'custom_disclaimer_responses';
  const FIELD_DATA = 'field_data';
  const FORM_ID = 'form_id';
  const HOME_LISTING = 'home_listing';
  const ID = 'id';
  const IS_ORGANIC = 'is_organic';
  const PARTNER_NAME = 'partner_name';
  const PLATFORM = 'platform';
  const POST = 'post';
  const RETAILER_ITEM_ID = 'retailer_item_id';
  const VEHICLE = 'vehicle';

  public function getFieldTypes() {
    return array(
      'ad_id' => 'string',
      'ad_name' => 'string',
      'adset_id' => 'string',
      'adset_name' => 'string',
      'campaign_id' => 'string',
      'campaign_name' => 'string',
      'created_time' => 'datetime',
      'custom_disclaimer_responses' => 'list<UserLeadGenDisclaimerResponse>',
      'field_data' => 'list<UserLeadGenFieldData>',
      'form_id' => 'string',
      'home_listing' => 'HomeListing',
      'id' => 'string',
      'is_organic' => 'bool',
      'partner_name' => 'string',
      'platform' => 'string',
      'post' => 'Link',
      'retailer_item_id' => 'string',
      'vehicle' => 'Vehicle',
    );
  }
}
