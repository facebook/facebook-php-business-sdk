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
use FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use FacebookAds\Object\Values\LiveVideoLiveCommentModerationSettingValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;

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
    $ref_enums['LiveCommentModerationSetting'] = LiveVideoLiveCommentModerationSettingValues::getInstance()->getValues();
    $ref_enums['Status'] = LiveVideoStatusValues::getInstance()->getValues();
    $ref_enums['StreamType'] = LiveVideoStreamTypeValues::getInstance()->getValues();
    $ref_enums['BroadcastStatus'] = LiveVideoBroadcastStatusValues::getInstance()->getValues();
    $ref_enums['Projection'] = LiveVideoProjectionValues::getInstance()->getValues();
    $ref_enums['Source'] = LiveVideoSourceValues::getInstance()->getValues();
    $ref_enums['SpatialAudioFormat'] = LiveVideoSpatialAudioFormatValues::getInstance()->getValues();
    $ref_enums['StereoscopicMode'] = LiveVideoStereoscopicModeValues::getInstance()->getValues();
    return $ref_enums;
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
      'ad_break_drop_live_stream' => 'bool',
      'ad_break_duration' => 'unsigned int',
      'ad_break_encoder_drops_live_stream' => 'bool',
      'ad_break_intent' => 'bool',
      'ad_break_start_now' => 'bool',
      'ad_break_time_offset' => 'float',
      'allow_bm_crossposting' => 'bool',
      'attribution_app_id' => 'string',
      'attribution_app_metadata' => 'string',
      'commercial_break_durations' => 'list<unsigned int>',
      'content_tags' => 'list<string>',
      'crossposting_actions' => 'list<map>',
      'custom_labels' => 'list<string>',
      'description' => 'string',
      'direct_share_status' => 'unsigned int',
      'disturbing' => 'bool',
      'embeddable' => 'bool',
      'end_live_video' => 'bool',
      'is_manual_mode' => 'bool',
      'live_comment_moderation_setting' => 'list<live_comment_moderation_setting_enum>',
      'live_encoders' => 'list<string>',
      'place' => 'Object',
      'planned_start_time' => 'int',
      'privacy' => 'Object',
      'product_items' => 'list<string>',
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
