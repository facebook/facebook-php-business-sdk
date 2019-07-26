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

class CommentFields extends AbstractEnum {

  const ADMIN_CREATOR = 'admin_creator';
  const APPLICATION = 'application';
  const ATTACHMENT = 'attachment';
  const CAN_COMMENT = 'can_comment';
  const CAN_HIDE = 'can_hide';
  const CAN_LIKE = 'can_like';
  const CAN_REMOVE = 'can_remove';
  const CAN_REPLY_PRIVATELY = 'can_reply_privately';
  const COMMENT_COUNT = 'comment_count';
  const CREATED_TIME = 'created_time';
  const FROM = 'from';
  const ID = 'id';
  const IS_HIDDEN = 'is_hidden';
  const IS_PRIVATE = 'is_private';
  const LIKE_COUNT = 'like_count';
  const LIVE_BROADCAST_TIMESTAMP = 'live_broadcast_timestamp';
  const MESSAGE = 'message';
  const MESSAGE_TAGS = 'message_tags';
  const OBJECT = 'object';
  const PARENT = 'parent';
  const PERMALINK_URL = 'permalink_url';
  const PRIVATE_REPLY_CONVERSATION = 'private_reply_conversation';
  const USER_LIKES = 'user_likes';

  public function getFieldTypes() {
    return array(
      'admin_creator' => 'User',
      'application' => 'Application',
      'attachment' => 'Object',
      'can_comment' => 'bool',
      'can_hide' => 'bool',
      'can_like' => 'bool',
      'can_remove' => 'bool',
      'can_reply_privately' => 'bool',
      'comment_count' => 'unsigned int',
      'created_time' => 'datetime',
      'from' => 'Object',
      'id' => 'string',
      'is_hidden' => 'bool',
      'is_private' => 'bool',
      'like_count' => 'unsigned int',
      'live_broadcast_timestamp' => 'unsigned int',
      'message' => 'string',
      'message_tags' => 'list<EntityAtTextRange>',
      'object' => 'Object',
      'parent' => 'Comment',
      'permalink_url' => 'string',
      'private_reply_conversation' => 'Object',
      'user_likes' => 'bool',
    );
  }
}
