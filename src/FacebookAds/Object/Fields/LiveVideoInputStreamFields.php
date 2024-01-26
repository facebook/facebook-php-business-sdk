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
