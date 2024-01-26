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

namespace FacebookAds\Object\BusinessDataAPI;

class Content {
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
    $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;;
    $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    $this->container['price'] = isset($data['price']) ? $data['price'] : null;
    $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;;
    $this->container['external_content_id'] = isset($data['external_content_id']) ? $data['external_content_id'] : null;
  }

  /**
   * Get Product Id.
   * @return string Product Id
   */
  public function getProductId() {
    return $this->container['product_id'];
  }

  /**
   * Sets product id.
   * @param string $product_id product id
   * @return $this
   */
  public function setProductId($product_id) {
    $this->container['product_id'] = $product_id;
    return $this;
  }

  /**
   * Get number of product.
   * @return integer quantity
   */
  public function getQuantity() {
    return $this->container['quantity'];
  }

  /**
   * Set number of product.
   * @param integer $quantity number of items
   * @return $this
   */
  public function setQuantity($quantity) {
    $this->container['quantity'] = $quantity;
    return $this;
  }

  /**
   * Get total price.
   * @return float Price
   */
  public function getPrice() {
    return $this->container['price'];
  }

  /**
   * Set total price.
   * @param float Price
   * @return $this
   */
  public function setPrice($price) {
    $this->container['price'] = $price;
    return $this;
  }

  /**
   * Get title.
   * @return string title
   */
  public function getTitle() {
    return $this->container['title'];
  }

  /**
   * Sets title.
   * @param string $title title
   * @return $this
   */
  public function setTitle($title) {
    $this->container['title'] = $title;
    return $this;
  }

  /**
   * Gets the string presentation of the object
   * @return string
   */
  public function __toString() {
    if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
      return json_encode($this, JSON_PRETTY_PRINT);
    }

    return json_encode($this);
  }

  /**
   * convert to Json
   * @return array
   */
  public function toJson() {
    $request = array(
      'id' => $this->container['product_id'],
      'quantity' => $this->container['quantity'],
      'price' => $this->container['price'],
      'title' => $this->container['title'],
      'tax' => $this->container['tax'],
      'external_content_id' => $this->container['external_content_id'],
    );

    $request = array_filter($request);
    return $request;
  }
}
