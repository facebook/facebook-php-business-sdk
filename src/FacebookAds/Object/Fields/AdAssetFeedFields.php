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

class AdAssetFeedFields extends AbstractEnum {

  const ACCOUNT = 'account';
  const AD_FORMATS = 'ad_formats';
  const ADDITIONAL_DATA = 'additional_data';
  const AUTOTRANSLATE = 'autotranslate';
  const ID = 'id';
  const OPTIMIZATION_TYPE = 'optimization_type';
  const IMAGES = 'images';
  const VIDEOS = 'videos';
  const BODIES = 'bodies';
  const CALL_TO_ACTION_TYPES = 'call_to_action_types';
  const DESCRIPTIONS = 'descriptions';
  const LINK_URLS = 'link_urls';
  const TITLES = 'titles';
  const CAPTIONS = 'captions';
  const GROUPS = 'groups';
  const TARGET_RULES = 'target_rules';
  const ASSET_CUSTOMIZATION_RULES = 'asset_customization_rules';
  const CALL_TO_ACTIONS = 'call_to_actions';
  const IMAGE = 'image';
  const VIDEO = 'video';
  const CALL_TO_ACTION_TYPE = 'call_to_action_type';
  const DEFAULT_LANGUAGE = 'default_language';

  public function getFieldTypes() {
    return array(
      'account' => 'AdAccount',
      'ad_formats' => 'list<string>',
      'additional_data' => 'Object',
      'autotranslate' => 'list<string>',
      'id' => 'string',
      'optimization_type' => 'string',
      'images' => 'list<Object>',
      'videos' => 'list<Object>',
      'bodies' => 'list<Object>',
      'call_to_action_types' => 'list<CallToActionTypes>',
      'descriptions' => 'list<Object>',
      'link_urls' => 'list<Object>',
      'titles' => 'list<Object>',
      'captions' => 'list<Object>',
      'groups' => 'list<Object>',
      'target_rules' => 'list<Object>',
      'asset_customization_rules' => 'list<Object>',
      'call_to_actions' => 'list<Object>',
      'image' => 'Object',
      'video' => 'Object',
      'call_to_action_type' => 'CallToActionType',
      'default_language' => 'string',
    );
  }
}
