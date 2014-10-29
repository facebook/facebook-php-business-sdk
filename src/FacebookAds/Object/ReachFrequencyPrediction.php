<?php
/**
 * Copyright 2014 Facebook, Inc.
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
use FacebookAds\Object\Fields\ReachFrequencyPredictionFields
  as PredictionFields;
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
   * @var string[]
   */
  protected static $fields = array(
    PredictionFields::ID,
    PredictionFields::ACCOUNT_ID,
    PredictionFields::BUDGET,
    PredictionFields::BUYING_TYPE,
    PredictionFields::CAMPAIGN_ID,
    PredictionFields::CAMPAIGN_TIME_START,
    PredictionFields::CAMPAIGN_TIME_STOP,
    PredictionFields::CURVE_BUDGET_REACH,
    PredictionFields::DESTINATION_ID,
    PredictionFields::EXTERNAL_REACH,
    PredictionFields::EXTERNAL_BUDGET,
    PredictionFields::EXTERNAL_IMPRESSION,
    PredictionFields::EXTERNAL_MAXIMUM_REACH,
    PredictionFields::EXTERNAL_MAXIMUM_IMPRESSION,
    PredictionFields::EXTERNAL_MAXIMUM_BUDGET,
    PredictionFields::EXTERNAL_MINIMUM_REACH,
    PredictionFields::EXTERNAL_MINIMUM_IMPRESSION,
    PredictionFields::EXTERNAL_MINIMUM_BUDGET,
    PredictionFields::END_TIME,
    PredictionFields::FREQUENCY_CAP,
    PredictionFields::IMPRESSION,
    PredictionFields::PREDICTION_MODE,
    PredictionFields::PREDICTION_PROGRESS,
    PredictionFields::TARGET_AUDIENCE_SIZE,
    PredictionFields::TARGET_SPEC,
    PredictionFields::TIME_CREATED,
    PredictionFields::OBJECTIVE,
    PredictionFields::REACH,
    PredictionFields::START_TIME,
    PredictionFields::STATUS,
    PredictionFields::STORY_EVENT_TYPE,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'reachfrequencypredictions';
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
      PredictionFields::PREDICTION_ID => $this->assureId(),
      PredictionFields::PREDICTION_ID_TO_RELEASE => $preciction_to_release,
      PredictionFields::BUDGET => $budget,
      PredictionFields::REACH => $reach,
      PredictionFields::IMPRESSION => $impression,
      PredictionFields::ACTION => ReachFrequencyPredictionActions::RESERVE,
    ));

    $response = $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      $params);

    return new self($response->getContent(), $this->assureParentId());
  }

  /**
   * @return ReachFrequencyPrediction
   */
  public function cancel() {
    $params = array(
      PredictionFields::PREDICTION_ID => $this->assureId(),
      PredictionFields::ACTION => ReachFrequencyPredictionActions::CANCEL,
    );

    $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      $params);

    return $this;
  }

}
