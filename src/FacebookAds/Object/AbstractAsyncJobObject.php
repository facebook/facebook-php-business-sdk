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
use FacebookAds\Object\Traits\CannotUpdate;

abstract class AbstractAsyncJobObject extends AbstractCrudObject {
  use CannotUpdate;

  /**
   * @return string
   */
  abstract protected function getCreateIdFieldName();

  /**
   * @return string
   */
  protected function getCompletitionPercentageFieldName() {
    return 'async_percent_completion';
  }

  /**
   * Create function for the object.
   *
   * @param array $params Additional parameters to include in the request
   * @return $this
   * @throws \Exception
   */
  public function create(array $params = array()) {
    if ($this->data[static::FIELD_ID]) {
      throw new \Exception("Object has already an ID");
    }

    $response = $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      array_merge($this->exportData(), $params));
    $this->clearHistory();
    $data = $response->getContent();
    $this->data[static::FIELD_ID]
      = (string) $data[$this->getCreateIdFieldName()];

    return $this;
  }

  /**
   * This method won't fetch new data, you are required to call read() before
   * @return bool
   */
  public function isComplete() {
    return $this->{$this->getCompletitionPercentageFieldName()} === 100;
  }

  /**
   * @param array $fields
   * @param array $params
   *
   * @return mixed
   */
  abstract public function getResult(
    array $fields = array(), array $params = array());
}
