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

namespace FacebookAds\Http\Exception;

use FacebookAds\Exception\Exception;

class RequestException extends Exception {

  /**
   * @var int Status code for the response causing the exception
   */
  protected $statusCode;

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
   * @param array $response_data The response from the Graph API
   * @param int $status_code
   */
  public function __construct(
    array $response_data,
    $status_code) {

    $this->statusCode = $status_code;
    $errorData = static::getErrorData($response_data);

    parent::__construct($errorData['message'], $errorData['code']);

    $this->errorSubcode = $errorData['error_subcode'];
    $this->errorUserTitle = $errorData['error_user_title'];
    $this->errorUserMessage = $errorData['error_user_msg'];
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
      'type' => static::idx($error_data, 'type'),
    );
  }

  /**
   * Process an error payload from the Graph API and return the appropriate
   * exception subclass.
   * @param array $response_data the decoded response from the Graph API
   * @param int $status_code the HTTP response code
   * @return RequestException
   */
  public static function create(array $response_data, $status_code) {
    $errorData = static::getErrorData($response_data);

    if (in_array(
      $errorData['error_subcode'], array(458, 459, 460, 463, 464, 467))
      || in_array($errorData['code'], array(100, 102, 190))
      || $errorData['type'] === 'OAuthException') {

      return new AuthorizationException($response_data, $status_code);
    } elseif (in_array($errorData['code'], array(1, 2))) {

      return new ServerException($response_data, $status_code);
    } elseif (in_array($errorData['code'], array(4, 17, 341))) {

      return new ThrottleException($response_data, $status_code);
    } elseif ($errorData['code'] == 506) {

      return new ClientException($response_data, $status_code);
    } elseif ($errorData['code'] == 10
      || ($errorData['code'] >= 200 && $errorData['code'] <= 299)) {

      return new PermissionException($response_data, $status_code);
    } else {

      return new self($response_data, $status_code);
    }
  }

  /**
   * @return int
   */
  public function getHttpStatusCode() {
    return $this->statusCode;
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
}
