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

use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;

class AsyncJobReportStats extends AbstractAsyncJobObject {

  /**
   * @return string
   */
  protected function getCreateIdFieldName() {
    return 'id';
  }

  /**
   * @return string
   */
  public function getEndpoint() {
    return 'reportstats';
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getResult(
    array $fields = array(), array $params = array()) {
    $fields = implode(',', $fields ?: static::getDefaultReadFields());
    if ($fields) {
      $params['fields'] = $fields;
    }

    $params['report_run_id'] = $this->assureId();

    $response = $this->getApi()->call(
      '/' . $this->assureParentId() . '/reportstats',
      RequestInterface::METHOD_GET,
      $params);

    $prototype = new AdStats(null, $this->{static::FIELD_ID}, $this->getApi());

    return new Cursor($response, $prototype);
  }
}
