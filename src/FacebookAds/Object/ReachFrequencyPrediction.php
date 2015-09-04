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

use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\Fields\ReachFrequencyPredictionFields;
use FacebookAds\Object\Values\ReachFrequencyPredictionActions;
use FacebookAds\Object\Traits\FieldValidation;

class ReachFrequencyPrediction extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @var int
   */
  const PREDICTION_MODE_BUDGET = 0;

  /**
   * @var int
   */
  const PREDICTION_MODE_REACH = 1;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'reachfrequencypredictions';
  }

  /**
   * @return ReachFrequencyPredictionFields
   */
  public static function getFieldsEnum() {
    return ReachFrequencyPredictionFields::getInstance();
  }

  /**
   * @param int $preciction_to_release
   * @param int $reach
   * @param int $budget
   * @param int $impression
   * @return ReachFrequencyPrediction
   */
  public function reserve(
    $preciction_to_release = null,
    $reach = null,
    $budget = null,
    $impression = null) {
    $params = array_filter(array(
      ReachFrequencyPredictionFields::PREDICTION_ID => $this->assureId(),
      ReachFrequencyPredictionFields::PREDICTION_ID_TO_RELEASE
        => $preciction_to_release,
      ReachFrequencyPredictionFields::BUDGET => $budget,
      ReachFrequencyPredictionFields::REACH => $reach,
      ReachFrequencyPredictionFields::IMPRESSION => $impression,
      ReachFrequencyPredictionFields::ACTION
        => ReachFrequencyPredictionActions::RESERVE,
    ));

    $response = $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      $params);

    return new self($response->getContent()['id'], $this->assureParentId());
  }

  /**
   * @return ReachFrequencyPrediction
   */
  public function cancel() {
    $params = array(
      ReachFrequencyPredictionFields::PREDICTION_ID => $this->assureId(),
      ReachFrequencyPredictionFields::ACTION
        => ReachFrequencyPredictionActions::CANCEL,
    );

    $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      $params);

    return $this;
  }
}
