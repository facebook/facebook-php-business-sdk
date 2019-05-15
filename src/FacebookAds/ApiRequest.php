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

namespace FacebookAds;

use FacebookAds\Cursor;
use FacebookAds\AbstractObject;

class ApiRequest {
  protected $api;
  protected $id;
  protected $method;
  protected $endpoint;
  protected $return_prototype;
  protected $accepted_fields;
  protected $param_checker;
  protected $api_type;
  protected $use_graph_video_endpoint;
  private $fields;
  private $params;
  private $file_params;
  private $allow_file_upload;
  private $file_counter;

  public function __construct(
    Api $api,
    $id,
    $method,
    $endpoint,
    $return_prototype = null,
    $api_type = null,
    $accepted_fields = array(),
    TypeChecker $param_checker = null,
    $allow_file_upload = false,
    $use_graph_video_endpoint = false) {
    $this->fields = [];
    $this->params = [];
    $this->file_params = [];
    $this->file_counter = 0;
    $this->api = $api;
    $this->id = $id;
    $this->method = $method;
    $this->endpoint = $endpoint;
    $this->return_prototype = $return_prototype;
    $this->api_type = $api_type;
    $this->accepted_fields = $accepted_fields;
    $this->param_checker = $param_checker;
    $this->allow_file_upload = $allow_file_upload;
    $this->use_graph_video_endpoint = $use_graph_video_endpoint;
  }

  public function addParam($param, $value) {
    $extracted_value = $this->extractValue($value);
    if (!ApiConfig::TYPE_CHECKER_STRICT_MODE
      || !$this->param_checker->isValidParam($param)
    ) {
      if ($this->param_checker->isFileParam($param)) {
          $this->file_params[$param] = $extracted_value;
      } else {
        $this->params[$param] = $extracted_value;
      }
    } else {
      if ($this->param_checker->isValidParamPair($param, $value)) {
        if ($this->param_checker->isFileParam($param)) {
          $this->file_params[$param] = $extracted_value;
        } else {
          $this->params[$param] = $extracted_value;
        }
      } elseif ($this->param_checker->isPrimitiveType($param)) {
        $param_type = $this->param_checker->getType($param);
        $this->params[$param] = $this->param_checker->convertStringToPrimType(
          $param_type, $value);
      } else {
        throw new \LogicException('The value for '.$param.' is not compatible');
      }
    }
    return $this;
  }

  public function addParams($params) {
    foreach ($params as $key => $value) {
      $this->addParam($key, $value);
    }
    return $this;
  }

  public function removeParam($param) {
    if (array_key_exists($param, $this->params)) {
      unset($this->params[$param]);
    } elseif (array_key_exists($param, $this->params)) {
      unset($this->file_params[$param]);
    }
    return $this;
  }

  public function clearParams() {
    $this->params = [];
    $this->file_params = [];
    return $this;
  }

  public function getParams() {
    $all_params = array_merge($this->params, $this->file_params);
    return $all_params;
  }

  public function addField($field) {
    if (ApiConfig::TYPE_CHECKER_STRICT_MODE
      && !in_array($field, $this->accepted_fields)
    ) {
      throw new \LogicException('Field '.$field.' is not supported');
    }
    if (!(in_array($field, $this->fields))) {
      $this->fields[] = $field;
    }
    return $this;
  }

  public function addFields($fields) {
    foreach ($fields as $field) {
      $this->addField($field);
    }
    return $this;
  }

  public function removeField($field) {
    if (in_array($field, $this->fields)) {
      $index_to_remove = array_search($field, $this->fields);
      unset($this->fields[$index_to_remove]);
    }
    return $this;
  }

  public function clearFields() {
    $this->fields = [];
    return $this;
  }

  public function getFields() {
    return $this->fields;
  }

  public function addFile($filename) {
    if (ApiConfig::TYPE_CHECKER_STRICT_MODE && !$this->allow_file_upload) {
      throw new \LogicException("This api cannot upload files");
    }
    $file_key = 'source'.$this->file_counter;
    if (file_exists($filename)) {
      $this->file_params[$file_key] = $filename;
      $this->file_counter++;
    }
    return $this;
  }

  /**
   * Execute the request
   */
  public function execute() {
    $url_path = '/'.$this->id.$this->endpoint;
    $updated_params = $this->params;
    if (!empty($this->fields)) {
      $fields = implode(',', $this->fields);
      $updated_params['fields'] = $fields;
    }
    $response = $this->api->call(
      $url_path, $this->method, $updated_params, $this->file_params);
    if ($this->api_type === "EDGE" && $this->method === "GET") {
      return new Cursor($response, $this->return_prototype, $this->api);
    } else if ($this->method === "DELETE") {
      return $response;
    } else {
      return $this->createObject($response->getContent());
    }
  }

  protected function extractValue($value) {
    if ($this->param_checker->isAbstractObject($value)) {
      return $value->exportAllData();
    } else if (is_array($value)) {
      $extracted_value = [];
      foreach ($value as $key => $sub_value) {
        $extracted_value[$key] = $this->extractValue($sub_value);
      }
      return $extracted_value;
    } else {
      return $value;
    }
  }

  protected function createObject(array $object_data) {
    $object = clone $this->return_prototype;
    $object->setDataWithoutValidation($object_data);
    if ($object instanceof AbstractCrudObject) {
      $object->setApi($this->api);
    }
    return $object;
  }
}
