<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\Http\RequestInterface;

abstract class AbstractArchivableCrudObject extends AbstractCrudObject {

  /**
   * @var string
   */
  const STATUS_PARAM_NAME = 'status';

  /**
   * @var string
   */
  const STATUS_ACTIVE = 'ACTIVE';

  /**
   * @var string
   */
  const STATUS_PAUSED = 'PAUSED';

  /**
   * @var string
   */
  const STATUS_DELETED = 'DELETED';

  /**
   * @var string
   */
  const STATUS_ARCHIVED = 'ARCHIVED';

  /**
   * @return string
   */
  public function getStatusParamName() {
    return self::STATUS_PARAM_NAME;
  }

  /**
   * Archive this object
   *
   * @deprecated use api_update instead
   * @param array $params
   * @return void
   */
  public function archive(array $params = array()) {
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_POST,
      array_merge($params, array(
        $this->getStatusParamName() => static::STATUS_ARCHIVED)));
  }

  /**
   * Delete this object
   *
   * @deprecated use api_update instead
   * @param array $params
   * @return void
   */
  public function delete(array $params = array()) {
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_POST,
      array_merge($params, array(
        $this->getStatusParamName() => static::STATUS_DELETED)));
  }
}
