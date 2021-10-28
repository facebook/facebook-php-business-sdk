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

class CloudGameFields extends AbstractEnum {

  const ID = 'id';
  const NAME = 'name';
  const OWNER = 'owner';
  const PLAYABLE_AD_FILE_SIZE = 'playable_ad_file_size';
  const PLAYABLE_AD_ORIENTATION = 'playable_ad_orientation';
  const PLAYABLE_AD_PACKAGE_NAME = 'playable_ad_package_name';
  const PLAYABLE_AD_REJECT_REASON = 'playable_ad_reject_reason';
  const PLAYABLE_AD_STATUS = 'playable_ad_status';
  const PLAYABLE_AD_UPLOAD_TIME = 'playable_ad_upload_time';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'name' => 'string',
      'owner' => 'Profile',
      'playable_ad_file_size' => 'unsigned int',
      'playable_ad_orientation' => 'string',
      'playable_ad_package_name' => 'string',
      'playable_ad_reject_reason' => 'string',
      'playable_ad_status' => 'string',
      'playable_ad_upload_time' => 'datetime',
    );
  }
}
