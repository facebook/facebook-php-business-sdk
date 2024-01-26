<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
