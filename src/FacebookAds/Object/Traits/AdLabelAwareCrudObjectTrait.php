<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Traits;

use FacebookAds\Api;
use FacebookAds\Http\RequestInterface;

/**
 * @method Api getApi()
 * @method string assureId()
 */
trait AdLabelAwareCrudObjectTrait {

  /**
   * Take ad label ids and format them correctly for the request
   * @param array $adlabel_ids
   * @return array
   */
  protected function formatParams(array $adlabel_ids) {
    foreach ($adlabel_ids as &$adlabel_id) {
      $adlabel_id = array('id' => $adlabel_id);
    }

    return array('adlabels' => $adlabel_ids);
  }

  /**
   * @deprecated use createAdLabel instead
   * @param array $ad_label_ids
   */
  public function addAdLabels(array $ad_label_ids) {
    $this->getApi()->call(
      '/'.$this->assureId().'/adlabels',
      RequestInterface::METHOD_POST,
      $this->formatParams($ad_label_ids));
  }

  /**
   * @deprecated use deleteAdLabels instead
   * @param array $ad_label_ids
   */
  public function removeAdLabels(array $ad_label_ids) {
    $this->getApi()->call(
      '/'.$this->assureId().'/adlabels',
      RequestInterface::METHOD_DELETE,
      $this->formatParams($ad_label_ids));
  }
}
