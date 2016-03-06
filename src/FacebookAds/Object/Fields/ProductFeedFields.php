<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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
 * @method static ProductFeedFields getInstance()
 */
class ProductFeedFields extends AbstractEnum {

  const ID = 'id';
  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DELETION_ENABLED = 'deletion_enabled';
  const DELIMITER = 'delimiter';
  const ENCODING = 'encoding';
  const FILE_NAME = 'file_name';
  const FORMAT = 'format';
  const NAME = 'name';
  const LATEST_UPLOAD = 'latest_upload';
  const QUOTES = 'quotes';
  const QUOTED_FIELDS = 'quoted_fields';
  const PRODUCT_COUNT = 'product_count';
  const SCHEDULE = 'schedule';
}
