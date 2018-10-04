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

class EventFields extends AbstractEnum {

  const ATTENDING_COUNT = 'attending_count';
  const CAN_GUESTS_INVITE = 'can_guests_invite';
  const CAN_VIEWER_POST = 'can_viewer_post';
  const CATEGORY = 'category';
  const COVER = 'cover';
  const DECLINED_COUNT = 'declined_count';
  const DESCRIPTION = 'description';
  const DISCOUNT_CODE_ENABLED = 'discount_code_enabled';
  const END_TIME = 'end_time';
  const EVENT_TIMES = 'event_times';
  const GUEST_LIST_ENABLED = 'guest_list_enabled';
  const ID = 'id';
  const INTERESTED_COUNT = 'interested_count';
  const INVITED_COUNT = 'invited_count';
  const IS_CANCELED = 'is_canceled';
  const IS_DATE_ONLY = 'is_date_only';
  const IS_DRAFT = 'is_draft';
  const IS_PAGE_OWNED = 'is_page_owned';
  const LOCATION = 'location';
  const MAYBE_COUNT = 'maybe_count';
  const NAME = 'name';
  const NOREPLY_COUNT = 'noreply_count';
  const OWNER = 'owner';
  const PARENT_GROUP = 'parent_group';
  const PLACE = 'place';
  const PRIVACY = 'privacy';
  const SCHEDULED_PUBLISH_TIME = 'scheduled_publish_time';
  const START_TIME = 'start_time';
  const TICKET_URI = 'ticket_uri';
  const TICKET_URI_START_SALES_TIME = 'ticket_uri_start_sales_time';
  const TICKETING_PRIVACY_URI = 'ticketing_privacy_uri';
  const TICKETING_TERMS_URI = 'ticketing_terms_uri';
  const TIMEZONE = 'timezone';
  const TYPE = 'type';
  const UPDATED_TIME = 'updated_time';
  const VENUE = 'venue';

  public function getFieldTypes() {
    return array(
      'attending_count' => 'int',
      'can_guests_invite' => 'bool',
      'can_viewer_post' => 'bool',
      'category' => 'string',
      'cover' => 'CoverPhoto',
      'declined_count' => 'int',
      'description' => 'string',
      'discount_code_enabled' => 'bool',
      'end_time' => 'string',
      'event_times' => 'list<ChildEvent>',
      'guest_list_enabled' => 'bool',
      'id' => 'string',
      'interested_count' => 'int',
      'invited_count' => 'int',
      'is_canceled' => 'bool',
      'is_date_only' => 'bool',
      'is_draft' => 'bool',
      'is_page_owned' => 'bool',
      'location' => 'string',
      'maybe_count' => 'int',
      'name' => 'string',
      'noreply_count' => 'int',
      'owner' => 'Object',
      'parent_group' => 'Group',
      'place' => 'Place',
      'privacy' => 'string',
      'scheduled_publish_time' => 'string',
      'start_time' => 'string',
      'ticket_uri' => 'string',
      'ticket_uri_start_sales_time' => 'string',
      'ticketing_privacy_uri' => 'string',
      'ticketing_terms_uri' => 'string',
      'timezone' => 'string',
      'type' => 'Type',
      'updated_time' => 'datetime',
      'venue' => 'Location',
    );
  }
}
