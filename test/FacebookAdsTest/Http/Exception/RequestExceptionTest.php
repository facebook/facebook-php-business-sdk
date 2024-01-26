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

namespace FacebookAdsTest\Http\Exception;

use FacebookAds\Http\Exception\RequestException;
use FacebookAds\Http\Response;
use FacebookAdsTest\AbstractUnitTestCase;

class RequestExceptionTest extends AbstractUnitTestCase {

  public function testGetters() {
    $data = array(
      'error' => array(
        'message' => 'Stub Server Error Message',
        'type' => 'FacebookApiException',
        'code' => 1,
        'error_data' => array(
          'blame_field_specs' => array(
            array('mandatory_field'),
            array('field_with_malformed_value'),
          ),
        ),
        'error_subcode' => 1,
        'is_transient' => false,
        'error_user_title' => 'Just a test',
        'error_user_msg' => 'Let\'s avoid alarmism',
      ),
    );
    $status_code = 400;
    $response = new Response();
    $response->setBody(json_encode($data));
    $response->setStatusCode($status_code);
    $e = new RequestException($response);
    $this->assertEquals($status_code, $e->getHttpStatusCode());
    $this->assertEquals(
      $data['error']['error_subcode'], $e->getErrorSubcode());
    $this->assertEquals(
      $data['error']['error_user_title'], $e->getErrorUserTitle());
    $this->assertEquals(
      $data['error']['error_user_msg'], $e->getErrorUserMessage());
    $this->assertEquals(
      $data['error']['error_data']['blame_field_specs'],
      $e->getErrorBlameFieldSpecs());
  }

  public function testGetFacebookTraceIdReturnsValueFromResponseErrorData() {
    $data = array(
      'error' => array(
        'fbtrace_id' => 'abc123',
      ),
    );

    $response = new Response();
    $response->setBody(json_encode($data));
    $e = new RequestException($response);

    $this->assertSame('abc123', $e->getFacebookTraceId());
  }

  public function testGetErrorBlameFieldSpecsReturnsNullWithNullErrorData() {
    $data = array(
      'error' => array(
          'error_data' => null,
      ),
    );

    $response = new Response();
    $response->setBody(json_encode($data));
    $e = new RequestException($response);

    $this->assertNull($e->getErrorBlameFieldSpecs());
  }

  /**
   * @return array
   */
  public function createConcreteProvider() {
    return array(
      array(array('type' => 'OAuthException'), 'AuthorizationException'),
      array(array('code' => 1), 'ServerException'),
      array(array('code' => 4), 'ThrottleException'),
      array(array('code' => 506), 'ClientException'),
      array(array('code' => 10), 'PermissionException'),
      array(array(), 'RequestException'),
    );
  }

  /**
   * @param array $data
   * @param string $expected_class
   * @dataProvider createConcreteProvider
   */
  public function testCreateConcrete($data, $expected_class) {
    $response = new Response();
    $response->setBody(json_encode(array('error' => $data)));
    $response->setStatusCode(400);
    $e = RequestException::create($response);
    $fqn = '\FacebookAds\Http\Exception\\'.$expected_class;
    $this->assertTrue(is_a($e, $fqn));
  }
}
