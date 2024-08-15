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

class PhotoMetadataFields extends AbstractEnum {

  const CAMERA_MAKE = 'camera_make';
  const CAMERA_MODEL = 'camera_model';
  const DATETIME_MODIFIED = 'datetime_modified';
  const DATETIME_TAKEN = 'datetime_taken';
  const EXPOSURE = 'exposure';
  const FOCAL_LENGTH = 'focal_length';
  const FSTOP = 'fstop';
  const ISO_SPEED = 'iso_speed';
  const OFFLINE_ID = 'offline_id';
  const ORIENTATION = 'orientation';
  const ORIGINAL_HEIGHT = 'original_height';
  const ORIGINAL_WIDTH = 'original_width';

  public function getFieldTypes() {
    return array(
      'camera_make' => 'string',
      'camera_model' => 'string',
      'datetime_modified' => 'datetime',
      'datetime_taken' => 'datetime',
      'exposure' => 'string',
      'focal_length' => 'string',
      'fstop' => 'string',
      'iso_speed' => 'int',
      'offline_id' => 'string',
      'orientation' => 'string',
      'original_height' => 'string',
      'original_width' => 'string',
    );
  }
}
