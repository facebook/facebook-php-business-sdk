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

abstract class AbstractArchivableCrudObject extends AbstractCrudObject {

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
  public abstract function getStatusFieldName();

  /**
   * Archive this object
   *
   * @param array $params
   * @return void
   */
  public function archive(array $params = array()) {
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_POST,
      array_merge($params, array(
        $this->getStatusFieldName() => static::STATUS_ARCHIVED)));
  }

  /**
   * Delete this object
   *
   * @param array $params
   * @return void
   */
  public function delete(array $params = array()) {
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_POST,
      array_merge($params, array(
        $this->getStatusFieldName() => static::STATUS_DELETED)));
  }
}
