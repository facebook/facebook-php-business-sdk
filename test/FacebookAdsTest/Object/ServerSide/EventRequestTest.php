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

namespace FacebookAdsTest\Object\ServerSide;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Api;
use FacebookAds\ApiConfig;
use FacebookAds\Object\AbstractObject;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\EventResponse;
use FacebookAds\Object\ServerSide\HttpServiceClientConfig;
use FacebookAds\Object\ServerSide\Util;
use Mockery as m;

class EventRequestTest extends AbstractUnitTestCase {
  protected function setUp(): void {
    $this->expected_pixel_id = 'pixel-1000';
    $this->expected_url = 'https://graph.facebook.com/v'
      . ApiConfig::APIVersion
      . '/'
      . $this->expected_pixel_id
      . '/events';
    $this->expected_headers = array(
      'User-Agent' => 'fbbizsdk-php-v' . ApiConfig::SDKVersion,
      'Accept-Encoding' => '*',
    );
    $this->expected_access_token = 'a-test-token';
    $this->expected_curl_options = array(
      CURLOPT_CONNECTTIMEOUT => 10,
      CURLOPT_TIMEOUT => 60,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER => true,
      CURLOPT_CAINFO => Util::getCaBundlePath(),
    );
    HttpServiceClientConfig::getInstance()->setAccessToken(null);
    HttpServiceClientConfig::getInstance()->setClient(null);
    HttpServiceClientConfig::getInstance()->setAppsecret(null);
    Api::init(null, null, null, false);
  }

  protected function tearDown(): void {
    m::close();
  }

  public function testBuilder() {
    $event = new Event(array('event_name' => 'event-123'));
    $expected = array(
      'data' => array(array('event_name' => $event['event_name'])),
      'test_event_code' => 'test-event-code-0',
      'partner_agent' => 'partner-agent-1',
      'namespace_id' => 'namespace-id-2',
      'upload_id' => 'upload-id-3',
      'upload_tag' => 'upload-tag-4',
      'upload_source' => 'upload-source-5',
    );
    $event_request = (new EventRequest('pixel-id'))
      ->setEvents(array($event))
      ->setTestEventCode($expected['test_event_code'])
      ->setPartnerAgent($expected['partner_agent'])
      ->setNamespaceId($expected['namespace_id'])
      ->setUploadId($expected['upload_id'])
      ->setUploadTag($expected['upload_tag'])
      ->setUploadSource($expected['upload_source']);

    $this->assertEquals($expected, $event_request->normalize());
  }

  public function testConstructor() {
    $event = new Event(array('event_name' => 'event-123'));
    $expected_event = array('data' => [array('event_name' => $event['event_name'])]);
    $state = array(
      'test_event_code' => 'test-event-code-0',
      'partner_agent' => 'partner-agent-1',
      'namespace_id' => 'namespace-id-2',
      'upload_id' => 'upload-id-3',
      'upload_tag' => 'upload-tag-4',
      'upload_source' => 'upload-source-5',
    );
    $data = array_merge(array('events' => array($event)), $state);
    $expected = array_merge($state, $expected_event);
    $event_request = new EventRequest('pixel-id', $data);

    $this->assertEquals($expected, $event_request->normalize());
  }

  public function testDefaultHttpService() {
    $mock_ads_pixel = m::mock('overload:FacebookAds\Object\AdsPixel');
    $mock_ads_pixel
      ->shouldReceive('__construct')
      ->once()
      ->with($this->expected_pixel_id);
    $event_response_contents = array('data' => array('events_received' => 1));
    $expected_event_response = new EventResponse($event_response_contents);
    $create_response_mock = $this->createMock(AbstractObject::class);
    $create_response_mock
      ->expects($this->once())
      ->method('exportAllData')
      ->willReturn($event_response_contents);
    $event_request = new EventRequest($this->expected_pixel_id);
    $event_request->setEvents(array(new Event(array('event_name' => 'event-123'))));
    $mock_ads_pixel
      ->shouldReceive('createEvent')
      ->once()
      ->with(array(), $event_request->normalize())
      ->andReturn($create_response_mock);
    $actual_event_response = $event_request->execute();

    $this->assertEquals($expected_event_response, $actual_event_response);
  }

