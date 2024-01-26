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

use ArrayAccess;

class Content implements ArrayAccess {
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
    $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
    $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
    $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    $this->container['delivery_category'] = isset($data['delivery_category']) ? $data['delivery_category'] : null;
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
   * Get Item Price.
   * @return float Item Price
   */
  public function getItemPrice() {
    return $this->container['item_price'];
  }

  /**
   * Set Item Price.
   * @param float $item_price single item price
   * @return Content
   */
  public function setItemPrice($item_price) {
    $this->container['item_price'] = $item_price;
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
   * Get description.
   * @return string description
   */
  public function getDescription() {
    return $this->container['description'];
  }

  /**
   * Sets description.
   * @param string $description description
   * @return $this
   */
  public function setDescription($description) {
    $this->container['description'] = $description;
    return $this;
  }


  /**
   * Get brand.
   * @return string brand
   */
  public function getBrand() {
    return $this->container['brand'];
  }

  /**
   * Sets brand.
   * @param string $brand brand
   * @return $this
   */
  public function setBrand($brand) {
    $this->container['brand'] = $brand;
    return $this;
  }


  /**
   * Get category.
   * @return string category
   */
  public function getCategory() {
    return $this->container['category'];
  }

  /**
   * Sets category.
   * @param string $category category
   * @return $this
   */
  public function setCategory($category) {
    $this->container['category'] = $category;
    return $this;
  }

  /**
   * Gets Type of delivery for a purchase event.
   * @return string delivery_category
   */
  public function getDeliveryCategory() {
    return $this->container['delivery_category'];
  }

  /**
   * Sets Type of delivery for a purchase event.
   * @param string $delivery_category
   * @return $this
   */
  public function setDeliveryCategory($delivery_category) {
    $this->container['delivery_category'] = $delivery_category;
    return $this;
  }

  /**
   * Returns true if offset exists. False otherwise.
   * @param integer $offset Offset
   * @return boolean
   */
  public function offsetExists($offset) : bool {
    return isset($this->container[$offset]);
  }

  /**
   * Gets offset.
   * @param integer $offset Offset
   * @return mixed
   */
  public function offsetGet($offset) : mixed {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

  /**
   * Sets value based on offset.
   * @param integer $offset Offset
   * @param mixed $value Value to be set
   * @return void
   */
  public function offsetSet($offset, $value) : void {
    if (is_null($offset)) {
      $this->container[] = $value;
    } else {
      $this->container[$offset] = $value;
    }
  }

  /**
   * Unsets offset.
   * @param integer $offset Offset
   * @return void
   */
  public function offsetUnset($offset) : void {
    unset($this->container[$offset]);
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
   * Normalize
   * @return array
   */
  public function normalize() {
    $normalized_payload = array(
      'id' => $this->container['product_id'],
      'quantity' => $this->container['quantity'],
      'item_price' => $this->container['item_price'],
      'title' => $this->container['title'],
      'description' => $this->container['description'],
      'brand' => $this->container['brand'],
      'category' => $this->container['category'],
      'delivery_category' => Normalizer::normalize(
        'delivery_category', $this->container['delivery_category']
      ),
    );

    $normalized_payload = array_filter($normalized_payload);

    return $normalized_payload;
  }

}
