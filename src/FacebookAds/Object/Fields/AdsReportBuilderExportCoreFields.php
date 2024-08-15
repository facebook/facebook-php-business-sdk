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

class AdsReportBuilderExportCoreFields extends AbstractEnum {

  const ASYNC_PERCENT_COMPLETION = 'async_percent_completion';
  const ASYNC_REPORT_URL = 'async_report_url';
  const ASYNC_STATUS = 'async_status';
  const CLIENT_CREATION_VALUE = 'client_creation_value';
  const EXPIRY_TIME = 'expiry_time';
  const EXPORT_DOWNLOAD_TIME = 'export_download_time';
  const EXPORT_FORMAT = 'export_format';
  const EXPORT_NAME = 'export_name';
  const EXPORT_TYPE = 'export_type';
  const HAS_SEEN = 'has_seen';
  const ID = 'id';
  const IS_SHARING = 'is_sharing';
  const LINK_SHARING_EXPIRATION_TIME = 'link_sharing_expiration_time';
  const LINK_SHARING_URI = 'link_sharing_uri';
  const TIME_COMPLETED = 'time_completed';
  const TIME_START = 'time_start';

  public function getFieldTypes() {
    return array(
      'async_percent_completion' => 'int',
      'async_report_url' => 'string',
      'async_status' => 'string',
      'client_creation_value' => 'string',
      'expiry_time' => 'datetime',
      'export_download_time' => 'datetime',
      'export_format' => 'string',
      'export_name' => 'string',
      'export_type' => 'string',
      'has_seen' => 'bool',
      'id' => 'string',
      'is_sharing' => 'bool',
      'link_sharing_expiration_time' => 'datetime',
      'link_sharing_uri' => 'string',
      'time_completed' => 'datetime',
      'time_start' => 'datetime',
    );
  }
}
