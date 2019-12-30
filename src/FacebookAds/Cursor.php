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

namespace FacebookAds;

use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Http\Util;
use FacebookAds\Object\AbstractObject;

class Cursor implements \Iterator, \Countable, \arrayaccess {
  /**
   * @var ResponseInterface
   */
  protected $response;

  /**
   * @var Api
   */
  protected $api;

  /**
   * @var AbstractObject[]
   */
  protected $objects = array();

  /**
   * @var int|null
   */
  protected $indexLeft;

  /**
   * @var int|null
   */
  protected $indexRight;

  /**
   * @var int|null
   */
  protected $position;

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
  protected $useImplicitFetch;

  public function __construct(
    ResponseInterface $response,
    AbstractObject $object_prototype,
    Api $api = null) {
    $this->response = $response;
    $this->objectPrototype = $object_prototype;
    $this->api = $api !== null ? $api : Api::instance();
    $this->appendResponse($response);
  }

  /**
   * @param array $object_data
   * @return AbstractObject
   */
  protected function createObject(array $object_data) {
    $object = clone $this->objectPrototype;
    $object->setDataWithoutValidation($object_data);
    if ($object instanceof AbstractCrudObject) {
      $object->setApi($this->api);
    }
    return $object;
  }

  /**
   * @param ResponseInterface $response
   * @return array
   * @throws \InvalidArgumentException
   */
  protected function assureResponseData(ResponseInterface $response) {
    $content = $response->getContent();

    // First, check if the content contains data
    if (isset($content['data']) && is_array($content['data'])) {
      $data = $content['data'];

      // If data is an object wrap the object into an array
      if ($this->isJsonObject($data)) {
        $data = array($data);
      }
      return $data;
    }

    // Second, check if the content contains special entries
    if (isset($content['targetingsentencelines'])) {
      return $content['targetingsentencelines'];
    }
    if (isset($content['adaccounts'])) {
      return $content['adaccounts'];
    }
    if (isset($content['users'])) {
      return $content['users'];
    }

    // Third, check if the content is an array of objects indexed by id
    $is_id_indexed_array = true;
    $objects = array();
    if (is_array($content) && count($content) >= 1) {
      foreach ($content as $key => $value) {
        if ($key === '__fb_trace_id__') {
          continue;
        }

        if ($value !== null &&
            $this->isJsonObject($value) &&
            isset($value['id']) &&
            $value['id'] !== null &&
            $value['id'] === $key) {
          $objects[] = $value;
        } else {
          $is_id_indexed_array = false;
          break;
        }
      }
    } else {
      $is_id_indexed_array = false;
    }
    if ($is_id_indexed_array) {
      return $objects;
    }

    throw new \InvalidArgumentException("Malformed response data");
  }

  private function isJsonObject($object) {
    if (!is_array($object)) {
      return false;
    }

    // Consider an empty array as not object
    if (empty($object)) {
      return false;
    }

    // A json object is represented by a map instead of a pure list
    return array_keys($object) !== range(0, count($object) - 1);
  }

  /**
   * @param ResponseInterface $response
   */
  protected function prependResponse(ResponseInterface $response) {
    $this->response = $response;
    $data = $this->assureResponseData($response);
    if (empty($data)) {
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
    $data = $this->assureResponseData($response);
    if (empty($data)) {
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
   * @param bool $use_implicit_fetch
   */
  public static function setDefaultUseImplicitFetch($use_implicit_fetch) {
    static::$defaultUseImplicitFetch = $use_implicit_fetch;
  }

  /**
   * @return bool
   */
  public function getUseImplicitFetch() {
    return $this->useImplicitFetch !== null
      ? $this->useImplicitFetch
      : static::$defaultUseImplicitFetch;
  }

  /**
   * @param bool $use_implicit_fetch
   */
  public function setUseImplicitFetch($use_implicit_fetch) {
    $this->useImplicitFetch = $use_implicit_fetch;
  }

  /**
   * @return string|null
   */
  public function getBefore() {
    $content = $this->getLastResponse()->getContent();
    return isset($content['paging']['cursors']['before'])
      ? $content['paging']['cursors']['before']
      : null;
  }

  /**
   * @return string|null
   */
  public function getAfter() {
    $content = $this->getLastResponse()->getContent();
    return isset($content['paging']['cursors']['after'])
      ? $content['paging']['cursors']['after']
      : null;
  }

  /**
   * @return RequestInterface
   */
  protected function createUndirectionalizedRequest() {
    $request = $this->getLastResponse()->getRequest()->createClone();
    $params = $request->getQueryParams();
    if (isset($params['before'])) {
      unset($params['before']);
    }
    if (isset($params['after'])) {
      unset($params['after']);
    }

    return $request;
  }

  /**
   * @return string|null
   */
  public function getPrevious() {
    $content = $this->getLastResponse()->getContent();
    if (isset($content['paging']['previous'])) {
      return $content['paging']['previous'];
    }

    $before = $this->getBefore();
    if ($before !== null) {
      $request = $this->createUndirectionalizedRequest();
      $request->getQueryParams()->offsetSet('before', $before);
      return $request->getUrl();
    }

    return null;
  }

  /**
   * @return string|null
   */
  public function getNext() {
    $content = $this->getLastResponse()->getContent();
    if (isset($content['paging']['next'])) {
      return $content['paging']['next'];
    }

    $after = $this->getAfter();
    if ($after !== null) {
      $request = $this->createUndirectionalizedRequest();
      $request->getQueryParams()->offsetSet('after', $after);
      return $request->getUrl();
    }

    return null;
  }

  /**
   * @param string $url
   * @return RequestInterface
   */
  protected function createRequestFromUrl($url) {
    $components = parse_url($url);
    $request = $this->getLastResponse()->getRequest()->createClone();
    $request->setDomain($components['host']);
    $query = isset($components['query'])
      ? Util::parseUrlQuery($components['query'])
      : array();
    $request->getQueryParams()->enhance($query);

    return $request;
  }

  /**
   * @return RequestInterface|null
   */
  public function createBeforeRequest() {
    $url = $this->getPrevious();
    return $url !== null ? $this->createRequestFromUrl($url) : null;
  }

  /**
   * @return RequestInterface|null
   */
  public function createAfterRequest() {
    $url = $this->getNext();
    return $url !== null ? $this->createRequestFromUrl($url) : null;
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
      // Sort the main array to improve best case performance in future
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
        } else {
          --$this->position;
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
        } else {
          ++$this->position;
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
    if ($offset === null) {
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
