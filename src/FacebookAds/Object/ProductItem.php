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

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\ProductItemFields;
use FacebookAds\Object\Values\CommentCommentPrivacyValueValues;
use FacebookAds\Object\Values\ProductItemAgeGroupValues;
use FacebookAds\Object\Values\ProductItemAvailabilityValues;
use FacebookAds\Object\Values\ProductItemConditionValues;
use FacebookAds\Object\Values\ProductItemGenderValues;
use FacebookAds\Object\Values\ProductItemReviewStatusValues;
use FacebookAds\Object\Values\ProductItemShippingWeightUnitValues;
use FacebookAds\Object\Values\ProductItemVisibilityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductItem extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'products';
  }

  /**
   * @return ProductItemFields
   */
  public static function getFieldsEnum() {
    return ProductItemFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AgeGroup'] = ProductItemAgeGroupValues::getInstance()->getValues();
    $ref_enums['Availability'] = ProductItemAvailabilityValues::getInstance()->getValues();
    $ref_enums['Condition'] = ProductItemConditionValues::getInstance()->getValues();
    $ref_enums['Gender'] = ProductItemGenderValues::getInstance()->getValues();
    $ref_enums['ReviewStatus'] = ProductItemReviewStatusValues::getInstance()->getValues();
    $ref_enums['ShippingWeightUnit'] = ProductItemShippingWeightUnitValues::getInstance()->getValues();
    $ref_enums['Visibility'] = ProductItemVisibilityValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createComment(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'object_id' => 'string',
      'parent_comment_id' => 'Object',
      'nectar_module' => 'string',
      'attachment_id' => 'string',
      'attachment_url' => 'string',
      'attachment_share_url' => 'string',
      'feedback_source' => 'string',
      'facepile_mentioned_ids' => 'list<string>',
      'is_offline' => 'bool',
      'comment_privacy_value' => 'comment_privacy_value_enum',
      'message' => 'string',
      'text' => 'string',
      'tracking' => 'string',
    );
    $enums = array(
      'comment_privacy_value_enum' => CommentCommentPrivacyValueValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_sets',
      new ProductSet(),
      'EDGE',
      ProductSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'image_height' => 'unsigned int',
      'image_width' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new ProductItem(),
      'NODE',
      ProductItem::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'availability' => 'availability_enum',
      'brand' => 'string',
      'category' => 'string',
      'currency' => 'string',
      'condition' => 'condition_enum',
      'description' => 'string',
      'image_url' => 'Object',
      'name' => 'string',
      'price' => 'unsigned int',
      'product_type' => 'string',
      'url' => 'Object',
      'visibility' => 'visibility_enum',
      'additional_image_urls' => 'list<string>',
      'additional_variant_attributes' => 'Object',
      'checkout_url' => 'string',
      'color' => 'string',
      'custom_data' => 'map',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'expiration_date' => 'string',
      'gender' => 'gender_enum',
      'gtin' => 'string',
      'inventory' => 'unsigned int',
      'manufacturer_part_number' => 'string',
      'mobile_link' => 'Object',
      'material' => 'string',
      'offer_price_amount' => 'unsigned int',
      'offer_price_end_date' => 'Object',
      'offer_price_start_date' => 'Object',
      'ordering_index' => 'unsigned int',
      'pattern' => 'string',
      'sale_price' => 'unsigned int',
      'sale_price_end_date' => 'datetime',
      'sale_price_start_date' => 'datetime',
      'short_description' => 'string',
      'size' => 'string',
      'start_date' => 'string',
      'ios_url' => 'string',
      'ios_app_store_id' => 'unsigned int',
      'ios_app_name' => 'string',
      'iphone_url' => 'string',
      'iphone_app_store_id' => 'unsigned int',
      'iphone_app_name' => 'string',
      'ipad_url' => 'string',
      'ipad_app_store_id' => 'unsigned int',
      'ipad_app_name' => 'string',
      'android_url' => 'string',
      'android_package' => 'string',
      'android_class' => 'string',
      'android_app_name' => 'string',
      'windows_phone_url' => 'string',
      'windows_phone_app_id' => 'string',
      'windows_phone_app_name' => 'string',
      'retailer_id' => 'string',
    );
    $enums = array(
      'availability_enum' => ProductItemAvailabilityValues::getInstance()->getValues(),
      'condition_enum' => ProductItemConditionValues::getInstance()->getValues(),
      'visibility_enum' => ProductItemVisibilityValues::getInstance()->getValues(),
      'gender_enum' => ProductItemGenderValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new ProductItem(),
      'NODE',
      ProductItem::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
