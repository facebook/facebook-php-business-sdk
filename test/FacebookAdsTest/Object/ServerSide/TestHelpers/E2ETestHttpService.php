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

namespace FacebookAdsTest\Object\ServerSide\TestHelpers;
use FacebookAds\Object\ServerSide\HttpServiceInterface;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;

class E2ETestHttpService implements HttpServiceInterface {
  public function executeRequest($url, $method, array $curl_options, array $headers, array $params) {
    $multipart_contents = [];

    foreach ($params as $key => $value) {
      if ($key === 'data') {
        $multipart_contents[] = [
          'name' => $key,
          'contents' => \GuzzleHttp\json_encode($value),
          'headers' => array('Content-Type' => 'multipart/form-data'),
        ];
      } else {
        $multipart_contents[] = [
          'name' => $key,
          'contents' => $value,
          'headers' => array('Content-Type' => 'multipart/form-data'),
        ];
      }
    }

    $body = new MultipartStream($multipart_contents);
    $request = new Request($method, $url, $headers, $body);

    $handler_stack = HandlerStack::create(
      new CurlHandler(['options' => $curl_options])
    );

    $client = new Client(['handler' => $handler_stack]);
    return $client->send($request);
  }
}
