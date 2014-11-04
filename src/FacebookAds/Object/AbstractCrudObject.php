<?php
/**
 * Copyright 2014 Facebook, Inc.
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

abstract class AbstractCrudObject extends AbstractObject {

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
   * @param string $id Optional (do not set for new objects)
   * @param string $parent_id Optional, needed for creating new objects.
   * @param Api $api The Api instance this object should use to make calls
   */
  public function __construct($id = null, $parent_id = null, Api $api = null) {
    parent::__construct();
    $this->data[static::FIELD_ID] = $id;
    $this->parentId = $parent_id;
    $this->api = static::assureApi($api);
  }

  /**
   * @param string $id
   */
  public function setId($id) {
    $this->data[static::FIELD_ID] = $id;
  }

  /**
   * @param string $parent_id
   */
  public function setParentId($parent_id) {
    $this->parentId = $parent_id;
  }

  /**
   * @param Api $api The Api instance this object should use to make calls
   */
  public function setApi(Api $api) {
    $this->api = static::assureApi($api);
  }

  /**
   * @return string
   */
  abstract protected function getEndpoint();

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
   * @return string|null
   */
  public function getParentId() {
    return $this->parentId;
  }

  /**
   * @return string
   * @throws \Exception
   */
  protected function assureParentId() {
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
      $data[$key] = $val instanceof AbstractObject ? $val->exportData() : $val;
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
   * @param array $data
   * @return $this
   */
  public function setData(array $data) {
    foreach ($data as $key => $value) {
      $this->{$key} = $value;
    }

    return $this;
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
   * Create function for the object.
   *
   * @param array $params Additional parameters to include in the request
   * @return $this
   * @throws \Exception
   */
  public function create(array $params = array()) {
    if ($this->data[static::FIELD_ID]) {
      throw new \Exception("Object has already an ID");
    }

    $response = $this->getApi()->call(
      '/'.$this->assureParentId().'/'.$this->getEndpoint(),
      RequestInterface::METHOD_POST,
      array_merge($this->exportData(), $params));

    $this->clearHistory();
    $data = $response->getContent();
    $id = is_string($data) ? $data : $data[static::FIELD_ID];

    /** @var AbstractCrudObject $this */
    if ($this instanceof CanRedownloadInterface
      && isset($params[CanRedownloadInterface::PARAM_REDOWNLOAD])
      && $params[CanRedownloadInterface::PARAM_REDOWNLOAD] === true
      && isset($data['data'][$id])
      && is_array($data['data'][$id])
    ) {
      $this->setData($data['data'][$id]);
    }

    $this->data[static::FIELD_ID] = (string) $id;


    return $this;
  }

  /**
   * Read object data from the graph
   *
   * @param string[] $fields Fields to request
   * @param array $params Additional request parameters
   * @return $this
   */
  public function read(array $fields = array(), array $params = array()) {
    $fields = implode(',', $fields ?: static::getDefaultReadFields());
    if ($fields) {
      $params['fields'] = $fields;
    }

    $response = $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_GET,
      $params);

    $this->setData($response->getContent());
    $this->clearHistory();

    return $this;
  }

  /**
   * Update the object. Function parameters are similar with the create function
   *
   * @param array $params Update parameters in assoc
   * @return $this
   */
  public function update(array $params = array()) {
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_POST,
      array_merge($this->exportData(), $params));

    $this->clearHistory();

    return $this;
  }

  /**
   * Delete this object from the graph
   *
   * @param array $params
   * @return void
   */
  public function delete(array $params = array()) {
    $this->getApi()->call(
      $this->getNodePath(),
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * Perform object upsert
   *
   * Helper function which determines whether an object should be created or
   * updated
   *
   * @return $this
   */
  public function save() {
    if ($this->data[static::FIELD_ID]) {
      return $this->update();
    } else {
      return $this->create();
    }
  }

  /**
   * @param string $prototype_class
   * @param string $endpoint
   * @return string
   * @throws \InvalidArgumentException
   */
  protected function assureEndpoint($prototype_class, $endpoint) {
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
   * @param null $endpoint
   * @return ResponseInterface
   */
  protected function fetchConnection(
    array $fields = array(),
    array $params = array(),
    $prototype_class,
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
   * @param string $endpoint
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
      null, $this->{static::FIELD_ID}, $this->getApi());
    /** @var AbstractCrudObject $object */
    $object->setData($response->getContent());

    return $object;
  }

  /**
   * Read objects from a connection
   *
   * @param string $prototype_class
   * @param array $fields Fields to request
   * @param array $params Additional filters for the reading
   * @param string $endpoint
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
      new $prototype_class(null, $this->{static::FIELD_ID}, $this->getApi()));
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

    if (!$fields) {
      $fields = static::getDefaultReadFields();
    }

    if ($fields) {
      $params['fields'] = implode(',', $fields);
    }

    $params['ids'] = implode(',', $ids);

    $api = static::assureApi($api);
    $response = $api->call('/', RequestInterface::METHOD_GET, $params);

    $result = array();
    foreach ($response->getContent() as $data) {
      /** @var AbstractObject $object */
      $object = new static(null, null, $api);
      $object->setData((array) $data);
      $result[] = $object;
    }

    return new Cursor($result, $response);
  }
}
