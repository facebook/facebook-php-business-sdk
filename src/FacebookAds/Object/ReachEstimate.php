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

namespace FacebookAds\Object;

use FacebookAds\Object\Fields\ReachEstimateFields;
use FacebookAds\Object\Traits\FieldValidation;

class ReachEstimate extends AbstractObject {
  use FieldValidation;

  /**
   * @return ReachEstimateFields
   */
  public static function getFieldsEnum() {
    return ReachEstimateFields::getInstance();
  }

  /**
   * @param array $data
   * @return array
   */
  protected function normalizeData(array $data) {
    return array_key_exists('data', $data)
      ? $data['data']
      : $data;
  }

  /**
   * @param array
   * @return $this
   */
  public function setData(array $data) {
    return parent::setData($this->normalizeData($data));
  }

  /**
   * @param array
   * @return $this
   */
  public function setDataWithoutValidation(array $data) {
    return parent::setDataWithoutValidation($this->normalizeData($data));
  }
}
