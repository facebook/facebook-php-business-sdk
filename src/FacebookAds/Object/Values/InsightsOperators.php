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

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * @method static InsightsOperators getInstance()
 */
class InsightsOperators extends AbstractEnum {

  const ALL = 'ALL';
  const ANY = 'ANY';
  const CONTAIN = 'CONTAIN';
  const EQUAL = 'EQUAL';
  const GREATER_THAN = 'GREATER_THAN';
  const GREATER_THAN_OR_EQUAL = 'GREATER_THAN_OR_EQUAL';
  const IN = 'IN';
  const IN_RANGE = 'IN_RANGE';
  const LESS_THAN = 'LESS_THAN';
  const LESS_THAN_OR_EQUAL = 'LESS_THAN_OR_EQUAL';
  const NONE = 'NONE';
  const NOT_CONTAIN = 'NOT_CONTAIN';
  const NOT_EQUAL = 'NOT_EQUAL';
  const NOT_IN = 'NOT_IN';
  const NOT_IN_RANGE = 'NOT_IN_RANGE';
}
