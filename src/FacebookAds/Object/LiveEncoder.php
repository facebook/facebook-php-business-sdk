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
use FacebookAds\Object\Fields\LiveEncoderFields;
use FacebookAds\Object\Values\LiveEncoderCapAudioCodecsValues;
use FacebookAds\Object\Values\LiveEncoderCapStreamingProtocolsValues;
use FacebookAds\Object\Values\LiveEncoderCapVideoCodecsValues;
use FacebookAds\Object\Values\LiveEncoderStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class LiveEncoder extends AbstractCrudObject {

  /**
   * @return LiveEncoderFields
   */
  public static function getFieldsEnum() {
    return LiveEncoderFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CapAudioCodecs'] = LiveEncoderCapAudioCodecsValues::getInstance()->getValues();
    $ref_enums['CapStreamingProtocols'] = LiveEncoderCapStreamingProtocolsValues::getInstance()->getValues();
    $ref_enums['CapVideoCodecs'] = LiveEncoderCapVideoCodecsValues::getInstance()->getValues();
    $ref_enums['Status'] = LiveEncoderStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createTelemetry(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bitrate' => 'unsigned int',
      'broadcast_id' => 'string',
      'cpu_load_15m' => 'float',
      'cpu_load_1m' => 'float',
      'cpu_load_5m' => 'float',
      'cpu_temperature' => 'unsigned int',
      'cpu_usage' => 'float',
      'framerate' => 'float',
      'frames_dropped' => 'float',
      'gpu_temperature' => 'unsigned int',
      'gpu_usage' => 'float',
      'last_audio_timecode' => 'unsigned int',
      'last_video_keyframe_timecode' => 'unsigned int',
      'last_video_timecode' => 'unsigned int',
      'memory_usage' => 'float',
      'network_latency' => 'float',
      'network_rx_bandwidth' => 'unsigned int',
      'network_rx_packets_dropped' => 'float',
      'network_rx_packets_errors' => 'float',
      'network_tx_bandwidth' => 'unsigned int',
      'network_tx_packets_dropped' => 'float',
      'network_tx_packets_errors' => 'float',
      'process_uptime' => 'unsigned int',
      'status' => 'status_enum',
      'timestamp' => 'unsigned int',
      'total_audio_frames_sent' => 'unsigned int',
      'total_video_frames_sent' => 'unsigned int',
      'total_video_keyframes_sent' => 'unsigned int',
      'uptime' => 'unsigned int',
    );
    $enums = array(
      'status_enum' => LiveEncoderStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/telemetry',
      new LiveEncoder(),
      'EDGE',
      LiveEncoder::getFieldsEnum()->getValues(),
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
      new LiveEncoder(),
      'NODE',
      LiveEncoder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'broadcast_id' => 'string',
      'cap_audio_codecs' => 'list<cap_audio_codecs_enum>',
      'cap_streaming_protocols' => 'list<cap_streaming_protocols_enum>',
      'cap_video_codecs' => 'list<cap_video_codecs_enum>',
      'error_code' => 'unsigned int',
      'error_msg' => 'string',
      'input_audio_channels' => 'unsigned int',
      'input_audio_samplerate' => 'unsigned int',
      'input_video_framerate' => 'string',
      'input_video_gop_num_b_frames' => 'unsigned int',
      'input_video_gop_size' => 'unsigned int',
      'input_video_height' => 'unsigned int',
      'input_video_interlace_mode' => 'string',
      'input_video_width' => 'unsigned int',
      'name' => 'string',
      'needs_transcoder_restart' => 'bool',
      'needs_transcoder_restart_reason' => 'list<string>',
      'status' => 'status_enum',
      'target_token' => 'string',
      'version' => 'string',
    );
    $enums = array(
      'cap_audio_codecs_enum' => LiveEncoderCapAudioCodecsValues::getInstance()->getValues(),
      'cap_streaming_protocols_enum' => LiveEncoderCapStreamingProtocolsValues::getInstance()->getValues(),
      'cap_video_codecs_enum' => LiveEncoderCapVideoCodecsValues::getInstance()->getValues(),
      'status_enum' => LiveEncoderStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new LiveEncoder(),
      'NODE',
      LiveEncoder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
