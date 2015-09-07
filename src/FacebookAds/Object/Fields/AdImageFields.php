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
 * @method static AdImageFields getInstance()
 */
class AdImageFields extends AbstractEnum {

  const ID = 'id';
  const HASH = 'hash';
  const URL = 'url';
  const CREATIVES = 'creatives';
  const FILENAME = 'filename';
  const WIDTH = 'width';
  const HEIGHT = 'height';
  const ORIGINAL_WIDTH = 'original_width';
  const ORIGINAL_HEIGHT = 'original_height';
  const NAME = 'name';
  const STATUS = 'status';
  const CREATED_TIME = 'created_time';
  const UPDATED_TIME = 'updated_time';
  const PERMALINK_URL = 'permalink_url';
  const URL_128 = 'url_128';
}
