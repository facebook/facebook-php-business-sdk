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

namespace FacebookAdsTest\Object\ServerSide;

use FacebookAds\Object\ServerSide\CAPIGatewayEndpoint;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\Filter;
use FacebookAdsTest\AbstractUnitTestCase;

class filterAllEvents implements Filter {
    public function shouldSendEvent(Event $event): bool
    {
        return false;
    }
}
class CAPIGatewayEndpointTest extends AbstractUnitTestCase {

    public function testBuildersAndGetters(){
        $capiIngressRequest = new CAPIGatewayEndpoint("https://example.com", "ACCESS_KEY");
        $this->assertEquals($capiIngressRequest->getEndpoint(), "https://example.com");
        $this->assertFalse($capiIngressRequest->isSendToEndpointOnly());
        $capiIngressRequest->setSendToEndpointOnly(true);
        $this->assertTrue($capiIngressRequest->isSendToEndpointOnly());
    }

    public function testInvalidUrl() {
        $has_throw_exception = false;
        try {
            new CAPIGatewayEndpoint("badDomain", "ACCESS_KEY");
        }
        catch (\Exception $exception) {
            $has_throw_exception = true;
            $expected_string = "URL is in invalid format";
            $this->assertStringContainsString($expected_string, $exception->getMessage());
        }
        $this->assertTrue($has_throw_exception);
    }

    public function testFilterAllEvents() {
        $capiIngressRequest = new CAPIGatewayEndpoint("https://example.com", "ACCESS_KEY");
        $capiIngressRequest->setFilter(new filterAllEvents());
        $event1 = new Event();
        $event1->setEventId('1');
        $event2 = new Event();
        $event2->setEventId('2');
        $events = array($event1, $event2);
        $response = $capiIngressRequest->sendEvent('pixelId', $events);
        $this->assertEquals($response->getMessage(), 'No events to send');
        $this->assertEquals($response->getResponseCode(), null);
    }
}
