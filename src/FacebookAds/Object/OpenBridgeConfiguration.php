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
use FacebookAds\Object\Fields\OpenBridgeConfigurationFields;
use FacebookAds\Object\Values\OpenBridgeConfigurationCapiPublishingStateValues;
use FacebookAds\Object\Values\OpenBridgeConfigurationEventEnrichmentAdvertiserStateValues;
use FacebookAds\Object\Values\OpenBridgeConfigurationEventEnrichmentMetaStateValues;
use FacebookAds\Object\Values\OpenBridgeConfigurationEventEnrichmentStateValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class OpenBridgeConfiguration extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'openbridge_configurations';
  }

  /**
   * @return OpenBridgeConfigurationFields
   */
  public static function getFieldsEnum() {
    return OpenBridgeConfigurationFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CapiPublishingState'] = OpenBridgeConfigurationCapiPublishingStateValues::getInstance()->getValues();
    $ref_enums['EventEnrichmentAdvertiserState'] = OpenBridgeConfigurationEventEnrichmentAdvertiserStateValues::getInstance()->getValues();
    $ref_enums['EventEnrichmentMetaState'] = OpenBridgeConfigurationEventEnrichmentMetaStateValues::getInstance()->getValues();
    $ref_enums['EventEnrichmentState'] = OpenBridgeConfigurationEventEnrichmentStateValues::getInstance()->getValues();
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
      new OpenBridgeConfiguration(),
      'NODE',
      OpenBridgeConfiguration::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'active' => 'bool',
      'blocked_event_types' => 'list<string>',
      'blocked_websites' => 'list<string>',
      'capi_publishing_state' => 'capi_publishing_state_enum',
      'cloud_provider' => 'string',
      'cloud_region' => 'string',
      'destination_id' => 'string',
      'endpoint' => 'string',
      'event_enrichment_advertiser_state' => 'event_enrichment_advertiser_state_enum',
      'event_enrichment_meta_state' => 'event_enrichment_meta_state_enum',
      'event_enrichment_state' => 'event_enrichment_state_enum',
      'fallback_domain' => 'string',
      'host_business_id' => 'unsigned int',
      'instance_id' => 'string',
      'instance_version' => 'string',
      'is_sgw_instance' => 'bool',
      'is_sgw_pixel_from_meta_pixel' => 'bool',
      'partner_name' => 'string',
      'sgw_account_id' => 'string',
      'sgw_instance_url' => 'string',
      'sgw_pixel_id' => 'unsigned int',
    );
    $enums = array(
      'capi_publishing_state_enum' => OpenBridgeConfigurationCapiPublishingStateValues::getInstance()->getValues(),
      'event_enrichment_advertiser_state_enum' => OpenBridgeConfigurationEventEnrichmentAdvertiserStateValues::getInstance()->getValues(),
      'event_enrichment_meta_state_enum' => OpenBridgeConfigurationEventEnrichmentMetaStateValues::getInstance()->getValues(),
      'event_enrichment_state_enum' => OpenBridgeConfigurationEventEnrichmentStateValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new OpenBridgeConfiguration(),
      'NODE',
      OpenBridgeConfiguration::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
