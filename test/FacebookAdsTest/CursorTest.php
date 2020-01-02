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

namespace FacebookAdsTest;

use FacebookAds\Http\Client;
use FacebookAds\Http\Parameters;
use FacebookAds\Http\Request;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Object\AbstractCrudObject;
use FacebookAds\Object\AbstractObject;
use FacebookAds\Cursor;
use FacebookAdsTest\Object\EmptyObject;
use \PHPUnit_Framework_MockObject_Builder_InvocationMocker as Mock;

class CursorTest extends AbstractUnitTestCase {
  /**
   * @var EmptyObject
   */
  protected $objectPrototype;

  /**
   * @return array
   */
  protected function createEmptyResponseContent() {
    return array('data' => array());
  }


  /**
   * @return string
   */
  protected function getUniquePageId() {
    return uniqid();
  }

  /**
   * @return array
   */
  protected function createSampleResponseContent() {
    $content = array(
      'paging' => array(
        'cursors' => array(
          'after' => $this->getUniquePageId(),
          'before' => $this->getUniquePageId(),
        ),
      ),
    ) + $this->createEmptyResponseContent();

    $count = rand(2, 5);
    for ($i = 0; $i < $count; $i++) {
      $content['data'][] = array(
        AbstractCrudObject::FIELD_ID => $i,
      );
    }

    return $content;
  }

  /**
   * @return string
   */
  protected function createUnparameterizedUrl() {
    return Request::PROTOCOL_HTTPS
      .Client::DEFAULT_LAST_LEVEL_DOMAIN
      .'.'.Client::DEFAULT_GRAPH_BASE_DOMAIN
      .'/node/edge';
  }

  /**
   * @param int $num_pages
   * @param RequestInterface|null $prev
   * @return Mock|ResponseInterface
   */
  protected function createResponseChainMock(
    $num_pages, RequestInterface $prev = null) {

    $query_params = $prev ? clone $prev->getQueryParams() : new Parameters();
    $sample_content = $this->createSampleResponseContent();

    $request = $this->createRequestMock();
    $request->method('getMethod')->willReturn(RequestInterface::METHOD_GET);
    $request->method('getQueryParams')->willReturn($query_params);

    $response = $this->createResponseMock();
    $response->method('getRequest')->willReturn($request);

    $request->method('execute')->willReturn($response);

    $callback = function() use ($num_pages, $sample_content) {
      return $num_pages > 0
        ? $sample_content
        : $this->createEmptyResponseContent();
    };

    $clone_callback = function() use ($num_pages, $request) {
      return $this->createResponseChainMock(
        $num_pages - 1, $request)->getRequest();
    };

    $url_callback = function() use ($query_params) {
      return $this->createUnparameterizedUrl().'?'
        .http_build_query($query_params->getArrayCopy());
    };

    $response->method('getContent')->willReturnCallback($callback);
    $request->method('createClone')->willReturnCallback($clone_callback);
    $request->method('getUrl')->willReturnCallback($url_callback);

    return $response;
  }

  /**
   * @return Mock|ResponseInterface
   */
  protected function createEmptyResponseMock() {
    $response = $this->createResponseMock();
    $response->method('getContent')->willReturn(array(
      'data' => array(),
    ));

    return $response;
  }

  public function setup(): void {
    parent::setup();
    $this->objectPrototype = new EmptyObject();
  }

  public function tearDown(): void {
    $this->objectPrototype = null;
    parent::tearDown();
  }

