<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\IGUserFields;
use FacebookAds\Object\Values\IGUserExportForCAMCreatorCountriesValues;
use FacebookAds\Object\Values\IGUserExportForCAMCreatorGenderValues;
use FacebookAds\Object\Values\IGUserExportForCAMMajorAudienceCountriesValues;
use FacebookAds\Object\Values\IGUserExportForCAMMajorAudienceGenderValues;
use FacebookAds\Object\Values\InstagramInsightsResultBreakdownValues;
use FacebookAds\Object\Values\InstagramInsightsResultMetricTypeValues;
use FacebookAds\Object\Values\InstagramInsightsResultMetricValues;
use FacebookAds\Object\Values\InstagramInsightsResultPeriodValues;
use FacebookAds\Object\Values\InstagramInsightsResultTimeframeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class IGUser extends AbstractCrudObject {

  /**
   * @return IGUserFields
   */
  public static function getFieldsEnum() {
    return IGUserFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
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

  public function getAuthorizedAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
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
      '/authorized_adaccounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAuthorizedAdAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/authorized_adaccounts',
      new IGUser(),
      'EDGE',
      IGUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAvailableCatalogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/available_catalogs',
      new UserAvailableCatalogs(),
      'EDGE',
      UserAvailableCatalogs::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBrandedContentAdPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/branded_content_ad_permissions',
      new IGBCAdsPermission(),
      'EDGE',
      IGBCAdsPermission::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBrandedContentAdPermission(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'creator_instagram_account' => 'string',
      'creator_instagram_username' => 'string',
      'revoke' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/branded_content_ad_permissions',
      new IGBCAdsPermission(),
      'EDGE',
      IGBCAdsPermission::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBrandedContentAdvertisableMedias(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_code' => 'string',
      'creator_username' => 'string',
      'only_fetch_allowlisted' => 'bool',
      'only_fetch_recommended_content' => 'bool',
      'permalinks' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/branded_content_advertisable_medias',
      new BrandedContentShadowIGMediaID(),
      'EDGE',
      BrandedContentShadowIGMediaID::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteBrandedContentTagApproval(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user_ids' => 'list<unsigned int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/branded_content_tag_approval',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBrandedContentTagApproval(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user_ids' => 'list<unsigned int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/branded_content_tag_approval',
      new BrandedContentShadowIGUserID(),
      'EDGE',
      BrandedContentShadowIGUserID::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBrandedContentTagApproval(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user_ids' => 'list<unsigned int>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/branded_content_tag_approval',
      new BrandedContentShadowIGUserID(),
      'EDGE',
      BrandedContentShadowIGUserID::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCatalogProductSearch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'catalog_id' => 'string',
      'q' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/catalog_product_search',
      new ShadowIGUserCatalogProductSearch(),
      'EDGE',
      ShadowIGUserCatalogProductSearch::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConnectedThreadsUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/connected_threads_user',
      new ThreadsUser(),
      'EDGE',
      ThreadsUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getContentPublishingLimit(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'since' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/content_publishing_limit',
      new ContentPublishingLimitResponse(),
      'EDGE',
      ContentPublishingLimitResponse::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCreatorMarketPlaceCreators(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'creator_age_bucket' => 'list<Object>',
      'creator_countries' => 'list<creator_countries_enum>',
      'creator_gender' => 'list<creator_gender_enum>',
      'creator_interests' => 'list<Object>',
      'creator_max_engaged_accounts' => 'unsigned int',
      'creator_max_followers' => 'unsigned int',
      'creator_min_engaged_accounts' => 'unsigned int',
      'creator_min_followers' => 'unsigned int',
      'major_audience_age_bucket' => 'list<Object>',
      'major_audience_countries' => 'list<major_audience_countries_enum>',
      'major_audience_gender' => 'list<major_audience_gender_enum>',
      'query' => 'string',
      'reels_interaction_rate' => 'Object',
      'similar_to_creators' => 'list<string>',
    );
    $enums = array(
      'creator_countries_enum' => IGUserExportForCAMCreatorCountriesValues::getInstance()->getValues(),
      'creator_gender_enum' => IGUserExportForCAMCreatorGenderValues::getInstance()->getValues(),
      'major_audience_countries_enum' => IGUserExportForCAMMajorAudienceCountriesValues::getInstance()->getValues(),
      'major_audience_gender_enum' => IGUserExportForCAMMajorAudienceGenderValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/creator_marketplace_creators',
      new IGUserExportForCAM(),
      'EDGE',
      IGUserExportForCAM::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDataset(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/dataset',
      new Dataset(),
      'EDGE',
      Dataset::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createDataset(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'dataset_name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/dataset',
      new Dataset(),
      'EDGE',
      Dataset::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'breakdown' => 'list<breakdown_enum>',
      'metric' => 'list<metric_enum>',
      'metric_type' => 'metric_type_enum',
      'period' => 'list<period_enum>',
      'since' => 'datetime',
      'timeframe' => 'timeframe_enum',
      'until' => 'datetime',
    );
    $enums = array(
      'breakdown_enum' => InstagramInsightsResultBreakdownValues::getInstance()->getValues(),
      'metric_enum' => InstagramInsightsResultMetricValues::getInstance()->getValues(),
      'metric_type_enum' => InstagramInsightsResultMetricTypeValues::getInstance()->getValues(),
      'period_enum' => InstagramInsightsResultPeriodValues::getInstance()->getValues(),
      'timeframe_enum' => InstagramInsightsResultTimeframeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new InstagramInsightsResult(),
      'EDGE',
      InstagramInsightsResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstagramBackedThreadsUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instagram_backed_threads_user',
      new ThreadsUser(),
      'EDGE',
      ThreadsUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createInstagramBackedThreadsUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/instagram_backed_threads_user',
      new ThreadsUser(),
      'EDGE',
      ThreadsUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLiveMedia(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/live_media',
      new IGMedia(),
      'EDGE',
      IGMedia::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMedia(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/media',
      new IGMedia(),
      'EDGE',
      IGMedia::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMedia(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'alt_text' => 'string',
      'audio_name' => 'string',
      'caption' => 'string',
      'children' => 'list<string>',
      'collaborators' => 'list<string>',
      'cover_url' => 'string',
      'image_url' => 'string',
      'is_carousel_item' => 'bool',
      'location_id' => 'string',
      'media_type' => 'string',
      'product_tags' => 'list<map>',
      'share_to_feed' => 'bool',
      'thumb_offset' => 'string',
      'upload_type' => 'string',
      'user_tags' => 'list<map>',
      'video_url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/media',
      new IGMedia(),
      'EDGE',
      IGMedia::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMediaPublish(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'creation_id' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/media_publish',
      new IGMedia(),
      'EDGE',
      IGMedia::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMention(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'comment_id' => 'string',
      'media_id' => 'string',
      'message' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/mentions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getNotificationMessageTokens(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/notification_message_tokens',
      new UserPageOneTimeOptInTokenSettings(),
      'EDGE',
      UserPageOneTimeOptInTokenSettings::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductAppeal(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'product_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_appeal',
      new IGShoppingProductAppeal(),
      'EDGE',
      IGShoppingProductAppeal::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductAppeal(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'appeal_reason' => 'string',
      'product_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_appeal',
      new IGShoppingProductAppeal(),
      'EDGE',
      IGShoppingProductAppeal::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRecentlySearchedHashtags(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/recently_searched_hashtags',
      new ShadowIGHashtag(),
      'EDGE',
      ShadowIGHashtag::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getStories(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/stories',
      new IGMedia(),
      'EDGE',
      IGMedia::getFieldsEnum()->getValues(),
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
      new IGMedia(),
      'EDGE',
      IGMedia::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getUpcomingEvents(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/upcoming_events',
      new IGUpcomingEvent(),
      'EDGE',
      IGUpcomingEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUpcomingEvent(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end_time' => 'datetime',
      'notification_subtypes' => 'list<notification_subtypes_enum>',
      'start_time' => 'datetime',
      'title' => 'string',
    );
    $enums = array(
      'notification_subtypes_enum' => array(
        'AFTER_EVENT_1DAY',
        'AFTER_EVENT_2DAY',
        'AFTER_EVENT_3DAY',
        'AFTER_EVENT_4DAY',
        'AFTER_EVENT_5DAY',
        'AFTER_EVENT_6DAY',
        'AFTER_EVENT_7DAY',
        'BEFORE_EVENT_15MIN',
        'BEFORE_EVENT_1DAY',
        'BEFORE_EVENT_1HOUR',
        'BEFORE_EVENT_2DAY',
        'EVENT_START',
        'RESCHEDULED',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/upcoming_events',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getWelcomeMessageFlows(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
      'flow_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/welcome_message_flows',
      new ShadowIGUserCTXPartnerAppWelcomeMessageFlow(),
      'EDGE',
      ShadowIGUserCTXPartnerAppWelcomeMessageFlow::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adgroup_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new IGUser(),
      'NODE',
      IGUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
