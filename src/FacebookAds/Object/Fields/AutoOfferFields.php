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

class AutoOfferFields extends AbstractEnum {

  const AMOUNT_CURRENCY = 'amount_currency';
  const AMOUNT_PERCENTAGE = 'amount_percentage';
  const AMOUNT_PRICE = 'amount_price';
  const AMOUNT_QUALIFIER = 'amount_qualifier';
  const APPLINKS = 'applinks';
  const AUTO_OFFER_ID = 'auto_offer_id';
  const DOWNPAYMENT_CURRENCY = 'downpayment_currency';
  const DOWNPAYMENT_PRICE = 'downpayment_price';
  const DOWNPAYMENT_QUALIFIER = 'downpayment_qualifier';
  const ID = 'id';
  const IMAGES = 'images';
  const OFFER_DESCRIPTION = 'offer_description';
  const OFFER_DISCLAIMER = 'offer_disclaimer';
  const OFFER_TYPE = 'offer_type';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TERM_LENGTH = 'term_length';
  const TERM_QUALIFIER = 'term_qualifier';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'amount_currency' => 'string',
      'amount_percentage' => 'float',
      'amount_price' => 'string',
      'amount_qualifier' => 'string',
      'applinks' => 'AppLinks',
      'auto_offer_id' => 'string',
      'downpayment_currency' => 'string',
      'downpayment_price' => 'string',
      'downpayment_qualifier' => 'string',
      'id' => 'string',
      'images' => 'list<string>',
      'offer_description' => 'string',
      'offer_disclaimer' => 'string',
      'offer_type' => 'string',
      'sanitized_images' => 'list<string>',
      'term_length' => 'Object',
      'term_qualifier' => 'string',
      'url' => 'string',
    );
  }
}
