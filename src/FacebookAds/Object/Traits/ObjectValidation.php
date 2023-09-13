<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Traits;

/**
 * @deprecated
 * This trait will be deprecated
 * @property array $changedFields
 */
trait ObjectValidation {

  /**
   * @param array $params
   * @return $this
   */
  abstract public function save(array $params = array());

  /**
   * @param array $params
   * @return $this
   * @throws \InvalidArgumentException
   */
  public function validate(array $params = array()) {
    $changed_fields = $this->changedFields;
    $validate_flag = array(
      'execution_options' => array('validate_only')
    );
    $this->save(array_merge($params, $validate_flag));
    $this->changedFields = $changed_fields;
    return $this;
  }
}
