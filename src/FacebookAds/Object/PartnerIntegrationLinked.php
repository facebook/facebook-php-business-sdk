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
use FacebookAds\Object\Fields\PartnerIntegrationLinkedFields;
use FacebookAds\Object\Values\PartnerIntegrationLinkedCompletedIntegrationTypesValues;
use FacebookAds\Object\Values\PartnerIntegrationLinkedPartnerValues;
use FacebookAds\Object\Values\PartnerIntegrationLinkedSetupStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class PartnerIntegrationLinked extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'partner_integrations';
  }

  /**
   * @return PartnerIntegrationLinkedFields
   */
  public static function getFieldsEnum() {
    return PartnerIntegrationLinkedFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Partner'] = PartnerIntegrationLinkedPartnerValues::getInstance()->getValues();
    $ref_enums['CompletedIntegrationTypes'] = PartnerIntegrationLinkedCompletedIntegrationTypesValues::getInstance()->getValues();
    $ref_enums['SetupStatus'] = PartnerIntegrationLinkedSetupStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'asset_type' => 'asset_type_enum',
    );
    $enums = array(
      'asset_type_enum' => array(
        '0',
        '1',
        '2',
        '3',
      ),
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
      new PartnerIntegrationLinked(),
      'NODE',
      PartnerIntegrationLinked::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ads_pixel_id' => 'Object',
      'application_id' => 'Object',
      'completed_integration_types' => 'list<completed_integration_types_enum>',
      'name' => 'string',
      'oauth_partner_integration_id' => 'Object',
      'offline_conversion_data_set_id' => 'Object',
      'product_catalog_id' => 'Object',
      'setup_status' => 'setup_status_enum',
    );
    $enums = array(
      'completed_integration_types_enum' => PartnerIntegrationLinkedCompletedIntegrationTypesValues::getInstance()->getValues(),
      'setup_status_enum' => PartnerIntegrationLinkedSetupStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new PartnerIntegrationLinked(),
      'NODE',
      PartnerIntegrationLinked::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
