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

class AtlasCampaignFields extends AbstractEnum {

  const ALIAS = 'alias';
  const CREATED_BY = 'created_by';
  const CREATED_DATE = 'created_date';
  const CREATED_TIME = 'created_time';
  const CREATOR_NAME = 'creator_name';
  const CUMULATIVE_EDITED_DATE = 'cumulative_edited_date';
  const CUSTOM_FIELDS = 'custom_fields';
  const DESCRIPTION = 'description';
  const FLIGHT_DATES = 'flight_dates';
  const ID = 'id';
  const IS_ARCHIVED = 'is_archived';
  const IS_AUTO_TRACKED = 'is_auto_tracked';
  const IS_FAVORITE = 'is_favorite';
  const IS_MTA = 'is_mta';
  const LAST_MODIFIED_BY = 'last_modified_by';
  const LAST_MODIFIED_DATE = 'last_modified_date';
  const LAST_MODIFIED_TIME = 'last_modified_time';
  const NAME = 'name';
  const PURCHASE_ORDER_ALIAS = 'purchase_order_alias';
  const TARGET_AUDIENCE = 'target_audience';
  const TYPE = 'type';
  const VERSION = 'version';

  public function getFieldTypes() {
    return array(
      'alias' => 'string',
      'created_by' => 'Object',
      'created_date' => 'datetime',
      'created_time' => 'datetime',
      'creator_name' => 'string',
      'cumulative_edited_date' => 'datetime',
      'custom_fields' => 'list<Object>',
      'description' => 'string',
      'flight_dates' => 'Object',
      'id' => 'string',
      'is_archived' => 'bool',
      'is_auto_tracked' => 'bool',
      'is_favorite' => 'bool',
      'is_mta' => 'bool',
      'last_modified_by' => 'Object',
      'last_modified_date' => 'datetime',
      'last_modified_time' => 'datetime',
      'name' => 'string',
      'purchase_order_alias' => 'string',
      'target_audience' => 'Object',
      'type' => 'string',
      'version' => 'string',
    );
  }
}
