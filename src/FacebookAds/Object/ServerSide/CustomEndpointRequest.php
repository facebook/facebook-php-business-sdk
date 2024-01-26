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

use GuzzleHttp\Promise\PromiseInterface;

/**
 * Interface for Custom Endpoint Request
 *
 * @category Interface
 */
interface CustomEndpointRequest {
    /**
     * Synchronously send events to custom endpoint
     * @param string $pixel_id
     * @param array<Event> $events
     * @return CustomEndpointResponse
     */
    public function sendEvent(string $pixel_id, array $events): CustomEndpointResponse;

    /**
     * Asynchronously send events to custom endpoint
     * @param string $pixel_id
     * @param array<Event> $events
     * @return PromiseInterface
     */
    public function sendEventAsync(string $pixel_id, array $events): PromiseInterface;

    /**
     * Create a filter function that will filter events being sent to endpoint
     * @param Filter $filter
     */
    public function setFilter(Filter $filter);

    /**
     * Sets whether events should be send to this endpoint only
     * @param boolean $setSendToEndpointOnly
     */
    public function setSendToEndpointOnly(bool $setSendToEndpointOnly);

    /**
     * Returns whether events should be sent to this endpoint only
     * @return boolean
     */
    public function isSendToEndpointOnly(): bool;

    /**
     * Returns endpoint URL
     * @return string
     */
    public function getEndpoint(): string;
}

