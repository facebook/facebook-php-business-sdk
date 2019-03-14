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

class VoipInfoFields extends AbstractEnum {

  const HAS_MOBILE_APP = 'has_mobile_app';
  const HAS_PERMISSION = 'has_permission';
  const IS_CALLABLE = 'is_callable';
  const IS_CALLABLE_WEBRTC = 'is_callable_webrtc';
  const IS_PUSHABLE = 'is_pushable';
  const REASON_CODE = 'reason_code';
  const REASON_DESCRIPTION = 'reason_description';

  public function getFieldTypes() {
    return array(
      'has_mobile_app' => 'bool',
      'has_permission' => 'bool',
      'is_callable' => 'bool',
      'is_callable_webrtc' => 'bool',
      'is_pushable' => 'bool',
      'reason_code' => 'unsigned int',
      'reason_description' => 'string',
    );
  }
}
