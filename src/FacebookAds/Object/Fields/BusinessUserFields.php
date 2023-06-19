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

class BusinessUserFields extends AbstractEnum {

  const BUSINESS = 'business';
  const BUSINESS_ROLE_REQUEST = 'business_role_request';
  const EMAIL = 'email';
  const FINANCE_PERMISSION = 'finance_permission';
  const FIRST_NAME = 'first_name';
  const ID = 'id';
  const IP_PERMISSION = 'ip_permission';
  const LAST_NAME = 'last_name';
  const MARKED_FOR_REMOVAL = 'marked_for_removal';
  const NAME = 'name';
  const PENDING_EMAIL = 'pending_email';
  const ROLE = 'role';
  const TITLE = 'title';
  const TWO_FAC_STATUS = 'two_fac_status';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'business_role_request' => 'BusinessRoleRequest',
      'email' => 'string',
      'finance_permission' => 'string',
      'first_name' => 'string',
      'id' => 'string',
      'ip_permission' => 'string',
      'last_name' => 'string',
      'marked_for_removal' => 'bool',
      'name' => 'string',
      'pending_email' => 'string',
      'role' => 'string',
      'title' => 'string',
      'two_fac_status' => 'string',
    );
  }
}
