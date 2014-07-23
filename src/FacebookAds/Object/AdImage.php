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
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Traits\CannotUpdate;
use FacebookAds\Traits\FieldValidation;

class AdImage extends AbstractCrudObject {
  use FieldValidation;
  use CannotUpdate;

  /**
   * @var string[]
   **/
  protected static $fields = array(
    AdImageFields::ID,
    AdImageFields::HASH,
    AdImageFields::URL,
    AdImageFields::CREATIVES,
    AdImageFields::FILENAME,
    AdImageFields::WIDTH,
    AdImageFields::HEIGHT,
    AdImageFields::ORIGINAL_WIDTH,
    AdImageFields::ORIGINAL_HEIGHT,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adimages';
  }

  /**
   * @return array
   */
  public function exportData() {
    $data = parent::exportData();
    if (isset($data[AdImageFields::FILENAME])) {
      if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
        $data[AdImageFields::FILENAME]
          = curl_file_create($data[AdImageFields::FILENAME]);
      } else {
        $data[AdImageFields::FILENAME] = '@'.$data[AdImageFields::FILENAME];
      }
    }

    return $data;
  }

  /**
   * @return string
   */
  protected function getNodePath() {
    return '/'.$this->assureParentId().'/'.$this->getEndpoint();
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
      Api::HTTP_METHOD_POST,
      array_merge($this->exportData(), $params));

    $this->clearHistory();
    $data = $response->getResponse()->{'images'}
      ->{basename($this->{AdImageFields::FILENAME})};

    $this->data[AdImageFields::HASH] = $data->{AdImageFields::HASH};

    $this->data[static::FIELD_ID]
      = substr($this->getParentId(), 4).':'.$this->data[AdImageFields::HASH];

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
    $params['hashes'] = array(explode(':', $this->assureId())[1]);

    $response = $this->getApi()->call(
      $this->getNodePath(),
      Api::HTTP_METHOD_GET,
      $params);

    $data = $response->getResponse()->{'data'};
    if ($data) {
      $this->setData((array) $data[0]);
    }

    $this->clearHistory();

    return $this;
  }

  /**
   * Delete this object from the graph
   *
   * @param array $params
   * @return void
   * @throws \Exception
   */
  public function delete(array $params = array()) {
    if (!$this->data[AdImageFields::HASH]) {
      throw new \Exception("AdImage hash is required to delete");
    }

    $params
      = array_merge($params, array('hash' => $this->data[AdImageFields::HASH]));

    parent::delete($params);
  }
}
