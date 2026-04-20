<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static ProductFeedUploadGetInputMethodValues getInstance()
 */
class ProductFeedUploadGetInputMethodValues extends AbstractEnum {

  const GOOGLE_SHEETS_FETCH = 'GOOGLE_SHEETS_FETCH';
  const MANUAL_UPLOAD = 'MANUAL_UPLOAD';
  const REUPLOAD_EXISTING = 'REUPLOAD_EXISTING';
  const REUPLOAD_LAST_FILE = 'REUPLOAD_LAST_FILE';
  const SERVER_FETCH = 'SERVER_FETCH';
  const USER_INITIATED_SERVER_FETCH = 'USER_INITIATED_SERVER_FETCH';
}
