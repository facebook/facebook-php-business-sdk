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

namespace FacebookAds;

use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Object\AbstractObject;

class Cursor implements \Iterator, \Countable, \arrayaccess {

  /**
   * @var ResponseInterface
   */
  protected $response;

  /**
   * @var AbstractObject[]
   */
  protected $objects = array();

  /**
   * @var int|null
   */
  protected $indexLeft = null;

  /**
   * @var int|null
   */
  protected $indexRight = null;

  /**
   * @var int|null
   */
  protected $position = null;

  /**
   * @var string
   */
  protected $after;

  /**
   * @var string
   */
  protected $before;

  /**
   * @var AbstractObject
   */
  protected $objectPrototype;

  /**
   * @var bool
   */
  protected static $defaultUseImplicitFetch = false;

  /**
   * @var bool
   */
  protected $useImplicitFectch;

  public function __construct(
    ResponseInterface $response, AbstractObject $object_prototype) {

    $this->response = $response;
    $this->objectPrototype = $object_prototype;
    $this->appendResponse($response);
    $this->before = $this->getLastRequestBefore();
  }

  /**
   * @param array $object_data
   * @return AbstractObject
   */
  protected function createObject(array $object_data) {
    $object = clone $this->objectPrototype;
    $object->setData($object_data);

    return $object;
  }

  /**
   * @return string|null
   */
  protected function getLastRequestBefore() {
    $content = $this->getLastResponse()->getContent();

    return isset($content['paging']['cursors']['before'])
      ? $content['paging']['cursors']['before']
      : null;
  }

  /**
   * @return string|null
   */
  protected function getLastRequestAfter() {
    $content = $this->getLastResponse()->getContent();

    return isset($content['paging']['cursors']['after'])
      ? $content['paging']['cursors']['after']
      : null;
  }

  /**
   * @param ResponseInterface $response
   * @return array
   * @throws \InvalidArgumentException
   */
  protected function assureResponseData(ResponseInterface $response) {
    $content = $response->getContent();
    if (!isset($content['data']) || !is_array($content['data'])) {
      throw new \InvalidArgumentException("Malformed cursor response data");
    }

    return $content['data'];
  }

  /**
   * @param ResponseInterface $response
   */
  protected function prependResponse(ResponseInterface $response) {
    $this->response = $response;
    $this->before = $this->getLastRequestBefore();
    $data = $this->assureResponseData($response);
    if (!$data) {
      return;
    }

    $left_index = $this->indexLeft;
    $count = count($data);
    $position = $count - 1;
    for ($i = $left_index - 1; $i >= $left_index - $count; $i--) {
      $this->objects[$i] = $this->createObject($data[$position--]);
      --$this->indexLeft;
    }
  }

  /**
   * @param ResponseInterface $response
   */
  protected function appendResponse(ResponseInterface $response) {
    $this->response = $response;
    $this->after = $this->getLastRequestAfter();
    $data = $this->assureResponseData($response);
    if (!$data) {
      return;
    }

    if ($this->indexRight === null) {
      $this->indexLeft = 0;
      $this->indexRight = -1;
      $this->position = 0;
    }

    $this->indexRight += count($data);

    foreach ($data as $object_data) {
      $this->objects[] = $this->createObject($object_data);
    }
  }

  /**
   * @return bool
   */
  public static function getDefaultUseImplicitFetch() {
    return static::$defaultUseImplicitFetch;
  }

  /**
   * @param bool $use_implicit_fectch
   */
  public static function setDefaultUseImplicitFetch($use_implicit_fectch) {
    static::$defaultUseImplicitFetch = $use_implicit_fectch;
  }

  /**
   * @return bool
   */
  public function getUseImplicitFetch() {
    return $this->useImplicitFectch !== null
      ? $this->useImplicitFectch
      : static::$defaultUseImplicitFetch;
  }

  /**
   * @param bool $use_implicit_fectch
   */
  public function setUseImplicitFetch($use_implicit_fectch) {
    $this->useImplicitFectch = $use_implicit_fectch;
  }

  /**
   * @return RequestInterface
   */
  protected function createUndirectionalizedRequest() {
    $request = clone $this->getLastResponse()->getRequest();
    $params = $request->getQueryParams();
    if (array_key_exists('before', $params)) {
      unset($params['before']);
    }
    if (array_key_exists('after', $params)) {
      unset($params['after']);
    }

    return $request;
  }

