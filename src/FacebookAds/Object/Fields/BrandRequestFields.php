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

class BrandRequestFields extends AbstractEnum {

  const AD_COUNTRIES = 'ad_countries';
  const ADDITIONAL_CONTACTS = 'additional_contacts';
  const APPROVAL_LEVEL = 'approval_level';
  const CELLS = 'cells';
  const COUNTRIES = 'countries';
  const DENY_REASON = 'deny_reason';
  const END_TIME = 'end_time';
  const ESTIMATED_REACH = 'estimated_reach';
  const ID = 'id';
  const IS_MULTICELL = 'is_multicell';
  const LOCALE = 'locale';
  const MAX_AGE = 'max_age';
  const MIN_AGE = 'min_age';
  const QUESTIONS = 'questions';
  const REGION = 'region';
  const REQUEST_STATUS = 'request_status';
  const REVIEW_DATE = 'review_date';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const SUBMIT_DATE = 'submit_date';
  const TOTAL_BUDGET = 'total_budget';

  public function getFieldTypes() {
    return array(
      'ad_countries' => 'list<string>',
      'additional_contacts' => 'list<string>',
      'approval_level' => 'unsigned int',
      'cells' => 'list<Object>',
      'countries' => 'list<string>',
      'deny_reason' => 'string',
      'end_time' => 'datetime',
      'estimated_reach' => 'unsigned int',
      'id' => 'string',
      'is_multicell' => 'bool',
      'locale' => 'string',
      'max_age' => 'unsigned int',
      'min_age' => 'unsigned int',
      'questions' => 'list<Object>',
      'region' => 'string',
      'request_status' => 'string',
      'review_date' => 'datetime',
      'start_time' => 'datetime',
      'status' => 'string',
      'submit_date' => 'datetime',
      'total_budget' => 'unsigned int',
    );
  }
}
