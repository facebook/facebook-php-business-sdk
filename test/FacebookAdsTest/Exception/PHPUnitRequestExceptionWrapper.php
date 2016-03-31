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

namespace FacebookAdsTest\Exception;

use FacebookAds\Http\Exception\RequestException;

class PHPUnitRequestExceptionWrapper
  extends \PHPUnit_Framework_ExceptionWrapper {

  /**
   * @var RequestException
   */
  protected $wrappedException;

  /**
   * @param RequestException $e
   */
  public function __construct(RequestException $e) {
    $this->wrappedException = $e;
    parent::__construct($e);
  }

  /**
   * @return RequestException
   */
  public function getWrappedException() {
    return $this->wrappedException;
  }

  protected function requestToString(RequestException $e) {
    if ($e->getResponse() === null) {
      return '-';
    }

    $request = $e->getResponse()->getRequest();

    return sprintf(
      "%s %s\n%s",
      $request->getMethod(),
      $request->getUrl(),
      "    ".str_replace("\n", "\n    ", json_encode(
        $request->getFileParams()->getArrayCopy()
          + $request->getBodyParams()->getArrayCopy(),
        JSON_PRETTY_PRINT)));
  }

  /**
   * @return string
   */
  protected function blameFieldSpecsToString() {
    return implode(", ", array_map(function($value) {
      return $value[0];
    }, $this->getWrappedException()->getErrorBlameFieldSpecs()));
  }

  /**
   * @return string
   */
  public function __toString() {
    $string = \PHPUnit_Framework_TestFailure::exceptionToString($this);

    $e = $this->getWrappedException();

    $string .= "\n  Request: ".$this->requestToString($e)."\n"
      ."  HTTP status Code: ".$e->getHttpStatusCode()."\n"
      ."  Is transient: ".($e->isTransient() ? 'true' : 'false')."\n"
      ."  Code: ".$e->getCode()."\n"
      ."  Error Subcode: ".$e->getErrorSubcode()."\n"
      ."  Error User Title: ".$e->getErrorUserTitle()."\n"
      ."  Error User Message: ".$e->getErrorUserMessage()."\n";

    if ($e->getErrorBlameFieldSpecs()) {
      $string .= "  Error Blame Fields: ".$this->blameFieldSpecsToString()."\n";
    }

    if ($trace = \PHPUnit_Util_Filter::getFilteredStacktrace($this)) {
      $string .= "\n" . $trace;
    }

    if ($this->previous) {
      $string .= "\nCaused by\n" . $this->previous;
    }

    return $string;
  }
}
