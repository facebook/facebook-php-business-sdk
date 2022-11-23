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

class LiveVideoInputStreamFields extends AbstractEnum {

  const DASH_INGEST_URL = 'dash_ingest_url';
  const DASH_PREVIEW_URL = 'dash_preview_url';
  const ID = 'id';
  const IS_MASTER = 'is_master';
  const SECURE_STREAM_URL = 'secure_stream_url';
  const STREAM_HEALTH = 'stream_health';
  const STREAM_ID = 'stream_id';
  const STREAM_URL = 'stream_url';

  public function getFieldTypes() {
    return array(
      'dash_ingest_url' => 'string',
      'dash_preview_url' => 'string',
      'id' => 'string',
      'is_master' => 'bool',
      'secure_stream_url' => 'string',
      'stream_health' => 'Object',
      'stream_id' => 'string',
      'stream_url' => 'string',
    );
  }
}
