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

namespace FacebookAds\Http;

interface RequestInterface {

  /**
   * @var string
   */
  const METHOD_DELETE = 'DELETE';

  /**
   * @var string
   */
  const METHOD_GET = 'GET';

  /**
   * @var string
   */
  const METHOD_POST = 'POST';

  /**
   * @var string
   */
  const METHOD_PUT = 'PUT';

  /**
   * @param Client $client
   */
  public function __construct(Client $client);

  /**
   * @return Client
   */
  public function getClient();

  /**
   * @return Headers
   */
  public function getHeaders();

  /**
   * @param Headers $headers
   */
  public function setHeaders(Headers $headers);

  /**
   * @return string
   */
  public function getProtocol();

  /**
   * @param string $protocol
   */
  public function setProtocol($protocol);

  /**
   * @return string
   */
  public function getDomain();

  /**
   * @param string $domain
   */
  public function setDomain($domain);

  /**
   * @param string $last_level_domain
   */
  public function setLastLevelDomain($last_level_domain);

  /**
   * @return string
   */
  public function getMethod();

  /**
   * @param string $method
   */
  public function setMethod($method);

  /**
   * @return string
   */
  public function getPath();

  /**
   * @param string $version
   */
  public function setGraphVersion($version);

  /**
   * @return mixed
   */
  public function getGraphVersion();

  /**
   * @param string $path
   */
  public function setPath($path);

  /**
   * @return Parameters
   */
  public function getQueryParams();

  /**
   * @param Parameters $params
   */
  public function setQueryParams(Parameters $params);

  /**
   * @return string
   */
  public function getUrl();

  /**
   * @return Parameters
   */
  public function getBodyParams();

  /**
   * @param Parameters $params
   */
  public function setBodyParams(Parameters $params);

  /**
   * @return Parameters
   */
  public function getFileParams();

  /**
   * @param Parameters $params
   */
  public function setFileParams(Parameters $params);

  /**
   * @return ResponseInterface
   */
  public function execute();
}
