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
      'live_filter' => 'live_filter_enum',
      'order' => 'order_enum',
      'since' => 'datetime',
    );
    $enums = array(
      'filter_enum' => CommentFilterValues::getInstance()->getValues(),
      'live_filter_enum' => CommentLiveFilterValues::getInstance()->getValues(),
      'order_enum' => CommentOrderValues::getInstance()->getValues(),
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
      'attachment_id' => 'string',
      'attachment_share_url' => 'string',
      'attachment_url' => 'string',
      'comment_privacy_value' => 'comment_privacy_value_enum',
      'facepile_mentioned_ids' => 'list<string>',
      'feedback_source' => 'string',
      'is_offline' => 'bool',
      'message' => 'string',
      'nectar_module' => 'string',
      'object_id' => 'string',
      'parent_comment_id' => 'Object',
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
      'closing_action' => 'string',
      'closing_source' => 'string',
      'facebox' => 'int',
      'is_first' => 'bool',
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
      'date_preset' => 'date_preset_enum',
      'metric' => 'list<Object>',
      'period' => 'period_enum',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
      'date_preset_enum' => InsightsResultDatePresetValues::getInstance()->getValues(),
      'period_enum' => InsightsResultPeriodValues::getInstance()->getValues(),
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
      'feedback_source' => 'string',
      'nectar_module' => 'string',
      'notify' => 'bool',
      'tracking' => 'string',
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
      'feedback_source' => 'string',
      'nectar_module' => 'string',
      'notify' => 'bool',
      'tracking' => 'string',
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
      'allow_spherical_photo' => 'bool',
      'alt_text_custom' => 'string',
      'android_key_hash' => 'string',
      'application_id' => 'string',
      'attempt' => 'unsigned int',
      'audience_exp' => 'bool',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'caption' => 'string',
      'composer_session_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'feed_targeting' => 'Object',
      'filter_type' => 'unsigned int',
      'full_res_is_coming_later' => 'bool',
      'initial_view_heading_override_degrees' => 'unsigned int',
      'initial_view_pitch_override_degrees' => 'unsigned int',
      'initial_view_vertical_fov_override_degrees' => 'unsigned int',
      'ios_bundle_id' => 'string',
      'is_explicit_location' => 'bool',
      'is_explicit_place' => 'bool',
      'is_visual_search' => 'bool',
      'manual_privacy' => 'bool',
      'message' => 'string',
      'name' => 'string',
      'no_story' => 'bool',
      'offline_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'place' => 'Object',
      'privacy' => 'string',
      'profile_id' => 'int',
      'proxied_app_id' => 'string',
      'published' => 'bool',
      'qn' => 'string',
      'scheduled_publish_time' => 'unsigned int',
      'spherical_metadata' => 'map',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'tags' => 'list<Object>',
      'target_id' => 'int',
      'targeting' => 'Object',
      'time_since_original_post' => 'unsigned int',
      'uid' => 'int',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'url' => 'string',
      'user_selected_tags' => 'bool',
      'vault_image_id' => 'string',
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

  public function getSharedPosts(array $fields = array(), array $params = array(), $pending = false) {
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
      'owner_uid' => 'int',
      'tag_text' => 'string',
      'tag_uid' => 'int',
      'tags' => 'list<Object>',
      'x' => 'float',
      'y' => 'float',
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
      'adaptive_type' => 'string',
      'alt_text_custom' => 'string',
      'android_key_hash' => 'string',
      'animated_effect_id' => 'unsigned int',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'asset3d_id' => 'unsigned int',
      'attribution_app_id' => 'string',
      'attribution_app_metadata' => 'string',
      'audience_exp' => 'bool',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'batch_size' => 'unsigned int',
      'checkin_entry_point' => 'checkin_entry_point_enum',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_session_id' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'connection_class' => 'string',
      'direct_share_status' => 'unsigned int',
      'filter' => 'string',
      'formatting' => 'formatting_enum',
      'fun_fact_prompt_id' => 'unsigned int',
      'fun_fact_toastee_id' => 'unsigned int',
      'has_doodles' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'home_checkin_city_id' => 'Object',
      'instant_game_entry_point_data' => 'string',
      'ios_bundle_id' => 'string',
      'is_boost_intended' => 'bool',
      'is_checkin' => 'bool',
      'is_collage' => 'bool',
      'is_cropped' => 'bool',
      'is_explicit_location' => 'bool',
      'is_filtered' => 'bool',
      'is_follower_targeted' => 'bool',
      'is_full_res' => 'bool',
      'is_group_linking_post' => 'bool',
      'is_rotated' => 'bool',
      'location_source_id' => 'string',
      'manual_privacy' => 'bool',
      'offer_like_post_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'page_recommendation' => 'string',
      'place' => 'Object',
      'place_list' => 'string',
      'post_surfaces_blacklist' => 'list<post_surfaces_blacklist_enum>',
      'privacy' => 'string',
      'prompt_id' => 'string',
      'prompt_tracking_string' => 'string',
      'proxied_app_id' => 'string',
      'publish_event_id' => 'unsigned int',
      'published' => 'bool',
      'react_mode_metadata' => 'string',
      'referenced_sticker_id' => 'string',
      'sales_promo_id' => 'unsigned int',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'stickers' => 'map',
      'tags' => 'list<int>',
      'target' => 'Object',
      'target_post' => 'string',
      'text_format_metadata' => 'string',
      'text_only_place' => 'string',
      'text_overlay' => 'list<string>',
      'throwback_camera_roll_media' => 'string',
      'time_since_original_post' => 'unsigned int',
      'user_selected_tags' => 'bool',
      'video_start_time_ms' => 'unsigned int',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PhotoBackdatedTimeGranularityValues::getInstance()->getValues(),
      'checkin_entry_point_enum' => PhotoCheckinEntryPointValues::getInstance()->getValues(),
      'formatting_enum' => PhotoFormattingValues::getInstance()->getValues(),
      'post_surfaces_blacklist_enum' => PhotoPostSurfacesBlacklistValues::getInstance()->getValues(),
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
