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

class ChatPluginFields extends AbstractEnum {

  const ALIGNMENT = 'alignment';
  const DESKTOP_BOTTOM_SPACING = 'desktop_bottom_spacing';
  const DESKTOP_SIDE_SPACING = 'desktop_side_spacing';
  const ENTRY_POINT_ICON = 'entry_point_icon';
  const ENTRY_POINT_LABEL = 'entry_point_label';
  const GREETING_DIALOG_DISPLAY = 'greeting_dialog_display';
  const GUEST_CHAT_MODE = 'guest_chat_mode';
  const MOBILE_BOTTOM_SPACING = 'mobile_bottom_spacing';
  const MOBILE_CHAT_DISPLAY = 'mobile_chat_display';
  const MOBILE_SIDE_SPACING = 'mobile_side_spacing';
  const THEME_COLOR = 'theme_color';
  const WELCOME_SCREEN_GREETING = 'welcome_screen_greeting';

  public function getFieldTypes() {
    return array(
      'alignment' => 'string',
      'desktop_bottom_spacing' => 'string',
      'desktop_side_spacing' => 'string',
      'entry_point_icon' => 'string',
      'entry_point_label' => 'string',
      'greeting_dialog_display' => 'string',
      'guest_chat_mode' => 'string',
      'mobile_bottom_spacing' => 'string',
      'mobile_chat_display' => 'string',
      'mobile_side_spacing' => 'string',
      'theme_color' => 'string',
      'welcome_screen_greeting' => 'string',
    );
  }
}
