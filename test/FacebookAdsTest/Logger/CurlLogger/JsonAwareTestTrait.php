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

namespace FacebookAdsTest\Logger\CurlLogger;

use FacebookAds\Logger\CurlLogger\JsonNode;

trait JsonAwareTestTrait {

  /**
   * @return array
   */
  public function parameterProvider() {
    $base = array(
      'appsecret_proof' => '<APPSECRET_PROOF>',
      'access_token' => '<ACCESS_TOKEN>',
      'query_field' => 'query_value',
    );

    return array(
      array(
        $base + array(
          'json_field' => array(
            'query_field' => 'query_value',
          ),
        )
      ),
      array(
        $base + array(
          'json_field' => array(
            'query_field' => 'query_value',
            'query_field_1' => 'query_value_1',
            'query_field_2' => 'query_value_2',
          ),
        )
      ),
      array(
        $base + array(
          'json_field' => array(
            'query_field' => str_repeat('x', JsonNode::EXPLOSION_THRESHOLD + 1),
          ),
        ),
      ),
      array(
        $base + array(
          'json_field' => array(),
        ),
      ),
      array(
        $base + array(
          'json_field' => array(
            'vector_value_1',
            'vector_value_2',
            'vector_value_3',
          ),
        ),
      ),
      array(
        array(),
      ),
      array(
        new \StdClass(),
      )
    );
  }
}
