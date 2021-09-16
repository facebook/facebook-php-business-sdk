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

class SavedAudienceFields extends AbstractEnum {

  const ACCOUNT = 'account';
  const APPROXIMATE_COUNT = 'approximate_count';
  const APPROXIMATE_COUNT_64BIT = 'approximate_count_64bit';
  const DELETE_TIME = 'delete_time';
  const DESCRIPTION = 'description';
  const EXTRA_INFO = 'extra_info';
  const ID = 'id';
  const NAME = 'name';
  const OPERATION_STATUS = 'operation_status';
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
      'approximate_count' => 'int',
      'approximate_count_64bit' => 'int',
      'delete_time' => 'int',
      'description' => 'string',
      'extra_info' => 'string',
      'id' => 'string',
      'name' => 'string',
      'operation_status' => 'CustomAudienceStatus',
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
