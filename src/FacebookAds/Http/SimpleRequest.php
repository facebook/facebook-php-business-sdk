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

class SimpleRequest extends Request{

  /**
   * @var string
   */
  const DEFAULT_WWWW_BASE_DOMAIN = 'connect.facebook.net';

  /**
   * @param Client $client
   */
  public function __construct(Client $client) {
    parent::__construct($client);
    //Setting the curl options inside the client to avoid SSL certificates usage
    $client -> getAdapter()->setOpts( new \ArrayObject(array(
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_SSL_VERIFYPEER => 0)));
  }

  /**
   * @return string
   */
  public function getDomain() {
    if ($this->domain === null) {
      $this->domain = sprintf(
        "%s",
        self::DEFAULT_WWWW_BASE_DOMAIN);
    }

    return $this->domain;
  }

  /**
   * @return string
   */
  public function getUrl() {
    $delimiter = null;
    if ($this->getQueryParams()->count() ) {
      $delimiter = strpos($this->getPath(), '?') ? '&' : '?';
    }
    return $this->getProtocol().$this->getDomain()
        .'/'.$this->getPath()
        .$delimiter
        .http_build_query($this->getQueryParams()->export(), '', '&');
  }
}
