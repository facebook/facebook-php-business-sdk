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

class AgencyClientDeclarationFields extends AbstractEnum {

  const AGENCY_REPRESENTING_CLIENT = 'agency_representing_client';
  const CLIENT_BASED_IN_FRANCE = 'client_based_in_france';
  const CLIENT_CITY = 'client_city';
  const CLIENT_COUNTRY_CODE = 'client_country_code';
  const CLIENT_EMAIL_ADDRESS = 'client_email_address';
  const CLIENT_NAME = 'client_name';
  const CLIENT_POSTAL_CODE = 'client_postal_code';
  const CLIENT_PROVINCE = 'client_province';
  const CLIENT_STREET = 'client_street';
  const CLIENT_STREET2 = 'client_street2';
  const HAS_WRITTEN_MANDATE_FROM_ADVERTISER = 'has_written_mandate_from_advertiser';
  const IS_CLIENT_PAYING_INVOICES = 'is_client_paying_invoices';

  public function getFieldTypes() {
    return array(
      'agency_representing_client' => 'unsigned int',
      'client_based_in_france' => 'unsigned int',
      'client_city' => 'string',
      'client_country_code' => 'string',
      'client_email_address' => 'string',
      'client_name' => 'string',
      'client_postal_code' => 'string',
      'client_province' => 'string',
      'client_street' => 'string',
      'client_street2' => 'string',
      'has_written_mandate_from_advertiser' => 'unsigned int',
      'is_client_paying_invoices' => 'unsigned int',
    );
  }
}
