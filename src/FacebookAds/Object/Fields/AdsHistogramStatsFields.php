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

class AdsHistogramStatsFields extends AbstractEnum {

  const FIELD_1D_CLICK = '1d_click';
  const FIELD_1D_CLICK_ALL_CONVERSIONS = '1d_click_all_conversions';
  const FIELD_1D_CLICK_FIRST_CONVERSION = '1d_click_first_conversion';
  const FIELD_1D_EV = '1d_ev';
  const FIELD_1D_EV_ALL_CONVERSIONS = '1d_ev_all_conversions';
  const FIELD_1D_EV_FIRST_CONVERSION = '1d_ev_first_conversion';
  const FIELD_1D_VIEW = '1d_view';
  const FIELD_1D_VIEW_ALL_CONVERSIONS = '1d_view_all_conversions';
  const FIELD_1D_VIEW_FIRST_CONVERSION = '1d_view_first_conversion';
  const FIELD_28D_CLICK = '28d_click';
  const FIELD_28D_CLICK_ALL_CONVERSIONS = '28d_click_all_conversions';
  const FIELD_28D_CLICK_FIRST_CONVERSION = '28d_click_first_conversion';
  const FIELD_28D_VIEW = '28d_view';
  const FIELD_28D_VIEW_ALL_CONVERSIONS = '28d_view_all_conversions';
  const FIELD_28D_VIEW_FIRST_CONVERSION = '28d_view_first_conversion';
  const FIELD_7D_CLICK = '7d_click';
  const FIELD_7D_CLICK_ALL_CONVERSIONS = '7d_click_all_conversions';
  const FIELD_7D_CLICK_FIRST_CONVERSION = '7d_click_first_conversion';
  const FIELD_7D_VIEW = '7d_view';
  const FIELD_7D_VIEW_ALL_CONVERSIONS = '7d_view_all_conversions';
  const FIELD_7D_VIEW_FIRST_CONVERSION = '7d_view_first_conversion';
  const ACTION_BRAND = 'action_brand';
  const ACTION_CANVAS_COMPONENT_ID = 'action_canvas_component_id';
  const ACTION_CANVAS_COMPONENT_NAME = 'action_canvas_component_name';
  const ACTION_CAROUSEL_CARD_ID = 'action_carousel_card_id';
  const ACTION_CAROUSEL_CARD_NAME = 'action_carousel_card_name';
  const ACTION_CATEGORY = 'action_category';
  const ACTION_CONVERTED_PRODUCT_ID = 'action_converted_product_id';
  const ACTION_DESTINATION = 'action_destination';
  const ACTION_DEVICE = 'action_device';
  const ACTION_EVENT_CHANNEL = 'action_event_channel';
  const ACTION_LINK_CLICK_DESTINATION = 'action_link_click_destination';
  const ACTION_LOCATION_CODE = 'action_location_code';
  const ACTION_REACTION = 'action_reaction';
  const ACTION_TARGET_ID = 'action_target_id';
  const ACTION_TYPE = 'action_type';
  const ACTION_VIDEO_ASSET_ID = 'action_video_asset_id';
  const ACTION_VIDEO_SOUND = 'action_video_sound';
  const ACTION_VIDEO_TYPE = 'action_video_type';
  const DDA = 'dda';
  const INCREMENTALITY = 'incrementality';
  const INCREMENTALITY_ALL_CONVERSIONS = 'incrementality_all_conversions';
  const INCREMENTALITY_FIRST_CONVERSION = 'incrementality_first_conversion';
  const INLINE = 'inline';
  const INTERACTIVE_COMPONENT_STICKER_ID = 'interactive_component_sticker_id';
  const INTERACTIVE_COMPONENT_STICKER_RESPONSE = 'interactive_component_sticker_response';
  const SKAN_CLICK = 'skan_click';
  const SKAN_CLICK_SECOND_POSTBACK = 'skan_click_second_postback';
  const SKAN_CLICK_THIRD_POSTBACK = 'skan_click_third_postback';
  const SKAN_VIEW = 'skan_view';
  const SKAN_VIEW_SECOND_POSTBACK = 'skan_view_second_postback';
  const SKAN_VIEW_THIRD_POSTBACK = 'skan_view_third_postback';
  const VALUE = 'value';

  public function getFieldTypes() {
    return array(
      '1d_click' => 'list<int>',
      '1d_click_all_conversions' => 'list<int>',
      '1d_click_first_conversion' => 'list<int>',
      '1d_ev' => 'list<int>',
      '1d_ev_all_conversions' => 'list<int>',
      '1d_ev_first_conversion' => 'list<int>',
      '1d_view' => 'list<int>',
      '1d_view_all_conversions' => 'list<int>',
      '1d_view_first_conversion' => 'list<int>',
      '28d_click' => 'list<int>',
      '28d_click_all_conversions' => 'list<int>',
      '28d_click_first_conversion' => 'list<int>',
      '28d_view' => 'list<int>',
      '28d_view_all_conversions' => 'list<int>',
      '28d_view_first_conversion' => 'list<int>',
      '7d_click' => 'list<int>',
      '7d_click_all_conversions' => 'list<int>',
      '7d_click_first_conversion' => 'list<int>',
      '7d_view' => 'list<int>',
      '7d_view_all_conversions' => 'list<int>',
      '7d_view_first_conversion' => 'list<int>',
      'action_brand' => 'string',
      'action_canvas_component_id' => 'string',
      'action_canvas_component_name' => 'string',
      'action_carousel_card_id' => 'string',
      'action_carousel_card_name' => 'string',
      'action_category' => 'string',
      'action_converted_product_id' => 'string',
      'action_destination' => 'string',
      'action_device' => 'string',
      'action_event_channel' => 'string',
      'action_link_click_destination' => 'string',
      'action_location_code' => 'string',
      'action_reaction' => 'string',
      'action_target_id' => 'string',
      'action_type' => 'string',
      'action_video_asset_id' => 'string',
      'action_video_sound' => 'string',
      'action_video_type' => 'string',
      'dda' => 'list<int>',
      'incrementality' => 'list<int>',
      'incrementality_all_conversions' => 'list<int>',
      'incrementality_first_conversion' => 'list<int>',
      'inline' => 'list<int>',
      'interactive_component_sticker_id' => 'string',
      'interactive_component_sticker_response' => 'string',
      'skan_click' => 'list<int>',
      'skan_click_second_postback' => 'list<int>',
      'skan_click_third_postback' => 'list<int>',
      'skan_view' => 'list<int>',
      'skan_view_second_postback' => 'list<int>',
      'skan_view_third_postback' => 'list<int>',
      'value' => 'list<int>',
    );
  }
}
