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
use FacebookAds\Object\Fields\PageCallToActionFields;
use FacebookAds\Object\Values\PageCallToActionAndroidDestinationTypeValues;
use FacebookAds\Object\Values\PageCallToActionIphoneDestinationTypeValues;
use FacebookAds\Object\Values\PageCallToActionTypeValues;
use FacebookAds\Object\Values\PageCallToActionWebDestinationTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class PageCallToAction extends AbstractCrudObject {

  /**
   * @return PageCallToActionFields
   */
  public static function getFieldsEnum() {
    return PageCallToActionFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AndroidDestinationType'] = PageCallToActionAndroidDestinationTypeValues::getInstance()->getValues();
    $ref_enums['IphoneDestinationType'] = PageCallToActionIphoneDestinationTypeValues::getInstance()->getValues();
    $ref_enums['Type'] = PageCallToActionTypeValues::getInstance()->getValues();
    $ref_enums['WebDestinationType'] = PageCallToActionWebDestinationTypeValues::getInstance()->getValues();
    return $ref_enums;
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
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new PageCallToAction(),
      'NODE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'android_app_id' => 'int',
      'android_destination_type' => 'android_destination_type_enum',
      'android_package_name' => 'string',
      'android_url' => 'string',
      'email_address' => 'string',
      'intl_number_with_plus' => 'string',
      'iphone_app_id' => 'int',
      'iphone_destination_type' => 'iphone_destination_type_enum',
      'iphone_url' => 'string',
      'type' => 'type_enum',
      'web_destination_type' => 'web_destination_type_enum',
      'web_url' => 'string',
    );
    $enums = array(
      'android_destination_type_enum' => PageCallToActionAndroidDestinationTypeValues::getInstance()->getValues(),
      'iphone_destination_type_enum' => PageCallToActionIphoneDestinationTypeValues::getInstance()->getValues(),
      'type_enum' => PageCallToActionTypeValues::getInstance()->getValues(),
      'web_destination_type_enum' => PageCallToActionWebDestinationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new PageCallToAction(),
      'NODE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
