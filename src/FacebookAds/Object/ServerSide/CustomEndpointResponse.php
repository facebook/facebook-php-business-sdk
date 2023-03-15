<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAds\Object\ServerSide;

/**
 * Server side response to a custom endpoint
 */
class CustomEndpointResponse {
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $param_types = array(
        'message' => 'string',
        'response_code' => 'string'
    );

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null) {
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
    }

    /**
     * Gets the string representation of the object
     * @return string
     */
    public function __toString() {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode($this, JSON_PRETTY_PRINT);
        }
        return json_encode($this);
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage(): string {
        return $this->container['message'];
    }

    /**
     * Gets response code
     * @return string
     */
    public function getResponseCode(): ?string {
        return $this->container['response_code'];
    }
}
