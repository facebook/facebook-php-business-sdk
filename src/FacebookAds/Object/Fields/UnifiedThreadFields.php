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

class UnifiedThreadFields extends AbstractEnum {

  const CAN_REPLY = 'can_reply';
  const FOLDER = 'folder';
  const FORMER_PARTICIPANTS = 'former_participants';
  const ID = 'id';
  const IS_SUBSCRIBED = 'is_subscribed';
  const LINK = 'link';
  const LINKED_GROUP = 'linked_group';
  const MESSAGE_COUNT = 'message_count';
  const NAME = 'name';
  const PARTICIPANTS = 'participants';
  const SCOPED_THREAD_KEY = 'scoped_thread_key';
  const SENDERS = 'senders';
  const SNIPPET = 'snippet';
  const SUBJECT = 'subject';
  const UNREAD_COUNT = 'unread_count';
  const UPDATED_TIME = 'updated_time';
  const WALLPAPER = 'wallpaper';

  public function getFieldTypes() {
    return array(
      'can_reply' => 'bool',
      'folder' => 'string',
      'former_participants' => 'Object',
      'id' => 'string',
      'is_subscribed' => 'bool',
      'link' => 'string',
      'linked_group' => 'Group',
      'message_count' => 'int',
      'name' => 'string',
      'participants' => 'Object',
      'scoped_thread_key' => 'string',
      'senders' => 'Object',
      'snippet' => 'string',
      'subject' => 'string',
      'unread_count' => 'int',
      'updated_time' => 'datetime',
      'wallpaper' => 'string',
    );
  }
}
