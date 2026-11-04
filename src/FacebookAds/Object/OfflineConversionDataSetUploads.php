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
use FacebookAds\Object\Fields\OfflineConversionDataSetUploadsFields;
use FacebookAds\Object\Values\OfflineConversionDataSetUploadsGetOrderValues;
use FacebookAds\Object\Values\OfflineConversionDataSetUploadsGetSortByValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class OfflineConversionDataSetUploads extends AbstractCrudObject {

  /**
   * @return OfflineConversionDataSetUploadsFields
   */
  public static function getFieldsEnum() {
    return OfflineConversionDataSetUploadsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'after' => 'string',
      'before' => 'string',
      'date_format' => 'string',
      'end_time' => 'string',
      'fields' => 'string',
      'limit' => 'int',
      'order' => 'order_enum',
      'sort_by' => 'sort_by_enum',
      'start_time' => 'string',
      'upload_tag' => 'string',
    );
    $enums = array(
      'order_enum' => OfflineConversionDataSetUploadsGetOrderValues::getInstance()->getValues(),
      'sort_by_enum' => OfflineConversionDataSetUploadsGetSortByValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/uploads',
      new OfflineConversionDataSetUploadsGet(),
      'EDGE',
      OfflineConversionDataSetUploadsGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
