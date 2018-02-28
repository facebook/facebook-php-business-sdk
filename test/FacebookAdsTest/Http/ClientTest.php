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
use FacebookAds\Http\Adapter\AdapterInterface;
use FacebookAds\Http\Adapter\CurlAdapter;
use FacebookAds\Http\Client;
use FacebookAds\Http\Exception\EmptyResponseException;
use FacebookAds\Http\Exception\RequestException;
use FacebookAds\Http\Headers;
use FacebookAds\Http\Request;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\Response;
use FacebookAds\Http\ResponseInterface;
use FacebookAdsTest\AbstractUnitTestCase;
use \PHPUnit_Framework_MockObject_Builder_InvocationMocker as Mock;

class ClientTest extends AbstractUnitTestCase {

  /**
   * @param mixed $response_content
   * @return Mock|AdapterInterface
   */
  protected function createMockChain($response_content) {
    $adapter = $this->createAdapterMock();
    $response = $this->createResponseMock();
    $response->method('getContent')->willReturn($response_content);
    $adapter->method('sendRequest')->willReturn($response);

    return $adapter;
  }

  public function testPrototypes() {
    $client = new Client();

    $request_proto = $this->createRequestMock();
    $request_proto->method('createClone')->willReturnSelf();
    $client->setRequestPrototype($request_proto);
    $this->assertSame($request_proto, $client->getRequestPrototype());
    $this->assertInstanceOf(
        'FacebookAds\Http\RequestInterface',
        $client->createRequest()
    );

    $response_proto = $this->createResponseMock();
    $client->setResponsePrototype($response_proto);
    $this->assertSame($response_proto, $client->getResponsePrototype());
    $this->assertInstanceOf('FacebookAds\Http\ResponseInterface', $client->createResponse());

    // Default initialization
    $client = new Client();
    $this->assertInstanceOf(
        'FacebookAds\Http\Request',
        $client->getRequestPrototype()
    );
    $this->assertInstanceOf(
        'FacebookAds\Http\Response',
        $client->getResponsePrototype()
    );
  }

  public function testHeaders() {
    $headers = new Headers();
    $this->assertInstanceOf('IteratorAggregate', $headers);
    $this->assertInstanceOf('Traversable', $headers);
    $this->assertInstanceOf('ArrayAccess', $headers);
    $this->assertInstanceOf('Serializable', $headers);
    $this->assertInstanceOf('Countable', $headers);

    $client = new Client();
    $client->setDefaultRequestHeaders($headers);
    $this->assertSame($headers, $client->getDefaultRequestHeaderds());

    // Default initialization
    $client = new Client();
    $headers = $client->getDefaultRequestHeaderds();
    $this->assertInstanceOf('FacebookAds\Http\Headers', $headers);
    $this->assertSame($headers, $client->getDefaultRequestHeaderds());
    $this->assertArrayHasKey('User-Agent', $headers);
    $this->assertEquals('fb-php-ads-'.Api::VERSION, $headers['User-Agent']);
  }

  public function testDomain() {
    $client = new Client();
    $this->assertEquals(
      Client::DEFAULT_GRAPH_BASE_DOMAIN, $client->getDefaultGraphBaseDomain());

    $domain = 'not.facebook.com';
    $client->setDefaultGraphBaseDomain($domain);
    $this->assertEquals($domain, $client->getDefaultGraphBaseDomain());
  }

  public function testAdapter() {
    $client = new Client();

    $adapter = $this->createAdapterMock();
    $client->setAdapter($adapter);
    $this->assertInstanceOf(
        'FacebookAds\Http\Adapter\AdapterInterface',
         $client->getAdapter()
     );
    $this->assertSame($adapter, $client->getAdapter());

    // Default initialization
    $client = new Client();
    $this->assertInstanceOf(
        'FacebookAds\Http\Adapter\CurlAdapter',
        $client->getAdapter()
    );
  }

  public function testCaBundlePath() {
    $client = new Client();
    $path = '/tmp/dont_care_if_exists';
    $client->setCaBundlePath($path);
    $this->assertEquals($path, $client->getCaBundlePath());

    // Default initialization
    $client = new Client();
    $this->assertNotFalse($client->getCaBundlePath());
    $this->assertFileExists($client->getCaBundlePath());
  }

  public function testSendRequest() {
    $client = new Client();

    // Empty response > json_decode('') = null
    $client->setAdapter($this->createMockChain(null));

    $exception_catched = false;
    try {
      $client->sendRequest($this->createRequestMock());
    } catch (EmptyResponseException $e) {
      $exception_catched = true;
    }
    $this->assertTrue($exception_catched);

    // Error payload
    $client->setAdapter($this->createMockChain(array(
      'error' => array(
        'message' => 'Stub Server Error Message',
        'type' => 'FacebookApiException',
        'code' => 1,
      ),
    )));

    $exception_catched = false;
    try {
      $client->sendRequest($this->createRequestMock());
    } catch (EmptyResponseException $e) {
      $this->fail("Catched wrong RequestException");
    } catch (RequestException $e) {
      $exception_catched = true;
    }
    $this->assertTrue($exception_catched);

    // Success
    $client->setAdapter($this->createMockChain(array(
      'id' => 4,
    )));

    $response = $client->sendRequest($this->createRequestMock());
    $this->assertInstanceOf('FacebookAds\Http\ResponseInterface', $response);
    $content = $response->getContent();
    $this->assertArrayHasKey('id', $content);
    $this->assertEquals($content['id'], 4);
  }
}
