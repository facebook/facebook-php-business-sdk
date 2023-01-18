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
 * @method static AdVideoFields getInstance()
 */
class AdVideoFields extends AbstractEnum {

  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const EMBED_HTML = 'embed_html';
  const EMBEDDABLE = 'embeddable';
  const FILE_URL = 'file_url';
  const FORMAT = 'format';
  const FROM = 'from';
  const ICON = 'icon';
  const ID = 'id';
  const IS_INSTAGRAM_ELIGIBLE = 'is_instagram_eligible';
  const NAME = 'name';
  const PICTURE = 'picture';
  const PUBLISHED = 'published';
  const SLIDESHOW_SPEC = 'slideshow_spec';
  const SOURCE = 'source';
  const THUMBNAILS = 'thumbnails';
  const UPDATED_TIME = 'updated_time';
}
