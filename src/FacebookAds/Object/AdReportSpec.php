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
use FacebookAds\Object\Fields\AdReportSpecFields;
use FacebookAds\Object\Values\AdReportSpecActionsGroupByValues;
use FacebookAds\Object\Values\AdReportSpecCreationSourceValues;
use FacebookAds\Object\Values\AdReportSpecDatePresetValues;
use FacebookAds\Object\Values\AdReportSpecFormatValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdReportSpec extends AbstractCrudObject {

  /**
   * @return AdReportSpecFields
   */
  public static function getFieldsEnum() {
    return AdReportSpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ActionsGroupBy'] = AdReportSpecActionsGroupByValues::getInstance()->getValues();
    $ref_enums['CreationSource'] = AdReportSpecCreationSourceValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = AdReportSpecDatePresetValues::getInstance()->getValues();
    $ref_enums['Format'] = AdReportSpecFormatValues::getInstance()->getValues();
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
      new AdReportSpec(),
      'NODE',
      AdReportSpec::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'actions_group_by' => 'list<actions_group_by_enum>',
      'business_id' => 'string',
      'bypass_async' => 'bool',
      'creation_source' => 'creation_source_enum',
      'data_columns' => 'list<string>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'Object',
      'filters' => 'list<Object>',
      'format' => 'format_enum',
      'format_version' => 'unsigned int',
      'insights_section' => 'Object',
      'limit' => 'int',
      'name' => 'string',
      'report_run_id' => 'string',
      'report_schedule_id' => 'string',
      'sort_by' => 'string',
      'sort_dir' => 'string',
      'time_increment' => 'string',
      'time_interval' => 'Object',
      'time_ranges' => 'list',
      'user_report' => 'bool',
    );
    $enums = array(
      'actions_group_by_enum' => AdReportSpecActionsGroupByValues::getInstance()->getValues(),
      'creation_source_enum' => AdReportSpecCreationSourceValues::getInstance()->getValues(),
      'date_preset_enum' => AdReportSpecDatePresetValues::getInstance()->getValues(),
      'format_enum' => AdReportSpecFormatValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdReportSpec(),
      'NODE',
      AdReportSpec::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
