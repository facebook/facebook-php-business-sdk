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
use FacebookAds\Object\Fields\AdAccountCreationRequestFields;
use FacebookAds\Object\Values\AdAccountCreationRequestStatusValues;
use FacebookAds\Object\Values\AdAccountCreationRequestSubverticalValues;
use FacebookAds\Object\Values\AdAccountCreationRequestVerticalValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccountCreationRequest extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'adaccountcreationrequests';
  }

  /**
   * @return AdAccountCreationRequestFields
   */
  public static function getFieldsEnum() {
    return AdAccountCreationRequestFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Subvertical'] = AdAccountCreationRequestSubverticalValues::getInstance()->getValues();
    $ref_enums['Vertical'] = AdAccountCreationRequestVerticalValues::getInstance()->getValues();
    $ref_enums['Status'] = AdAccountCreationRequestStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adaccounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVietnam(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_accounts_info' => 'list<Object>',
      'business_registration' => 'file',
      'planning_agency_business_id' => 'Object',
      'english_legal_entity_name' => 'string',
      'address_in_english' => 'Object',
      'official_website_url' => 'Object',
      'business_registration_id' => 'string',
      'vertical' => 'vertical_enum',
      'subvertical' => 'subvertical_enum',
      'promotable_page_urls' => 'list<Object>',
      'promotable_page_ids' => 'list<int>',
      'promotable_app_ids' => 'list<Object>',
      'promotable_urls' => 'list<Object>',
      'contact' => 'Object',
      'additional_comment' => 'string',
      'advertiser_business_id' => 'Object',
      'address_in_local_language' => 'string',
      'legal_entity_name_in_local_language' => 'string',
    );
    $enums = array(
      'vertical_enum' => AdAccountCreationRequestVerticalValues::getInstance()->getValues(),
      'subvertical_enum' => AdAccountCreationRequestSubverticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/vietnam',
      new AdAccountCreationRequest(),
      'EDGE',
      AdAccountCreationRequest::getFieldsEnum()->getValues(),
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
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdAccountCreationRequest(),
      'NODE',
      AdAccountCreationRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'extended_credit_id' => 'string',
      'ad_accounts_info' => 'list<Object>',
      'business_registration' => 'file',
      'planning_agency_business_id' => 'string',
      'english_legal_entity_name' => 'string',
      'legal_entity_name_in_local_language' => 'string',
      'address_in_local_language' => 'string',
      'chinese_legal_entity_name' => 'string',
      'address_in_chinese' => 'string',
      'address_in_english' => 'Object',
      'official_website_url' => 'Object',
      'business_registration_id' => 'string',
      'vertical' => 'vertical_enum',
      'subvertical' => 'subvertical_enum',
      'promotable_page_urls' => 'list<Object>',
      'promotable_page_ids' => 'list<string>',
      'promotable_app_ids' => 'list<string>',
      'promotable_urls' => 'list<Object>',
      'contact' => 'Object',
      'additional_comment' => 'string',
      'is_smb' => 'bool',
      'advertiser_business_id' => 'string',
      'disapprove_appeal_comment' => 'string',
    );
    $enums = array(
      'vertical_enum' => AdAccountCreationRequestVerticalValues::getInstance()->getValues(),
      'subvertical_enum' => AdAccountCreationRequestSubverticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdAccountCreationRequest(),
      'NODE',
      AdAccountCreationRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
