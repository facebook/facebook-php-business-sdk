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

use FacebookAds\Api;
use FacebookAds\Http\Client;
use FacebookAds\Http\Headers;
use FacebookAds\Http\Parameters;
use FacebookAds\Http\Request;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Http\Util;
use FacebookAdsTest\AbstractUnitTestCase;

class RequestTest extends AbstractUnitTestCase {

  /**
   * @return Request
   */
  protected function createRequest() {
    return new Request($this->createClientMock());
  }

  public function testGetters() {
    $client = $this->createClientMock();
    $request = new Request($client);

    $this->assertTrue($request->getClient() instanceof Client);
    $this->assertTrue($client === $request->getClient());
  }

  public function testProtocol() {
    $request = $this->createRequest();
    $protocol = Request::PROTOCOL_HTTP;
    $request->setProtocol($protocol);
    $this->assertEquals($protocol, $request->getProtocol());
  }

  public function testDomain() {
    $request = $this->createRequest();
    $domain = 'not.facebook.com';
    $request->setDomain($domain);
    $this->assertEquals($domain, $request->getDomain());

    // Default initialization
    $client = $this->createClientMock();
    $client->method('getDefaultGraphBaseDomain')
      ->willReturn('not.facebook.com');
    $request = new Request($client);
    $domain = $request->getDomain();
    $this->assertRegExp('/.+\.not\.facebook\.com/', $domain);
    $this->assertEquals($domain, $request->getDomain());

    // Partially set
    $client = $this->createClientMock();
    $client->method('getDefaultGraphBaseDomain')
      ->willReturn('probably.not.facebook.com');
    $request = new Request($client);
    $request->setLastLevelDomain('most');
    $domain = $request->getDomain();
    $this->assertEquals('most.probably.not.facebook.com', $domain);
    $this->assertEquals($domain, $request->getDomain());
  }

  public function testHeaders() {
    $client = $this->createClientMock();
    $request = new Request($client);
    $headers = $this->createHeadersMock();
    $client->setDefaultRequestHeaders($headers);
    $request->setHeaders($headers);
    $headers_mirror = $request->getHeaders();
    $this->assertTrue($headers_mirror instanceof Headers);
    $this->assertTrue($headers_mirror === $request->getHeaders());

    // Default initialization
    $headers = new Headers();
    $client = $this->createClientMock();
    $client->method('getDefaultRequestHeaders')->willReturn($headers);
    $request = new Request($client);
    $headers_mirror = $request->getHeaders();
    $this->assertTrue($headers_mirror instanceof Headers);
    $this->assertFalse($headers === $request->getHeaders());
    $this->assertTrue($headers_mirror === $request->getHeaders());
  }

  public function testMethod() {
    $request = $this->createRequest();
    $method = Request::METHOD_GET;
    $request->setMethod($method);
    $this->assertEquals($method, $request->getMethod());
  }

  public function testPath() {
    $request = $this->createRequest();
    $path = '/node/edge';
    $request->setPath($path);
    $this->assertEquals($path, $request->getPath());
  }

  public function testGraphVersion() {
    $request = $this->createRequest();
    $graph_version = Api::VERSION;
    $request->setGraphVersion($graph_version);
    $this->assertEquals($graph_version, $request->getGraphVersion());
  }

  public function testQueryParams() {
    $request = $this->createRequest();
    $parameters = $this->createParametersMock();
    $request->setQueryParams($parameters);
    $this->assertTrue($request->getQueryParams() instanceof Parameters);
    $this->assertTrue($parameters === $request->getQueryParams());

    // Default initialization
    $request = $this->createRequest();
    $parameters = $request->getQueryParams();
    $this->assertTrue($parameters instanceof Parameters);
    $this->assertTrue($parameters === $request->getQueryParams());
  }

  public function testBodyParams() {
    $request = $this->createRequest();
    $parameters = $this->createParametersMock();
    $request->setBodyParams($parameters);
    $this->assertTrue($request->getBodyParams() instanceof Parameters);
    $this->assertTrue($parameters === $request->getBodyParams());

    // Default initialization
    $request = $this->createRequest();
    $parameters = $request->getBodyParams();
    $this->assertTrue($parameters instanceof Parameters);
    $this->assertTrue($parameters === $request->getBodyParams());
  }

  public function testFileParams() {
    $request = $this->createRequest();
    $parameters = $this->createParametersMock();
    $request->setFileParams($parameters);
    $this->assertTrue($request->getFileParams() instanceof Parameters);
    $this->assertTrue($parameters === $request->getFileParams());

    // Default initialization
    $request = $this->createRequest();
    $parameters = $request->getFileParams();
    $this->assertTrue($parameters instanceof Parameters);
    $this->assertTrue($parameters === $request->getFileParams());
  }

  public function testClone() {
    $request = $this->createRequest();
    $query_params = $this->createParametersMock();
    $request->setFileParams($query_params);
    $body_params = $this->createParametersMock();
    $request->setBodyParams($body_params);
    $file_params = $this->createParametersMock();
    $request->setFileParams($file_params);

    $clone = $request->createClone();
    $this->assertFalse($query_params === $clone->getQueryParams());
    $this->assertFalse($body_params === $clone->getBodyParams());
    $this->assertFalse($file_params === $clone->getFileParams());
  }

  public function testUrlCustomArgSeparator(){
      $separator = ini_get('arg_separator.output');
      ini_set('arg_separator.output', '&amp;');
      $this->testUrl();
      ini_set('arg_separator.output', $separator);
  }

  /**
   * @depends testProtocol
   * @depends testDomain
   * @depends testGraphVersion
   * @depends testPath
   * @depends testQueryParams
   */
  public function testUrl() {
    $client = $this->createClientMock();
    $client->method('getDefaultGraphBaseDomain')
      ->willReturn(Client::DEFAULT_GRAPH_BASE_DOMAIN);
    $request = new Request($client);
    $request->setGraphVersion('2.2');
    $request->setPath('/node/edge');
    $url = $request->getUrl();
    $this->assertEquals(
      parse_url($url, PHP_URL_SCHEME).'://', $request->getProtocol());
    $this->assertEquals(parse_url($url, PHP_URL_HOST), $request->getDomain());
    $this->assertEquals(
      parse_url($url, PHP_URL_PATH),
      sprintf("/v%s%s", $request->getGraphVersion(), $request->getPath()));
    $this->assertNull(parse_url($url, PHP_URL_QUERY));

    // With query
    $params = array(
      'sdk' => 'PHP',
      'names' => 'abc,def',
    );
    $request->setQueryParams(new Parameters($params));
    $url = $request->getUrl();
    $parsed_query = Util::parseUrlQuery(parse_url($url, PHP_URL_QUERY));
    $this->assertEquals(
      $parsed_query, $request->getQueryParams()->getArrayCopy());
  }

  public function testExecute() {
    $response = $this->createResponseMock();
    $client = $this->createClientMock();
    $client->method('sendRequest')->willReturn($response);
    $request = new Request($client);
    $response_mirror = $request->execute();
    $this->assertTrue($response_mirror instanceof ResponseInterface);
    $this->assertTrue($response_mirror === $response);
  }
}
