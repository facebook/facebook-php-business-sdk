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

class CPASAdvertiserPartnershipRecommendationFields extends AbstractEnum {

  const ADVERTISER_BUSINESS_ID = 'advertiser_business_id';
  const BRAND_BUSINESS_ID = 'brand_business_id';
  const BRANDS = 'brands';
  const COUNTRIES = 'countries';
  const ID = 'id';
  const MERCHANT_BUSINESS_ID = 'merchant_business_id';
  const MERCHANT_CATEGORIES = 'merchant_categories';
  const STATUS = 'status';
  const STATUS_REASON = 'status_reason';

  public function getFieldTypes() {
    return array(
      'advertiser_business_id' => 'string',
      'brand_business_id' => 'string',
      'brands' => 'list<string>',
      'countries' => 'list<string>',
      'id' => 'string',
      'merchant_business_id' => 'string',
      'merchant_categories' => 'list<string>',
      'status' => 'string',
      'status_reason' => 'string',
    );
  }
}
