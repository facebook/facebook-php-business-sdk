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

namespace FacebookAdsTest\Http\Adapter;

use FacebookAds\Exception\Exception;
use FacebookAds\Http\Adapter\Curl\CurlInterface;
use FacebookAds\Http\Adapter\CurlAdapter;
use FacebookAds\Http\Client;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use \PHPUnit_Framework_MockObject_Builder_InvocationMocker as Mock;

class CurlAdapterTest extends AbstractAdapterTest {

  /**
   * @param Client $client
   * @return CurlAdapter
   */
  protected function createAdapter($client = null) {
    return new CurlAdapter($client ?: new Client(), $this->createCurlMock());
  }

  public function testGetters() {
    parent::testGetters();
    $this->assertTrue(
      $this->createAdapter()->getCurl() instanceof CurlInterface);
  }

  public function testRequest() {
    $adapter = $this->createAdapter();

    /** @var Mock|CurlInterface $curl */
    $curl = $adapter->getCurl();
    $curl->method('preparePostFileField')->willReturn('file');
    $curl->method('exec')->willReturn("HTTP/1.1 200 OK\nX-header: value");

    $headers = $this->createHeadersMock();
    $this->makeMockIterable($headers, array(
      'X-custom-header' => 'header value',
    ));

    $query = $this->createParametersMock(array(
      'param' => 'value',
    ));

    // HTTP_GET
    $body = $this->createParametersMock();
    $this->makeMockIterable($body);

    $files = $this->createParametersMock();
    $this->makeMockIterable($files);

    $request = $this->createRequestMock();
    $request->method('getMethod')->willReturn(RequestInterface::METHOD_GET);
    $request->method('getHeaders')->willReturn($headers);
    $request->method('getQueryParams')->willReturn($query);
    $request->method('getBodyParams')->willReturn($body);
    $request->method('getFileParams')->willReturn($files);
    $response = $adapter->sendRequest($request);
    $this->assertTrue($response instanceof ResponseInterface);

    // HTTP_POST with files
    $body = $this->createParametersMock();
    $this->makeMockIterable($body, array(
      'file' => './filepath',
    ));

    $files = $this->createParametersMock();
    $this->makeMockIterable($files, array(
      'field' => 'value',
    ));

    $request = $this->createRequestMock();
    $request->method('getMethod')->willReturn(RequestInterface::METHOD_POST);
    $request->method('getHeaders')->willReturn($headers);
    $request->method('getQueryParams')->willReturn($query);
    $request->method('getBodyParams')->willReturn($body);
    $request->method('getFileParams')->willReturn($files);

    $response = $adapter->sendRequest($request);
    $this->assertTrue($response instanceof ResponseInterface);

    // HTTP_DELETE
    $body = $this->createParametersMock();
    $this->makeMockIterable($body);

    $files = $this->createParametersMock();
    $this->makeMockIterable($files);

    $request = $this->createRequestMock();
    $request->method('getMethod')->willReturn(RequestInterface::METHOD_DELETE);
    $request->method('getHeaders')->willReturn($headers);
    $request->method('getQueryParams')->willReturn($query);
    $request->method('getBodyParams')->willReturn($body);
    $request->method('getFileParams')->willReturn($files);

    $response = $adapter->sendRequest($request);
    $this->assertTrue($response instanceof ResponseInterface);

    // Force Curl Error
    /** @var CurlInterface|Mock $curl */
    $curl = $adapter->getCurl();
    $curl->method('errno')->willReturn(CURLE_SSL_CONNECT_ERROR);
    $curl->method('error')->willReturn('Mocked Curl Error');
    $body = $this->createParametersMock();
    $this->makeMockIterable($body);

    $files = $this->createParametersMock();
    $this->makeMockIterable($files);

    $request = $this->createRequestMock();
    $request->method('getMethod')->willReturn(RequestInterface::METHOD_DELETE);
    $request->method('getHeaders')->willReturn($headers);
    $request->method('getQueryParams')->willReturn($query);
    $request->method('getBodyParams')->willReturn($body);
    $request->method('getFileParams')->willReturn($files);

    $e = null;
    try {
      $adapter->sendRequest($request);
    } catch (Exception $e) {}
    $this->assertTrue($e !== null);
  }
}
