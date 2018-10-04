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

class AdDeliveryInsightsFields extends AbstractEnum {

  const AD_SET_ID = 'ad_set_id';
  const AUCTION_COMPETITIVENESS = 'auction_competitiveness';
  const AUCTION_OVERLAP = 'auction_overlap';
  const AUDIENCE_SATURATION = 'audience_saturation';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const REPORT_URIS = 'report_uris';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'ad_set_id' => 'string',
      'auction_competitiveness' => 'Object',
      'auction_overlap' => 'Object',
      'audience_saturation' => 'Object',
      'date_start' => 'string',
      'date_stop' => 'string',
      'report_uris' => 'list<string>',
      'id' => 'string',
    );
  }
}
