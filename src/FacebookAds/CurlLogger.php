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

use Facebook\FacebookRequest;

class CurlLogger extends \Psr\Log\AbstractLogger {

  /**
   * @var bool
   */
  protected $shouldEscapeQuotes = false;

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @param resource $handle
   */
  public function __construct($handle=null) {
    $this->handle = $handle ?: STDOUT;
  }

  /**
   * Whether we should escape quotes in data parameters
   *
   * @param bool $escape
   */
  public function setEscapeQuotes($escape) {
    $this->shouldEscapeQuotes = $escape;
  }

  /**
   * Logs with an arbitrary level.
   *
   * @param mixed $level
   * @param string $message
   * @param array $context
   * @return null
   */
  public function log($level, $message, array $context = array()) {
    if (strpos($message, 'HTTP') !== false) {
      fwrite($this->handle, $this->parseRequest($message)."\n\n");
    }
  }

  /**
   * Takes a request and converts it into it's curl equivelent
   * @param string $request
   * @return string
   */
  public function parseRequest($request) {
    $param_name = '';
    $curl = 'curl';

    $parts = explode(' ', $request, 4);
    switch ($parts[1]) {
      case 'GET':
        $param_name = '-d';
        $curl .= ' -G';
        break;
      case 'POST':
        $param_name = '-F';
        break;
      case 'DELETE':
        $param_name = '-d';
        $curl .= ' -X DELETE';
        break;
      default:
        throw new \Exception('Method not supported yet: '.$parts[1]);
    }

    // Remove Ad Account IDs
    $path = preg_replace('/act_\d*?\//i', 'act_<AD_ACCOUNT_ID>/', $parts[2]);

    // Build the URL
    $url = FacebookRequest::BASE_GRAPH_URL.'/'
      .FacebookRequest::GRAPH_API_VERSION
      .$path;

    // Extract Parameters
    $params = json_decode($parts[3]);
    $data = '';
    foreach ($params as $k=>$param) {
      if (is_scalar($param)) {
        $data .= '  '.$param_name." '{$k}=$param' \\\n";
      } else {
        $data .= '  '.$param_name." '{$k}=".json_encode($param)."' \\\n";
      }
    }

    // Add placeholder for access token
    $data .= '  '.$param_name." 'access_token=<ACCESS_TOKEN>' \\\n";

    // Escape quotes if needed, useful for documentation
    if ($this->shouldEscapeQuotes) {
      $data = str_replace('"', '\"', $data);
    }

    $curl .= " \\\n".$data.$url;
    return $curl;
  }
}
