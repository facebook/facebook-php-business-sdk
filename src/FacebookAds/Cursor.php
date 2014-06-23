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

use Facebook\FacebookResponse;
use FacebookAds\Object\AbstractObject;

class Cursor implements \Iterator, \Countable, \arrayaccess {

  /**
   * @var AbstractObject[]
   */
  protected $objects = array();

  /**
   * @var FacebookResponse
   */
  protected $response;

  /**
   * @var int
   */
  protected $position = 0;

  /**
   * @var string
   */
  protected $after;

  /**
   * @var string
   */
  protected $before;

  /**
   * @var int
   */
  protected $limit;

  /**
   * @param array $objects
   * @param FacebookResponse $response
   */
  public function __construct(
    array $objects,
    FacebookResponse $response) {

    $this->objects = $objects;
    $this->response = $response;

    /* @var $resp \StdClass */
    $resp = $response->getResponse();

    $this->before = isset($resp->paging->cursors->before)
      ? $resp->paging->cursors->before
      : null;

    $this->after = isset($resp->paging->cursors->after)
      ? $resp->paging->cursors->after
      : null;
  }

  /**
   * @return AbstractObject[]
   */
  public function getObjects() {
    return $this->objects;
  }

  /**
   * @return FacebookResponse
   */
  public function getResponse() {
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

  public function rewind() {
    $this->position = 0;
  }

  /**
   * @return AbstractObject
   */
  public function current() {
    return $this->objects[$this->position];
  }

  /**
   * @return int
   */
  public function key() {
    return $this->position;
  }

  public function next() {
    ++$this->position;
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
   * @var mixed $offset
   * @var mixed $value
   */
  public function offsetSet($offset, $value) {
    if (is_null($offset)) {
      $this->objects[] = $value;
    } else {
      $this->objects[$offset] = $value;
    }
  }

  /**
   * @var mixed $offset
   */
  public function offsetExists($offset) {
    return isset($this->objects[$offset]);
  }

  /**
   * @var mixed $offset
   */
  public function offsetUnset($offset) {
    unset($this->objects[$offset]);
  }

  /**
   * @var mixed $offset
   */
  public function offsetGet($offset) {
    return isset($this->objects[$offset]) ? $this->objects[$offset] : null;
  }

}
