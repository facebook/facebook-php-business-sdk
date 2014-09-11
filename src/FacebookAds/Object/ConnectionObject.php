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

use FacebookAds\Object\Fields\ConnectionObjectFields;
use FacebookAds\Object\Traits\FieldValidation;

class ConnectionObject extends AbstractObject {
  use FieldValidation;

  /**
   * @var string[]
   */
  protected static $fields = array(
    ConnectionObjectFields::ID,
    ConnectionObjectFields::NAME,
    ConnectionObjectFields::NATIVE_APP_STORE_IDS,
    ConnectionObjectFields::NATIVE_APP_TARGETING_IDS,
    ConnectionObjectFields::OG_NAMESPACE,
    ConnectionObjectFields::OG_ACTIONS,
    ConnectionObjectFields::OG_OBJECT,
    ConnectionObjectFields::PICTURE,
    ConnectionObjectFields::SUPPORTED_PLATFORMS,
    ConnectionObjectFields::TABS,
    ConnectionObjectFields::TYPE,
    ConnectionObjectFields::URL,
    ConnectionObjectFields::IS_GAME,
    ConnectionObjectFields::APP_INSTALLS_TRACKED,
  );
}
