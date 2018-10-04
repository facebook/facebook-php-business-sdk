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

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class WorkExperienceFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const EMPLOYER = 'employer';
  const END_DATE = 'end_date';
  const FROM = 'from';
  const ID = 'id';
  const LOCATION = 'location';
  const POSITION = 'position';
  const PROJECTS = 'projects';
  const START_DATE = 'start_date';
  const WITH = 'with';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'employer' => 'Page',
      'end_date' => 'string',
      'from' => 'User',
      'id' => 'string',
      'location' => 'Page',
      'position' => 'Page',
      'projects' => 'list<Object>',
      'start_date' => 'string',
      'with' => 'list<User>',
    );
  }
}
