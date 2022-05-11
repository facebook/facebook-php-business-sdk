<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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
use FacebookAds\Api;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
class AbstractCrudObject extends AbstractObject {
  /**
   * @var string
   */
  const FIELD_ID = 'id';
  /**
   * @var string[] set of fields to read by default
   */
  protected static $defaultReadFields = array();
  /**
   * @var array set of fields that have been mutated
   */
  protected $changedFields = array();
  /**
   * @var Api instance of the Api used by this object
   */
  protected $api;
  /**
   * @var string ID of the adaccount this object belongs to
   */
  protected $parentId;

  /**
   * @deprecated deprecate constructor with null and parent_id
   * @param string $id Optional (do not set for new objects)
   * @param string $parent_id Optional, needed for creating new objects.
   * @param Api $api The Api instance this object should use to make calls
   */
  public function __construct($id = null, $parent_id = null, Api $api = null) {
    parent::__construct();

    // check that $id is an integer or a string integer or a string of
    // two integer connected by an underscore, like "123_456"

    $int_id = $id;
    if ($id !== null && strpos($id, 'act_') === 0) {
      $int_id = substr($id, 4);
    }
    $split_by_underscore = explode('_', (string) $id);
    $is_regular_id = sizeof($split_by_underscore) == 2 &&
                     ctype_digit($split_by_underscore[0]) &&
                     ctype_digit($split_by_underscore[1]);
    if (!is_null($int_id) && !ctype_digit((string) $int_id) && !$is_regular_id) {
      $extra_message = '';
      if (is_numeric($int_id)) {
        $extra_message = ' Please use an integer string'
        .' to prevent integer overflow.';
      }
      throw new \InvalidArgumentException(
        'Object ID must be an integer or integer string but was passed "'
        .(string)$id.'" ('.gettype($id).').'.(string)$extra_message);
    }
    $this->data[static::FIELD_ID] = $id;

    if (!is_null($parent_id)) {
      $warning_message = "\$parent_id as a parameter of constructor is being " .
        "deprecated, please try not to use this in new code.\n";
      trigger_error($warning_message, E_USER_DEPRECATED);
    }
    $this->parentId = $parent_id;

    $this->api = static::assureApi($api);
  }

