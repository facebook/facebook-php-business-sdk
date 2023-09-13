<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\Api;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;

class TargetingSearch extends AbstractObject {

  /**
   * @param string $query
   * @param string $type
   * @param string $class
   * @param array $params
   * @param Api $api
   * @return Cursor
   * @throws \InvalidArgumentException
   */
  public static function search(
    $type,
    $class=null,
    $query=null,
    array $params = array(),
    Api $api = null) {

    $api = $api ?: Api::instance();
    if (!$api) {
      throw new \InvalidArgumentException(
        'An Api instance must be provided as argument or '.
        'set as instance in the \FacebookAds\Api');
    }

    $params['type'] = $type;
    $params = array_merge($params, array_filter(array(
      'class' => $class,
      'q' => $query,
    )));

    $response = $api->call('/search', RequestInterface::METHOD_GET, $params);
    return new Cursor($response, new TargetingSearch());
  }
}
