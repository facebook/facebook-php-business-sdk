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

class LiveEncoderFields extends AbstractEnum {

  const BRAND = 'brand';
  const CREATION_TIME = 'creation_time';
  const CURRENT_BROADCAST = 'current_broadcast';
  const CURRENT_INPUT_STREAM = 'current_input_stream';
  const DEVICE_ID = 'device_id';
  const ID = 'id';
  const LAST_HEARTBEAT_TIME = 'last_heartbeat_time';
  const MODEL = 'model';
  const NAME = 'name';
  const STATUS = 'status';
  const VERSION = 'version';

  public function getFieldTypes() {
    return array(
      'brand' => 'string',
      'creation_time' => 'datetime',
      'current_broadcast' => 'LiveVideo',
      'current_input_stream' => 'LiveVideoInputStream',
      'device_id' => 'string',
      'id' => 'string',
      'last_heartbeat_time' => 'datetime',
      'model' => 'string',
      'name' => 'string',
      'status' => 'string',
      'version' => 'string',
    );
  }
}
