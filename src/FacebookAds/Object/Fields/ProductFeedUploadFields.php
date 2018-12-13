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

class ProductFeedUploadFields extends AbstractEnum {

  const END_TIME = 'end_time';
  const ERROR_COUNT = 'error_count';
  const ERROR_REPORT = 'error_report';
  const FILENAME = 'filename';
  const ID = 'id';
  const INPUT_METHOD = 'input_method';
  const NUM_DELETED_ITEMS = 'num_deleted_items';
  const NUM_DETECTED_ITEMS = 'num_detected_items';
  const NUM_INVALID_ITEMS = 'num_invalid_items';
  const NUM_PERSISTED_ITEMS = 'num_persisted_items';
  const START_TIME = 'start_time';
  const URL = 'url';
  const WARNING_COUNT = 'warning_count';

  public function getFieldTypes() {
    return array(
      'end_time' => 'datetime',
      'error_count' => 'int',
      'error_report' => 'ProductFeedUploadErrorReport',
      'filename' => 'string',
      'id' => 'string',
      'input_method' => 'InputMethod',
      'num_deleted_items' => 'int',
      'num_detected_items' => 'int',
      'num_invalid_items' => 'int',
      'num_persisted_items' => 'int',
      'start_time' => 'datetime',
      'url' => 'string',
      'warning_count' => 'int',
    );
  }
}
