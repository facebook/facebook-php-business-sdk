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

namespace FacebookAds\Object\Signal;

use FacebookAds\Object\BusinessDataAPI\Content as BusinessDataContent;
use FacebookAds\Object\ServerSide\Content as ServerSideContent;

class Content {
  /**
   * Associative array for storing property values for Business Data API
   * @var BusinessDataContent
   */
  protected $businessDataContent= null;

  /**
   * Associative array for storing property values for Conversion API
   * @var ServerSideContent
   */
  protected $serverSideContent = null;

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initializing the model
   */
  public function __construct(array $data = null) {
    $this->businessDataContent = new BusinessDataContent($data);
    $this->serverSideContent = new ServerSideContent($data);
  }

  /**
   * Get Product Id.
   * @return array Product Id
   */
  public function getProductId() {
    return Util::constructResponse($this->serverSideContent->getProductId(), $this->businessDataContent->getProductId());
  }

  /**
   * Sets product id.
   * @param string $product_id product id
   * @return $this
   */
  public function setProductId($product_id) {
    $this->businessDataContent->setProductId($product_id);
    $this->serverSideContent->setProductId($product_id);
    return $this;
  }

  /**
   * Get number of product.
   * @return integer quantity
   */
  public function getQuantity() {
    return Util::constructResponse($this->serverSideContent->getQuantity(), $this->businessDataContent->getQuantity());
  }

  /**
   * Set number of product.
   * @param integer $quantity number of items
   * @return $this
   */
  public function setQuantity($quantity) {
    $this->businessDataContent->setQuantity($quantity);
    $this->serverSideContent->setQuantity($quantity);
    return $this;
  }

  /**
   * Get total price.
   * @return array Price
   */
  public function getPrice() {
    return Util::constructResponse(null, $this->businessDataContent->getPrice());
  }

  /**
   * Set total price.
   * @param float Price
   * @return $this
   */
  public function setPrice($price) {
    $this->businessDataContent->setPrice($price);
    return $this;
  }


  /**
   * Get title.
   * @return array title
   */
  public function getTitle() {
    return Util::constructResponse($this->serverSideContent->getTitle(), $this->businessDataContent->getTitle());
  }

  /**
   * Sets title.
   * @param string $title title
   * @return $this
   */
  public function setTitle($title) {
    $this->businessDataContent->setTitle($title);
    $this->serverSideContent->setTitle($title);
    return $this;
  }

  /**
   * Get Item Price.
   * @return array Item Price
   */
  public function getItemPrice() {
    return Util::constructResponse($this->serverSideContent->getItemPrice(), null);
  }

  /**
   * Set Item Price.
   * @param float $item_price single item price
   * @return Content
   */
  public function setItemPrice($item_price) {
    $this->serverSideContent->setItemPrice($item_price);
    return $this;
  }

  /**
   * Get description.
   * @return array description
   */
  public function getDescription() {
    return Util::constructResponse($this->serverSideContent->getDescription(), null);
  }

  /**
   * Sets description.
   * @param string $description description
   * @return $this
   */
  public function setDescription($description) {
    $this->serverSideContent->setDescription($description);
    return $this;
  }

  /**
   * Get brand.
   * @return array brand
   */
  public function getBrand() {
    return Util::constructResponse($this->serverSideContent->getBrand(), null);
  }

  /**
   * Sets brand.
   * @param string $brand brand
   * @return $this
   */
  public function setBrand($brand) {
    $this->serverSideContent->setBrand($brand);
    return $this;
  }

  /**
   * Get category.
   * @return array category
   */
  public function getCategory() {
    return Util::constructResponse($this->serverSideContent->getCategory(), null);
  }

  /**
   * Sets category.
   * @param string $category category
   * @return $this
   */
  public function setCategory($category) {
    $this->serverSideContent->setCategory($category);
    return $this;
  }

  /**
   * Gets Type of delivery for a purchase event.
   * @return array delivery_category
   */
  public function getDeliveryCategory() {
    return Util::constructResponse($this->serverSideContent->getDeliveryCategory(), null);
  }

  /**
   * Sets Type of delivery for a purchase event.
   * @param string $delivery_category
   * @return $this
   */
  public function setDeliveryCategory($delivery_category) {
    $this->serverSideContent->setDeliveryCategory($delivery_category);
    return $this;
  }

  /**
   * Gets content for Business Data API
   * @return BusinessDataContent
   */
  public function getBusinessDataContent() {
    return $this->businessDataContent;
  }

  /**
   * Gets content for Conversion API
   * @return ServerSideContent
   */
  public function getServerSideContent() {
    return $this->serverSideContent;
  }
}
