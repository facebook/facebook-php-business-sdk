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
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\Utils;
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
    if ($this->endpoint_request != null && $this->endpoint_request->isSendToEndpointOnly()) {
        return $this->endpoint_request->sendEventAsync($pixel_id, $this->container['events'])->then(function($customEndpointResponse) {
            $response = $customEndpointResponse;
            return new EventResponse(array(
                'data' => array('events_received' => count($this->container['events']), 'custom_endpoint_responses'=>$response)
            ));
        });
    }
    $sendCAPIRequestPromise = $this->eventPromise(
          $pixel_id,
          $normalized_param
    );
    if ($this->endpoint_request != null) {
        $customEndpointRequestPromise = $this->endpoint_request->sendEventAsync($this->container['pixel_id'], $this->container['events']);
        // put both promises in an an array
        $promises = Utils::all(array($sendCAPIRequestPromise, $customEndpointRequestPromise));
        $promises->then(function($responses) {
                $CAPIResponse = $responses[0];
                $customEndpointResponse = $responses[1];
                $CAPIResponse->setCustomEndpointResponses($customEndpointResponse);
                return $CAPIResponse;
        });
        return $promises;
    }
    return $sendCAPIRequestPromise;
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
