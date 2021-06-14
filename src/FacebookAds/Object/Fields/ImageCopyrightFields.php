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

class ImageCopyrightFields extends AbstractEnum {

  const ARTIST = 'artist';
  const COPYRIGHT_MONITORING_STATUS = 'copyright_monitoring_status';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const CUSTOM_ID = 'custom_id';
  const DESCRIPTION = 'description';
  const FILENAME = 'filename';
  const ID = 'id';
  const IMAGE = 'image';
  const MATCHES_COUNT = 'matches_count';
  const ORIGINAL_CONTENT_CREATION_DATE = 'original_content_creation_date';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const TAGS = 'tags';
  const TITLE = 'title';
  const UPDATE_TIME = 'update_time';

  public function getFieldTypes() {
    return array(
      'artist' => 'string',
      'copyright_monitoring_status' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'string',
      'custom_id' => 'string',
      'description' => 'string',
      'filename' => 'string',
      'id' => 'string',
      'image' => 'Photo',
      'matches_count' => 'unsigned int',
      'original_content_creation_date' => 'datetime',
      'ownership_countries' => 'VideoCopyrightGeoGate',
      'tags' => 'list<string>',
      'title' => 'string',
      'update_time' => 'datetime',
    );
  }
}
