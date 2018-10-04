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
use FacebookAds\Object\Fields\LiveVideoFields;
use FacebookAds\Object\Values\CommentFilterValues;
use FacebookAds\Object\Values\CommentLiveFilterValues;
use FacebookAds\Object\Values\CommentOrderValues;
use FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use FacebookAds\Object\Values\LiveVideoLiveCommentModerationSettingValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;
use FacebookAds\Object\Values\LiveVideoTypeValues;
use FacebookAds\Object\Values\ProfileTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class LiveVideo extends AbstractCrudObject {

  /**
   * @return LiveVideoFields
   */
  public static function getFieldsEnum() {
    return LiveVideoFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BroadcastStatus'] = LiveVideoBroadcastStatusValues::getInstance()->getValues();
    $ref_enums['Projection'] = LiveVideoProjectionValues::getInstance()->getValues();
    $ref_enums['Source'] = LiveVideoSourceValues::getInstance()->getValues();
    $ref_enums['SpatialAudioFormat'] = LiveVideoSpatialAudioFormatValues::getInstance()->getValues();
    $ref_enums['Status'] = LiveVideoStatusValues::getInstance()->getValues();
    $ref_enums['StereoscopicMode'] = LiveVideoStereoscopicModeValues::getInstance()->getValues();
    $ref_enums['StreamType'] = LiveVideoStreamTypeValues::getInstance()->getValues();
    $ref_enums['Type'] = LiveVideoTypeValues::getInstance()->getValues();
    $ref_enums['LiveCommentModerationSetting'] = LiveVideoLiveCommentModerationSettingValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getBlockedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/blocked_users',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
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

  public function getCrosspostShareDPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/crosspost_shared_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCrosspostedBroadcasts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/crossposted_broadcasts',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getErrors(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/errors',
      new LiveVideoError(),
      'EDGE',
      LiveVideoError::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGameShows(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/game_shows',
      new VideoGameShow(),
      'EDGE',
      VideoGameShow::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createInputStream(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/input_streams',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
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

  public function getPolls(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/polls',
      new VideoPoll(),
      'EDGE',
      VideoPoll::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPoll(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'question' => 'string',
      'options' => 'list<string>',
      'correct_option' => 'unsigned int',
      'default_open' => 'bool',
      'show_results' => 'bool',
      'show_gradient' => 'bool',
      'close_after_voting' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/polls',
      new VideoPoll(),
      'EDGE',
      VideoPoll::getFieldsEnum()->getValues(),
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
      new LiveVideo(),
      'NODE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'content_tags' => 'list<string>',
      'privacy' => 'Object',
      'title' => 'string',
      'description' => 'string',
      'embeddable' => 'bool',
      'disturbing' => 'bool',
      'place' => 'Object',
      'published' => 'bool',
      'status' => 'status_enum',
      'end_live_video' => 'bool',
      'targeting' => 'Object',
      'tags' => 'list<int>',
      'og_phrase' => 'string',
      'og_icon_id' => 'string',
      'sponsor_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'sponsor_relationship' => 'unsigned int',
      'planned_start_time' => 'int',
      'stream_type' => 'stream_type_enum',
      'attribution_app_id' => 'string',
      'attribution_app_metadata' => 'string',
      'custom_labels' => 'list<string>',
      'commercial_break_durations' => 'list<unsigned int>',
      'is_audio_only' => 'bool',
      'is_manual_mode' => 'bool',
      'schedule_custom_profile_image' => 'file',
      'schedule_feed_background_image' => 'file',
      'product_items' => 'list<string>',
      'ad_break_intent' => 'bool',
      'ad_break_start_now' => 'bool',
      'ad_break_drop_live_stream' => 'bool',
      'ad_break_time_offset' => 'float',
      'ad_break_encoder_drops_live_stream' => 'bool',
      'ad_break_duration' => 'unsigned int',
      'live_encoders' => 'list<string>',
      'live_comment_moderation_setting' => 'list<live_comment_moderation_setting_enum>',
      'crossposting_actions' => 'list<map>',
      'allow_bm_crossposting' => 'bool',
    );
    $enums = array(
      'status_enum' => LiveVideoStatusValues::getInstance()->getValues(),
      'stream_type_enum' => LiveVideoStreamTypeValues::getInstance()->getValues(),
      'live_comment_moderation_setting_enum' => LiveVideoLiveCommentModerationSettingValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new LiveVideo(),
      'NODE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