  /**
   * @return RequestInterface|null
   */
  public function createBeforeRequest() {
    if (!$this->getBefore()) {
      return null;
    }

    $request = $this->createUndirectionalizedRequest();
    $request->getQueryParams()->offsetSet('before', $this->getBefore());

    return $request;
  }

  /**
   * @return RequestInterface|null
   */
  public function createAfterRequest() {
    if (!$this->getAfter()) {
      return null;
    }

    $request = $this->createUndirectionalizedRequest();
    $request->getQueryParams()->offsetSet('after', $this->getAfter());

    return $request;
  }

  public function fetchBefore() {
    $request = $this->createBeforeRequest();
    if (!$request) {
      return;
    }

    $this->prependResponse($request->execute());
  }

  public function fetchAfter() {
    $request = $this->createAfterRequest();
    if (!$request) {
      return;
    }

    $this->appendResponse($request->execute());
  }

  /**
   * @deprecated Use getArrayCopy()
   * @return AbstractObject[]
   */
  public function getObjects() {
    return $this->objects;
  }

  /**
   * @param bool $ksort
   * @return AbstractObject[]
   */
  public function getArrayCopy($ksort = false) {
    if ($ksort) {
      // Sort the main array to imrpove best case performance in future
      // invocations
      ksort($this->objects);
    }

    return $this->objects;
  }

  /**
   * @deprecated Use getLastResponse()
   * @return ResponseInterface
   */
  public function getResponse() {
    return $this->response;
  }

  /**
   * @return ResponseInterface
   */
  public function getLastResponse() {
    return $this->response;
  }

  /**
   * @return bool
   */
  public function getBefore() {
    return $this->before;
  }

  /**
   * @return bool
   */
  public function getAfter() {
    return $this->after;
  }

  /**
   * @return int
   */
  public function getIndexLeft() {
    return $this->indexLeft;
  }

  /**
   * @return int
   */
  public function getIndexRight() {
    return $this->indexRight;
  }

  public function rewind() {
    $this->position = $this->indexLeft;
  }

  public function end() {
    $this->position = $this->indexRight;
  }

  /**
   * @param int $position
   */
  public function seekTo($position) {
    $position = array_key_exists($position, $this->objects) ? $position : null;
    $this->position = $position;
  }

  /**
   * @return AbstractObject|bool
   */
  public function current() {
    return isset($this->objects[$this->position])
      ? $this->objects[$this->position]
      : false;
  }

  /**
   * @return int
   */
  public function key() {
    return $this->position;
  }

  public function prev() {
    if ($this->position == $this->getIndexLeft()) {
      if ($this->getUseImplicitFetch()) {
        $this->fetchBefore();
        if ($this->position == $this->getIndexLeft()) {
          $this->position = null;
        }
      } else {
        $this->position = null;
      }
    } else {
      --$this->position;
    }
  }

  public function next() {
    if ($this->position == $this->getIndexRight()) {
      if ($this->getUseImplicitFetch()) {
        $this->fetchAfter();
        if ($this->position == $this->getIndexRight()) {
          $this->position = null;
        }
      } else {
        $this->position = null;
      }
    } else {
      ++$this->position;
    }
  }

  /**
   * @return bool
   */
  public function valid() {
    return isset($this->objects[$this->position]);
  }

  /**
   * @return int
   */
  public function count() {
    return count($this->objects);
  }

  /**
   * @param mixed $offset
   * @param mixed $value
   */
  public function offsetSet($offset, $value) {
    if (is_null($offset)) {
      $this->objects[] = $value;
    } else {
      $this->objects[$offset] = $value;
    }
  }

  /**
   * @param mixed $offset
   * @return bool
   */
  public function offsetExists($offset) {
    return isset($this->objects[$offset]);
  }

  /**
   * @param mixed $offset
   */
  public function offsetUnset($offset) {
    unset($this->objects[$offset]);
  }

  /**
   * @param mixed $offset
   * @return mixed
   */
  public function offsetGet($offset) {
    return isset($this->objects[$offset]) ? $this->objects[$offset] : null;
  }
}
