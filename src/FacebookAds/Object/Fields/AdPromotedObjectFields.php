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

class AdPromotedObjectFields extends AbstractEnum {

  const APPLICATION_ID = 'application_id';
  const CONVERSION_GOAL_ID = 'conversion_goal_id';
  const CUSTOM_CONVERSION_ID = 'custom_conversion_id';
  const CUSTOM_EVENT_STR = 'custom_event_str';
  const CUSTOM_EVENT_TYPE = 'custom_event_type';
  const EVENT_ID = 'event_id';
  const FUNDRAISER_CAMPAIGN_ID = 'fundraiser_campaign_id';
  const MCME_CONVERSION_ID = 'mcme_conversion_id';
  const OBJECT_STORE_URL = 'object_store_url';
  const OFFER_ID = 'offer_id';
  const OFFLINE_CONVERSION_DATA_SET_ID = 'offline_conversion_data_set_id';
  const OMNICHANNEL_OBJECT = 'omnichannel_object';
  const PAGE_ID = 'page_id';
  const PIXEL_AGGREGATION_RULE = 'pixel_aggregation_rule';
  const PIXEL_ID = 'pixel_id';
  const PIXEL_RULE = 'pixel_rule';
  const PLACE_PAGE_SET = 'place_page_set';
  const PLACE_PAGE_SET_ID = 'place_page_set_id';
  const PRODUCT_CATALOG_ID = 'product_catalog_id';
  const PRODUCT_ITEM_ID = 'product_item_id';
  const PRODUCT_SET_ID = 'product_set_id';
  const RETENTION_DAYS = 'retention_days';

  public function getFieldTypes() {
    return array(
      'application_id' => 'string',
      'conversion_goal_id' => 'string',
      'custom_conversion_id' => 'string',
      'custom_event_str' => 'string',
      'custom_event_type' => 'CustomEventType',
      'event_id' => 'string',
      'fundraiser_campaign_id' => 'string',
      'mcme_conversion_id' => 'string',
      'object_store_url' => 'string',
      'offer_id' => 'string',
      'offline_conversion_data_set_id' => 'string',
      'omnichannel_object' => 'Object',
      'page_id' => 'string',
      'pixel_aggregation_rule' => 'string',
      'pixel_id' => 'string',
      'pixel_rule' => 'string',
      'place_page_set' => 'AdPlacePageSet',
      'place_page_set_id' => 'string',
      'product_catalog_id' => 'string',
      'product_item_id' => 'string',
      'product_set_id' => 'string',
      'retention_days' => 'string',
    );
  }
}
