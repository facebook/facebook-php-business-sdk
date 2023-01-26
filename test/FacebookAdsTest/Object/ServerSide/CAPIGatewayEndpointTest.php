<?php
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