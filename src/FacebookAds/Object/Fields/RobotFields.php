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

class RobotFields extends AbstractEnum {

  const BRINGUP_VARS = 'bringup_vars';
  const CONFIGURATIONS = 'configurations';
  const DATA_CENTER = 'data_center';
  const FW_IMAGE = 'fw_image';
  const ID = 'id';
  const INIT_POS = 'init_pos';
  const LAST_POS = 'last_pos';
  const MEETUP_LINK_HASH = 'meetup_link_hash';
  const RELEASE_IMAGE = 'release_image';
  const ROBOT_NOTES = 'robot_notes';
  const SUITE = 'suite';
  const TARGET_FW_IMAGE = 'target_fw_image';
  const TARGET_FW_IMAGE_URI = 'target_fw_image_uri';
  const TARGET_MAP_IMAGE_URI = 'target_map_image_uri';
  const TARGET_OS_IMAGE_URI = 'target_os_image_uri';
  const TARGET_RELEASE_IMAGE = 'target_release_image';
  const TARGET_SW_IMAGE_URI = 'target_sw_image_uri';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'bringup_vars' => 'list<map<string, string>>',
      'configurations' => 'list<map<string, string>>',
      'data_center' => 'string',
      'fw_image' => 'string',
      'id' => 'string',
      'init_pos' => 'list<map<string, float>>',
      'last_pos' => 'list<map<string, float>>',
      'meetup_link_hash' => 'string',
      'release_image' => 'string',
      'robot_notes' => 'string',
      'suite' => 'string',
      'target_fw_image' => 'string',
      'target_fw_image_uri' => 'string',
      'target_map_image_uri' => 'string',
      'target_os_image_uri' => 'string',
      'target_release_image' => 'string',
      'target_sw_image_uri' => 'string',
      'user' => 'User',
    );
  }
}
