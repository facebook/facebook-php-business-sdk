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
use FacebookAds\Object\Fields\PagePostFields;
use FacebookAds\Object\Values\PagePostBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PagePostCheckinEntryPointValues;
use FacebookAds\Object\Values\PagePostFeedStoryVisibilityValues;
use FacebookAds\Object\Values\PagePostFormattingValues;
use FacebookAds\Object\Values\PagePostPlaceAttachmentSettingValues;
use FacebookAds\Object\Values\PagePostPostSurfacesBlacklistValues;
use FacebookAds\Object\Values\PagePostPostingToRedspaceValues;
use FacebookAds\Object\Values\PagePostTargetSurfaceValues;
use FacebookAds\Object\Values\PagePostTimelineVisibilityValues;
use FacebookAds\Object\Values\PagePostUnpublishedContentTypeValues;
use FacebookAds\Object\Values\PagePostWithValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class PagePost extends AbstractCrudObject {

  /**
   * @return PagePostFields
   */
  public static function getFieldsEnum() {
    return PagePostFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BackdatedTimeGranularity'] = PagePostBackdatedTimeGranularityValues::getInstance()->getValues();
    $ref_enums['CheckinEntryPoint'] = PagePostCheckinEntryPointValues::getInstance()->getValues();
    $ref_enums['Formatting'] = PagePostFormattingValues::getInstance()->getValues();
    $ref_enums['PlaceAttachmentSetting'] = PagePostPlaceAttachmentSettingValues::getInstance()->getValues();
    $ref_enums['PostSurfacesBlacklist'] = PagePostPostSurfacesBlacklistValues::getInstance()->getValues();
    $ref_enums['PostingToRedspace'] = PagePostPostingToRedspaceValues::getInstance()->getValues();
    $ref_enums['TargetSurface'] = PagePostTargetSurfaceValues::getInstance()->getValues();
    $ref_enums['UnpublishedContentType'] = PagePostUnpublishedContentTypeValues::getInstance()->getValues();
    $ref_enums['With'] = PagePostWithValues::getInstance()->getValues();
    $ref_enums['FeedStoryVisibility'] = PagePostFeedStoryVisibilityValues::getInstance()->getValues();
    $ref_enums['TimelineVisibility'] = PagePostTimelineVisibilityValues::getInstance()->getValues();
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
      new PagePost(),
      'NODE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attached_media' => 'list<Object>',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'composer_session_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'feed_story_visibility' => 'feed_story_visibility_enum',
      'is_explicit_location' => 'bool',
      'is_hidden' => 'bool',
      'is_pinned' => 'bool',
      'is_published' => 'bool',
      'message' => 'string',
      'og_action_type_id' => 'string',
      'og_hide_object_attachment' => 'bool',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'place' => 'Object',
      'privacy' => 'Object',
      'product_item' => 'Object',
      'scheduled_publish_time' => 'unsigned int',
      'should_sync_product_edit' => 'bool',
      'source_type' => 'string',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'tags' => 'list<int>',
      'text_format_preset_id' => 'string',
      'timeline_visibility' => 'timeline_visibility_enum',
      'tracking' => 'string',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PagePostBackdatedTimeGranularityValues::getInstance()->getValues(),
      'feed_story_visibility_enum' => PagePostFeedStoryVisibilityValues::getInstance()->getValues(),
      'timeline_visibility_enum' => PagePostTimelineVisibilityValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new PagePost(),
      'NODE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
