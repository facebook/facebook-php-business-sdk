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
use FacebookAds\Object\Fields\WhatsAppBusinessAccountFields;
use FacebookAds\Object\Values\WhatsAppBusinessAccountCategoryValues;
use FacebookAds\Object\Values\WhatsAppBusinessAccountSubCategoryValues;
use FacebookAds\Object\Values\WhatsAppBusinessAccountTasksValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class WhatsAppBusinessAccount extends AbstractCrudObject {

  /**
   * @return WhatsAppBusinessAccountFields
   */
  public static function getFieldsEnum() {
    return WhatsAppBusinessAccountFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Tasks'] = WhatsAppBusinessAccountTasksValues::getInstance()->getValues();
    $ref_enums['Category'] = WhatsAppBusinessAccountCategoryValues::getInstance()->getValues();
    $ref_enums['SubCategory'] = WhatsAppBusinessAccountSubCategoryValues::getInstance()->getValues();
    return $ref_enums;
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
      'tasks' => 'list<tasks_enum>',
      'user' => 'int',
    );
    $enums = array(
      'tasks_enum' => WhatsAppBusinessAccountTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/assigned_users',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/audiences',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConversationAnalytics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'conversation_categories' => 'list<conversation_categories_enum>',
      'conversation_directions' => 'list<conversation_directions_enum>',
      'conversation_types' => 'list<conversation_types_enum>',
      'country_codes' => 'list<string>',
      'dimensions' => 'list<dimensions_enum>',
      'end' => 'unsigned int',
      'granularity' => 'granularity_enum',
      'metric_types' => 'list<metric_types_enum>',
      'phone_numbers' => 'list<string>',
      'start' => 'unsigned int',
    );
    $enums = array(
      'conversation_categories_enum' => array(
        'AUTHENTICATION',
        'MARKETING',
        'MARKETING_OPTIMIZED_DELIVERY',
        'SERVICE',
        'UNKNOWN',
        'UTILITY',
      ),
      'conversation_directions_enum' => array(
        'BUSINESS_INITIATED',
        'UNKNOWN',
        'USER_INITIATED',
      ),
      'conversation_types_enum' => array(
        'FREE_ENTRY_POINT',
        'FREE_TIER',
        'REGULAR',
        'UNKNOWN',
      ),
      'dimensions_enum' => array(
        'CONVERSATION_CATEGORY',
        'CONVERSATION_DIRECTION',
        'CONVERSATION_TYPE',
        'COUNTRY',
        'PHONE',
        'UNKNOWN',
      ),
      'granularity_enum' => array(
        'DAILY',
        'HALF_HOUR',
        'MONTHLY',
      ),
      'metric_types_enum' => array(
        'CONVERSATION',
        'COST',
        'UNKNOWN',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/conversation_analytics',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDccConfig(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/dcc_config',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFlows(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/flows',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFlow(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'categories' => 'list<categories_enum>',
      'clone_flow_id' => 'string',
      'clone_template' => 'string',
      'endpoint_uri' => 'string',
      'name' => 'string',
    );
    $enums = array(
      'categories_enum' => array(
        'APPOINTMENT_BOOKING',
        'CONTACT_US',
        'CUSTOMER_SUPPORT',
        'LEAD_GENERATION',
        'OTHER',
        'SIGN_IN',
        'SIGN_UP',
        'SURVEY',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/flows',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessageCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/message_campaigns',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessageTemplatePreviews(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'add_security_recommendation' => 'bool',
      'button_types' => 'list<button_types_enum>',
      'category' => 'category_enum',
      'code_expiration_minutes' => 'unsigned int',
      'languages' => 'list<string>',
    );
    $enums = array(
      'button_types_enum' => array(
        'OTP',
      ),
      'category_enum' => array(
        'AUTHENTICATION',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/message_template_previews',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteMessageTemplates(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'hsm_id' => 'string',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/message_templates',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessageTemplates(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'category' => 'list<category_enum>',
      'content' => 'string',
      'language' => 'list<string>',
      'name' => 'string',
      'name_or_content' => 'string',
      'quality_score' => 'list<quality_score_enum>',
      'status' => 'list<status_enum>',
    );
    $enums = array(
      'category_enum' => WhatsAppBusinessAccountCategoryValues::getInstance()->getValues(),
      'quality_score_enum' => array(
        'GREEN',
        'RED',
        'UNKNOWN',
        'YELLOW',
      ),
      'status_enum' => array(
        'APPROVED',
        'DELETED',
        'DISABLED',
        'IN_APPEAL',
        'LIMIT_EXCEEDED',
        'PAUSED',
        'PENDING',
        'PENDING_DELETION',
        'REJECTED',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/message_templates',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessageTemplate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_category_change' => 'bool',
      'category' => 'category_enum',
      'components' => 'list<map>',
      'cta_url_link_tracking_opted_out' => 'bool',
      'language' => 'string',
      'message_send_ttl_seconds' => 'unsigned int',
      'name' => 'string',
      'sub_category' => 'sub_category_enum',
    );
    $enums = array(
      'category_enum' => WhatsAppBusinessAccountCategoryValues::getInstance()->getValues(),
      'sub_category_enum' => WhatsAppBusinessAccountSubCategoryValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/message_templates',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMigrateMessageTemplate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page_number' => 'unsigned int',
      'source_waba_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/migrate_message_templates',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPhoneNumbers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/phone_numbers',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPhoneNumber(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'cc' => 'string',
      'migrate_phone_number' => 'bool',
      'phone_number' => 'string',
      'preverified_id' => 'string',
      'verified_name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/phone_numbers',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteProductCatalogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'catalog_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/product_catalogs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function createProductCatalog(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'catalog_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
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

  public function getSchedules(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/schedules',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSubscribedApp(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'override_callback_uri' => 'string',
      'verify_token' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/subscribed_apps',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTemplateAnalytics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end' => 'datetime',
      'granularity' => 'granularity_enum',
      'metric_types' => 'list<metric_types_enum>',
      'start' => 'datetime',
      'template_ids' => 'list<string>',
    );
    $enums = array(
      'granularity_enum' => array(
        'DAILY',
      ),
      'metric_types_enum' => array(
        'CLICKED',
        'DELIVERED',
        'READ',
        'SENT',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/template_analytics',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTemplatePerformanceMetrics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'template_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/template_performance_metrics',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUpsertMessageTemplate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'category' => 'category_enum',
      'components' => 'list<map>',
      'languages' => 'list<string>',
      'message_send_ttl_seconds' => 'unsigned int',
      'name' => 'string',
    );
    $enums = array(
      'category_enum' => WhatsAppBusinessAccountCategoryValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/upsert_message_templates',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
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
      new WhatsAppBusinessAccount(),
      'NODE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_enabled_for_insights' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new WhatsAppBusinessAccount(),
      'NODE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
