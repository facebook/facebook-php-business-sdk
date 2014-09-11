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

use FacebookAds\Object\Fields\PartnerCategoryFields;
use FacebookAds\Object\Traits\CannotCreate;
use FacebookAds\Object\Traits\CannotDelete;
use FacebookAds\Object\Traits\CannotUpdate;
use FacebookAds\Object\Traits\FieldValidation;

class PartnerCategory extends AbstractCrudObject {
  use CannotCreate;
  use CannotDelete;
  use CannotUpdate;

  /**
   * @var string[]
   */
  protected static $fields = array(
    PartnerCategoryFields::DESCRIPTION,
    PartnerCategoryFields::DETAILS,
    PartnerCategoryFields::ID,
    PartnerCategoryFields::NAME,
    PartnerCategoryFields::PARENT_CATEGORY,
    PartnerCategoryFields::SOURCE,
    PartnerCategoryFields::STATUS,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'partnercategories';
  }
}
