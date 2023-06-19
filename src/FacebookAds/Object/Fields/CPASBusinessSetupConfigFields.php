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

class CPASBusinessSetupConfigFields extends AbstractEnum {

  const ACCEPTED_COLLAB_ADS_TOS = 'accepted_collab_ads_tos';
  const BUSINESS = 'business';
  const BUSINESS_CAPABILITIES_STATUS = 'business_capabilities_status';
  const CAPABILITIES_COMPLIANCE_STATUS = 'capabilities_compliance_status';
  const ID = 'id';
  const AD_ACCOUNTS = 'ad_accounts';

  public function getFieldTypes() {
    return array(
      'accepted_collab_ads_tos' => 'bool',
      'business' => 'Business',
      'business_capabilities_status' => 'list<map<string, string>>',
      'capabilities_compliance_status' => 'list<map<string, Object>>',
      'id' => 'string',
      'ad_accounts' => 'list<string>',
    );
  }
}
