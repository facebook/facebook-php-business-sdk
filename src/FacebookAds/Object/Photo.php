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
use FacebookAds\Object\Fields\PhotoFields;
use FacebookAds\Object\Values\CommentCommentPrivacyValueValues;
use FacebookAds\Object\Values\CommentFilterValues;
use FacebookAds\Object\Values\CommentLiveFilterValues;
use FacebookAds\Object\Values\CommentOrderValues;
use FacebookAds\Object\Values\InsightsResultDatePresetValues;
use FacebookAds\Object\Values\InsightsResultPeriodValues;
use FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PhotoCheckinEntryPointValues;
use FacebookAds\Object\Values\PhotoFormattingValues;
use FacebookAds\Object\Values\PhotoPostSurfacesBlacklistValues;
use FacebookAds\Object\Values\PhotoTypeValues;
use FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\ProfileTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Photo extends AbstractCrudObject {

  /**
   * @return PhotoFields
   */
  public static function getFieldsEnum() {
    return PhotoFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BackdatedTimeGranularity'] = PhotoBackdatedTimeGranularityValues::getInstance()->getValues();
    $ref_enums['UnpublishedContentType'] = PhotoUnpublishedContentTypeValues::getInstance()->getValues();
    $ref_enums['Type'] = PhotoTypeValues::getInstance()->getValues();
    $ref_enums['CheckinEntryPoint'] = PhotoCheckinEntryPointValues::getInstance()->getValues();
    $ref_enums['Formatting'] = PhotoFormattingValues::getInstance()->getValues();
    $ref_enums['PostSurfacesBlacklist'] = PhotoPostSurfacesBlacklistValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getComments(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter' => 'filter_enum',
      'order' => 'order_enum',
      'live_filter' => 'live_filter_enum',
      'since' => 'datetime',
    );
    $enums = array(
      'filter_enum' => CommentFilterValues::getInstance()->getValues(),
      'order_enum' => CommentOrderValues::getInstance()->getValues(),
      'live_filter_enum' => CommentLiveFilterValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createComment(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'object_id' => 'string',
      'parent_comment_id' => 'Object',
      'nectar_module' => 'string',
      'attachment_id' => 'string',
      'attachment_url' => 'string',
      'attachment_share_url' => 'string',
      'feedback_source' => 'string',
      'facepile_mentioned_ids' => 'list<string>',
      'is_offline' => 'bool',
      'comment_privacy_value' => 'comment_privacy_value_enum',
      'message' => 'string',
      'text' => 'string',
      'tracking' => 'string',
    );
    $enums = array(
      'comment_privacy_value_enum' => CommentCommentPrivacyValueValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createDismissTagSuggestion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'facebox' => 'int',
      'closing_source' => 'string',
      'is_first' => 'bool',
      'closing_action' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/dismisstagsuggestion',
      new Photo(),
      'EDGE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'since' => 'datetime',
      'until' => 'datetime',
      'metric' => 'list<Object>',
      'period' => 'period_enum',
      'show_permission_error' => 'bool',
      'date_preset' => 'date_preset_enum',
    );
    $enums = array(
      'period_enum' => InsightsResultPeriodValues::getInstance()->getValues(),
      'date_preset_enum' => InsightsResultDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new InsightsResult(),
      'EDGE',
      InsightsResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tracking' => 'string',
      'nectar_module' => 'string',
      'notify' => 'bool',
      'feedback_source' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/likes',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/likes',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLike(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tracking' => 'string',
      'nectar_module' => 'string',
      'notify' => 'bool',
      'feedback_source' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/likes',
      new Photo(),
      'EDGE',
      Photo::getFieldsEnum()->getValues(),
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

  public function getReactions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => ProfileTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reactions',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getShareDPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/sharedposts',
      new Post(),
      'EDGE',
      Post::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSponsorTags(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/sponsor_tags',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTags(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tags',
      new TaggableSubject(),
      'EDGE',
      TaggableSubject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createTag(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'pid' => 'string',
      'tag_uid' => 'int',
      'tag_text' => 'string',
      'x' => 'float',
      'y' => 'float',
      'tags' => 'list<Object>',
      'owner_uid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/tags',
      new Photo(),
      'EDGE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'pid' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Photo(),
      'NODE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'time_since_original_post' => 'unsigned int',
      'published' => 'bool',
      'privacy' => 'Object',
      'tags' => 'list<int>',
      'place' => 'Object',
      'is_explicit_location' => 'bool',
      'is_checkin' => 'bool',
      'target' => 'Object',
      'target_post' => 'string',
      'manual_privacy' => 'bool',
      'audience_exp' => 'bool',
      'og_action_type_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_icon_id' => 'string',
      'og_suggestion_mechanism' => 'string',
      'og_set_profile_badge' => 'bool',
      'composer_session_id' => 'string',
      'is_full_res' => 'bool',
      'proxied_app_id' => 'string',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'user_selected_tags' => 'bool',
      'batch_size' => 'unsigned int',
      'filter' => 'string',
      'stickers' => 'map',
      'text_overlay' => 'list<string>',
      'home_checkin_city_id' => 'Object',
      'text_only_place' => 'string',
      'is_cropped' => 'bool',
      'is_filtered' => 'bool',
      'is_rotated' => 'bool',
      'post_surfaces_blacklist' => 'list<post_surfaces_blacklist_enum>',
      'attribution_app_id' => 'string',
      'attribution_app_metadata' => 'string',
      'connection_class' => 'string',
      'is_collage' => 'bool',
      'has_doodles' => 'bool',
      'is_follower_targeted' => 'bool',
      'checkin_entry_point' => 'checkin_entry_point_enum',
      'sponsor_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'sponsor_relationship' => 'unsigned int',
      'prompt_id' => 'string',
      'prompt_tracking_string' => 'string',
      'referenced_sticker_id' => 'string',
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
      'formatting' => 'formatting_enum',
      'fun_fact_prompt_id' => 'string',
      'fun_fact_toastee_id' => 'unsigned int',
      'is_group_linking_post' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'location_source_id' => 'string',
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
      'backdated_time_granularity_enum' => PhotoBackdatedTimeGranularityValues::getInstance()->getValues(),
      'post_surfaces_blacklist_enum' => PhotoPostSurfacesBlacklistValues::getInstance()->getValues(),
      'checkin_entry_point_enum' => PhotoCheckinEntryPointValues::getInstance()->getValues(),
      'formatting_enum' => PhotoFormattingValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Photo(),
      'NODE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
