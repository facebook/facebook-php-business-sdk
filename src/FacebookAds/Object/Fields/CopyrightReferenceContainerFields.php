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

class CopyrightReferenceContainerFields extends AbstractEnum {

  const CONTENT_TYPE = 'content_type';
  const COPYRIGHT_CREATION_TIME = 'copyright_creation_time';
  const DOWNLOAD_HD_URL = 'download_hd_url';
  const DURATION_IN_SEC = 'duration_in_sec';
  const ID = 'id';
  const ISWC = 'iswc';
  const METADATA = 'metadata';
  const PUBLISHED_TIME = 'published_time';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TITLE = 'title';
  const UNIVERSAL_CONTENT_ID = 'universal_content_id';
  const WRITER_NAMES = 'writer_names';

  public function getFieldTypes() {
    return array(
      'content_type' => 'string',
      'copyright_creation_time' => 'datetime',
      'download_hd_url' => 'string',
      'duration_in_sec' => 'float',
      'id' => 'string',
      'iswc' => 'string',
      'metadata' => 'Object',
      'published_time' => 'datetime',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'universal_content_id' => 'string',
      'writer_names' => 'list<string>',
    );
  }
}