  public function testSetHttpClient() {
    $appsecret = 'appsecret-012';
    Api::init(null, $appsecret, $this->expected_access_token, false);
    $mock_client = m::mock('FacebookAdsTest\Object\ServerSide\TestHelpers\FakeHttpService');
    $expected_event_response = new EventResponse(
      array(
        'data' => array('events_received' => 1)
      )
    );
    $event_request = new EventRequest($this->expected_pixel_id);
    $event_request->setEvents(array(new Event(array('event_name' => 'event-123'))));
    $event_request->setHttpClient($mock_client);
    $mock_client
      ->shouldReceive('executeRequest')
      ->once()
      ->with(
        $this->expected_url,
        'POST',
        $this->expected_curl_options,
        $this->expected_headers,
        $this->normalize_and_merge($event_request, $this->expected_access_token, $appsecret)
      )
      ->andReturn($expected_event_response);
    $actual_event_response = $event_request->execute();

    $this->assertEquals($expected_event_response, $actual_event_response);
  }

  public function testSetHttpClientClientConfig() {
    $mock_client = m::mock('FacebookAdsTest\Object\ServerSide\TestHelpers\FakeHttpService');
    $expected_event_response = new EventResponse(
      array(
        'data' => array('events_received' => 1)
      )
    );
    $event_request = new EventRequest($this->expected_pixel_id);
    $event_request->setEvents(array(new Event(array('event_name' => 'event-123'))));
    $mock_client
      ->shouldReceive('executeRequest')
      ->once()
      ->with(
        $this->expected_url,
        'POST',
        $this->expected_curl_options,
        $this->expected_headers,
        $this->normalize_and_merge($event_request, $this->expected_access_token, null)
      )
      ->andReturn($expected_event_response);
    HttpServiceClientConfig::getInstance()->setClient($mock_client);
    HttpServiceClientConfig::getInstance()->setAccessToken($this->expected_access_token);
    $actual_event_response = $event_request->execute();

    $this->assertEquals($expected_event_response, $actual_event_response);
  }

  public function testEventRequestHttpClientOverridesClientConfig() {
    $appsecret = 'appsecret-012';
    Api::init(null, 'a-different-app-secret', 'a-different-access-token', false);
    $mock_used_client = m::mock('FacebookAdsTest\Object\ServerSide\TestHelpers\AnotherHttpService');
    $mock_unused_client = m::mock('FacebookAdsTest\Object\ServerSide\TestHelpers\AnotherHttpService');
    $expected_event_response = new EventResponse(
      array(
        'data' => array('events_received' => 1)
      )
    );
    $event_request = new EventRequest($this->expected_pixel_id);
    $event_request->setEvents(array(new Event(array('event_name' => 'event-123'))));
    $event_request->setHttpClient($mock_used_client);
    $mock_used_client
      ->shouldReceive('executeRequest')
      ->once()
      ->with(
        $this->expected_url,
        'POST',
        $this->expected_curl_options,
        $this->expected_headers,
        $this->normalize_and_merge($event_request, $this->expected_access_token, $appsecret)
      )
      ->andReturn($expected_event_response);
    HttpServiceClientConfig::getInstance()->setClient($mock_unused_client);
    HttpServiceClientConfig::getInstance()->setAccessToken($this->expected_access_token);
    HttpServiceClientConfig::getInstance()->setAppsecret($appsecret);
    $actual_event_response = $event_request->execute();

    $this->assertEquals($expected_event_response, $actual_event_response);
  }

  // Test helper functions

  protected function normalize_and_merge($event_request, $access_token, $appsecret) {
    $normalized_merged = $event_request->normalize();
    $normalized_merged['access_token'] = $access_token;
    if ($appsecret != null) {
      $normalized_merged['appsecret_proof'] = Util::getAppsecretProof($access_token, $appsecret);
    }
    return $normalized_merged;
  }
}
