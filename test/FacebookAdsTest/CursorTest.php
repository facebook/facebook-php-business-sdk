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
use FacebookAds\Object\AdAccount;
use FacebookAds\Cursor;

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

  public function setup() {
    parent::setup();

    $request = $this->getHttpClient()->createRequest();
    $request->setMethod(RequestInterface::METHOD_GET);
    $request->setPath('/');

    $resp = new \StdClass();
    $resp->data = array();
    $resp->paging = new \StdClass();
    $resp->paging->cursors = new \StdClass();
    $resp->paging->cursors->after = $this->after;
    $resp->paging->cursors->before = $this->before;

    $this->response = $this->getHttpClient()->createResponse();
    $this->response->setRequest($request);
    $this->response->setBody(json_encode($resp));
  }

  public function tearDown() {
    $this->response = null;
    parent::tearDown();
  }

  public function testGetters() {
    $objects = array(new AdAccount());

    $cursor = new Cursor($objects, $this->response);

    $this->assertTrue($this->response === $cursor->getResponse());
    $this->assertTrue($objects === $cursor->getObjects());
    $this->assertEquals($this->after, $cursor->getAfter());
    $this->assertEquals($this->before, $cursor->getBefore());
  }

  public function testIterator() {
    $objects = array();
    $account = new AdAccount();
    $count = rand(0, 100);
    for ($i = 0; $i < $count; $i++) {
      $objects[] = clone $account;
    }

    $cursor = new Cursor($objects, $this->response);

    $this->assertTrue($cursor instanceof \Iterator);

    $k = 0;

    foreach ($cursor as $key => $value) {
      if ($key != $k) {
        $this->fail('iteration count missmatch $key');
      }
      ++$k;
    }

    $this->assertEquals($k, count($cursor));
  }

  public function testCountable() {
    $objects = array();
    $account = new AdAccount();
    $count = rand(0, 100);
    for ($i = 0; $i < $count; $i++) {
      $objects[] = clone $account;
    }

    $cursor = new Cursor($objects, $this->response);

    $this->assertTrue($cursor instanceof \Countable);
    $this->assertEquals($cursor->count(), $count);
  }

  public function testArrayAccess() {
    $objects = array();
    $account = new AdAccount();
    $count = rand(0, 100);
    for ($i = 0; $i < $count; $i++) {
      $objects[] = clone $account;
    }

    $cursor = new Cursor($objects, $this->response);

    $this->assertTrue($cursor instanceof \arrayaccess);
    $account = $cursor[0];

    // Checking offsetGet
    $this->assertEquals($cursor[0], $objects[0]);
    // Checking offsetExists
    $this->assertFalse(isset($cursor[count($cursor)]));
    // Checking offsetUnset
    unset($cursor[0]);
    $this->assertNotEquals($cursor[0], $objects[0]);
    // Checking offsetSet
    $cursor[0] = $objects[0];
    $this->assertEquals($cursor[0], $objects[0]);

  }
}
