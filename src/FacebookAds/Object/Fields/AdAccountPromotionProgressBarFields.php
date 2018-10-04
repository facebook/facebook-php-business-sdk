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

class AdAccountPromotionProgressBarFields extends AbstractEnum {

  const ADACCOUNT_PERMISSION = 'adaccount_permission';
  const COUPON_CURRENCY = 'coupon_currency';
  const COUPON_VALUE = 'coupon_value';
  const EXPIRATION_TIME = 'expiration_time';
  const PROGRESS_COMPLETED = 'progress_completed';
  const PROMOTION_TYPE = 'promotion_type';
  const SPEND_REQUIREMENT_IN_CENT = 'spend_requirement_in_cent';
  const SPEND_SINCE_ENROLLMENT = 'spend_since_enrollment';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'adaccount_permission' => 'bool',
      'coupon_currency' => 'string',
      'coupon_value' => 'int',
      'expiration_time' => 'datetime',
      'progress_completed' => 'bool',
      'promotion_type' => 'string',
      'spend_requirement_in_cent' => 'int',
      'spend_since_enrollment' => 'int',
      'id' => 'string',
    );
  }
}
