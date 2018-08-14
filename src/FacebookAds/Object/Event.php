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
use FacebookAds\Object\Fields\EventFields;
use FacebookAds\Object\Values\EventEventStateFilterValues;
use FacebookAds\Object\Values\EventPromotableEventTypesValues;
use FacebookAds\Object\Values\EventTimeFilterValues;
use FacebookAds\Object\Values\EventTypeValues;
use FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Event extends AbstractCrudObject {

  /**
   * @return EventFields
   */
  public static function getFieldsEnum() {
    return EventFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Type'] = EventTypeValues::getInstance()->getValues();
    $ref_enums['EventStateFilter'] = EventEventStateFilterValues::getInstance()->getValues();
    $ref_enums['TimeFilter'] = EventTimeFilterValues::getInstance()->getValues();
    $ref_enums['PromotableEventTypes'] = EventPromotableEventTypesValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createLiveVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attribution_app_id' => 'string',
      'content_tags' => 'list<string>',
      'description' => 'string',
      'encoding_settings' => 'string',
      'fisheye_video_cropped' => 'bool',
      'front_z_rotation' => 'float',
      'is_spherical' => 'bool',
      'live_encoders' => 'list<string>',
      'original_fov' => 'unsigned int',
      'planned_start_time' => 'int',
      'privacy' => 'Object',
      'projection' => 'projection_enum',
      'published' => 'bool',
      'save_vod' => 'bool',
      'schedule_custom_profile_image' => 'file',
      'spatial_audio_format' => 'spatial_audio_format_enum',
      'status' => 'status_enum',
      'stereoscopic_mode' => 'stereoscopic_mode_enum',
      'stop_on_delete_stream' => 'bool',
      'stream_type' => 'stream_type_enum',
      'title' => 'string',
    );
    $enums = array(
      'projection_enum' => array(
        'EQUIRECTANGULAR',
        'CUBEMAP',
      ),
      'spatial_audio_format_enum' => array(
        'ambiX_4',
      ),
      'status_enum' => array(
        'UNPUBLISHED',
        'LIVE_NOW',
        'SCHEDULED_UNPUBLISHED',
        'SCHEDULED_LIVE',
        'SCHEDULED_CANCELED',
      ),
      'stereoscopic_mode_enum' => array(
        'MONO',
        'LEFT_RIGHT',
        'TOP_BOTTOM',
      ),
      'stream_type_enum' => array(
        'REGULAR',
        'AMBIENT',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/live_videos',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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
      'application_id' => 'string',
      'audience_exp' => 'bool',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'caption' => 'string',
      'composer_session_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'feed_targeting' => 'Object',
      'full_res_is_coming_later' => 'bool',
      'initial_view_heading_override_degrees' => 'unsigned int',
      'initial_view_pitch_override_degrees' => 'unsigned int',
      'initial_view_vertical_fov_override_degrees' => 'unsigned int',
      'is_explicit_location' => 'bool',
      'is_explicit_place' => 'bool',
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
      'privacy' => 'Object',
      'profile_id' => 'int',
      'published' => 'bool',
      'qn' => 'string',
      'scheduled_publish_time' => 'unsigned int',
      'spherical_metadata' => 'map',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'tags' => 'list<Object>',
      'target_id' => 'int',
      'targeting' => 'Object',
      'url' => 'string',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PhotoBackdatedTimeGranularityValues::getInstance()->getValues(),
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

  public function createVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'audio_story_wave_animation_handle' => 'string',
      'content_category' => 'content_category_enum',
      'description' => 'string',
      'embeddable' => 'bool',
      'end_offset' => 'unsigned int',
      'file_size' => 'unsigned int',
      'file_url' => 'string',
      'fisheye_video_cropped' => 'bool',
      'fov' => 'unsigned int',
      'front_z_rotation' => 'float',
      'guide' => 'list<list<unsigned int>>',
      'guide_enabled' => 'bool',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'original_fov' => 'unsigned int',
      'original_projection_type' => 'original_projection_type_enum',
      'react_mode_metadata' => 'string',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'slideshow_spec' => 'map',
      'source' => 'string',
      'spherical' => 'bool',
      'start_offset' => 'unsigned int',
      'swap_mode' => 'swap_mode_enum',
      'thumb' => 'file',
      'title' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'upload_phase' => 'upload_phase_enum',
      'upload_session_id' => 'string',
      'video_file_chunk' => 'string',
      'xpost_everstore_handle' => 'string',
    );
    $enums = array(
      'content_category_enum' => array(
        'BEAUTY_FASHION',
        'BUSINESS',
        'CARS_TRUCKS',
        'COMEDY',
        'CUTE_ANIMALS',
        'ENTERTAINMENT',
        'FAMILY',
        'FOOD_HEALTH',
        'HOME',
        'LIFESTYLE',
        'MUSIC',
        'NEWS',
        'POLITICS',
        'SCIENCE',
        'SPORTS',
        'TECHNOLOGY',
        'VIDEO_GAMING',
        'OTHER',
      ),
      'original_projection_type_enum' => array(
        'equirectangular',
        'cubemap',
        'equiangular_cubemap',
        'half_equirectangular',
      ),
      'swap_mode_enum' => array(
        'replace',
      ),
      'unpublished_content_type_enum' => array(
        'SCHEDULED',
        'DRAFT',
        'ADS_POST',
        'INLINE_CREATED',
        'PUBLISHED',
      ),
      'upload_phase_enum' => array(
        'start',
        'transfer',
        'finish',
        'cancel',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/videos',
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
      new Event(),
      'NODE',
      Event::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
