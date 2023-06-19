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

class AdsActionStatsFields extends AbstractEnum {

  const FIELD_1D_CLICK = '1d_click';
  const FIELD_1D_VIEW = '1d_view';
  const FIELD_28D_CLICK = '28d_click';
  const FIELD_28D_VIEW = '28d_view';
  const FIELD_7D_CLICK = '7d_click';
  const FIELD_7D_VIEW = '7d_view';
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
  const INLINE = 'inline';
  const INTERACTIVE_COMPONENT_STICKER_ID = 'interactive_component_sticker_id';
  const INTERACTIVE_COMPONENT_STICKER_RESPONSE = 'interactive_component_sticker_response';
  const SKAN_CLICK = 'skan_click';
  const SKAN_VIEW = 'skan_view';
  const VALUE = 'value';

  public function getFieldTypes() {
    return array(
      '1d_click' => 'string',
      '1d_view' => 'string',
      '28d_click' => 'string',
      '28d_view' => 'string',
      '7d_click' => 'string',
      '7d_view' => 'string',
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
      'dda' => 'string',
      'inline' => 'string',
      'interactive_component_sticker_id' => 'string',
      'interactive_component_sticker_response' => 'string',
      'skan_click' => 'string',
      'skan_view' => 'string',
      'value' => 'string',
    );
  }
}
