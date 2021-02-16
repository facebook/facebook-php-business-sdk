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

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static CommentCommentPrivacyValueValues getInstance()
 */
class CommentCommentPrivacyValueValues extends AbstractEnum {

  const DEFAULT_PRIVACY = 'DEFAULT_PRIVACY';
  const FRIENDS_AND_POST_OWNER = 'FRIENDS_AND_POST_OWNER';
  const FRIENDS_ONLY = 'FRIENDS_ONLY';
  const GRAPHQL_MULTIPLE_VALUE_HACK_DO_NOT_USE = 'GRAPHQL_MULTIPLE_VALUE_HACK_DO_NOT_USE';
  const OWNER_OR_COMMENTER = 'OWNER_OR_COMMENTER';
  const PENDING_APPROVAL = 'PENDING_APPROVAL';
  const SIDE_CONVERSATION = 'SIDE_CONVERSATION';
  const SIDE_CONVERSATION_AND_POST_OWNER = 'SIDE_CONVERSATION_AND_POST_OWNER';
}
