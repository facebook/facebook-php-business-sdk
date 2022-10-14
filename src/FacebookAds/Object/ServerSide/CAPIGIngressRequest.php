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

use FacebookAds\Object\BusinessDataAPI\EventResponse;
use GuzzleHttp\Promise\Promise;

/**
 * Implementation of Custom Endpoint Request that sends events to CAPIG /events endpoint
 *
 * @category Class
 */
class CAPIGIngressRequest implements CustomEndpointRequest {
    private array $container = array();

    /**
     * Constructor
     * @param string $endpoint_URL endpoint_URL
     * @param string $access_key access_key
     * @throws Exception
     */
    public function __construct(string $endpoint_URL, string $access_key) {
        $this->validateEndpoint($endpoint_URL);
        $this->container['$endpoint_URL'] = $endpoint_URL;
        $this->container['$access_key'] = $$access_key;
    }

    /**
     * Validates URL
     * @param string $endpoint_URL
     * @throws Exception
     */
    private function validateEndpoint(string $endpoint_URL):void {
        if (!filter_var($endpoint_URL, FILTER_VALIDATE_URL)) {
            throw new \Exception("URL is invalid format ");
        }
    }

    public function sendEvent(string $pixel_id, array $events): \FacebookAds\Object\ServerSide\EventResponse
    {
        // TODO: T134545694.
        return new EventResponse("");
    }

    public function sendEventAsync(string $pixel_id, array $events): Promise
    {
        // TODO: T134545694.
        return Promise::FULFILLED;
    }

    public function setFilter(Filter $filter)
    {
        $this->container['$filter'] = $filter;
    }
}

