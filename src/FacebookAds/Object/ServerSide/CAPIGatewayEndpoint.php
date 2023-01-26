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

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Utils;
use Psr\Http\Message\ResponseInterface;

/**
 * Implementation of Custom Endpoint Request that sends events to CAPIG /events endpoint
 *
 * @category Class
 */
class CAPIGatewayEndpoint implements CustomEndpointRequest {
    private Client $client;
    private string $access_key;
    private string $endpoint_URL;
    private bool $sendToEndpointOnly;
    private ?Filter $filter = null;

    /**
     * Constructor
     * @param string $endpoint_URL endpoint_URL
     * @param string $access_key access_key
     * @throws Exception
     */
    public function __construct(string $endpoint_URL, string $access_key) {
        $this->validateEndpoint($endpoint_URL);
        $this->endpoint_URL = $endpoint_URL;
        $this->access_key = $access_key;
        $this->client= new Client(['headers' => ['Content-Type' => 'application/json; charset=utf-8']]);
        $this->sendToEndpointOnly = false;
    }

    /**
     * Validates URL
     * @param string $endpoint_URL
     * @throws Exception
     */
    private function validateEndpoint(string $endpoint_URL):void {
        if (!filter_var($endpoint_URL, FILTER_VALIDATE_URL)) {
            throw new Exception('URL is in invalid format ');
        }
    }

    /**
     * Synchronously send events to specified CAPIG /events endpoint
     * @throws GuzzleException
     * @throws Exception
     */
    public function sendEvent(string $pixel_id, array $events): CustomEndpointResponse
    {
        try {
            if (!is_null($this->filter)) {
                $events = array_filter($events, function(Event $var){
                    return $this->filter->shouldSendEvent($var);
                });
            }
            if (count($events) == 0) {
                return new CustomEndpointResponse(array('message' => 'No events to send'));
            }
            $response = $this->client->request('POST', $this->endpoint_URL.'/capi/'.$pixel_id.'/events', ['http_errors'=> false, 'body' => $this->createRequestBody($events)]);
            if ($response->getStatusCode() != '202') {
                // a HTTP response code of 202 means the events were accepted
                throw new Exception('Server response code is '.$response->getStatusCode().' expect: 202');
            } else {
                return new CustomEndpointResponse(array('message' => $response->getBody()->getContents(), 'response_code'=> $response->getStatusCode()));
            }
        } catch (Exception $e) {
            throw new Exception('Server failed to accept events. '.$e->getMessage());
        }
    }

    /**
     * Asynchronously send events to specified CAPIG /events endpoint
     * @throws Exception
     * returns PromiseInterface
     */
    public function sendEventAsync(string $pixel_id, array $events): PromiseInterface
    {
        if (!is_null($this->filter)) {
            $events = array_filter($events, function (Event $var) {
                return $this->filter->shouldSendEvent($var);
            });
        }
        $promise = $this->client->requestAsync('POST', $this->endpoint_URL.'/capi/'.$pixel_id.'/events', ['http_errors'=> false, 'body' => $this->createRequestBody($events)]);
        $promise->then(
            function (ResponseInterface $response) {
                if ($response->getStatusCode() != '202') {
                    // a HTTP response code of 202 means the events were accepted
                    throw new Exception('Server response code is '.$response->getStatusCode().' expect: 202');
                } else {
                    return new CustomEndpointResponse(array('message' => $response->getBody()->getContents(), 'response_code'=> $response->getStatusCode()));
                }
            },
            function (RequestException $e) {
                throw new Exception('Server failed to accept events. '.$e->getMessage());
            }
        );
        return $promise;
    }

    private function createRequestBody($events): string
    {
        $events = $this->normalize($events);
        $body = array();
        $body['data'] = $events;
        $body['accessKey'] = $this->access_key;
        return Utils::jsonEncode($body);
    }

    private function normalize(array $events): array
    {
        // we need to normalize the event fields before sending
        $normalized_events = array();
        foreach ($events as $event) {
            $normalized_event = $event->normalize();
            $normalized_events[] = $normalized_event;
        }
        return $normalized_events;
    }

    public function setFilter(Filter $filter)
    {
        $this->filter = $filter;
    }

    public function setSendToEndpointOnly(bool $setSendToEndpointOnly)
    {
        $this->sendToEndpointOnly = $setSendToEndpointOnly;
    }

    public function isSendToEndpointOnly(): bool
    {
        return $this->sendToEndpointOnly;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint_URL;
    }
}

