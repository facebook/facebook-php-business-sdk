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

class VideoStatusFields extends AbstractEnum {

  const COPYRIGHT_CHECK_STATUS = 'copyright_check_status';
  const PROCESSING_PHASE = 'processing_phase';
  const PROCESSING_PROGRESS = 'processing_progress';
  const PUBLISHING_PHASE = 'publishing_phase';
  const UPLOADING_PHASE = 'uploading_phase';
  const VIDEO_STATUS = 'video_status';

  public function getFieldTypes() {
    return array(
      'copyright_check_status' => 'VideoCopyrightCheckStatus',
      'processing_phase' => 'VideoStatusProcessingPhase',
      'processing_progress' => 'unsigned int',
      'publishing_phase' => 'VideoStatusPublishingPhase',
      'uploading_phase' => 'VideoStatusUploadingPhase',
      'video_status' => 'string',
    );
  }
}
