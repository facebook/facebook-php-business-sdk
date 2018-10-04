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
use FacebookAds\Object\Fields\UnifiedThreadFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class UnifiedThread extends AbstractCrudObject {

  /**
   * @return UnifiedThreadFields
   */
  public static function getFieldsEnum() {
    return UnifiedThreadFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function getMessages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messages',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aloha_action' => 'string',
      'android_key_hash' => 'string',
      'applied_art_data' => 'Object',
      'associated_object_id' => 'Object',
      'attribution_app_id' => 'string',
      'attribution_app_metadata' => 'string',
      'audio_duration' => 'int',
      'audio_type' => 'audio_type_enum',
      'body' => 'string',
      'broadcast_recipients' => 'map',
      'client_tags' => 'map',
      'coordinates' => 'Object',
      'copy_attachment' => 'string',
      'copy_message' => 'string',
      'customizations' => 'map',
      'entry_point' => 'string',
      'external_attachment_url' => 'string',
      'image_type' => 'image_type_enum',
      'ios_bundle_id' => 'string',
      'is_broadcast' => 'bool',
      'is_montage' => 'bool',
      'is_voicemail' => 'bool',
      'lightweight_action_attachment' => 'Object',
      'link' => 'string',
      'live_location_attachment' => 'Object',
      'location_attachment' => 'Object',
      'log_info' => 'Object',
      'mark_read_watermark_timestamp' => 'int',
      'media' => 'list<string>',
      'message_source_data' => 'Object',
      'montage_frame_style' => 'montage_frame_style_enum',
      'montage_business_platform_data' => 'map',
      'montage_overlays' => 'list<map>',
      'montage_supported_features' => 'list<montage_supported_features_enum>',
      'montage_mentions' => 'map',
      'montage_reply_data' => 'Object',
      'object_attachment' => 'string',
      'offline_threading_id' => 'string',
      'platform_xmd' => 'string',
      'prng' => 'Object',
      'proxied_app_id' => 'string',
      'recipients' => 'Object',
      'replace_message_id' => 'string',
      'replied_to_message_id' => 'string',
      'selected_cta_token' => 'string',
      'shareable_attachment' => 'Object',
      'shown_cta_tokens' => 'list<string>',
      'skip_android_hash_check' => 'bool',
      'story_id' => 'Object',
      'tags' => 'list<string>',
      'tid' => 'string',
      'tracking' => 'string',
      'ttl' => 'unsigned int',
      'use_existing_group' => 'bool',
      'video_thumbnail' => 'file',
      'video_type' => 'video_type_enum',
      'message_attempt_id' => 'string',
      'is_admin_model_v2_enabled' => 'bool',
    );
    $enums = array(
      'audio_type_enum' => array(
        'FILE_ATTACHMENT',
        'VOICE_MESSAGE',
        'VOICE_MESSAGE_WITH_TRANSCRIPT',
      ),
      'image_type_enum' => array(
        'FILE_ATTACHMENT',
        'MESSENGER_CAM',
        'TRANSPARENT',
      ),
      'montage_frame_style_enum' => array(
        'no_border',
      ),
      'montage_supported_features_enum' => array(
        'LIGHTWEIGHT_REPLY',
        'SHOW_STORY_IN_MESSENGER_THREAD',
      ),
      'video_type_enum' => array(
        'FILE_ATTACHMENT',
        'RECORDED_VIDEO',
        'SPEAKING_STICKER',
        'RECORDED_STICKER',
        'VIDEO_MAIL',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messages',
      new AbstractCrudObject(),
      'EDGE',
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
      new UnifiedThread(),
      'NODE',
      UnifiedThread::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
