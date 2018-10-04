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

class HomeServiceProviderFields extends AbstractEnum {

  const ACHIEVEMENT_BADGES = 'achievement_badges';
  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const BBB_RATING = 'bbb_rating';
  const BOOKABLE_TASK = 'bookable_task';
  const BUSINESS_HOURS = 'business_hours';
  const BUSINESS_PHONE_NUMBER = 'business_phone_number';
  const BUSINESS_URL = 'business_url';
  const COMPANY_NAME = 'company_name';
  const COMPANY_TAGLINE = 'company_tagline';
  const COMPLETED_JOBS = 'completed_jobs';
  const CRIMINAL_BACKGROUND_CHECK_DATE = 'criminal_background_check_date';
  const DEALS = 'deals';
  const DESCRIPTION = 'description';
  const FB_PAGE_ID = 'fb_page_id';
  const FINANCIAL_BACKGROUND_CHECK_DATE = 'financial_background_check_date';
  const FIRST_NAME = 'first_name';
  const HOME_SERVICE_PROVIDER_ID = 'home_service_provider_id';
  const ID = 'id';
  const IMAGES = 'images';
  const INSURANCE_INFO = 'insurance_info';
  const INTERNAL_SCORE = 'internal_score';
  const LAST_NAME = 'last_name';
  const LICENSING_INFO = 'licensing_info';
  const MESSAGING_INBOX_PAGE_ID = 'messaging_inbox_page_id';
  const PARTNER_VERIFIED_DATE = 'partner_verified_date';
  const PRODUCT_BRANDS_USED = 'product_brands_used';
  const PROVIDER_TYPE = 'provider_type';
  const RATING_DISTRIBUTION = 'rating_distribution';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TITLE = 'title';
  const TRANSACTION_CURRENCY = 'transaction_currency';
  const URL = 'url';
  const YEAR_BUSINESS_STARTED = 'year_business_started';

  public function getFieldTypes() {
    return array(
      'achievement_badges' => 'string',
      'address' => 'Object',
      'applinks' => 'AppLinks',
      'bbb_rating' => 'string',
      'bookable_task' => 'list<Object>',
      'business_hours' => 'list<Object>',
      'business_phone_number' => 'string',
      'business_url' => 'string',
      'company_name' => 'string',
      'company_tagline' => 'string',
      'completed_jobs' => 'Object',
      'criminal_background_check_date' => 'string',
      'deals' => 'string',
      'description' => 'string',
      'fb_page_id' => 'Page',
      'financial_background_check_date' => 'string',
      'first_name' => 'string',
      'home_service_provider_id' => 'string',
      'id' => 'string',
      'images' => 'list<string>',
      'insurance_info' => 'string',
      'internal_score' => 'float',
      'last_name' => 'string',
      'licensing_info' => 'string',
      'messaging_inbox_page_id' => 'Page',
      'partner_verified_date' => 'string',
      'product_brands_used' => 'string',
      'provider_type' => 'string',
      'rating_distribution' => 'list<Object>',
      'sanitized_images' => 'list<string>',
      'title' => 'string',
      'transaction_currency' => 'string',
      'url' => 'string',
      'year_business_started' => 'unsigned int',
    );
  }
}
