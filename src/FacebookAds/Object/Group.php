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

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\GroupFields;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoTypeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\GroupGroupTypeValues;
use FacebookAds\Object\Values\GroupJoinSettingValues;
use FacebookAds\Object\Values\GroupPostPermissionsValues;
use FacebookAds\Object\Values\GroupSuggestionCategoryValues;
use FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;
use FacebookAds\Object\Values\LiveVideoTypeValues;
use FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\ProfilePictureSourceTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Group extends AbstractCrudObject {

  /**
   * @return GroupFields
   */
  public static function getFieldsEnum() {
    return GroupFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['GroupType'] = GroupGroupTypeValues::getInstance()->getValues();
    $ref_enums['JoinSetting'] = GroupJoinSettingValues::getInstance()->getValues();
    $ref_enums['PostPermissions'] = GroupPostPermissionsValues::getInstance()->getValues();
    $ref_enums['SuggestionCategory'] = GroupSuggestionCategoryValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function deleteAdmins(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/admins',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdmin(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/admins',
      new Group(),
      'EDGE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAlbums(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/albums',
      new Album(),
      'EDGE',
      Album::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAlbum(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_default' => 'bool',
      'name' => 'string',
      'description' => 'string',
      'contributors' => 'list<int>',
      'make_shared_album' => 'bool',
      'location' => 'string',
      'visible' => 'string',
      'privacy' => 'Object',
      'place' => 'Object',
      'tags' => 'list<int>',
      'message' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/albums',
      new Album(),
      'EDGE',
      Album::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDocs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/docs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createDoc(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'body' => 'string',
      'title' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/docs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getEvents(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/events',
      new Event(),
      'EDGE',
      Event::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'picture' => 'string',
      'name' => 'string',
      'link' => 'string',
      'caption' => 'string',
      'description' => 'string',
      'quote' => 'string',
      'source' => 'string',
      'properties' => 'Object',
      'object_attachment' => 'string',
      'height' => 'unsigned int',
      'width' => 'unsigned int',
      'expanded_height' => 'unsigned int',
      'expanded_width' => 'unsigned int',
      'referral_id' => 'string',
      'thumbnail' => 'file',
      'image_crops' => 'map',
      'call_to_action' => 'Object',
      'time_since_original_post' => 'unsigned int',
      'client_mutation_id' => 'string',
      'privacy' => 'Object',
      'composer_session_id' => 'string',
      'content_attachment' => 'string',
      'actions' => 'Object',
      'targeting' => 'Object',
      'feed_targeting' => 'Object',
      'ref' => 'list<string>',
      'tags' => 'list<int>',
      'place' => 'Object',
      'is_explicit_location' => 'bool',
      'og_action_type_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_icon_id' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'og_hide_object_attachment' => 'bool',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'published' => 'bool',
      'scheduled_publish_time' => 'datetime',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'application_id' => 'string',
      'proxied_app_id' => 'string',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'user_selected_tags' => 'bool',
      'nectar_module' => 'string',
      'manual_privacy' => 'bool',
      'audience_exp' => 'bool',
      'coordinates' => 'Object',
      'is_explicit_share' => 'bool',
      'is_photo_container' => 'bool',
      'implicit_with_tags' => 'list<int>',
      'child_attachments' => 'list<Object>',
      'suggested_place_id' => 'Object',
      'attach_place_suggestion' => 'bool',
      'viewer_coordinates' => 'Object',
      'album_id' => 'string',
      'multi_share_optimized' => 'bool',
      'multi_share_end_card' => 'bool',
      'title' => 'string',
      'attached_media' => 'list<Object>',
      'home_checkin_city_id' => 'Object',
      'text_only_place' => 'string',
      'connection_class' => 'string',
      'associated_id' => 'string',
      'posting_to_redspace' => 'posting_to_redspace_enum',
      'place_attachment_setting' => 'place_attachment_setting_enum',
      'checkin_entry_point' => 'checkin_entry_point_enum',
      'is_backout_draft' => 'bool',
      'sponsor_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'sponsor_relationship' => 'unsigned int',
      'referenceable_image_ids' => 'list<string>',
      'prompt_id' => 'string',
      'prompt_tracking_string' => 'string',
      'post_surfaces_blacklist' => 'list<post_surfaces_blacklist_enum>',
      'tracking_info' => 'string',
      'text_format_preset_id' => 'string',
      'cta_link' => 'string',
      'cta_type' => 'string',
      'place_list_data' => 'Object',
      'formatting' => 'formatting_enum',
      'target_surface' => 'target_surface_enum',
      'adaptive_type' => 'string',
      'animated_effect_id' => 'unsigned int',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'asset3d_id' => 'unsigned int',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'fun_fact_prompt_id' => 'string',
      'fun_fact_toastee_id' => 'unsigned int',
      'is_group_linking_post' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'location_source_id' => 'string',
      'message' => 'string',
      'offer_like_post_id' => 'string',
      'page_recommendation' => 'string',
      'place_list' => 'string',
      'publish_event_id' => 'unsigned int',
      'react_mode_metadata' => 'string',
      'sales_promo_id' => 'unsigned int',
      'text_format_metadata' => 'string',
      'throwback_camera_roll_media' => 'string',
      'video_start_time_ms' => 'unsigned int',
    );
    $enums = array(
      'backdated_time_granularity_enum' => array(
        'year',
        'month',
        'day',
        'hour',
        'min',
        'none',
      ),
      'unpublished_content_type_enum' => array(
        'SCHEDULED',
        'DRAFT',
        'ADS_POST',
        'INLINE_CREATED',
        'PUBLISHED',
      ),
      'posting_to_redspace_enum' => array(
        'enabled',
        'disabled',
      ),
      'place_attachment_setting_enum' => array(
        '1',
        '2',
      ),
      'checkin_entry_point_enum' => array(
        'BRANDING_CHECKIN',
        'BRANDING_STATUS',
        'BRANDING_PHOTO',
        'BRANDING_OTHER',
      ),
      'post_surfaces_blacklist_enum' => array(
        '1',
        '2',
        '3',
        '4',
        '5',
      ),
      'formatting_enum' => array(
        'PLAINTEXT',
        'MARKDOWN',
      ),
      'target_surface_enum' => array(
        'STORY',
        'TIMELINE',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/feed',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGroupThread(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'thread_id' => 'Object',
      'joinable' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/group_threads',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGroups(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/groups',
      new Group(),
      'EDGE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGroup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'privacy' => 'string',
      'group_type' => 'group_type_enum',
      'description' => 'string',
      'parent_id' => 'Object',
      'group_icon_id' => 'Object',
      'suggestion_category' => 'suggestion_category_enum',
      'suggestion_identifier' => 'string',
      'ref' => 'string',
      'join_setting' => 'join_setting_enum',
      'post_permissions' => 'post_permissions_enum',
      'post_requires_admin_approval' => 'bool',
      'admin' => 'int',
    );
    $enums = array(
      'group_type_enum' => GroupGroupTypeValues::getInstance()->getValues(),
      'suggestion_category_enum' => GroupSuggestionCategoryValues::getInstance()->getValues(),
      'join_setting_enum' => GroupJoinSettingValues::getInstance()->getValues(),
      'post_permissions_enum' => GroupPostPermissionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/groups',
      new Group(),
      'EDGE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLiveVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
      'source' => 'source_enum',
      'broadcast_status' => 'list<broadcast_status_enum>',
    );
    $enums = array(
      'type_enum' => LiveVideoTypeValues::getInstance()->getValues(),
      'source_enum' => LiveVideoSourceValues::getInstance()->getValues(),
      'broadcast_status_enum' => LiveVideoBroadcastStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/live_videos',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLiveVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'title' => 'string',
      'description' => 'string',
      'save_vod' => 'bool',
      'published' => 'bool',
      'status' => 'status_enum',
      'privacy' => 'Object',
      'stop_on_delete_stream' => 'bool',
      'stream_type' => 'stream_type_enum',
      'content_tags' => 'list<string>',
      'is_spherical' => 'bool',
      'is_audio_only' => 'bool',
      'planned_start_time' => 'int',
      'schedule_custom_profile_image' => 'file',
      'projection' => 'projection_enum',
      'spatial_audio_format' => 'spatial_audio_format_enum',
      'encoding_settings' => 'string',
      'live_encoders' => 'list<string>',
      'original_fov' => 'unsigned int',
      'fisheye_video_cropped' => 'bool',
      'front_z_rotation' => 'float',
      'attribution_app_id' => 'string',
      'stereoscopic_mode' => 'stereoscopic_mode_enum',
    );
    $enums = array(
      'status_enum' => LiveVideoStatusValues::getInstance()->getValues(),
      'stream_type_enum' => LiveVideoStreamTypeValues::getInstance()->getValues(),
      'projection_enum' => LiveVideoProjectionValues::getInstance()->getValues(),
      'spatial_audio_format_enum' => LiveVideoSpatialAudioFormatValues::getInstance()->getValues(),
      'stereoscopic_mode_enum' => LiveVideoStereoscopicModeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/live_videos',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteMembers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'member' => 'int',
      'email' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/members',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMember(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'member' => 'int',
      'email' => 'string',
      'from' => 'int',
      'rate' => 'unsigned int',
      'source' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/members',
      new Group(),
      'EDGE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteModerators(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/moderators',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createModerator(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/moderators',
      new Group(),
      'EDGE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOpenGraphActionFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'to' => 'string',
      'client_secret' => 'string',
      'preview' => 'bool',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'proxied_app_id' => 'string',
      'user_selected_tags' => 'bool',
      'user_selected_place' => 'bool',
      'added' => 'string',
      'alias' => 'string',
      'fb:channel' => 'string',
      'created_time' => 'datetime',
      'end_time' => 'datetime',
      'expires_in' => 'unsigned int',
      'fb:explicitly_shared' => 'bool',
      'image:height' => 'unsigned int',
      'image:secure_url' => 'string',
      'image:type' => 'string',
      'image:url' => 'string',
      'image:user_generated' => 'bool',
      'image:width' => 'unsigned int',
      'no_feed_story' => 'bool',
      'no_action_link' => 'bool',
      'notify' => 'bool',
      'message' => 'string',
      'place' => 'string',
      'privacy' => 'Object',
      'ref' => 'string',
      'scrape' => 'bool',
      'start_time' => 'datetime',
      'tags' => 'list<int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/opengraphactionfeed',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOptedInMembers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/opted_in_members',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPhoto(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aid' => 'string',
      'caption' => 'string',
      'url' => 'string',
      'uid' => 'int',
      'profile_id' => 'int',
      'target_id' => 'int',
      'checkin_id' => 'Object',
      'vault_image_id' => 'string',
      'tags' => 'list<Object>',
      'place' => 'Object',
      'is_explicit_place' => 'bool',
      'is_explicit_location' => 'bool',
      'og_action_type_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_icon_id' => 'string',
      'og_suggestion_mechanism' => 'string',
      'og_set_profile_badge' => 'bool',
      'privacy' => 'Object',
      'targeting' => 'Object',
      'feed_targeting' => 'Object',
      'no_story' => 'bool',
      'published' => 'bool',
      'offline_id' => 'unsigned int',
      'attempt' => 'unsigned int',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'time_since_original_post' => 'unsigned int',
      'filter_type' => 'unsigned int',
      'scheduled_publish_time' => 'unsigned int',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'full_res_is_coming_later' => 'bool',
      'composer_session_id' => 'string',
      'qn' => 'string',
      'manual_privacy' => 'bool',
      'audience_exp' => 'bool',
      'proxied_app_id' => 'string',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'user_selected_tags' => 'bool',
      'allow_spherical_photo' => 'bool',
      'spherical_metadata' => 'map',
      'initial_view_heading_override_degrees' => 'unsigned int',
      'initial_view_pitch_override_degrees' => 'unsigned int',
      'initial_view_vertical_fov_override_degrees' => 'unsigned int',
      'sponsor_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'sponsor_relationship' => 'unsigned int',
      'application_id' => 'string',
      'name' => 'string',
      'message' => 'string',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PhotoBackdatedTimeGranularityValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => PhotoUnpublishedContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/photos',
      new Photo(),
      'EDGE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPicture(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'height' => 'int',
      'width' => 'int',
      'type' => 'type_enum',
      'redirect' => 'bool',
    );
    $enums = array(
      'type_enum' => ProfilePictureSourceTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/picture',
      new ProfilePictureSource(),
      'EDGE',
      ProfilePictureSource::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => AdVideoTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'title' => 'string',
      'source' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'time_since_original_post' => 'unsigned int',
      'file_url' => 'string',
      'composer_session_id' => 'string',
      'waterfall_id' => 'string',
      'og_action_type_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_icon_id' => 'string',
      'og_suggestion_mechanism' => 'string',
      'manual_privacy' => 'bool',
      'is_explicit_share' => 'bool',
      'thumb' => 'file',
      'spherical' => 'bool',
      'original_projection_type' => 'original_projection_type_enum',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'fov' => 'unsigned int',
      'original_fov' => 'unsigned int',
      'fisheye_video_cropped' => 'bool',
      'front_z_rotation' => 'float',
      'guide_enabled' => 'bool',
      'guide' => 'list<list<unsigned int>>',
      'audio_story_wave_animation_handle' => 'string',
      'adaptive_type' => 'string',
      'animated_effect_id' => 'unsigned int',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'formatting' => 'formatting_enum',
      'fun_fact_prompt_id' => 'string',
      'fun_fact_toastee_id' => 'unsigned int',
      'is_group_linking_post' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'location_source_id' => 'string',
      'description' => 'string',
      'offer_like_post_id' => 'string',
      'publish_event_id' => 'unsigned int',
      'react_mode_metadata' => 'string',
      'sales_promo_id' => 'unsigned int',
      'text_format_metadata' => 'string',
      'throwback_camera_roll_media' => 'string',
      'video_start_time_ms' => 'unsigned int',
      'application_id' => 'string',
      'upload_phase' => 'upload_phase_enum',
      'file_size' => 'unsigned int',
      'start_offset' => 'unsigned int',
      'end_offset' => 'unsigned int',
      'video_file_chunk' => 'string',
      'fbuploader_video_file_chunk' => 'string',
      'upload_session_id' => 'string',
      'is_voice_clip' => 'bool',
      'attribution_app_id' => 'string',
      'content_category' => 'content_category_enum',
      'embeddable' => 'bool',
      'slideshow_spec' => 'map',
      'upload_setting_properties' => 'string',
      'transcode_setting_properties' => 'string',
      'container_type' => 'container_type_enum',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'swap_mode' => 'swap_mode_enum',
      'scheduled_publish_time' => 'unsigned int',
    );
    $enums = array(
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'icon_size' => 'icon_size_enum',
    );
    $enums = array(
      'icon_size_enum' => array(
        '16',
        '34',
        '50',
        '68',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Group(),
      'NODE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
