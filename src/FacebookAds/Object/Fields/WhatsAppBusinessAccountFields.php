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

class WhatsAppBusinessAccountFields extends AbstractEnum {

  const ANALYTICS = 'analytics';
  const BUSINESS_TYPE = 'business_type';
  const CURRENCY = 'currency';
  const FRIENDLY_NAME = 'friendly_name';
  const HSM_NAMESPACE = 'hsm_namespace';
  const ID = 'id';
  const ON_BEHALF_OF_BUSINESS_COMPUTED_INFO = 'on_behalf_of_business_computed_info';
  const PRIMARY_FUNDING_ID = 'primary_funding_id';
  const STATUS = 'status';
  const TIMEZONE_ID = 'timezone_id';

  public function getFieldTypes() {
    return array(
      'analytics' => 'Object',
      'business_type' => 'string',
      'currency' => 'string',
      'friendly_name' => 'string',
      'hsm_namespace' => 'string',
      'id' => 'string',
      'on_behalf_of_business_computed_info' => 'Object',
      'primary_funding_id' => 'string',
      'status' => 'string',
      'timezone_id' => 'string',
    );
  }
}
