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
use FacebookAds\Object\Fields\AdAccountAdVideosFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccountAdVideos extends AbstractCrudObject {

  /**
   * @return AdAccountAdVideosFields
   */
  public static function getFieldsEnum() {
    return AdAccountAdVideosFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_id' => 'int',
      'after' => 'string',
      'before' => 'string',
      'date_format' => 'string',
      'fields' => 'string',
      'filtering' => 'string',
      'has_integrity_violation' => 'bool',
      'limit' => 'int',
      'max_aspect_ratio' => 'float',
      'maxheight' => 'int',
      'maxlength' => 'int',
      'maxwidth' => 'int',
      'min_aspect_ratio' => 'float',
      'minheight' => 'int',
      'minlength' => 'int',
      'minwidth' => 'int',
      'originalvideo' => 'bool',
      'summary' => 'string',
      'title' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/advideos',
      new AdAccountAdVideosGet(),
      'EDGE',
      AdAccountAdVideosGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
