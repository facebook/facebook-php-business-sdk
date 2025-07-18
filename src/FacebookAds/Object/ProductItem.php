<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\ProductItemFields;
use FacebookAds\Object\Values\OverrideDetailsTypeValues;
use FacebookAds\Object\Values\ProductItemAgeGroupValues;
use FacebookAds\Object\Values\ProductItemAvailabilityValues;
use FacebookAds\Object\Values\ProductItemCapabilityToReviewStatusValues;
use FacebookAds\Object\Values\ProductItemCommerceTaxCategoryValues;
use FacebookAds\Object\Values\ProductItemConditionValues;
use FacebookAds\Object\Values\ProductItemErrorPriorityValues;
use FacebookAds\Object\Values\ProductItemErrorTypeValues;
use FacebookAds\Object\Values\ProductItemGenderValues;
use FacebookAds\Object\Values\ProductItemImageFetchStatusValues;
use FacebookAds\Object\Values\ProductItemMarkedForProductLaunchValues;
use FacebookAds\Object\Values\ProductItemOriginCountryValues;
use FacebookAds\Object\Values\ProductItemReviewStatusValues;
use FacebookAds\Object\Values\ProductItemShippingWeightUnitValues;
use FacebookAds\Object\Values\ProductItemVideoFetchStatusValues;
use FacebookAds\Object\Values\ProductItemVisibilityValues;
use FacebookAds\Object\Values\ProductItemWaComplianceCategoryValues;

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
    $ref_enums['CapabilityToReviewStatus'] = ProductItemCapabilityToReviewStatusValues::getInstance()->getValues();
    $ref_enums['Condition'] = ProductItemConditionValues::getInstance()->getValues();
    $ref_enums['Gender'] = ProductItemGenderValues::getInstance()->getValues();
    $ref_enums['ImageFetchStatus'] = ProductItemImageFetchStatusValues::getInstance()->getValues();
    $ref_enums['ReviewStatus'] = ProductItemReviewStatusValues::getInstance()->getValues();
    $ref_enums['ShippingWeightUnit'] = ProductItemShippingWeightUnitValues::getInstance()->getValues();
    $ref_enums['VideoFetchStatus'] = ProductItemVideoFetchStatusValues::getInstance()->getValues();
    $ref_enums['Visibility'] = ProductItemVisibilityValues::getInstance()->getValues();
    $ref_enums['CommerceTaxCategory'] = ProductItemCommerceTaxCategoryValues::getInstance()->getValues();
    $ref_enums['ErrorPriority'] = ProductItemErrorPriorityValues::getInstance()->getValues();
    $ref_enums['ErrorType'] = ProductItemErrorTypeValues::getInstance()->getValues();
    $ref_enums['MarkedForProductLaunch'] = ProductItemMarkedForProductLaunchValues::getInstance()->getValues();
    $ref_enums['OriginCountry'] = ProductItemOriginCountryValues::getInstance()->getValues();
    $ref_enums['WaComplianceCategory'] = ProductItemWaComplianceCategoryValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getChannelsToIntegrityStatus(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/channels_to_integrity_status',
      new CatalogItemChannelsToIntegrityStatus(),
      'EDGE',
      CatalogItemChannelsToIntegrityStatus::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOverrideDetails(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'keys' => 'list<string>',
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => OverrideDetailsTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/override_details',
      new OverrideDetails(),
      'EDGE',
      OverrideDetails::getFieldsEnum()->getValues(),
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

  public function getVideosMetadata(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/videos_metadata',
      new DynamicVideoMetadata(),
      'EDGE',
      DynamicVideoMetadata::getFieldsEnum()->getValues(),
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
      'catalog_id' => 'string',
      'image_height' => 'unsigned int',
      'image_width' => 'unsigned int',
      'override_country' => 'string',
      'override_language' => 'string',
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
      'additional_image_urls' => 'list<string>',
      'additional_variant_attributes' => 'map',
      'age_group' => 'age_group_enum',
      'android_app_name' => 'string',
      'android_class' => 'string',
      'android_package' => 'string',
      'android_url' => 'string',
      'availability' => 'availability_enum',
      'brand' => 'string',
      'category' => 'string',
      'category_specific_fields' => 'map',
      'checkout_url' => 'string',
      'color' => 'string',
      'commerce_tax_category' => 'commerce_tax_category_enum',
      'condition' => 'condition_enum',
      'currency' => 'string',
      'custom_data' => 'map',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_number_0' => 'unsigned int',
      'custom_number_1' => 'unsigned int',
      'custom_number_2' => 'unsigned int',
      'custom_number_3' => 'unsigned int',
      'custom_number_4' => 'unsigned int',
      'description' => 'string',
      'expiration_date' => 'string',
      'fb_product_category' => 'string',
      'gender' => 'gender_enum',
      'gtin' => 'string',
      'image_url' => 'string',
      'importer_address' => 'map',
      'importer_name' => 'string',
      'inventory' => 'unsigned int',
      'ios_app_name' => 'string',
      'ios_app_store_id' => 'unsigned int',
      'ios_url' => 'string',
      'ipad_app_name' => 'string',
      'ipad_app_store_id' => 'unsigned int',
      'ipad_url' => 'string',
      'iphone_app_name' => 'string',
      'iphone_app_store_id' => 'unsigned int',
      'iphone_url' => 'string',
      'launch_date' => 'string',
      'manufacturer_info' => 'string',
      'manufacturer_part_number' => 'string',
      'marked_for_product_launch' => 'marked_for_product_launch_enum',
      'material' => 'string',
      'mobile_link' => 'string',
      'name' => 'string',
      'ordering_index' => 'unsigned int',
      'origin_country' => 'origin_country_enum',
      'pattern' => 'string',
      'price' => 'unsigned int',
      'product_priority_0' => 'float',
      'product_priority_1' => 'float',
      'product_priority_2' => 'float',
      'product_priority_3' => 'float',
      'product_priority_4' => 'float',
      'product_type' => 'string',
      'quantity_to_sell_on_facebook' => 'unsigned int',
      'retailer_id' => 'string',
      'return_policy_days' => 'unsigned int',
      'sale_price' => 'unsigned int',
      'sale_price_end_date' => 'datetime',
      'sale_price_start_date' => 'datetime',
      'short_description' => 'string',
      'size' => 'string',
      'start_date' => 'string',
      'url' => 'string',
      'visibility' => 'visibility_enum',
      'wa_compliance_category' => 'wa_compliance_category_enum',
      'windows_phone_app_id' => 'string',
      'windows_phone_app_name' => 'string',
      'windows_phone_url' => 'string',
    );
    $enums = array(
      'age_group_enum' => ProductItemAgeGroupValues::getInstance()->getValues(),
      'availability_enum' => ProductItemAvailabilityValues::getInstance()->getValues(),
      'commerce_tax_category_enum' => ProductItemCommerceTaxCategoryValues::getInstance()->getValues(),
      'condition_enum' => ProductItemConditionValues::getInstance()->getValues(),
      'gender_enum' => ProductItemGenderValues::getInstance()->getValues(),
      'marked_for_product_launch_enum' => ProductItemMarkedForProductLaunchValues::getInstance()->getValues(),
      'origin_country_enum' => ProductItemOriginCountryValues::getInstance()->getValues(),
      'visibility_enum' => ProductItemVisibilityValues::getInstance()->getValues(),
      'wa_compliance_category_enum' => ProductItemWaComplianceCategoryValues::getInstance()->getValues(),
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
