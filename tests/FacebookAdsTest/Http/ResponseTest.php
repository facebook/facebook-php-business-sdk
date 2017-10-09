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

namespace FacebookAdsTest\Http;

use FacebookAds\Http\Headers;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\Response;
use FacebookAdsTest\AbstractUnitTestCase;

class ResponseTest extends AbstractUnitTestCase {

  /**
   * @return Response
   */
  protected function createResponse() {
    return new Response();
  }

  public function testRequest() {
    $response = $this->createResponse();
    $request = $this->createRequestMock();
    $response->setRequest($request);
    $request_mirror = $response->getRequest();
    $this->assertTrue($request_mirror instanceof RequestInterface);
    $this->assertTrue($request_mirror === $request);
  }

  public function testStatusCode() {
    $response = $this->createResponse();
    $response->setStatusCode(200);
    $this->assertEquals(200, $response->getStatusCode());
  }

  public function testHeaders() {
    $response = $this->createResponse();
    $headers = $this->createHeadersMock();
    $response->setHeaders($headers);
    $headers_mirror = $response->getHeaders();
    $this->assertTrue($headers_mirror instanceof Headers);
    $this->assertTrue($headers_mirror === $response->getHeaders());

    // Default initialization
    $response = $this->createResponse();
    $headers_mirror = $response->getHeaders();
    $this->assertTrue($headers instanceof Headers);
    $this->assertTrue($headers_mirror === $response->getHeaders());
  }

  public function testBodyContent() {
    $response = $this->createResponse();
    $body = '{"data":[]}';
    $response->setBody($body);
    $this->assertEquals($body, $response->getBody());
    $this->assertEquals(array('data' => array()), $response->getContent());
  }
}
