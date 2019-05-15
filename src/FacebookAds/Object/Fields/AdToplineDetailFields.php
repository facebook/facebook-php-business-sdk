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

class AdToplineDetailFields extends AbstractEnum {

  const ACTIVE_STATUS = 'active_status';
  const AD_ACCOUNT_ID = 'ad_account_id';
  const FLIGHT_END_DATE = 'flight_end_date';
  const FLIGHT_START_DATE = 'flight_start_date';
  const ID = 'id';
  const IO_NUMBER = 'io_number';
  const LINE_NUMBER = 'line_number';
  const PRICE = 'price';
  const QUANTITY = 'quantity';
  const SF_DETAIL_LINE_ID = 'sf_detail_line_id';
  const SUBLINE_ID = 'subline_id';
  const TARGETS = 'targets';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';
  const TOPLINE_ID = 'topline_id';

  public function getFieldTypes() {
    return array(
      'active_status' => 'int',
      'ad_account_id' => 'string',
      'flight_end_date' => 'datetime',
      'flight_start_date' => 'datetime',
      'id' => 'string',
      'io_number' => 'int',
      'line_number' => 'int',
      'price' => 'float',
      'quantity' => 'float',
      'sf_detail_line_id' => 'string',
      'subline_id' => 'string',
      'targets' => 'string',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
      'topline_id' => 'AdTopline',
    );
  }
}
