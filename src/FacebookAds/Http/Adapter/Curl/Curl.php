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

namespace FacebookAds\Http\Adapter\Curl;

use FacebookAds\Http\FileParameter;

class Curl extends AbstractCurl {

  /**
   * @throws \RuntimeException
   */
  public function __construct() {
    parent::__construct();
    if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
      throw new \RuntimeException("Unsupported Curl version");
    }
  }

  /**
   * @param string $string
   * @return string
   */
  public function escape($string) {
    return rawurlencode($string);
  }

  /**
   * @param int $bitmask
   * @return int
   */
  public function pause($bitmask) {
    return 0;
  }

  /**
   * FIXME should introduce v2.10 breaking change:
   * implement abstract support for FileParameter in AdapterInterface
   *
   * @param string|FileParameter $filepath
   * @return string
   */
  public function preparePostFileField($filepath) {
    $mime_type = $name = '';
    if ($filepath instanceof FileParameter) {
      $mime_type = $filepath->getMimeType() !== null
        ? sprintf(';type=%s', $filepath->getMimeType())
        : '';
      $name = $filepath->getName() !== null
        ? sprintf(';filename=%s', $filepath->getName())
        : '';
      $filepath = $filepath->getPath();
    }
    return sprintf('@%s%s%s', $filepath, $mime_type, $name);
  }

  /**
   * @return void
   */
  public function reset() {
    $this->handle && curl_close($this->handle);
    $this->handle = curl_init();
  }

  /**
   * @param int $errornum
   * @return NULL|string
   */
  public static function strerror($errornum) {
    return curl_strerror($errornum);
  }

  /**
   * @param string $string
   * @return bool|string
   */
  public function unescape($string) {
    return curl_unescape($this->handle, $string);
  }
}
