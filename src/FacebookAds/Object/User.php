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
use FacebookAds\Object\Fields\UserFields;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoTypeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\EventPromotableEventTypesValues;
use FacebookAds\Object\Values\EventTypeValues;
use FacebookAds\Object\Values\FavoriteRequestApiVersionValues;
use FacebookAds\Object\Values\FavoriteRequestHttpMethodValues;
use FacebookAds\Object\Values\FriendListListTypeValues;
use FacebookAds\Object\Values\LinkUnpublishedContentTypeValues;
use FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;
use FacebookAds\Object\Values\LiveVideoTypeValues;
use FacebookAds\Object\Values\PermissionStatusValues;
use FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PhotoTypeValues;
use FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\ProfilePictureSourceTypeValues;
use FacebookAds\Object\Values\UserFilteringValues;
use FacebookAds\Object\Values\UserLocalNewsMegaphoneDismissStatusValues;
use FacebookAds\Object\Values\UserLocalNewsSubscriptionStatusValues;
use FacebookAds\Object\Values\UserResumeTypeValues;
use FacebookAds\Object\Values\UserServiceTypeValues;
use FacebookAds\Object\Values\UserTasksValues;
use FacebookAds\Object\Values\UserTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class User extends AbstractCrudObject {

  /**
   * @return UserFields
   */
  public static function getFieldsEnum() {
    return UserFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Tasks'] = UserTasksValues::getInstance()->getValues();
    $ref_enums['LocalNewsMegaphoneDismissStatus'] = UserLocalNewsMegaphoneDismissStatusValues::getInstance()->getValues();
    $ref_enums['LocalNewsSubscriptionStatus'] = UserLocalNewsSubscriptionStatusValues::getInstance()->getValues();
    $ref_enums['ResumeType'] = UserResumeTypeValues::getInstance()->getValues();
    $ref_enums['Filtering'] = UserFilteringValues::getInstance()->getValues();
    $ref_enums['Type'] = UserTypeValues::getInstance()->getValues();
    $ref_enums['ServiceType'] = UserServiceTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createPaymentCurrency(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'currency' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/PaymentCurrencies',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAccessToken(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_app' => 'int',
      'scope' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/access_tokens',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAccessTokens(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/accesstokens',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_id' => 'string',
      'is_promotable' => 'bool',
      'is_business' => 'bool',
      'is_place' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/accounts',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'category' => 'int',
      'category_enum' => 'string',
      'picture' => 'string',
      'cover_photo' => 'Object',
      'about' => 'string',
      'description' => 'string',
      'address' => 'string',
      'city_id' => 'Object',
      'location' => 'Object',
      'zip' => 'string',
      'phone' => 'string',
      'website' => 'string',
      'coordinates' => 'Object',
      'category_list' => 'list<string>',
      'ignore_coordinate_warnings' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/accounts',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAchievements(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id_filter' => 'int',
      'object' => 'Object',
      'type' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/achievements',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAchievement(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'to' => 'string',
      'client_secret' => 'string',
      'preview' => 'bool',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'proxied_app_id' => 'string',
      'user_selected_tags' => 'bool',
      'user_selected_place' => 'bool',
      'added' => 'string',
      'alias' => 'string',
      'fb:channel' => 'string',
      'created_time' => 'datetime',
      'end_time' => 'datetime',
      'expires_in' => 'unsigned int',
      'fb:explicitly_shared' => 'bool',
      'image:height' => 'unsigned int',
      'image:secure_url' => 'string',
      'image:type' => 'string',
      'image:url' => 'string',
      'image:user_generated' => 'bool',
      'image:width' => 'unsigned int',
      'no_feed_story' => 'bool',
      'no_action_link' => 'bool',
      'notify' => 'bool',
      'message' => 'string',
      'place' => 'string',
      'privacy' => 'Object',
      'ref' => 'string',
      'scrape' => 'bool',
      'start_time' => 'datetime',
      'tags' => 'list<int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/achievements',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdStudies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adaccounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdContracts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adcontracts',
      new AdContract(),
      'EDGE',
      AdContract::getFieldsEnum()->getValues(),
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

  public function createApplication(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_app' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/applications',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAppRequestFormerRecipients(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/apprequestformerrecipients',
      new AppRequestFormerRecipient(),
      'EDGE',
      AppRequestFormerRecipient::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAppRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/apprequests',
      new AppRequest(),
      'EDGE',
      AppRequest::getFieldsEnum()->getValues(),
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

  public function getAssignedAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_ad_accounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedMonetizationProperties(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_monetization_properties',
      new AdMonetizationProperty(),
      'EDGE',
      AdMonetizationProperty::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedProductCatalogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_product_catalogs',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBooks(array $fields = array(), array $params = array(), $pending = false) {
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
      '/books',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteBulkContacts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'contact_surface' => 'contact_surface_enum',
    );
    $enums = array(
      'contact_surface_enum' => array(
        'ORIGINAL',
        'MESSENGER',
        'CONNECTIONS',
        'GROWTH_CONTACT_IMPORTER',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/bulkcontacts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function getBusinessUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/business_users',
      new BusinessUser(),
      'EDGE',
      BusinessUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteBusinesses(array $fields = array(), array $params = array(), $pending = false) {
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
      '/businesses',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinesses(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
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

  public function createCheckin(array $fields = array(), array $params = array(), $pending = false) {
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
      'place' => 'Object',
      'coordinates' => 'Object',
      'message' => 'string',
      'tags' => 'list<int>',
      'privacy' => 'Object',
      'group' => 'string',
      'nectar_module' => 'string',
      'manual_privacy' => 'bool',
      'audience_exp' => 'bool',
      'composer_session_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/checkins',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createContactsPhoto(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'published' => 'bool',
      'target_id' => 'int',
      'url' => 'string',
      'full_res_is_coming_later' => 'bool',
      'manual_privacy' => 'bool',
      'audience_exp' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/contacts_photos',
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

  public function getDomains(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/domains',
      new Domain(),
      'EDGE',
      Domain::getFieldsEnum()->getValues(),
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
    );
    $enums = array(
      'type_enum' => EventTypeValues::getInstance()->getValues(),
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

  public function getFamily(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/family',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFavoriteRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/favorite_requests',
      new FavoriteRequest(),
      'EDGE',
      FavoriteRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFavoriteRequest(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'api_version' => 'api_version_enum',
      'graph_path' => 'string',
      'query_params' => 'map',
      'http_method' => 'http_method_enum',
      'description' => 'string',
      'post_params' => 'map',
    );
    $enums = array(
      'api_version_enum' => FavoriteRequestApiVersionValues::getInstance()->getValues(),
      'http_method_enum' => FavoriteRequestHttpMethodValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/favorite_requests',
      new FavoriteRequest(),
      'EDGE',
      FavoriteRequest::getFieldsEnum()->getValues(),
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
    );
    $enums = array(
      'backdated_time_granularity_enum' => array(
        'year',
        'month',
        'day',
        'hour',
        'min',
        'none',
      ),
      'unpublished_content_type_enum' => array(
        'SCHEDULED',
        'DRAFT',
        'ADS_POST',
        'INLINE_CREATED',
        'PUBLISHED',
      ),
      'posting_to_redspace_enum' => array(
        'enabled',
        'disabled',
      ),
      'place_attachment_setting_enum' => array(
        '1',
        '2',
      ),
      'checkin_entry_point_enum' => array(
        'BRANDING_CHECKIN',
        'BRANDING_STATUS',
        'BRANDING_PHOTO',
        'BRANDING_OTHER',
      ),
      'post_surfaces_blacklist_enum' => array(
        '1',
        '2',
        '3',
        '4',
        '5',
      ),
      'formatting_enum' => array(
        'PLAINTEXT',
        'MARKDOWN',
      ),
      'target_surface_enum' => array(
        'STORY',
        'TIMELINE',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/feed',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFriendLists(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/friendlists',
      new FriendList(),
      'EDGE',
      FriendList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFriendList(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'uid' => 'int',
      'list_type' => 'list_type_enum',
    );
    $enums = array(
      'list_type_enum' => FriendListListTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/friendlists',
      new FriendList(),
      'EDGE',
      FriendList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFriends(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/friends',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGameItem(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action' => 'action_enum',
      'item_id' => 'Object',
      'drop_table_id' => 'Object',
      'ext_id' => 'string',
      'quantity' => 'unsigned int',
      'app_id' => 'Object',
    );
    $enums = array(
      'action_enum' => array(
        'MARK',
        'CONSUME',
        'DROP',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/game_items',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGameTime(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action' => 'action_enum',
    );
    $enums = array(
      'action_enum' => array(
        'START',
        'HEARTBEAT',
        'END',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/game_times',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGames(array $fields = array(), array $params = array(), $pending = false) {
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
      '/games',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGamesStat(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'stat_name' => 'string',
      'set' => 'unsigned int',
      'inc' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/games_stats',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGamesAchieve(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'to' => 'string',
      'client_secret' => 'string',
      'preview' => 'bool',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'proxied_app_id' => 'string',
      'user_selected_tags' => 'bool',
      'user_selected_place' => 'bool',
      'added' => 'string',
      'alias' => 'string',
      'fb:channel' => 'string',
      'created_time' => 'datetime',
      'end_time' => 'datetime',
      'expires_in' => 'unsigned int',
      'fb:explicitly_shared' => 'bool',
      'image:height' => 'unsigned int',
      'image:secure_url' => 'string',
      'image:type' => 'string',
      'image:url' => 'string',
      'image:user_generated' => 'bool',
      'image:width' => 'unsigned int',
      'no_feed_story' => 'bool',
      'no_action_link' => 'bool',
      'notify' => 'bool',
      'message' => 'string',
      'place' => 'string',
      'privacy' => 'Object',
      'ref' => 'string',
      'scrape' => 'bool',
      'start_time' => 'datetime',
      'tags' => 'list<int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/gamesachieves',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createGamesPlay(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'to' => 'string',
      'client_secret' => 'string',
      'preview' => 'bool',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'proxied_app_id' => 'string',
      'user_selected_tags' => 'bool',
      'user_selected_place' => 'bool',
      'added' => 'string',
      'alias' => 'string',
      'fb:channel' => 'string',
      'created_time' => 'datetime',
      'end_time' => 'datetime',
      'expires_in' => 'unsigned int',
      'fb:explicitly_shared' => 'bool',
      'image:height' => 'unsigned int',
      'image:secure_url' => 'string',
      'image:type' => 'string',
      'image:url' => 'string',
      'image:user_generated' => 'bool',
      'image:width' => 'unsigned int',
      'no_feed_story' => 'bool',
      'no_action_link' => 'bool',
      'notify' => 'bool',
      'message' => 'string',
      'place' => 'string',
      'privacy' => 'Object',
      'ref' => 'string',
      'scrape' => 'bool',
      'start_time' => 'datetime',
      'tags' => 'list<int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/gamesplays',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGroups(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'parent' => 'string',
      'admin_only' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/groups',
      new Group(),
      'EDGE',
      Group::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIdsForApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ids_for_apps',
      new UserIDForApp(),
      'EDGE',
      UserIDForApp::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIdsForBusiness(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ids_for_business',
      new UserIDForApp(),
      'EDGE',
      UserIDForApp::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIdsForPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ids_for_pages',
      new UserIDForPage(),
      'EDGE',
      UserIDForPage::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInvitableFriends(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'excluded_ids' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/invitable_friends',
      new UserInvitableFriend(),
      'EDGE',
      UserInvitableFriend::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
      'url' => 'string',
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

  public function createLike(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message' => 'string',
      'url' => 'string',
      'ref' => 'string',
      'action' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/likes',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
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

  public function createLiveEncoder(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'device_id' => 'string',
      'name' => 'string',
      'brand' => 'string',
      'model' => 'string',
      'version' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/live_encoders',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function createLoggedOutPushSetNonce(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'device_id' => 'string',
      'existing_nonce' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/loggedoutpushsetnonces',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLogInApprovalsKey(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'machine_id' => 'string',
      'check_code' => 'string',
      'client_time' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/loginapprovalskeys',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMfsAccountPinReset(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'provider_id' => 'string',
      'password_token' => 'string',
      'should_bypass_token_proxy' => 'bool',
      'resume_type' => 'resume_type_enum',
      'resume_payload' => 'string',
    );
    $enums = array(
      'resume_type_enum' => UserResumeTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/mfs_account_pin_reset',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMomentsLinkInvite(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'moments_folder_uuid' => 'string',
      'invite_source' => 'string',
      'is_aldrin_region' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/moments_link_invite',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMomentsLinkInviteConvert(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'encoded_invite_id' => 'string',
      'invite_nonce' => 'string',
      'invite_source' => 'string',
      'funnel_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/moments_link_invite_convert',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMomentsUniversalLinkInvite(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'invite_url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/moments_universal_link_invite',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMovies(array $fields = array(), array $params = array(), $pending = false) {
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
      '/movies',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMusic(array $fields = array(), array $params = array(), $pending = false) {
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
      '/music',
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
      'filtering_enum' => UserFilteringValues::getInstance()->getValues(),
      'type_enum' => UserTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/notifications',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getObjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/objects',
      new OpenGraphObject(),
      'EDGE',
      OpenGraphObject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createObject(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'string',
      'object' => 'Object',
      'action_properties' => 'Object',
      'privacy' => 'Object',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'proxied_app_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/objects',
      new OpenGraphObject(),
      'EDGE',
      OpenGraphObject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOpenGraphActionFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'to' => 'string',
      'client_secret' => 'string',
      'preview' => 'bool',
      'ios_bundle_id' => 'string',
      'android_key_hash' => 'string',
      'proxied_app_id' => 'string',
      'user_selected_tags' => 'bool',
      'user_selected_place' => 'bool',
      'added' => 'string',
      'alias' => 'string',
      'fb:channel' => 'string',
      'created_time' => 'datetime',
      'end_time' => 'datetime',
      'expires_in' => 'unsigned int',
      'fb:explicitly_shared' => 'bool',
      'image:height' => 'unsigned int',
      'image:secure_url' => 'string',
      'image:type' => 'string',
      'image:url' => 'string',
      'image:user_generated' => 'bool',
      'image:width' => 'unsigned int',
      'no_feed_story' => 'bool',
      'no_action_link' => 'bool',
      'notify' => 'bool',
      'message' => 'string',
      'place' => 'string',
      'privacy' => 'Object',
      'ref' => 'string',
      'scrape' => 'bool',
      'start_time' => 'datetime',
      'tags' => 'list<int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/opengraphactionfeed',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPaymentAccountEmail(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user_input_email' => 'string',
      'default' => 'bool',
      'payment_type' => 'payment_type_enum',
    );
    $enums = array(
      'payment_type_enum' => array(
        'PAYMENT_SETTINGS',
        'IG_PAYMENT_SETTINGS',
        'UNKNOWN',
        'MP_PAYMENT_SETTINGS',
        'IAP_INSTANT_GAME',
        'IAP_FAN_FUNDING',
        'IAP_GROUP_SUBSCRIPTION',
        'MOR_NONE',
        'MOR_ADS_INVOICE',
        'MOR_DONATIONS',
        'MOR_DONATIONS_MATCHING_CONFIRMATION',
        'MOR_DONATIONS_MATCHING_PLEDGE',
        'MOR_OCULUS_CV1',
        'MOR_OCULUS_LAUNCH_V1',
        'MOR_OCULUS_LAUNCH_V2',
        'MOR_OZONE',
        'MOR_OPEN_GRAPH_PRODUCT',
        'MOR_MESSENGER_COMMERCE',
        'MOR_P2P_TRANSFER',
        'MOR_DUMMY_FIRST_PARTY',
        'MOR_DUMMY_THIRD_PARTY',
        'MOR_GIFTS',
        'MOR_BILL',
        'MOR_AIRMAIL',
        'MOR_EVENT_TICKETING',
        'MOR_PAYMENT_LITE',
        'MOR_MESSENGER_API_FEE',
        'MOR_WORKPLACE_USAGE',
        'MOR_FACEBOOK_SHOP',
        'MOR_FAN_FUNDING',
        'MOR_GAME_TIPPING_TOKEN',
        'MOR_INSTANT_GAMES',
        'MOR_BLUEBIRD',
        'MOR_GROUP_SUBSCRIPTION',
        'NMOR_UNKNOWN',
        'NMOR_NONE',
        'NMOR_PAGES_COMMERCE',
        'NMOR_COMPONENT_FLOW',
        'NMOR_BUSINESS_PLATFORM_COMMERCE',
        'NMOR_SYNCHRONOUS_COMPONENT_FLOW',
        'NMOR_EVENT_TICKETING',
        'NMOR_PLATFORM_SELF_SERVE',
        'NMOR_MESSENGER_PLATFORM',
        'NMOR_MESSENGER_OMNIM',
        'NMOR_BILLING_ENGINE',
        'NMOR_TIP_JAR',
        'NMOR_INSTANT_EXPERIENCES',
        'NMOR_CHECKOUT_EXPERIENCES',
        'NMOR_BUY_ON_FACEBOOK',
        'NMOR_PAYMENT_APP',
        'NMOR_DONATION_P4P',
        'NMOR_WHATSAPP_P2P',
        'NMOR_P2P',
        'NMOR_MOBILE_TOP_UP',
        'NMOR_MFS',
        'NMOR_SHIPPING_LABEL',
        'NMOR_MARKETPLACE_DROPOFF',
        'NMOR_PAGES_SOLUTION',
        'NMOR_BLACKBAUD_RWR_DONATION',
        'NMOR_MARKETPLACE_SHIPPING',
        'NMOR_DUMMY',
        'NMOR_PPGF_DONATION',
        'NMOR_ADVERTISER_SUBSCRIPTION',
        'NMOR_WHATSAPP_P2M',
        'NMOR_MOVIE_TICKETING',
        'IG_NMOR_P2B',
        'NMOR_INSTAGRAM_P2B',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/payment_account_emails',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPaymentAccountPhone(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'raw_input' => 'string',
      'country_code' => 'string',
      'default' => 'bool',
      'payment_type' => 'payment_type_enum',
    );
    $enums = array(
      'payment_type_enum' => array(
        'PAYMENT_SETTINGS',
        'IG_PAYMENT_SETTINGS',
        'UNKNOWN',
        'MP_PAYMENT_SETTINGS',
        'IAP_INSTANT_GAME',
        'IAP_FAN_FUNDING',
        'IAP_GROUP_SUBSCRIPTION',
        'MOR_NONE',
        'MOR_ADS_INVOICE',
        'MOR_DONATIONS',
        'MOR_DONATIONS_MATCHING_CONFIRMATION',
        'MOR_DONATIONS_MATCHING_PLEDGE',
        'MOR_OCULUS_CV1',
        'MOR_OCULUS_LAUNCH_V1',
        'MOR_OCULUS_LAUNCH_V2',
        'MOR_OZONE',
        'MOR_OPEN_GRAPH_PRODUCT',
        'MOR_MESSENGER_COMMERCE',
        'MOR_P2P_TRANSFER',
        'MOR_DUMMY_FIRST_PARTY',
        'MOR_DUMMY_THIRD_PARTY',
        'MOR_GIFTS',
        'MOR_BILL',
        'MOR_AIRMAIL',
        'MOR_EVENT_TICKETING',
        'MOR_PAYMENT_LITE',
        'MOR_MESSENGER_API_FEE',
        'MOR_WORKPLACE_USAGE',
        'MOR_FACEBOOK_SHOP',
        'MOR_FAN_FUNDING',
        'MOR_GAME_TIPPING_TOKEN',
        'MOR_INSTANT_GAMES',
        'MOR_BLUEBIRD',
        'MOR_GROUP_SUBSCRIPTION',
        'NMOR_UNKNOWN',
        'NMOR_NONE',
        'NMOR_PAGES_COMMERCE',
        'NMOR_COMPONENT_FLOW',
        'NMOR_BUSINESS_PLATFORM_COMMERCE',
        'NMOR_SYNCHRONOUS_COMPONENT_FLOW',
        'NMOR_EVENT_TICKETING',
        'NMOR_PLATFORM_SELF_SERVE',
        'NMOR_MESSENGER_PLATFORM',
        'NMOR_MESSENGER_OMNIM',
        'NMOR_BILLING_ENGINE',
        'NMOR_TIP_JAR',
        'NMOR_INSTANT_EXPERIENCES',
        'NMOR_CHECKOUT_EXPERIENCES',
        'NMOR_BUY_ON_FACEBOOK',
        'NMOR_PAYMENT_APP',
        'NMOR_DONATION_P4P',
        'NMOR_WHATSAPP_P2P',
        'NMOR_P2P',
        'NMOR_MOBILE_TOP_UP',
        'NMOR_MFS',
        'NMOR_SHIPPING_LABEL',
        'NMOR_MARKETPLACE_DROPOFF',
        'NMOR_PAGES_SOLUTION',
        'NMOR_BLACKBAUD_RWR_DONATION',
        'NMOR_MARKETPLACE_SHIPPING',
        'NMOR_DUMMY',
        'NMOR_PPGF_DONATION',
        'NMOR_ADVERTISER_SUBSCRIPTION',
        'NMOR_WHATSAPP_P2M',
        'NMOR_MOVIE_TICKETING',
        'IG_NMOR_P2B',
        'NMOR_INSTAGRAM_P2B',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/payment_account_phones',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deletePermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'permission' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/permissions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'permission' => 'string',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => PermissionStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/permissions',
      new Permission(),
      'EDGE',
      Permission::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPersonalAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/personal_ad_accounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
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

  public function createPlace(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
      'coords' => 'Object',
      'name' => 'string',
      'description' => 'string',
      'topics' => 'list<string>',
      'uid' => 'int',
      'geometry' => 'Object',
      'override_ids' => 'list<int>',
      'address' => 'Object',
      'privacy' => 'Object',
      'phone' => 'string',
      'website' => 'string',
      'city_id' => 'string',
      'neighborhood_name' => 'string',
      'pin_source' => 'string',
      'custom_provider' => 'string',
    );
    $enums = array(
      'type_enum' => array(
        'PLACE',
        'CITY',
        'STATE_PROVINCE',
        'COUNTRY',
        'EVENT',
        'RESIDENCE',
        'TEXT',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/places',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPromotableDomains(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/promotable_domains',
      new Domain(),
      'EDGE',
      Domain::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPromotableEvents(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_page_event' => 'bool',
      'page_id' => 'unsigned int',
      'include_past_events' => 'bool',
      'promotable_event_types' => 'list<promotable_event_types_enum>',
    );
    $enums = array(
      'promotable_event_types_enum' => EventPromotableEventTypesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/promotable_events',
      new Event(),
      'EDGE',
      Event::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRequestHistory(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/request_history',
      new RequestHistory(),
      'EDGE',
      RequestHistory::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRichMediaDocuments(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'query' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/rich_media_documents',
      new Canvas(),
      'EDGE',
      Canvas::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteScreenNames(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'service_type' => 'service_type_enum',
      'value' => 'string',
    );
    $enums = array(
      'service_type_enum' => UserServiceTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/screennames',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createScreenName(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'service_type' => 'service_type_enum',
      'value' => 'string',
    );
    $enums = array(
      'service_type_enum' => UserServiceTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/screennames',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSessionKeys(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/session_keys',
      new PlatformSessionKey(),
      'EDGE',
      PlatformSessionKey::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createStagingResource(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'file' => 'file',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/stagingresources',
      new User(),
      'EDGE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getStreamFilters(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/stream_filters',
      new StreamFilter(),
      'EDGE',
      StreamFilter::getFieldsEnum()->getValues(),
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

  public function getTaggableFriends(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/taggable_friends',
      new UserTaggableFriend(),
      'EDGE',
      UserTaggableFriend::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTaggedPlaces(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tagged_places',
      new PlaceTag(),
      'EDGE',
      PlaceTag::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTelevision(array $fields = array(), array $params = array(), $pending = false) {
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
      '/television',
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
      'privacy' => 'Object',
      'no_story' => 'bool',
      'sponsor_id' => 'string',
      'direct_share_status' => 'unsigned int',
    );
    $enums = array(
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
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
      new User(),
      'NODE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'password' => 'string',
      'name' => 'string',
      'firstname' => 'string',
      'lastname' => 'string',
      'local_news_subscription_status' => 'local_news_subscription_status_enum',
      'local_news_megaphone_dismiss_status' => 'local_news_megaphone_dismiss_status_enum',
      'label_cohort' => 'Object',
      'emoji_color_pref' => 'unsigned int',
    );
    $enums = array(
      'local_news_subscription_status_enum' => UserLocalNewsSubscriptionStatusValues::getInstance()->getValues(),
      'local_news_megaphone_dismiss_status_enum' => UserLocalNewsMegaphoneDismissStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new User(),
      'NODE',
      User::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
