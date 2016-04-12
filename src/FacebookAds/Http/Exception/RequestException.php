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

namespace FacebookAds\Http\Exception;

use FacebookAds\Exception\Exception;
use FacebookAds\Http\ResponseInterface;

class RequestException extends Exception {

  /**
   * @var ResponseInterface|null
   */
  protected $response;

  /**
   * @var int|null
   */
  protected $errorCode;

  /**
   * @var int|null
   */
  protected $errorSubcode;

  /**
   * @var string|null
   */
  protected $errorMessage;

  /**
   * @var string|null
   */
  protected $errorUserTitle;

  /**
   * @var string|null
   */
  protected $errorUserMessage;

  /**
   * @var int|null
   */
  protected $errorType;

  /**
   * @var array|null
   */
  protected $errorBlameFieldSpecs;

  /**
   * @param ResponseInterface $response
   */
  public function __construct(ResponseInterface $response) {
    $this->response = $response;
    $error_data = static::getErrorData($response->getContent());

    parent::__construct($error_data['message'], $error_data['code']);

    $this->errorSubcode = $error_data['error_subcode'];
    $this->errorUserTitle = $error_data['error_user_title'];
    $this->errorUserMessage = $error_data['error_user_msg'];
    $this->errorBlameFieldSpecs = $error_data['error_blame_field_specs'];
  }

  /**
   * @return ResponseInterface|null
   */
  public function getResponse() {
    return $this->response;
  }

  /**
   * @param array $array
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  protected static function idx(array $array, $key, $default = null) {
    return array_key_exists($key, $array)
      ? $array[$key]
      : $default;
  }

  /**
   * @param array $response_data
   * @return array
   */
  protected static function getErrorData(array $response_data) {
    $error_data = static::idx($response_data, 'error', array());

    return array(
      'code' =>
        static::idx($error_data, 'code', static::idx($response_data, 'code')),
      'error_subcode' => static::idx($error_data, 'error_subcode'),
      'message' => static::idx($error_data, 'message'),
      'error_user_title' => static::idx($error_data, 'error_user_title'),
      'error_user_msg' => static::idx($error_data, 'error_user_msg'),
      'error_blame_field_specs' =>
        static::idx(static::idx($error_data, 'error_data', array()),
          'blame_field_specs'),
      'type' => static::idx($error_data, 'type'),
    );
  }

  /**
   * Process an error payload from the Graph API and return the appropriate
   * exception subclass.
   * @param ResponseInterface $response
   * @return RequestException
   */
  public static function create(ResponseInterface $response) {
    $error_data = static::getErrorData($response->getContent());
    if (in_array(
      $error_data['error_subcode'], array(458, 459, 460, 463, 464, 467))
      || in_array($error_data['code'], array(100, 102, 190))
      || $error_data['type'] === 'OAuthException') {

      return new AuthorizationException($response);
    } elseif (in_array($error_data['code'], array(1, 2))) {

      return new ServerException($response);
    } elseif (in_array($error_data['code'], array(4, 17, 341))) {

      return new ThrottleException($response);
    } elseif ($error_data['code'] == 506) {

      return new ClientException($response);
    } elseif ($error_data['code'] == 10
      || ($error_data['code'] >= 200 && $error_data['code'] <= 299)) {

      return new PermissionException($response);
    } else {

      return new self($response);
    }
  }

  /**
   * @return int
   */
  public function getHttpStatusCode() {
    return $this->response->getStatusCode();
  }

  /**
   * @return int|null
   */
  public function getErrorSubcode() {
    return $this->errorSubcode;
  }

  /**
   * @return string|null
   */
  public function getErrorUserTitle() {
    return $this->errorUserTitle;
  }

  /**
   * @return string|null
   */
  public function getErrorUserMessage() {
    return $this->errorUserMessage;
  }

  /**
   * @return array|null
   */
  public function getErrorBlameFieldSpecs() {
    return $this->errorBlameFieldSpecs;
  }

  /**
   * @return bool
   */
  public function isTransient() {
    if ($this->getResponse() !== null) {
      return false;
    }

    $body = $this->getResponse()->getBody();

    return array_key_exists('error', $body)
      && array_key_exists('is_transient', $body['error'])
      && $body['error']['is_transient'];
  }
}