  public function testGetters() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);

    $this->assertTrue($response === $cursor->getResponse());
    $this->assertTrue($response === $cursor->getLastResponse());
    $this->assertTrue(is_string($cursor->getAfter()));
    $this->assertTrue(is_string($cursor->getBefore()));
    $this->assertNotEquals($cursor->getBefore(), $cursor->getAfter());
  }

  /**
   * @return array
   */
  public function responseDataStructureProvider() {
    return array(
      array(array()),
      array(array('data' => null)),
      array(array('data' => 1)),
    );
  }

  /**
   * @dataProvider responseDataStructureProvider
   * @expectedException \InvalidArgumentException
   * @param mixed $content
   */
  public function testResponseDataStructure($content) {
    $response = $this->createResponseMock();
    $response->method('getContent')->willReturn($content);

    new Cursor($response, $this->objectPrototype);
  }

  public function testIterator() {
    $cursor = new Cursor(
      $this->createResponseChainMock(1), $this->objectPrototype);

    $this->assertTrue($cursor instanceof \Iterator);

    $k = 0;

    foreach ($cursor as $key => $value) {
      if ($key != $k) {
        $this->fail('iteration count missmatch $key');
      }
      ++$k;
    }

    $this->assertEquals($k, count($cursor));

    $cursor->rewind();

    $this->assertEquals(0, $cursor->key());
    $cursor->next();
    $this->assertEquals(1, $cursor->key());
    $cursor->prev();
    $this->assertEquals(0, $cursor->key());

    $this->assertEquals($cursor->getIndexLeft(), 0);
    $this->assertEquals($cursor->getIndexRight(), count($cursor) - 1);
  }

  public function testCountable() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);

    $this->assertTrue($cursor instanceof \Countable);
    $this->assertEquals($cursor->count(), count($cursor));
    $this->assertEquals(
      $cursor->count(), count($response->getContent()['data']));
  }

  public function testArrayAccess() {
    $response = $this->createResponseChainMock(1);
    $test_index = rand(1, count($response->getContent()) - 1);

    $cursor = new Cursor($response, $this->objectPrototype);

    $this->assertTrue($cursor instanceof \arrayaccess);

    $subject = new EmptyObject();
    $subject->setData($response->getContent()['data'][$test_index]);

    // Checking offsetGet
    $this->assertEquals($cursor[$test_index]->getData(), $subject->getData());
    // Checking offsetExists
    $this->assertFalse(isset($cursor[count($cursor)]));
    // Checking offsetUnset
    unset($cursor[$test_index]);
    $this->assertNull($cursor[$test_index]);
    // Checking offsetSet
    $cursor->offsetSet($test_index, $subject);
    $this->assertEquals($cursor[$test_index]->getData(), $subject->getData());
    // Checking offsetSet - append
    $count = count($cursor);
    $cursor->offsetSet(null, new EmptyObject());
    $this->assertEquals(count($cursor), $count + 1);
  }

  public function testUnneededFetch() {
    $response = $this->createEmptyResponseMock();
    $cursor = new Cursor($response, $this->objectPrototype);
    $this->assertNull($cursor->createBeforeRequest());
    $this->assertNull($cursor->createAfterRequest());

    // Reset for proper fetching
    $response = $this->createEmptyResponseMock();
    $cursor = new Cursor($response, $this->objectPrototype);
    $length = $cursor->count();
    $cursor->fetchBefore();
    $this->assertEquals($length, $cursor->count());
    $cursor->fetchAfter();
    $this->assertEquals($length, $cursor->count());
  }

  public function testIterability() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);

    $cursor->next();
    $cursor->rewind();
    $this->assertEquals($cursor->getIndexLeft(), $cursor->key());

    $cursor->end();
    $this->assertEquals($cursor->getIndexRight(), $cursor->key());

    $index = rand($cursor->getIndexLeft(), $cursor->getIndexRight());
    $cursor->seekTo($index);
    $this->assertEquals($index, $cursor->key());

    // Fetch after
    $cursor = new Cursor($response, $this->objectPrototype);
    $cursor->fetchAfter();
    $this->assertFalse($response === $cursor->getLastResponse());
  }

  public function testRequestParamReset() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);
    $params = $cursor->getLastResponse()->getRequest()->getQueryParams();
    $params->offsetSet('after', $this->getUniquePageId());
    $params->offsetSet('before', $this->getUniquePageId());

    $cursor->fetchAfter();
    $params2 = $cursor->getLastResponse()->getRequest()->getQueryParams();
    $this->assertNotEquals(
      $params->offsetGet('after'), $params2->offsetGet('after'));
  }

  public function testImplicitFetch() {
    // Test setters/getters
    $response = $this->createEmptyResponseMock();
    $cursor = new Cursor($response, $this->objectPrototype);

    $this->assertFalse(Cursor::getDefaultUseImplicitFetch());
    $this->assertFalse($cursor->getUseImplicitFetch());
    $cursor->setUseImplicitFetch(true);
    $this->assertTrue($cursor->getUseImplicitFetch());

    Cursor::setDefaultUseImplicitFetch(true);

    $response = $this->createEmptyResponseMock();
    $cursor = new Cursor($response, $this->objectPrototype);
    $this->assertTrue(Cursor::getDefaultUseImplicitFetch());
    $this->assertTrue($cursor->getUseImplicitFetch());

    // Test ordered iteration
    // f() lower interval * min repetition > upper interval
    // Min repetition > upper interval / lower interval -> f(x): x > 5 / 2 -> 3
    $response = $this->createResponseChainMock(3);
    $cursor = new Cursor($response, $this->objectPrototype);
    while ($cursor->valid()) {
      $cursor->next();
    }

    // Min upper boundary = upper interval + 1 = 5 + 1 = 6
    $this->assertGreaterThanOrEqual(6, $cursor->count());

    // Test rervese iteration
    // same f()
    $response = $this->createResponseChainMock(3);
    $cursor = new Cursor($response, $this->objectPrototype);

    $count = 0;
    while ($cursor->valid()) {
      $cursor->prev();
    }

    $this->assertGreaterThanOrEqual(6, $cursor->count());

    // Force the array out of boundaries
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);
    $cursor->setUseImplicitFetch(false);
    $cursor->prev();

    // Restore static behaviour
    Cursor::setDefaultUseImplicitFetch(false);
  }

  public function testExportability() {
    $response = $this->createResponseChainMock(1);
    $cursor = new Cursor($response, $this->objectPrototype);
    $array_copy = $cursor->getArrayCopy();

    $this->assertTrue(is_array($array_copy));
    $this->assertEquals($cursor->getArrayCopy(), $cursor->getObjects());
    $this->assertEquals(
      count($array_copy), count($response->getContent()['data']));

    foreach ($array_copy as $object) {
      if (!$object instanceof AbstractObject) {
        $this->fail("Wrong instance in array copy");
      }
    }

    $cursor->fetchAfter();
    $cursor->fetchBefore();

    $index = $cursor->getIndexLeft();
    // Test in-memory order while exporting
    foreach ($cursor->getArrayCopy(true) as $key => $object) {
      if ($key < $index) {
        $this->fail("Wrong order in sorted array copy");
      }
    }
  }
}
