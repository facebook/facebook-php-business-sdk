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
use FacebookAds\Object\Values\LiveVideoPersistentStreamKeyStatusValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;
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
    $ref_enums['Projection'] = LiveVideoProjectionValues::getInstance()->getValues();
    $ref_enums['SpatialAudioFormat'] = LiveVideoSpatialAudioFormatValues::getInstance()->getValues();
    $ref_enums['Status'] = LiveVideoStatusValues::getInstance()->getValues();
    $ref_enums['StereoscopicMode'] = LiveVideoStereoscopicModeValues::getInstance()->getValues();
    $ref_enums['StreamType'] = LiveVideoStreamTypeValues::getInstance()->getValues();
    $ref_enums['BroadcastStatus'] = LiveVideoBroadcastStatusValues::getInstance()->getValues();
    $ref_enums['Source'] = LiveVideoSourceValues::getInstance()->getValues();
    $ref_enums['LiveCommentModerationSetting'] = LiveVideoLiveCommentModerationSettingValues::getInstance()->getValues();
    $ref_enums['PersistentStreamKeyStatus'] = LiveVideoPersistentStreamKeyStatusValues::getInstance()->getValues();
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

  public function getCrosspostSharedPages(array $fields = array(), array $params = array(), $pending = false) {
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
      new LiveVideoInputStream(),
      'EDGE',
      LiveVideoInputStream::getFieldsEnum()->getValues(),
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
      'close_after_voting' => 'bool',
      'correct_option' => 'unsigned int',
      'default_open' => 'bool',
      'options' => 'list<string>',
      'question' => 'string',
      'show_gradient' => 'bool',
      'show_results' => 'bool',
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
      'target_token' => 'string',
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
      'allow_bm_crossposting' => 'bool',
      'content_tags' => 'list<string>',
      'cross_share_to_group_ids' => 'list<string>',
      'crossposting_actions' => 'list<map>',
      'custom_labels' => 'list<string>',
      'description' => 'string',
      'direct_share_status' => 'unsigned int',
      'embeddable' => 'bool',
      'end_live_video' => 'bool',
      'is_audio_only' => 'bool',
      'is_manual_mode' => 'bool',
      'live_comment_moderation_setting' => 'list<live_comment_moderation_setting_enum>',
      'live_encoders' => 'list<string>',
      'master_ingest_stream_id' => 'string',
      'og_icon_id' => 'string',
      'og_phrase' => 'string',
      'persistent_stream_key_status' => 'persistent_stream_key_status_enum',
      'place' => 'Object',
      'planned_start_time' => 'int',
      'privacy' => 'string',
      'published' => 'bool',
      'schedule_custom_profile_image' => 'file',
      'schedule_feed_background_image' => 'file',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'status' => 'status_enum',
      'stream_type' => 'stream_type_enum',
      'tags' => 'list<int>',
      'targeting' => 'Object',
      'title' => 'string',
    );
    $enums = array(
      'live_comment_moderation_setting_enum' => LiveVideoLiveCommentModerationSettingValues::getInstance()->getValues(),
      'persistent_stream_key_status_enum' => LiveVideoPersistentStreamKeyStatusValues::getInstance()->getValues(),
      'status_enum' => LiveVideoStatusValues::getInstance()->getValues(),
      'stream_type_enum' => LiveVideoStreamTypeValues::getInstance()->getValues(),
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
