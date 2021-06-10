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

class AdgroupPlacementSpecificReviewFeedbackFields extends AbstractEnum {

  const ACCOUNT_ADMIN = 'account_admin';
  const AD = 'ad';
  const ADS_CONVERSION_EXPERIENCES = 'ads_conversion_experiences';
  const B2C = 'b2c';
  const B2C_COMMERCE_UNIFIED = 'b2c_commerce_unified';
  const BSG = 'bsg';
  const CITY_COMMUNITY = 'city_community';
  const COMMERCE = 'commerce';
  const DAILY_DEALS = 'daily_deals';
  const DAILY_DEALS_LEGACY = 'daily_deals_legacy';
  const DPA = 'dpa';
  const DRI_COPYRIGHT = 'dri_copyright';
  const DRI_COUNTERFEIT = 'dri_counterfeit';
  const FACEBOOK = 'facebook';
  const FACEBOOK_PAGES_LIVE_SHOPPING = 'facebook_pages_live_shopping';
  const INDEPENDENT_WORK = 'independent_work';
  const INSTAGRAM = 'instagram';
  const INSTAGRAM_SHOP = 'instagram_shop';
  const JOB_SEARCH = 'job_search';
  const LEAD_GEN_HONEYPOT = 'lead_gen_honeypot';
  const MARKETPLACE = 'marketplace';
  const MARKETPLACE_HOME_RENTALS = 'marketplace_home_rentals';
  const MARKETPLACE_HOME_SALES = 'marketplace_home_sales';
  const MARKETPLACE_MOTORS = 'marketplace_motors';
  const MARKETPLACE_SHOPS = 'marketplace_shops';
  const MAX_REVIEW_PLACEMENTS = 'max_review_placements';
  const PAGE_ADMIN = 'page_admin';
  const PRODUCT = 'product';
  const PRODUCT_SERVICE = 'product_service';
  const PROFILE = 'profile';
  const SELLER = 'seller';
  const SHOPS = 'shops';
  const TRAFFIC_QUALITY = 'traffic_quality';
  const WHATSAPP = 'whatsapp';

  public function getFieldTypes() {
    return array(
      'account_admin' => 'map<string, string>',
      'ad' => 'map<string, string>',
      'ads_conversion_experiences' => 'map<string, string>',
      'b2c' => 'map<string, string>',
      'b2c_commerce_unified' => 'map<string, string>',
      'bsg' => 'map<string, string>',
      'city_community' => 'map<string, string>',
      'commerce' => 'map<string, string>',
      'daily_deals' => 'map<string, string>',
      'daily_deals_legacy' => 'map<string, string>',
      'dpa' => 'map<string, string>',
      'dri_copyright' => 'map<string, string>',
      'dri_counterfeit' => 'map<string, string>',
      'facebook' => 'map<string, string>',
      'facebook_pages_live_shopping' => 'map<string, string>',
      'independent_work' => 'map<string, string>',
      'instagram' => 'map<string, string>',
      'instagram_shop' => 'map<string, string>',
      'job_search' => 'map<string, string>',
      'lead_gen_honeypot' => 'map<string, string>',
      'marketplace' => 'map<string, string>',
      'marketplace_home_rentals' => 'map<string, string>',
      'marketplace_home_sales' => 'map<string, string>',
      'marketplace_motors' => 'map<string, string>',
      'marketplace_shops' => 'map<string, string>',
      'max_review_placements' => 'map<string, string>',
      'page_admin' => 'map<string, string>',
      'product' => 'map<string, string>',
      'product_service' => 'map<string, string>',
      'profile' => 'map<string, string>',
      'seller' => 'map<string, string>',
      'shops' => 'map<string, string>',
      'traffic_quality' => 'map<string, string>',
      'whatsapp' => 'map<string, string>',
    );
  }
}
