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

use FacebookAds\Cursor;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdCreative extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @var string[]
   **/
  protected static $fields = array(
    AdCreativeFields::ID,
    AdCreativeFields::TITLE,
    AdCreativeFields::ACTOR_ID,
    AdCreativeFields::ACTOR_NAME,
    AdCreativeFields::NAME,
    AdCreativeFields::OBJECT_ID,
    AdCreativeFields::OBJECT_STORY_ID,
    AdCreativeFields::OBJECT_STORY_SPEC,
    AdCreativeFields::BODY,
    AdCreativeFields::IMAGE_HASH,
    AdCreativeFields::IMAGE_FILE,
    AdCreativeFields::IMAGE_URL,
    AdCreativeFields::IMAGE_CROPS,
    AdCreativeFields::VIDEO_ID,
    AdCreativeFields::ACTOR_IMAGE_HASH,
    AdCreativeFields::LINK_URL,
    AdCreativeFields::OBJECT_URL,
    AdCreativeFields::URL_TAGS,
    AdCreativeFields::PREVIEW_URL,
    AdCreativeFields::FOLLOW_REDIRECT,
    AdCreativeFields::OBJECT_STORE_URL,
    AdCreativeFields::LINK_DEEP_LINK_URL,
    AdCreativeFields::CALL_TO_ACTION_TYPE,
    AdCreativeFields::OBJECT_TYPE,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adcreatives';
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdPreviews(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdPreview::className(), $fields, $params, 'previews');
  }
}
