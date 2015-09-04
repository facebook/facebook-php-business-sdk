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

namespace FacebookAds\Http;

class Response implements ResponseInterface {

  /**
   * @var RequestInterface
   */
  protected $request;

  /**
   * @var int
   */
  protected $statusCode;

  /**
   * @var Headers
   */
  protected $headers;

  /**
   * @var string
   */
  protected $body;

  /**
   * @var mixed
   */
  protected $content;

  /**
   * @return RequestInterface
   */
  public function getRequest() {
    return $this->request;
  }

  /**
   * @param RequestInterface $request
   */
  public function setRequest(RequestInterface $request) {
    $this->request = $request;
  }

  /**
   * @return int
   */
  public function getStatusCode() {
    return $this->statusCode;
  }

  /**
   * @param int $status_code
   */
  public function setStatusCode($status_code) {
    $this->statusCode = $status_code;
  }

  /**
   * @return Headers
   */
  public function getHeaders() {
    if ($this->headers === null) {
      $this->headers = new Headers();
    }

    return $this->headers;
  }

  /**
   * @param Headers $headers
   */
  public function setHeaders(Headers $headers) {
    $this->headers = $headers;
  }

  /**
   * @return string
   */
  public function getBody() {
    return $this->body;
  }

  /**
   * @param string $body
   */
  public function setBody($body) {
    $this->body = $body;
    $this->content = null;
  }

  /**
   * @return array|null
   */
  public function getContent() {
    if ($this->content === null) {
      $this->content = json_decode($this->getBody(), true);
    }

    return $this->content;
  }
}
