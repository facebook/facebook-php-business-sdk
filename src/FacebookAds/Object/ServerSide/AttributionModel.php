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

namespace FacebookAds\Object\ServerSide;

use FacebookAds\Enum\AbstractEnum;

/**
 * Class AttributionModel
 * @package FacebookAds\Object\ServerSide
 */
class AttributionModel extends AbstractEnum {

  const CUSTOMIZED_MULTI_TOUCH = 'customized_multi_touch';
  const FIRST_TOUCH = 'first_touch';
  const LAST_CLICK = 'last_click';
  const LAST_TOUCH = 'last_touch';
  const LINEAR = 'linear';
  const POSITION_BASED = 'position_based';
  const TIME_DECAY = 'time_decay';
  const UNKNOWN = 'unknown';

  public function getFieldTypes() {
    return array(
      'CUSTOMIZED_MULTI_TOUCH' => 'string',
      'FIRST_TOUCH' => 'string',
      'LAST_CLICK' => 'string',
      'LAST_TOUCH' => 'string',
      'LINEAR' => 'string',
      'POSITION_BASED' => 'string',
      'TIME_DECAY' => 'string',
      'UNKNOWN' => 'string',
    );
  }
}
