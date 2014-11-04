<?php
/**
 * Copyright 2014 Facebook, Inc.
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

use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Object\AbstractCrudObject;
use FacebookAds\Object\AbstractObject;
use FacebookAds\Object\AdAccount;
use FacebookAds\Cursor;
use FacebookAdsTest\Object\EmptyObject;

class CursorTest extends AbstractTestCase {

  /**
   * @var ResponseInterface
   */
  protected $response;

  /**
   * @var string
   */
  protected $before = 'NDMyNzQyODI3OTQw';

  /**
   * @var string
   */
  protected $after = 'MTAxNTExOTQ1MjAwNzI5NDE';

  /**
   * @var array
   */
  protected $responseContent;

  /**
   * @var array
   */
  protected $emptyResponseContent;

  /**
   * @var EmptyObject
   */
  protected $objectPrototype;

  /**
   * @var bool
   */
  protected $haltProcession = false;

  /**
   * @param int $max
   * @return ResponseInterface
   */
  protected function getRandomSizeResponse($max = 100) {
    $max = abs($max);
    $response = clone $this->response;
    $response_content = $this->responseContent;
    $response_content['data'] = array();

    $count = rand(0, $max);
    for ($i = 0; $i < $count; $i++) {
      $response_content['data'][] = array(
        AbstractCrudObject::FIELD_ID => $i,
      );
    }

    $response->setBody(json_encode($response_content));

    return $response;
  }

  public function setup() {
    parent::setup();

    $this->objectPrototype = new EmptyObject();

    $this->responseContent = array(
      'data' => array(
        array(
          AbstractCrudObject::FIELD_ID => 1,
        ),
        array(
          AbstractCrudObject::FIELD_ID => 2,
        ),
        array(
          AbstractCrudObject::FIELD_ID => 3,
        ),
      ),
      'paging' => array(
        'cursors' => array(
          'after' => $this->after,
          'before' => $this->before,
        ),
      ),
    );

    $this->emptyResponseContent = array(
      'data' => array(),
    );

    $request = $this->getMock(
      get_class($this->getHttpClient()->createRequest()),
      array('execute'),
      array($this->getHttpClient()));

    $test = $this;

    $request->expects($this->any())
      ->method('execute')
      ->will($this->returnCallback(
        function() use ($test, $request) {
          /** @var RequestInterface $request */
          $mock_response = $test->getHttpClient()->createResponse();
          $mock_response->setRequest($request);

          $response_body = $test->haltProcession
            ? $test->emptyResponseContent
            : $test->responseContent;

          $mock_response->setBody(json_encode($response_body));

          return $mock_response;
        }));

    /** @var RequestInterface $request */
    $request->setMethod(RequestInterface::METHOD_GET);

    $this->response = $this->getHttpClient()->createResponse();
    $this->response->setRequest($request);
    $response_content = $this->responseContent;
    $response_content['_unique'] = uniqid();
    $this->response->setBody(json_encode($response_content));
  }

  public function tearDown() {
    $this->response = null;
    $this->objectPrototype = null;
    $this->responseContent = null;
    parent::tearDown();
  }

  public function testGetters() {
    $cursor = new Cursor($this->response, $this->objectPrototype);

    $this->assertTrue($this->response === $cursor->getResponse());
    $this->assertTrue($this->response === $cursor->getLastResponse());
    $this->assertEquals($this->after, $cursor->getAfter());
    $this->assertEquals($this->before, $cursor->getBefore());
  }

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
    $response = clone $this->response;
    $response->setBody(json_encode($content));

    new Cursor($response, $this->objectPrototype);
  }

  public function testIterator() {
    $objects = array();
    $account = new AdAccount();
    $count = rand(0, 100);
    for ($i = 0; $i < $count; $i++) {
      $objects[] = clone $account;
    }

    $cursor = new Cursor($this->response, $this->objectPrototype);

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
    $response = $this->getRandomSizeResponse();

    $cursor = new Cursor($response, $this->objectPrototype);

    $this->assertTrue($cursor instanceof \Countable);
    $this->assertEquals($cursor->count(), count($cursor));
    $this->assertEquals(
      $cursor->count(), count($response->getContent()['data']));
  }

  public function testArrayAccess() {
    $response = $this->getRandomSizeResponse();
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

  public function testIterability() {
    $cursor_prototype = new Cursor($this->response, $this->objectPrototype);

    $cursor = clone $cursor_prototype;
    $cursor->next();
    $cursor->rewind();
    $this->assertEquals($cursor->getIndexLeft(), $cursor->key());

    $cursor->end();
    $this->assertEquals($cursor->getIndexRight(), $cursor->key());

    $index = rand($cursor->getIndexLeft(), $cursor->getIndexRight());
    $cursor->seekTo($index);
    $this->assertEquals($index, $cursor->key());

    $cursor = clone $cursor_prototype;
    $cursor->fetchAfter();
    $this->assertFalse($this->response === $cursor->getLastResponse());

    $cursor = clone $cursor_prototype;
    // Test request cursor param reset
    $params = $cursor->getLastResponse()->getRequest()->getQueryParams();
    $params->offsetSet('after', uniqid());
    $params->offsetSet('before', uniqid());
    $expect_exit = false;
    $count = $cursor->count();
    $iterations = 0;

    // Fetch After
    while (true) {
      $cursor->fetchAfter();

      $length = count($cursor->getLastResponse()->getContent()['data']);
      if ($expect_exit) {
        $this->assertEquals($length, 0);
        $this->assertNull($cursor->createAfterRequest());

        break;
      }
      $this->assertEquals($count + $length, $cursor->count());

      $count += $length;

      if (!$cursor->getLastResponse()->getContent()['data']) {
        $expect_exit = true;

        continue;
      }

      ++$iterations;
      if ($iterations >= 2) {
        $this->haltProcession = true;
      }
    }

    $this->haltProcession = false;
    $expect_exit = false;

    // Fetch Before
    while (true) {
      $cursor->fetchBefore();
      $length = count($cursor->getLastResponse()->getContent()['data']);

      if ($expect_exit) {
        $this->assertEquals($length, 0);
        $this->assertNull($cursor->createBeforeRequest());

        break;
      }

      $this->assertEquals($count + $length, $cursor->count());

      $count += $length;

      if (!$cursor->getLastResponse()->getContent()['data']) {
        $expect_exit = true;

        continue;
      }

      ++$iterations;
      if ($iterations >= 2) {
        $this->haltProcession = true;
      }
    }
  }

  public function testImplicitFetch() {
    $cursor = new Cursor($this->response, $this->objectPrototype);

    $this->assertFalse(Cursor::getDefaultUseImplicitFetch());
    $this->assertFalse($cursor->getUseImplicitFetch());
    $cursor->setUseImplicitFetch(true);
    $this->assertTrue($cursor->getUseImplicitFetch());

    Cursor::setDefaultUseImplicitFetch(true);

    $cursor = new Cursor($this->response, $this->objectPrototype);
    $this->assertTrue(Cursor::getDefaultUseImplicitFetch());
    $this->assertTrue($cursor->getUseImplicitFetch());

    $cursor = new Cursor($this->response, $this->objectPrototype);
    $count = 0;
    while ($cursor->valid()) {
      $cursor->next();
      if ($count >= 10) {
        $this->haltProcession = true;
      }
      ++$count;
    }

    $this->assertGreaterThanOrEqual(10, $cursor->count());
    $this->haltProcession = false;

    $cursor = new Cursor($this->response, $this->objectPrototype);

    $count = 0;
    while ($cursor->valid()) {
      $cursor->prev();
      if ($count >= 10) {
        $this->haltProcession = true;
      }
      ++$count;
    }

    $this->assertGreaterThanOrEqual(10, $cursor->count());
    $this->haltProcession = false;

    // Force the array out of boundaries
    $cursor = new Cursor($this->response, $this->objectPrototype);
    $cursor->setUseImplicitFetch(false);
    $cursor->prev();

    // Restore static behaviour
    Cursor::setDefaultUseImplicitFetch(false);
  }

  public function testExportability() {
    $cursor = new Cursor($this->response, $this->objectPrototype);
    $array_copy = $cursor->getArrayCopy();
    $this->assertEquals($cursor->getArrayCopy(), $cursor->getObjects());

    $this->assertTrue(is_array($array_copy));
    $this->assertEquals(
      count($array_copy), count($this->responseContent['data']));

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
