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

namespace FacebookAdsTest;

use FacebookAds\Cursor;

class CursorDegradationTest extends CursorTest {

  /**
   * @return string
   */
  protected function getUniquePageId() {
    return (string) (microtime(true) * 1000000);
  }

  /**
   * @return array
   */
  protected function createSampleResponseContent() {
    $url_fmt = $this->createUnparameterizedUrl()
      .'?offset=%s';

    $content = parent::createSampleResponseContent();
    $content['paging'] = array(
      'next' => sprintf($url_fmt, $this->getUniquePageId()),
      'previous' => sprintf($url_fmt, $this->getUniquePageId()),
    );

    return $content;
  }

  public function testRequestParamReset() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);
    $params = $cursor->getLastResponse()->getRequest()->getQueryParams();
    $params->offsetSet('offset', $this->getUniquePageId());

    $cursor->fetchAfter();
    $params2 = $cursor->getLastResponse()->getRequest()->getQueryParams();

    $this->assertNotEquals(
      $params->offsetGet('offset'), $params2->offsetGet('offset'));
  }

  public function testGetters() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);

    $this->assertTrue($response === $cursor->getResponse());
    $this->assertTrue($response === $cursor->getLastResponse());
    $this->assertNull($cursor->getAfter());
    $this->assertNull($cursor->getBefore());
  }
}
