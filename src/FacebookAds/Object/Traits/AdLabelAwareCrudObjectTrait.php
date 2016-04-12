<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
