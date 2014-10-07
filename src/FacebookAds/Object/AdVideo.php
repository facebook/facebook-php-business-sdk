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

use FacebookAds\Object\Fields\AdVideoFields;
use FacebookAds\Traits\CannotDelete;
use FacebookAds\Traits\CannotUpdate;
use FacebookAds\Traits\FieldValidation;

class AdVideo extends AbstractCrudObject {
  use FieldValidation;
  use CannotDelete;
  use CannotUpdate;

  /**
   * @var string[]
   **/
  protected static $fields = array(
    AdVideoFields::CREATED_TIME,
    AdVideoFields::DESCRIPTION,
    AdVideoFields::EMBED_HTML,
    AdVideoFields::FORMAT,
    AdVideoFields::FROM,
    AdVideoFields::ICON,
    AdVideoFields::ID,
    AdVideoFields::NAME,
    AdVideoFields::PICTURE,
    AdVideoFields::SOURCE,
    AdVideoFields::UPDATED_TIME,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'advideos';
  }

  /**
   * @return array
   */
  public function exportData() {
    $data = parent::exportData();
    if (isset($data[AdVideoFields::SOURCE])
      && strncmp($data[AdVideoFields::SOURCE], 'http', 4) !== 0) {

      if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
        $data[AdVideoFields::SOURCE]
          = curl_file_create($data[AdVideoFields::SOURCE]);
      } else {
        $data[AdVideoFields::SOURCE] = '@'.$data[AdVideoFields::SOURCE];
      }
    }

    return $data;
  }
}
