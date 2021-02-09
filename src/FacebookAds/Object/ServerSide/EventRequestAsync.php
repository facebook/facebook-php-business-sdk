<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAds\Object\ServerSide;

use FacebookAds\Api;
use FacebookAds\ApiConfig;
use FacebookAds\Http\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\MultipartStream;

class EventRequestAsync extends EventRequest {
  /**
   * Return an asynchronous request Promise
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function execute() {
    $normalized_param = $this->normalize();
    $pixel_id = $this->container['pixel_id'];
    return $this->eventPromise(
      $pixel_id,
      $normalized_param
    );
  }

  private function eventPromise($pixel_id, array $params = array()) {
    $access_token = Api::instance()->getSession()->getAccessToken();
    $headers = array(
      'User-Agent' => 'fbbizsdk-php-v'.ApiConfig::APIVersion,
      'Accept-Encoding' => '*',
    );

    $domain = Client::DEFAULT_LAST_LEVEL_DOMAIN . '.' . Client::DEFAULT_GRAPH_BASE_DOMAIN;
    $base_url = 'https://' . $domain . '/v' . ApiConfig::APIVersion;

    $url = $base_url.'/'.$pixel_id.'/events';

    $events_json = \GuzzleHttp\json_encode($params['data']);
    $multipart_contents = [
      [
        'name' => 'access_token',
        'contents' => $access_token,
        'headers' => array('Content-Type' => 'multipart/form-data'),
      ],
      [
        'name' => 'data',
        'contents' => $events_json,
        'headers' => array('Content-Type' => 'multipart/form-data'),
      ]
    ];

    foreach ($params as $key => $value) {
      if ($key !== 'data') {
        $multipart_contents[] = [
          'name' => $key,
          'contents' => $value,
          'headers' => array('Content-Type' => 'multipart/form-data'),
        ];
      }
    }

    $body = new MultipartStream($multipart_contents);
    $request = new Request('POST', $url, $headers, $body);

    $client = AsyncClient::getInstance()->getClient();
    return $client->sendAsync($request);
  }
}
