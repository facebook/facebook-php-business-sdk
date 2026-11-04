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
use FacebookAds\Object\Fields\ProductCatalogProductFeedsFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogProductFeeds extends AbstractCrudObject {

  /**
   * @return ProductCatalogProductFeedsFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogProductFeedsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genpost(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'configuration_source_name' => 'string',
      'country' => 'string',
      'default_currency' => 'string',
      'deletion_enabled' => 'string',
      'delimiter' => 'string',
      'encoding' => 'string',
      'feed_ingestion_type' => 'string',
      'feed_type' => 'string',
      'fields' => 'string',
      'file_name' => 'string',
      'ingestion_source_type' => 'string',
      'item_sub_type' => 'string',
      'migrated_from_feed_id' => 'string',
      'name' => 'string',
      'override_type' => 'string',
      'override_value' => 'string',
      'primary_feed_ids' => 'string',
      'quoted_fields_mode' => 'string',
      'rules' => 'string',
      'schedule' => 'string',
      'selected_override_fields' => 'string',
      'update_schedule' => 'string',
      'uploadable_item_type' => 'string',
      'use_case' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_feeds',
      new ProductCatalogProductFeedsPost(),
      'EDGE',
      ProductCatalogProductFeedsPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