  /**
   * @param string $id
   */
  public function setId($id) {
    $this->data[static::FIELD_ID] = $id;
    return $this;
  }
  /**
   * @deprecated deprecate parent_id in AbstractCrudObject
   * @param string $parent_id
   */
  public function setParentId($parent_id) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    $this->parentId = $parent_id;
    return $this;
  }
  /**
   * @param Api $api The Api instance this object should use to make calls
   */
  public function setApi(Api $api) {
    $this->api = static::assureApi($api);
    return $this;
  }
  /**
   * @deprecated getEndpoint function is deprecated
   * @return string
   */
  protected function getEndpoint() {
    return null;
  }
  /**
   * @param Api|null $instance
   * @return Api
   * @throws \InvalidArgumentException
   */
  protected static function assureApi(Api $instance = null) {
    $instance = $instance ?: Api::instance();
    if (!$instance) {
      throw new \InvalidArgumentException(
        'An Api instance must be provided as argument or '.
        'set as instance in the \FacebookAds\Api');
    }
    return $instance;
  }
  /**
   * @deprecated deprecate parent_id in AbstractCrudObject
   * @return string|null
   */
  public function getParentId() {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    return $this->parentId;
  }
  /**
   * @deprecated deprecate parent_id in AbstractCrudObject
   * @return string
   * @throws \Exception
   */
  protected function assureParentId() {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    if (!$this->parentId) {
      throw new \Exception("A parent ID is required.");
    }
    return $this->parentId;
  }
  /**
   * @return string
   * @throws \Exception
   */
  protected function assureId() {
    if (!$this->data[static::FIELD_ID]) {
      throw new \Exception("field '".static::FIELD_ID."' is required.");
    }
    return (string) $this->data[static::FIELD_ID];
  }
  /**
   * @return Api
   */
  public function getApi() {
    return $this->api;
  }
  /**
   * Get the values which have changed
   *
   * @return array Key value pairs of changed variables
   */
  public function getChangedValues() {
    return $this->changedFields;
  }
  /**
   * Get the name of the fields that have changed
   *
   * @return array Array of changed field names
   */
  public function getChangedFields() {
    return array_keys($this->changedFields);
  }
  /**
   * Get the values which have changed, converting them to scalars
   */
  public function exportData() {
    $data = array();
    foreach ($this->changedFields as $key => $val) {
      $data[$key] = parent::exportValue($val);
    }
    return $data;
  }
  /**
   * @return void
   */
  protected function clearHistory() {
    $this->changedFields = array();
  }
  /**
   * @param string $name
   * @param mixed $value
   */
  public function __set($name, $value) {
    if (!array_key_exists($name, $this->data)
      || $this->data[$name] !== $value) {
      $this->changedFields[$name] = $value;
    }
    parent::__set($name, $value);
  }
  /**
   * @param string[] $fields
   */
  public static function setDefaultReadFields(array $fields = array()) {
    static::$defaultReadFields = $fields;
  }
  /**
   * @return string[]
   */
  public static function getDefaultReadFields() {
    return static::$defaultReadFields;
  }
  /**
   * @return string
   */
  protected function getNodePath() {
    return '/'.$this->assureId();
  }
  /**
   * @deprecated
   * use (ParentObject)->creatXXX() instead
   * Create function for the object.
   *
   * @param array $params Additional parameters to include in the request
   * @return $this
   * @throws \Exception
   */
  public function create(array $params = array()) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    if ($this->data[static::FIELD_ID]) {
      throw new \Exception("Object has already an ID");
    }
    $response = $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      array_merge($this->exportData(), $params));
    $this->clearHistory();
    $data = $response->getContent();
    if (!isset($params['execution_options'])){
      $id = is_string($data) ? $data : $data[static::FIELD_ID];
    /** @var AbstractCrudObject $this */
      if ($this instanceof CanRedownloadInterface
        && isset($params[CanRedownloadInterface::PARAM_REDOWNLOAD])
        && $params[CanRedownloadInterface::PARAM_REDOWNLOAD] === true
        && isset($data['data'][$id])
        && is_array($data['data'][$id])
      ) {
        $this->setDataWithoutValidation($data['data'][$id]);
      }
      $this->data[static::FIELD_ID] = (string) $id;
    }
    return $this;
  }
  /**
   * @deprecated
   * use getSelf() instead
   * Read object data from the graph
   *
   * @param string[] $fields Fields to request
   * @param array $params Additional request parameters
   * @return $this
   */
  public function read(array $fields = array(), array $params = array()) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    $fields = implode(',', $fields ?: static::getDefaultReadFields());
    if ($fields) {
      $params['fields'] = $fields;
    }
    $response = $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_GET,
      $params);
    $this->setDataWithoutValidation($response->getContent());
    $this->clearHistory();
    return $this;
  }
  /**
   * @deprecated
   * use updateSelf() instead
   * Update the object. Function parameters are similar with the create function
   *
   * @param array $params Update parameters in assoc
   * @return $this
   */
  public function update(array $params = array()) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_POST,
      array_merge($this->exportData(), $params));
    $this->clearHistory();
    return $this;
  }
  /**
   * @deprecated
   * use deleteSelf() in each subclass
   * Delete this object from the graph
   *
   * @param array $params
   * @return void
   */
  public function deleteSelf(array $params = array()) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_DELETE,
      $params);
  }
  /**
   * @deprecated
   * deprecate with ObjectValidation
   * Perform object upsert
   *
   * Helper function which determines whether an object should be created or
   * updated
   *
   * @param array $params
   * @return $this
   */
  public function save(array $params = array()) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    if ($this->data[static::FIELD_ID]) {
      return $this->update($params);
    } else {
      return $this->create($params);
    }
  }
  /**
   * @deprecated
   * deprecate with getEndpoint
   * @param string $prototype_class
   * @param string $endpoint
   * @return string
   * @throws \InvalidArgumentException
   */
  protected function assureEndpoint($prototype_class, $endpoint) {
    $warning_message = sprintf('%s is being deprecated, please try not to use'.
      ' this in new code.',__FUNCTION__);
    trigger_error($warning_message, E_USER_DEPRECATED);
    if (!$endpoint) {
      $prototype = new $prototype_class(null, null, $this->getApi());
      if (!$prototype instanceof AbstractCrudObject) {
        throw new \InvalidArgumentException('Either prototype must be instance
          of AbstractCrudObject or $endpoint must be given');
      }
      $endpoint = $prototype->getEndpoint();
    }
    return $endpoint;
  }
  /**
   * @param array $fields
   * @param array $params
   * @param string $prototype_class
   * @param string|null $endpoint
   * @return ResponseInterface
   */
  protected function fetchConnection(
    array $fields = array(),
    array $params = array(),
    $prototype_class = '',
    $endpoint = null) {
    $fields = implode(',', $fields ?: static::getDefaultReadFields());
    if ($fields) {
      $params['fields'] = $fields;
    }
    $endpoint = $this->assureEndpoint($prototype_class, $endpoint);
    return $this->getApi()->call(
      '/'.$this->assureId().'/'.$endpoint,
      RequestInterface::METHOD_GET,
      $params);
  }
  /**
   * Read a single connection object
   *
   * @param string $prototype_class
   * @param array $fields Fields to request
   * @param array $params Additional filters for the reading
   * @param string|null $endpoint
   * @return AbstractObject
   */
  protected function getOneByConnection(
    $prototype_class,
    array $fields = array(),
    array $params = array(),
    $endpoint = null) {
    $response = $this->fetchConnection(
      $fields, $params, $prototype_class, $endpoint);
    if (!$response->getContent()) {
      return null;
    }
    $object = new $prototype_class(
      null, null, $this->getApi());
    /** @var AbstractCrudObject $object */
    $object->setDataWithoutValidation($response->getContent());
    return $object;
  }
  /**
   * Read objects from a connection
   *
   * @param string $prototype_class
   * @param array $fields Fields to request
   * @param array $params Additional filters for the reading
   * @param string|null $endpoint
   * @return Cursor
   */
  protected function getManyByConnection(
    $prototype_class,
    array $fields = array(),
    array $params = array(),
    $endpoint = null) {
    $response = $this->fetchConnection(
      $fields, $params, $prototype_class, $endpoint);
    return new Cursor(
      $response,
      new $prototype_class(null, null, $this->getApi()));
  }
  /**
   * @param string $job_class
   * @param array $fields
   * @param array $params
   * @return AbstractAsyncJobObject
   * @throws \InvalidArgumentException
   */
  protected function createAsyncJob(
    $job_class,
    array $fields = array(),
    array $params = array()) {
    $object = new $job_class(null, $this->assureId(), $this->getApi());
    if (!$object instanceof AbstractAsyncJobObject) {
      throw new \InvalidArgumentException(
        "Class {$job_class} is not of type "
        .AbstractAsyncJobObject::className());
    }
    $params['fields'] = $fields;
    return $object->create($params);
  }
  /**
   * Delete objects.
   *
   * Used batch API calls to delete multiple objects at once
   *
   * @param string[] $ids Array or single Object ID to delete
   * @param Api $api Api Object to use
   * @return bool Returns true on success
   */
  public static function deleteIds(array $ids, Api $api = null) {
    $batch = array();
    foreach ($ids as $id) {
      $request = array(
        'relative_url' => '/'.$id,
        'method' => RequestInterface::METHOD_DELETE,
      );
      $batch[] = $request;
    }
    $api = static::assureApi($api);
    $response = $api->call(
      '/',
      RequestInterface::METHOD_POST,
      array('batch' => json_encode($batch)));
    foreach ($response->getContent() as $result) {
      if (200 != $result['code']) {
        return false;
      }
    }
    return true;
  }
  /**
   * Read function for the object. Convert fields and filters into the query
   * part of uri and return objects.
   *
   * @param mixed $ids Array or single object IDs
   * @param array $fields Array of field names to read
   * @param array $params Additional filters for the reading, in assoc
   * @param Api $api Api Object to use
   * @return Cursor
   */
  public static function readIds(
    array $ids,
    array $fields = array(),
    array $params = array(),
    Api $api = null) {
    if (empty($fields)) {
      $fields = static::getDefaultReadFields();
    }
    if (!empty($fields)) {
      $params['fields'] = implode(',', $fields);
    }
    $params['ids'] = implode(',', $ids);
    $api = static::assureApi($api);
    $response = $api->call('/', RequestInterface::METHOD_GET, $params);
    $result = array();
    foreach ($response->getContent() as $data) {
      /** @var AbstractObject $object */
      $object = new static(null, null, $api);
      $object->setDataWithoutValidation((array) $data);
      $result[] = $object;
    }
    return $result;
  }
}
