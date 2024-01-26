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

class SavedAudienceFields extends AbstractEnum {

  const ACCOUNT = 'account';
  const APPROXIMATE_COUNT_LOWER_BOUND = 'approximate_count_lower_bound';
  const APPROXIMATE_COUNT_UPPER_BOUND = 'approximate_count_upper_bound';
  const DELETE_TIME = 'delete_time';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const NAME = 'name';
  const OPERATION_STATUS = 'operation_status';
  const OWNER_BUSINESS = 'owner_business';
  const PAGE_DELETION_MARKED_DELETE_TIME = 'page_deletion_marked_delete_time';
  const PERMISSION_FOR_ACTIONS = 'permission_for_actions';
  const RUN_STATUS = 'run_status';
  const SENTENCE_LINES = 'sentence_lines';
  const TARGETING = 'targeting';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';

  public function getFieldTypes() {
    return array(
      'account' => 'AdAccount',
      'approximate_count_lower_bound' => 'int',
      'approximate_count_upper_bound' => 'int',
      'delete_time' => 'int',
      'description' => 'string',
      'id' => 'string',
      'name' => 'string',
      'operation_status' => 'CustomAudienceStatus',
      'owner_business' => 'Business',
      'page_deletion_marked_delete_time' => 'int',
      'permission_for_actions' => 'AudiencePermissionForActions',
      'run_status' => 'string',
      'sentence_lines' => 'list',
      'targeting' => 'Targeting',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
    );
  }
}
