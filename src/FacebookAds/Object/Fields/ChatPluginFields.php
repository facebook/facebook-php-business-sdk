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
