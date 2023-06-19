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

class PrivateLiftStudyInstanceFields extends AbstractEnum {

  const BREAKDOWN_KEY = 'breakdown_key';
  const CREATED_TIME = 'created_time';
  const FEATURE_LIST = 'feature_list';
  const ID = 'id';
  const ISSUER_CERTIFICATE = 'issuer_certificate';
  const LATEST_STATUS_UPDATE_TIME = 'latest_status_update_time';
  const RUN_ID = 'run_id';
  const SERVER_HOSTNAMES = 'server_hostnames';
  const SERVER_IPS = 'server_ips';
  const STATUS = 'status';
  const TIER = 'tier';

  public function getFieldTypes() {
    return array(
      'breakdown_key' => 'string',
      'created_time' => 'datetime',
      'feature_list' => 'list<string>',
      'id' => 'string',
      'issuer_certificate' => 'string',
      'latest_status_update_time' => 'datetime',
      'run_id' => 'string',
      'server_hostnames' => 'list<string>',
      'server_ips' => 'list<string>',
      'status' => 'string',
      'tier' => 'string',
    );
  }
}
