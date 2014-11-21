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

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * @method static InsightsOperators getInstance()
 */
class InsightsOperators extends AbstractEnum {

  const ALL = 'all';
  const ANY = 'any';
  const CONTAIN = 'contain';
  const EQUAL = 'equal';
  const GREATER_THAN = 'greater_than';
  const GREATER_THAN_OR_EQUAL = 'greater_than_or_equal';
  const IN = 'in';
  const IN_RANGE = 'in_range';
  const LESS_THAN = 'less_than';
  const LESS_THAN_OR_EQUAL = 'less_than_or_equal';
  const NONE = 'none';
  const NOT_CONTAIN = 'not_contain';
  const NOT_EQUAL = 'not_equal';
  const NOT_IN = 'not_in';
  const NOT_IN_RANGE = 'not_in_range';
}
