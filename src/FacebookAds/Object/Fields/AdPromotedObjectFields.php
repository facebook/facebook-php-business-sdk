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
  const OFFSITE_CONVERSION_EVENT_ID = 'offsite_conversion_event_id';
  const OMNICHANNEL_OBJECT = 'omnichannel_object';
  const PAGE_ID = 'page_id';
  const PIXEL_AGGREGATION_RULE = 'pixel_aggregation_rule';
  const PIXEL_ID = 'pixel_id';
  const PIXEL_RULE = 'pixel_rule';
  const PLACE_PAGE_SET = 'place_page_set';
  const PLACE_PAGE_SET_ID = 'place_page_set_id';
  const PRODUCT_CATALOG_ID = 'product_catalog_id';
  const PRODUCT_ITEM_ID = 'product_item_id';
  const PRODUCT_SET = 'product_set';
  const PRODUCT_SET_ID = 'product_set_id';
  const RETENTION_DAYS = 'retention_days';
  const WHATSAPP_PHONE_NUMBER = 'whatsapp_phone_number';

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
      'offsite_conversion_event_id' => 'string',
      'omnichannel_object' => 'Object',
      'page_id' => 'string',
      'pixel_aggregation_rule' => 'string',
      'pixel_id' => 'string',
      'pixel_rule' => 'string',
      'place_page_set' => 'AdPlacePageSet',
      'place_page_set_id' => 'string',
      'product_catalog_id' => 'string',
      'product_item_id' => 'string',
      'product_set' => 'ProductSet',
      'product_set_id' => 'string',
      'retention_days' => 'string',
      'whatsapp_phone_number' => 'string',
    );
  }
}
