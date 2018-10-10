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
use FacebookAds\Object\Fields\PageFields;
use FacebookAds\Object\Values\AdVideoBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoTypeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\EventEventStateFilterValues;
use FacebookAds\Object\Values\EventTimeFilterValues;
use FacebookAds\Object\Values\EventTypeValues;
use FacebookAds\Object\Values\InsightsResultDatePresetValues;
use FacebookAds\Object\Values\InsightsResultPeriodValues;
use FacebookAds\Object\Values\InstantArticleInsightsQueryResultBreakdownValues;
use FacebookAds\Object\Values\InstantArticleInsightsQueryResultPeriodValues;
use FacebookAds\Object\Values\LeadGenContextCardStatusValues;
use FacebookAds\Object\Values\LeadGenContextCardStyleValues;
use FacebookAds\Object\Values\LeadGenDataDraftLocaleValues;
use FacebookAds\Object\Values\LeadGenLegalContentStatusValues;
use FacebookAds\Object\Values\LeadgenFormLocaleValues;
use FacebookAds\Object\Values\LinkUnpublishedContentTypeValues;
use FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;
use FacebookAds\Object\Values\LiveVideoTypeValues;
use FacebookAds\Object\Values\MediaFingerprintFingerprintContentTypeValues;
use FacebookAds\Object\Values\MediaFingerprintFingerprintValidityValues;
use FacebookAds\Object\Values\NativeOfferBarcodeTypeValues;
use FacebookAds\Object\Values\NativeOfferLocationTypeValues;
use FacebookAds\Object\Values\PageAttireValues;
use FacebookAds\Object\Values\PageAudienceValues;
use FacebookAds\Object\Values\PageCallToActionAndroidDestinationTypeValues;
use FacebookAds\Object\Values\PageCallToActionIphoneDestinationTypeValues;
use FacebookAds\Object\Values\PageCallToActionTypeValues;
use FacebookAds\Object\Values\PageCallToActionWebDestinationTypeValues;
use FacebookAds\Object\Values\PageDomainActionTypeValues;
use FacebookAds\Object\Values\PageFilteringValues;
use FacebookAds\Object\Values\PageFoodStylesValues;
use FacebookAds\Object\Values\PageMessagingTypeValues;
use FacebookAds\Object\Values\PageModelValues;
use FacebookAds\Object\Values\PageNotificationTypeValues;
use FacebookAds\Object\Values\PagePaymentDevModeActionValues;
use FacebookAds\Object\Values\PagePermittedTasksValues;
use FacebookAds\Object\Values\PagePostBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PagePostCheckinEntryPointValues;
use FacebookAds\Object\Values\PagePostFormattingValues;
use FacebookAds\Object\Values\PagePostPlaceAttachmentSettingValues;
use FacebookAds\Object\Values\PagePostPostSurfacesBlacklistValues;
use FacebookAds\Object\Values\PagePostPostingToRedspaceValues;
use FacebookAds\Object\Values\PagePostTargetSurfaceValues;
use FacebookAds\Object\Values\PagePostUnpublishedContentTypeValues;
use FacebookAds\Object\Values\PagePostWithValues;
use FacebookAds\Object\Values\PagePublishStatusValues;
use FacebookAds\Object\Values\PageSavedFilterSectionValues;
use FacebookAds\Object\Values\PageSenderActionValues;
use FacebookAds\Object\Values\PageSettingValues;
use FacebookAds\Object\Values\PageSubscribedFieldsValues;
use FacebookAds\Object\Values\PageTasksValues;
use FacebookAds\Object\Values\PageTypeValues;
use FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PhotoTypeValues;
use FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\ProfilePictureSourceTypeValues;
use FacebookAds\Object\Values\SavedMessageResponseCategoryValues;
use FacebookAds\Object\Values\UserTasksValues;
use FacebookAds\Object\Values\VideoCopyrightContentCategoryValues;
use FacebookAds\Object\Values\VideoCopyrightMonitoringTypeValues;
use FacebookAds\Object\Values\VideoCopyrightRuleSourceValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Page extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'accounts';
  }

  /**
   * @return PageFields
   */
  public static function getFieldsEnum() {
    return PageFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Attire'] = PageAttireValues::getInstance()->getValues();
    $ref_enums['FoodStyles'] = PageFoodStylesValues::getInstance()->getValues();
    $ref_enums['Setting'] = PageSettingValues::getInstance()->getValues();
    $ref_enums['Audience'] = PageAudienceValues::getInstance()->getValues();
    $ref_enums['PermittedTasks'] = PagePermittedTasksValues::getInstance()->getValues();
    $ref_enums['Tasks'] = PageTasksValues::getInstance()->getValues();
    $ref_enums['MessagingType'] = PageMessagingTypeValues::getInstance()->getValues();
    $ref_enums['NotificationType'] = PageNotificationTypeValues::getInstance()->getValues();
    $ref_enums['PublishStatus'] = PagePublishStatusValues::getInstance()->getValues();
    $ref_enums['SenderAction'] = PageSenderActionValues::getInstance()->getValues();
    $ref_enums['Type'] = PageTypeValues::getInstance()->getValues();
    $ref_enums['Model'] = PageModelValues::getInstance()->getValues();
    $ref_enums['Filtering'] = PageFilteringValues::getInstance()->getValues();
    $ref_enums['SubscribedFields'] = PageSubscribedFieldsValues::getInstance()->getValues();
    $ref_enums['DomainActionType'] = PageDomainActionTypeValues::getInstance()->getValues();
    $ref_enums['PaymentDevModeAction'] = PagePaymentDevModeActionValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createActivity(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page_scoped_user_id' => 'unsigned int',
      'user_ref' => 'string',
      'advertiser_tracking_enabled' => 'bool',
      'custom_events' => 'list<Object>',
      'app_id' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/activities',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdminNotes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/admin_notes',
      new PageAdminNote(),
      'EDGE',
      PageAdminNote::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdminNote(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'body' => 'string',
      'user_id' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/admin_notes',
      new PageAdminNote(),
      'EDGE',
      PageAdminNote::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdminSetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'setting' => 'setting_enum',
      'value' => 'bool',
    );
    $enums = array(
      'setting_enum' => PageSettingValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/admin_settings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdmins(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'trusted' => 'bool',
      'admin_id' => 'int',
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
      'trusted' => 'bool',
      'admin_id' => 'int',
      'tasks' => 'list<tasks_enum>',
    );
    $enums = array(
      'tasks_enum' => UserTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/admins',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdminStickySetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'budget' => 'unsigned int',
      'currency' => 'string',
      'ad_account_id' => 'string',
      'audience' => 'audience_enum',
      'targeting' => 'Targeting',
      'campaign_length' => 'datetime',
    );
    $enums = array(
      'audience_enum' => PageAudienceValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adminstickysettings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/agencies',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAgency(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'permitted_tasks' => 'list<permitted_tasks_enum>',
    );
    $enums = array(
      'permitted_tasks_enum' => PagePermittedTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/agencies',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
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

  public function getAsset3Ds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/asset3ds',
      new WithAsset3D(),
      'EDGE',
      WithAsset3D::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/assigned_users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_users',
      new AssignedUser(),
      'EDGE',
      AssignedUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAssignedUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'tasks' => 'list<tasks_enum>',
    );
    $enums = array(
      'tasks_enum' => PageTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/assigned_users',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAudioCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/audio_copyrights',
      new AudioCopyright(),
      'EDGE',
      AudioCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAudioMediaCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/audio_media_copyrights',
      new AudioCopyright(),
      'EDGE',
      AudioCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteBlocked(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
      'user' => 'int',
      'asid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/blocked',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBlocked(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/blocked',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBlocked(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'list<string>',
      'uid' => 'list<string>',
      'asid' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/blocked',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBroadcastMessages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/broadcast_messages',
      new PageBroadcast(),
      'EDGE',
      PageBroadcast::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBroadcastMessage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message_creative_id' => 'string',
      'notification_type' => 'notification_type_enum',
      'tag' => 'Object',
      'messaging_type' => 'messaging_type_enum',
      'targeting' => 'Object',
      'custom_label_id' => 'int',
      'schedule_time' => 'Object',
      'schedule_local_time' => 'string',
    );
    $enums = array(
      'notification_type_enum' => PageNotificationTypeValues::getInstance()->getValues(),
      'messaging_type_enum' => PageMessagingTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/broadcast_messages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBroadcastReachEstimation(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'custom_label_id' => 'int',
      'targeting' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/broadcast_reach_estimations',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessActivities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/business_activities',
      new BusinessActivityLogEvent(),
      'EDGE',
      BusinessActivityLogEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBusiness(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/businesses',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessProjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/businessprojects',
      new BusinessProject(),
      'EDGE',
      BusinessProject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessSettingLogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/businesssettinglogs',
      new BusinessSettingLogsData(),
      'EDGE',
      BusinessSettingLogsData::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCallToActions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/call_to_actions',
      new PageCallToAction(),
      'EDGE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCallToAction(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
      'web_destination_type' => 'web_destination_type_enum',
      'android_destination_type' => 'android_destination_type_enum',
      'iphone_destination_type' => 'iphone_destination_type_enum',
      'intl_number_with_plus' => 'string',
      'web_url' => 'string',
      'android_app_id' => 'int',
      'android_deeplink' => 'string',
      'android_package_name' => 'string',
      'android_url' => 'string',
      'iphone_app_id' => 'int',
      'iphone_deeplink' => 'string',
      'iphone_url' => 'string',
      'email_address' => 'string',
    );
    $enums = array(
      'type_enum' => PageCallToActionTypeValues::getInstance()->getValues(),
      'web_destination_type_enum' => PageCallToActionWebDestinationTypeValues::getInstance()->getValues(),
      'android_destination_type_enum' => PageCallToActionAndroidDestinationTypeValues::getInstance()->getValues(),
      'iphone_destination_type_enum' => PageCallToActionIphoneDestinationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/call_to_actions',
      new PageCallToAction(),
      'EDGE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCanvasElements(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/canvas_elements',
      new CanvasBodyElement(),
      'EDGE',
      CanvasBodyElement::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCanvasElement(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'canvas_photo' => 'Object',
      'canvas_video' => 'Object',
      'canvas_text' => 'Object',
      'canvas_button' => 'Object',
      'canvas_footer' => 'Object',
      'canvas_carousel' => 'Object',
      'canvas_header' => 'Object',
      'canvas_product_list' => 'Object',
      'canvas_product_set' => 'Object',
      'canvas_store_locator' => 'Object',
      'canvas_lead_form' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/canvas_elements',
      new CanvasBodyElement(),
      'EDGE',
      CanvasBodyElement::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCanvases(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_published' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/canvases',
      new Canvas(),
      'EDGE',
      Canvas::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCanvase(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'body_element_ids' => 'list<string>',
      'background_color' => 'string',
      'is_published' => 'bool',
      'is_hidden' => 'bool',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/canvases',
      new Canvas(),
      'EDGE',
      Canvas::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteClaimedUrls(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/claimed_urls',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConversations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tags' => 'list<string>',
      'folder' => 'string',
      'psid' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/conversations',
      new UnifiedThread(),
      'EDGE',
      UnifiedThread::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopyrightManualClaim(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'reference_asset_id' => 'string',
      'matched_asset_id' => 'string',
      'match_content_type' => 'match_content_type_enum',
      'action' => 'action_enum',
      'countries' => 'Object',
    );
    $enums = array(
      'match_content_type_enum' => array(
        'VIDEO_AND_AUDIO',
        'VIDEO_ONLY',
        'AUDIO_ONLY',
      ),
      'action_enum' => array(
        'MANUAL_REVIEW',
        'MONITOR',
        'BLOCK',
        'CLAIM_AD_EARNINGS',
        'REQUEST_TAKEDOWN',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copyright_manual_claims',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteCopyrightWhitelistedIgPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'usernames' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/copyright_whitelisted_ig_partners',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopyrightWhitelistedIgPartner(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'usernames' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copyright_whitelisted_ig_partners',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteCopyrightWhitelistedPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'partner_ids' => 'list<Object>',
      'urls' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/copyright_whitelisted_partners',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCopyrightWhitelistedPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/copyright_whitelisted_partners',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopyrightWhitelistedPartner(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'partner_ids' => 'list<Object>',
      'urls' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copyright_whitelisted_partners',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCrosspostPendingApprovalPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/crosspost_pending_approval_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCrosspostWhitelistedPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/crosspost_whitelisted_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/custom_labels',
      new PageUserMessageThreadLabel(),
      'EDGE',
      PageUserMessageThreadLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCustomLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/custom_labels',
      new PageUserMessageThreadLabel(),
      'EDGE',
      PageUserMessageThreadLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getEvents(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
      'include_canceled' => 'bool',
      'time_filter' => 'time_filter_enum',
      'event_state_filter' => 'list<event_state_filter_enum>',
    );
    $enums = array(
      'type_enum' => EventTypeValues::getInstance()->getValues(),
      'time_filter_enum' => EventTimeFilterValues::getInstance()->getValues(),
      'event_state_filter_enum' => EventEventStateFilterValues::getInstance()->getValues(),
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

  public function createEvent(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'event_info' => 'Object',
      'action_context' => 'Object',
      'app_context' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
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

  public function getExpiredPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/expired_posts',
      new ExpirablePost(),
      'EDGE',
      ExpirablePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getExpiringPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/expiring_posts',
      new ExpirablePost(),
      'EDGE',
      ExpirablePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFeatureDVideosCollection(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/featured_videos_collection',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
      'with' => 'with_enum',
      'show_expired' => 'bool',
    );
    $enums = array(
      'with_enum' => PagePostWithValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/feed',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
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
      'enforce_link_ownership' => 'bool',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PagePostBackdatedTimeGranularityValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => PagePostUnpublishedContentTypeValues::getInstance()->getValues(),
      'posting_to_redspace_enum' => PagePostPostingToRedspaceValues::getInstance()->getValues(),
      'place_attachment_setting_enum' => PagePostPlaceAttachmentSettingValues::getInstance()->getValues(),
      'checkin_entry_point_enum' => PagePostCheckinEntryPointValues::getInstance()->getValues(),
      'post_surfaces_blacklist_enum' => PagePostPostSurfacesBlacklistValues::getInstance()->getValues(),
      'formatting_enum' => PagePostFormattingValues::getInstance()->getValues(),
      'target_surface_enum' => PagePostTargetSurfaceValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/feed',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFlag(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page_id' => 'int',
      'page_ids' => 'list<int>',
      'flag' => 'string',
      'value' => 'bool',
      'entry_point' => 'string',
      'endpoint' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/flags',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGlobalBrandChildren(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/global_brand_children',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIndexedVideoCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/indexed_video_copyrights',
      new VideoCopyright(),
      'EDGE',
      VideoCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIndexedVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/indexed_videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
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
      'show_description_from_api_doc' => 'bool',
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

  public function getInsightsExports(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'data_level' => 'list<string>',
      'from_creation_date' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights_exports',
      new PageInsightsAsyncExportRun(),
      'EDGE',
      PageInsightsAsyncExportRun::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstantArticles(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'development_mode' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instant_articles',
      new InstantArticle(),
      'EDGE',
      InstantArticle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createInstantArticle(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'html_source' => 'string',
      'development_mode' => 'bool',
      'take_live' => 'bool',
      'published' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/instant_articles',
      new InstantArticle(),
      'EDGE',
      InstantArticle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstantArticlesInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'metric' => 'list<Object>',
      'period' => 'period_enum',
      'since' => 'datetime',
      'until' => 'datetime',
      'breakdown' => 'breakdown_enum',
    );
    $enums = array(
      'period_enum' => InstantArticleInsightsQueryResultPeriodValues::getInstance()->getValues(),
      'breakdown_enum' => InstantArticleInsightsQueryResultBreakdownValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instant_articles_insights',
      new InstantArticleInsightsQueryResult(),
      'EDGE',
      InstantArticleInsightsQueryResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createInstantArticlesPublish(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'canonical_url' => 'string',
      'publish_status' => 'publish_status_enum',
    );
    $enums = array(
      'publish_status_enum' => PagePublishStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/instant_articles_publish',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/labels',
      new PageLabel(),
      'EDGE',
      PageLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/labels',
      new PageLabel(),
      'EDGE',
      PageLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenConditionalQuestionsGroup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_conditional_questions_group',
      new LeadGenConditionalQuestionsGroup(),
      'EDGE',
      LeadGenConditionalQuestionsGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenConditionalQuestionsGroup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'conditional_questions_group_csv' => 'file',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_conditional_questions_group',
      new LeadGenConditionalQuestionsGroup(),
      'EDGE',
      LeadGenConditionalQuestionsGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenContextCards(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_context_cards',
      new LeadGenContextCard(),
      'EDGE',
      LeadGenContextCard::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenContextCard(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'title' => 'string',
      'style' => 'style_enum',
      'content' => 'list<string>',
      'button_text' => 'string',
      'cover_photo' => 'file',
      'cover_photo_id' => 'string',
      'status' => 'status_enum',
    );
    $enums = array(
      'style_enum' => LeadGenContextCardStyleValues::getInstance()->getValues(),
      'status_enum' => LeadGenContextCardStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_context_cards',
      new LeadGenContextCard(),
      'EDGE',
      LeadGenContextCard::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenDraftForms(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_draft_forms',
      new LeadGenDataDraft(),
      'EDGE',
      LeadGenDataDraft::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenDraftForm(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'locale' => 'locale_enum',
      'block_display_for_non_targeted_viewer' => 'bool',
      'follow_up_action_url' => 'string',
      'legal_content_id' => 'string',
      'context_card_id' => 'string',
      'questions' => 'list<Object>',
      'privacy_policy' => 'map',
      'custom_disclaimer' => 'Object',
      'context_card' => 'Object',
      'thank_you_page' => 'map',
      'tracking_parameters' => 'Object',
      'question_page_custom_headline' => 'string',
      'is_optimized_for_quality' => 'bool',
    );
    $enums = array(
      'locale_enum' => LeadGenDataDraftLocaleValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_draft_forms',
      new LeadGenDataDraft(),
      'EDGE',
      LeadGenDataDraft::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenForms(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_forms',
      new LeadgenForm(),
      'EDGE',
      LeadgenForm::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenForm(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'locale' => 'locale_enum',
      'allow_organic_lead_retrieval' => 'bool',
      'block_display_for_non_targeted_viewer' => 'bool',
      'follow_up_action_url' => 'Object',
      'legal_content_id' => 'Object',
      'context_card_id' => 'Object',
      'thank_you_page_id' => 'Object',
      'questions' => 'list<Object>',
      'privacy_policy' => 'Object',
      'custom_disclaimer' => 'Object',
      'context_card' => 'Object',
      'thank_you_page' => 'Object',
      'tracking_parameters' => 'Object',
      'cover_photo' => 'file',
      'question_page_custom_headline' => 'string',
      'is_optimized_for_quality' => 'bool',
      'is_for_canvas' => 'bool',
    );
    $enums = array(
      'locale_enum' => LeadgenFormLocaleValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_forms',
      new LeadgenForm(),
      'EDGE',
      LeadgenForm::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenLegalContent(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_legal_content',
      new LeadGenLegalContent(),
      'EDGE',
      LeadGenLegalContent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenLegalContent(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'privacy_policy' => 'Object',
      'custom_disclaimer' => 'Object',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => LeadGenLegalContentStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_legal_content',
      new LeadGenLegalContent(),
      'EDGE',
      LeadGenLegalContent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenQualifiers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_qualifiers',
      new LeadGenQualifier(),
      'EDGE',
      LeadGenQualifier::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenThankYouPage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'body' => 'string',
      'business_phone_number' => 'string',
      'button_text' => 'string',
      'button_type' => 'button_type_enum',
      'country_code' => 'string',
      'enable_messenger' => 'bool',
      'title' => 'string',
      'website_url' => 'string',
    );
    $enums = array(
      'button_type_enum' => array(
        'VIEW_WEBSITE',
        'CALL_BUSINESS',
        'MESSAGE_BUSINESS',
        'DOWNLOAD',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_thank_you_page',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteLeadGenWhitelistedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/leadgen_whitelisted_users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenWhitelistedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_whitelisted_users',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenWhitelistedUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user_id' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_whitelisted_users',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'target_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/likes',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLink(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'link' => 'string',
      'message' => 'string',
      'image' => 'string',
      'tags' => 'list<int>',
      'place' => 'Object',
      'published' => 'bool',
      'scheduled_publish_time' => 'unsigned int',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'targeting' => 'Object',
      'privacy' => 'Object',
      'application_id' => 'string',
      'is_explicit_share' => 'bool',
    );
    $enums = array(
      'unpublished_content_type_enum' => LinkUnpublishedContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/links',
      new Link(),
      'EDGE',
      Link::getFieldsEnum()->getValues(),
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
      'custom_labels' => 'list<string>',
      'targeting' => 'Object',
      'product_items' => 'list<string>',
      'crossposting_actions' => 'list<map>',
      'game_show' => 'map',
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

  public function deleteLocations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'location_page_id' => 'Object',
      'store_number' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/locations',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLocations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/locations',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLocation(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'store_number' => 'unsigned int',
      'location' => 'Object',
      'place_topics' => 'list<string>',
      'phone' => 'string',
      'store_name' => 'string',
      'hours' => 'map',
      'page_username' => 'string',
      'old_store_number' => 'unsigned int',
      'permanently_closed' => 'bool',
      'price_range' => 'string',
      'store_location_descriptor' => 'string',
      'location_page_id' => 'Object',
      'ignore_warnings' => 'bool',
      'website' => 'Object',
      'always_open' => 'bool',
      'store_code' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/locations',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMediaFingerprints(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'universal_content_id' => 'string',
      'fingerprint_validity' => 'fingerprint_validity_enum',
    );
    $enums = array(
      'fingerprint_validity_enum' => MediaFingerprintFingerprintValidityValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/media_fingerprints',
      new MediaFingerprint(),
      'EDGE',
      MediaFingerprint::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMediaFingerprint(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fingerprint_content_type' => 'fingerprint_content_type_enum',
      'title' => 'string',
      'metadata' => 'Object',
      'universal_content_id' => 'string',
      'source' => 'string',
    );
    $enums = array(
      'fingerprint_content_type_enum' => MediaFingerprintFingerprintContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/media_fingerprints',
      new MediaFingerprint(),
      'EDGE',
      MediaFingerprint::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessageAttachment(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/message_attachments',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessageCreative(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'messages' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/message_creatives',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient' => 'Object',
      'message' => 'Object',
      'sender_action' => 'sender_action_enum',
      'notification_type' => 'notification_type_enum',
      'tag' => 'Object',
      'messaging_type' => 'messaging_type_enum',
      'persona_id' => 'Object',
    );
    $enums = array(
      'sender_action_enum' => PageSenderActionValues::getInstance()->getValues(),
      'notification_type_enum' => PageNotificationTypeValues::getInstance()->getValues(),
      'messaging_type_enum' => PageMessagingTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessagingFeatureReview(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messaging_feature_review',
      new MessagingFeatureReview(),
      'EDGE',
      MessagingFeatureReview::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessengerAdsPageWelcomeMessages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messenger_ads_page_welcome_messages',
      new MessengerDestinationPageWelcomeMessage(),
      'EDGE',
      MessengerDestinationPageWelcomeMessage::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessengerCode(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
      'data' => 'string',
      'image_size' => 'unsigned int',
    );
    $enums = array(
      'type_enum' => PageTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messenger_codes',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteMessengerProfile(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fields' => 'list<fields_enum>',
    );
    $enums = array(
      'fields_enum' => array(
        'GET_STARTED',
        'PERSISTENT_MENU',
        'TARGET_AUDIENCE',
        'WHITELISTED_DOMAINS',
        'GREETING',
        'ACCOUNT_LINKING_URL',
        'PAYMENT_SETTINGS',
        'HOME_URL',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/messenger_profile',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessengerProfile(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messenger_profile',
      new MessengerProfile(),
      'EDGE',
      MessengerProfile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessengerProfile(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'get_started' => 'Object',
      'persistent_menu' => 'list<Object>',
      'target_audience' => 'Object',
      'whitelisted_domains' => 'list<string>',
      'greeting' => 'list<Object>',
      'account_linking_url' => 'string',
      'payment_settings' => 'Object',
      'home_url' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messenger_profile',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMilestones(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/milestones',
      new LifeEvent(),
      'EDGE',
      LifeEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMilestone(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'title' => 'string',
      'description' => 'string',
      'start_time' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/milestones',
      new LifeEvent(),
      'EDGE',
      LifeEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMusicVideoCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/music_video_copyrights',
      new MusicVideoCopyright(),
      'EDGE',
      MusicVideoCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMusicVideoMediaCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/music_video_media_copyrights',
      new MusicVideoCopyright(),
      'EDGE',
      MusicVideoCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getNativeOffers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/nativeoffers',
      new NativeOffer(),
      'EDGE',
      NativeOffer::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createNativeOffer(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'discounts' => 'list<Object>',
      'details' => 'string',
      'terms' => 'string',
      'redemption_code' => 'string',
      'redemption_link' => 'string',
      'max_save_count' => 'unsigned int',
      'online_code' => 'string',
      'instore_code' => 'string',
      'expiration_time' => 'datetime',
      'location_type' => 'location_type_enum',
      'barcode_type' => 'barcode_type_enum',
      'barcode_value' => 'string',
      'barcode_photo' => 'unsigned int',
      'unique_codes' => 'unsigned int',
      'unique_barcodes' => 'unsigned int',
      'block_reshares' => 'bool',
      'disable_location' => 'bool',
      'commerce_store' => 'string',
      'commerce_store_collection' => 'string',
      'commerce_product_item' => 'string',
      'page_set_id' => 'string',
    );
    $enums = array(
      'location_type_enum' => NativeOfferLocationTypeValues::getInstance()->getValues(),
      'barcode_type_enum' => NativeOfferBarcodeTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/nativeoffers',
      new NativeOffer(),
      'EDGE',
      NativeOffer::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createNlpConfig(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'nlp_enabled' => 'bool',
      'model' => 'model_enum',
      'custom_token' => 'string',
      'n_best' => 'unsigned int',
      'verbose' => 'bool',
    );
    $enums = array(
      'model_enum' => PageModelValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/nlp_configs',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createNote(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message' => 'string',
      'subject' => 'string',
      'privacy' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/notes',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createNotification(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'seen' => 'bool',
      'read' => 'bool',
      'notif_ids' => 'list<string>',
      'filtering' => 'list<filtering_enum>',
      'template' => 'Object',
      'href' => 'Object',
      'ref' => 'string',
      'type' => 'type_enum',
    );
    $enums = array(
      'filtering_enum' => PageFilteringValues::getInstance()->getValues(),
      'type_enum' => PageTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/notifications',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPageBackedInstagramAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/page_backed_instagram_accounts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPassThreadControl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient' => 'Object',
      'target_app_id' => 'int',
      'metadata' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/pass_thread_control',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPersonas(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/personas',
      new Persona(),
      'EDGE',
      Persona::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPersona(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'profile_picture_url' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/personas',
      new Persona(),
      'EDGE',
      Persona::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPhotos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
      'biz_tag_id' => 'unsigned int',
      'business_id' => 'string',
    );
    $enums = array(
      'type_enum' => PhotoTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
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
      'nectar_module' => 'string',
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
      'temporary' => 'bool',
      'location_source_id' => 'string',
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

  public function createPicture(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'composer_session_id' => 'string',
      'qn' => 'string',
      'photo' => 'string',
      'reuse' => 'bool',
      'x' => 'unsigned int',
      'y' => 'unsigned int',
      'width' => 'unsigned int',
      'height' => 'unsigned int',
      'scaled_crop_rect' => 'Object',
      'profile_pic_source' => 'string',
      'profile_pic_method' => 'string',
      'sticker_id' => 'int',
      'caption' => 'string',
      'sticker_source_object_id' => 'int',
      'msqrd_mask_id' => 'string',
      'media_effect_ids' => 'list<int>',
      'media_effect_source_object_id' => 'int',
      'set_profile_photo_shield' => 'string',
      'has_umg' => 'bool',
      'android_key_hash' => 'string',
      'ios_bundle_id' => 'string',
      'proxied_app_id' => 'int',
      'picture' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
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

  public function getPlaceTopics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/place_topics',
      new PlaceTopic(),
      'EDGE',
      PlaceTopic::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
      'with' => 'with_enum',
      'show_expired' => 'bool',
      'q' => 'string',
    );
    $enums = array(
      'with_enum' => PagePostWithValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductCatalogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_catalogs',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPromotablePosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
      'with' => 'with_enum',
      'show_expired' => 'bool',
      'q' => 'string',
      'is_published' => 'bool',
      'include_inline' => 'bool',
    );
    $enums = array(
      'with_enum' => PagePostWithValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/promotable_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPromotion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'budget' => 'unsigned int',
      'ad_account_id' => 'string',
      'geo_level' => 'string',
      'gender' => 'unsigned int',
      'min_age' => 'unsigned int',
      'max_age' => 'unsigned int',
      'duration' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/promotions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPublishedPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'since' => 'Object',
      'until' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/published_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createQuestion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'question' => 'string',
      'options' => 'list<string>',
      'allow_new_options' => 'bool',
      'choose_multiple_options' => 'bool',
      'ranked_poll' => 'bool',
      'published' => 'bool',
      'scheduled_publish_time' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/questions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRatings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ratings',
      new Recommendation(),
      'EDGE',
      Recommendation::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createRequestThreadControl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient' => 'Object',
      'metadata' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/request_thread_control',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRestaurantOrders(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/restaurant_orders',
      new FoodDrinkOrder(),
      'EDGE',
      FoodDrinkOrder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRoles(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'Object',
      'include_deactivated' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/roles',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRtbDynamicPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/rtb_dynamic_posts',
      new RTBDynamicPost(),
      'EDGE',
      RTBDynamicPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSavedFilters(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'section' => 'section_enum',
    );
    $enums = array(
      'section_enum' => PageSavedFilterSectionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/saved_filters',
      new PageSavedFilter(),
      'EDGE',
      PageSavedFilter::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSavedFilter(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'display_name' => 'string',
      'section' => 'section_enum',
      'filters' => 'list<Object>',
    );
    $enums = array(
      'section_enum' => PageSavedFilterSectionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/saved_filters',
      new PageSavedFilter(),
      'EDGE',
      PageSavedFilter::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSavedMessageResponses(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/saved_message_responses',
      new SavedMessageResponse(),
      'EDGE',
      SavedMessageResponse::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSavedMessageResponse(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message' => 'string',
      'category' => 'category_enum',
      'is_enabled' => 'bool',
      'title' => 'string',
      'image' => 'string',
    );
    $enums = array(
      'category_enum' => SavedMessageResponseCategoryValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/saved_message_responses',
      new SavedMessageResponse(),
      'EDGE',
      SavedMessageResponse::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getScheduleDPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/scheduled_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getScreenNames(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/screennames',
      new ScreenName(),
      'EDGE',
      ScreenName::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSeasons(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/seasons',
      new VideoList(),
      'EDGE',
      VideoList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSecondaryReceivers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/secondary_receivers',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSettings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/settings',
      new PageSettings(),
      'EDGE',
      PageSettings::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'setting' => 'setting_enum',
      'value' => 'bool',
      'option' => 'Object',
    );
    $enums = array(
      'setting_enum' => PageSettingValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/settings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getShowPlaylists(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/show_playlists',
      new VideoList(),
      'EDGE',
      VideoList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSubscribedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/subscribed_apps',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSubscribedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/subscribed_apps',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSubscribedApp(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'subscribed_fields' => 'list<subscribed_fields_enum>',
    );
    $enums = array(
      'subscribed_fields_enum' => PageSubscribedFieldsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/subscribed_apps',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSubscription(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'object' => 'string',
      'fields' => 'list<string>',
      'callback_url' => 'Object',
      'verify_token' => 'string',
      'include_values' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/subscriptions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteTabs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tab' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/tabs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTabs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tab' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tabs',
      new Tab(),
      'EDGE',
      Tab::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createTab(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'int',
      'tab' => 'string',
      'position' => 'int',
      'custom_name' => 'string',
      'custom_image_url' => 'string',
      'is_non_connection_landing_tab' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/tabs',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTagged(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tagged',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createTakeThreadControl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient' => 'Object',
      'metadata' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/take_thread_control',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThreadOwner(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/thread_owner',
      new PageThreadOwner(),
      'EDGE',
      PageThreadOwner::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteThreadSettings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'setting_type' => 'setting_type_enum',
      'thread_state' => 'thread_state_enum',
    );
    $enums = array(
      'setting_type_enum' => array(
        'ACCOUNT_LINKING',
        'CALL_TO_ACTIONS',
        'GREETING',
        'DOMAIN_WHITELISTING',
        'PAYMENT',
      ),
      'thread_state_enum' => array(
        'NEW_THREAD',
        'EXISTING_THREAD',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/thread_settings',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThreadSettings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/thread_settings',
      new ThreadSetting(),
      'EDGE',
      ThreadSetting::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createThreadSetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'setting_type' => 'setting_type_enum',
      'thread_state' => 'thread_state_enum',
      'call_to_actions' => 'list<Object>',
      'greeting' => 'Object',
      'account_linking_url' => 'string',
      'payment_privacy_url' => 'string',
      'whitelisted_domains' => 'list<string>',
      'domain_action_type' => 'domain_action_type_enum',
      'payment_public_key' => 'string',
      'payment_dev_mode_action' => 'payment_dev_mode_action_enum',
      'payment_testers' => 'list<string>',
    );
    $enums = array(
      'setting_type_enum' => array(
        'ACCOUNT_LINKING',
        'CALL_TO_ACTIONS',
        'GREETING',
        'DOMAIN_WHITELISTING',
        'PAYMENT',
      ),
      'thread_state_enum' => array(
        'NEW_THREAD',
        'EXISTING_THREAD',
      ),
      'domain_action_type_enum' => PageDomainActionTypeValues::getInstance()->getValues(),
      'payment_dev_mode_action_enum' => PagePaymentDevModeActionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/thread_settings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThreads(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tags' => 'list<string>',
      'folder' => 'string',
      'psid' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/threads',
      new UnifiedThread(),
      'EDGE',
      UnifiedThread::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTours(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tours',
      new EventTour(),
      'EDGE',
      EventTour::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUnlinkAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'psid' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/unlink_accounts',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUserPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'email' => 'string',
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/userpermissions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUserPermission(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'email' => 'string',
      'business' => 'string',
      'tasks' => 'list<tasks_enum>',
    );
    $enums = array(
      'tasks_enum' => PageTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/userpermissions',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoBroadcasts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_broadcasts',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoCopyrightRules(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'source' => 'source_enum',
      'selected_rule_id' => 'string',
    );
    $enums = array(
      'source_enum' => VideoCopyrightRuleSourceValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_copyright_rules',
      new VideoCopyrightRule(),
      'EDGE',
      VideoCopyrightRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideoCopyrightRule(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'condition_groups' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/video_copyright_rules',
      new VideoCopyrightRule(),
      'EDGE',
      VideoCopyrightRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'use_fallback' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_copyrights',
      new VideoCopyright(),
      'EDGE',
      VideoCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideoCopyright(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'monitoring_type' => 'monitoring_type_enum',
      'rule_id' => 'string',
      'whitelisted_ids' => 'list<string>',
      'whitelisted_ig_user_ids' => 'list<string>',
      'ownership_countries' => 'list<string>',
      'excluded_ownership_countries' => 'list<string>',
      'excluded_ownership_segments' => 'list<Object>',
      'is_reference_disabled' => 'bool',
      'content_category' => 'content_category_enum',
      'attribution_id' => 'string',
      'copyright_content_id' => 'string',
      'is_reference_video' => 'bool',
      'fingerprint_id' => 'string',
    );
    $enums = array(
      'monitoring_type_enum' => VideoCopyrightMonitoringTypeValues::getInstance()->getValues(),
      'content_category_enum' => VideoCopyrightContentCategoryValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/video_copyrights',
      new VideoCopyright(),
      'EDGE',
      VideoCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteVideoLists(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'video_list_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/video_lists',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoLists(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_lists',
      new VideoList(),
      'EDGE',
      VideoList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideoList(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'title' => 'string',
      'description' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/video_lists',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoMediaCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_media_copyrights',
      new VideoCopyright(),
      'EDGE',
      VideoCopyright::getFieldsEnum()->getValues(),
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
      'ad_breaks' => 'Object',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'backdated_post' => 'Object',
      'custom_labels' => 'list<string>',
      'call_to_action' => 'Object',
      'expiration' => 'Object',
      'feed_targeting' => 'Object',
      'published' => 'bool',
      'scheduled_publish_time' => 'unsigned int',
      'targeting' => 'Object',
      'no_story' => 'bool',
      'secret' => 'bool',
      'social_actions' => 'bool',
      'sponsor_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'sponsor_relationship' => 'unsigned int',
      'content_tags' => 'list<string>',
      'reference_only' => 'bool',
      'video_asset_id' => 'string',
      'universal_video_id' => 'string',
      'multilingual_data' => 'list<Object>',
      'specified_dialect' => 'string',
      'crossposted_video_id' => 'string',
    );
    $enums = array(
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
      'backdated_time_granularity_enum' => AdVideoBackdatedTimeGranularityValues::getInstance()->getValues(),
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

  public function getVideosYouCanUse(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/videos_you_can_use',
      new PageVideosYouCanUse(),
      'EDGE',
      PageVideosYouCanUse::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVisitorPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/visitor_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getWorkFlows(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/workflows',
      new PagesPlatformComponentFlowServiceConfig(),
      'EDGE',
      PagesPlatformComponentFlowServiceConfig::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_linking_token' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Page(),
      'NODE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_spherical_photo' => 'bool',
      'spherical_metadata' => 'map',
      'offset_y' => 'int',
      'offset_x' => 'int',
      'focus_y' => 'float',
      'focus_x' => 'float',
      'zoom_scale_x' => 'float',
      'zoom_scale_y' => 'float',
      'no_feed_story' => 'bool',
      'no_notification' => 'bool',
      'cover' => 'string',
      'about' => 'string',
      'bio' => 'string',
      'company_overview' => 'string',
      'description' => 'string',
      'directed_by' => 'string',
      'general_info' => 'string',
      'impressum' => 'string',
      'mission' => 'string',
      'phone' => 'string',
      'website' => 'string',
      'parking' => 'map',
      'hours' => 'map',
      'location' => 'Object',
      'price_range' => 'string',
      'payment_options' => 'map',
      'restaurant_services' => 'map',
      'restaurant_specialties' => 'map',
      'emails' => 'list<string>',
      'food_styles' => 'list<food_styles_enum>',
      'attire' => 'attire_enum',
      'public_transit' => 'string',
      'general_manager' => 'string',
      'culinary_team' => 'string',
      'start_info' => 'Object',
      'genre' => 'string',
      'plot_outline' => 'string',
      'scrape' => 'bool',
      'category_list' => 'list<string>',
      'is_always_open' => 'bool',
      'is_published' => 'bool',
      'is_webhooks_subscribed' => 'bool',
      'contact_address' => 'Object',
      'instant_articles_submit_for_review' => 'bool',
      'is_permanently_closed' => 'bool',
      'ignore_coordinate_warnings' => 'bool',
      'crossposting_pages' => 'list<Object>',
      'begin_crossposting_handshake' => 'list<map>',
      'accept_crossposting_handshake' => 'list<map>',
      'displayed_message_response_time' => 'string',
      'store_location_descriptor' => 'string',
      'service_details' => 'string',
      'menu' => 'string',
    );
    $enums = array(
      'food_styles_enum' => PageFoodStylesValues::getInstance()->getValues(),
      'attire_enum' => PageAttireValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Page(),
      'NODE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
