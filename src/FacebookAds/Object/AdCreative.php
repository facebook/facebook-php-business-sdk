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
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Values\AdCreativeApplinkTreatmentValues;
use FacebookAds\Object\Values\AdCreativeAuthorizationCategoryValues;
use FacebookAds\Object\Values\AdCreativeCallToActionTypeValues;
use FacebookAds\Object\Values\AdCreativeCategorizationCriteriaValues;
use FacebookAds\Object\Values\AdCreativeCategoryMediaSourceValues;
use FacebookAds\Object\Values\AdCreativeDynamicAdVoiceValues;
use FacebookAds\Object\Values\AdCreativeInstantCheckoutSettingValues;
use FacebookAds\Object\Values\AdCreativeObjectTypeValues;
use FacebookAds\Object\Values\AdCreativeOperatorValues;
use FacebookAds\Object\Values\AdCreativeStatusValues;
use FacebookAds\Object\Values\AdPreviewAdFormatValues;
use FacebookAds\Object\Values\AdPreviewRenderTypeValues;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreative extends AbstractCrudObject {

  use AdLabelAwareCrudObjectTrait;

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'adcreatives';
  }

  /**
   * @return AdCreativeFields
   */
  public static function getFieldsEnum() {
    return AdCreativeFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ApplinkTreatment'] = AdCreativeApplinkTreatmentValues::getInstance()->getValues();
    $ref_enums['CallToActionType'] = AdCreativeCallToActionTypeValues::getInstance()->getValues();
    $ref_enums['ObjectType'] = AdCreativeObjectTypeValues::getInstance()->getValues();
    $ref_enums['Status'] = AdCreativeStatusValues::getInstance()->getValues();
    $ref_enums['AuthorizationCategory'] = AdCreativeAuthorizationCategoryValues::getInstance()->getValues();
    $ref_enums['CategorizationCriteria'] = AdCreativeCategorizationCriteriaValues::getInstance()->getValues();
    $ref_enums['CategoryMediaSource'] = AdCreativeCategoryMediaSourceValues::getInstance()->getValues();
    $ref_enums['DynamicAdVoice'] = AdCreativeDynamicAdVoiceValues::getInstance()->getValues();
    $ref_enums['InstantCheckoutSetting'] = AdCreativeInstantCheckoutSettingValues::getInstance()->getValues();
    $ref_enums['Operator'] = AdCreativeOperatorValues::getInstance()->getValues();
    return $ref_enums;
  }

  protected function setDataTrigger($data) {
    if (array_key_exists('id', $data)) {
      $this->data['creative_id'] = $data['id'];
    }
  }

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new AdCreative(),
      'EDGE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCreativeInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/creative_insights',
      new AdCreativeInsights(),
      'EDGE',
      AdCreativeInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPreviews(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_format' => 'ad_format_enum',
      'dynamic_asset_label' => 'string',
      'dynamic_creative_spec' => 'Object',
      'dynamic_customization' => 'Object',
      'end_date' => 'datetime',
      'height' => 'unsigned int',
      'locale' => 'string',
      'place_page_id' => 'int',
      'post' => 'Object',
      'product_item_ids' => 'list<string>',
      'render_type' => 'render_type_enum',
      'start_date' => 'datetime',
      'width' => 'unsigned int',
    );
    $enums = array(
      'ad_format_enum' => AdPreviewAdFormatValues::getInstance()->getValues(),
      'render_type_enum' => AdPreviewRenderTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/previews',
      new AdPreview(),
      'EDGE',
      AdPreview::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'adlabels' => 'list<Object>',
      'name' => 'string',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => AdCreativeStatusValues::getInstance()->getValues(),
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
      'thumbnail_height' => 'unsigned int',
      'thumbnail_width' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdCreative(),
      'NODE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'adlabels' => 'list<Object>',
      'name' => 'string',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => AdCreativeStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdCreative(),
      'NODE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
