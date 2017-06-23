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

class FileParameter {

  /**
   * @var string
   */
  protected $path;

  /**
   * @var string|null
   */
  protected $mimeType;

  /**
   * @var string|null
   */
  protected $name;

  /**
   * @param string $path
   */
  public function __construct($path) {
    $this->path = $path;
  }

  /**
   * @return string
   */
  public function getPath() {
    return $this->path;
  }

  /**
   * @return null|string
   */
  public function getMimeType() {
    return $this->mimeType;
  }

  /**
   * @param null|string $mime_type
   * @return $this
   */
  public function setMimeType($mime_type) {
    $this->mimeType = $mime_type;
    return $this;
  }

  /**
   * @return null|string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param null|string $name
   * @return $this
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }
}
