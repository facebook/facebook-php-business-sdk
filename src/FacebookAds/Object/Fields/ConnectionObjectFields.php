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
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ConnectionObjectFields extends AbstractEnum {

  const APP_INSTALLS_TRACKED = 'app_installs_tracked';
  const CHECKIN_CAPABLE = 'checkin_capable';
  const CPA_ACCESS = 'cpa_access';
  const EVENT_IS_VIEWER_ADMIN = 'event_is_viewer_admin';
  const EVENT_PARENT_PAGE_ID = 'event_parent_page_id';
  const EVENT_PARENT_PAGE_NAME = 'event_parent_page_name';
  const EVENT_START_TIMESTAMP = 'event_start_timestamp';
  const ICON_URL = 'icon_url';
  const ID = 'id';
  const IS_GAME = 'is_game';
  const LOGO_URL = 'logo_url';
  const NAME = 'name';
  const NAME_WITH_LOCATION_DESCRIPTOR = 'name_with_location_descriptor';
  const NATIVE_APP_STORE_IDS = 'native_app_store_ids';
  const NATIVE_APP_TARGETING_IDS = 'native_app_targeting_ids';
  const OBJECT_STORE_URLS = 'object_store_urls';
  const OG_ACTIONS = 'og_actions';
  const OG_NAMESPACE = 'og_namespace';
  const OG_OBJECTS = 'og_objects';
  const PICTURE = 'picture';
  const SUPPORTED_PLATFORMS = 'supported_platforms';
  const TABS = 'tabs';
  const TYPE = 'type';
  const URL = 'url';
  const WEBSITE = 'website';

  public function getFieldTypes() {
    return array(
      'app_installs_tracked' => 'bool',
      'checkin_capable' => 'bool',
      'cpa_access' => 'map<string, bool>',
      'event_is_viewer_admin' => 'bool',
      'event_parent_page_id' => 'string',
      'event_parent_page_name' => 'string',
      'event_start_timestamp' => 'unsigned int',
      'icon_url' => 'string',
      'id' => 'string',
      'is_game' => 'bool',
      'logo_url' => 'string',
      'name' => 'string',
      'name_with_location_descriptor' => 'string',
      'native_app_store_ids' => 'map',
      'native_app_targeting_ids' => 'map',
      'object_store_urls' => 'map',
      'og_actions' => 'list<ConnectionObjectOpenGraphAction>',
      'og_namespace' => 'string',
      'og_objects' => 'list<ConnectionObjectOpenGraphObject>',
      'picture' => 'string',
      'supported_platforms' => 'list<unsigned int>',
      'tabs' => 'map',
      'type' => 'unsigned int',
      'url' => 'string',
      'website' => 'string',
    );
  }
}
