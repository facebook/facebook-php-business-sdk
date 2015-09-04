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
 * @method static InsightsPresets getInstance()
 */
class InsightsPresets extends AbstractEnum {

  const LAST_14_DAYS = 'last_14_days';
  const LAST_28_DAYS = 'last_28_days';
  const LAST_30_DAYS = 'last_30_days';
  const LAST_3_MONTHS = 'last_3_months';
  const LAST_7_DAYS = 'last_7_days';
  const LAST_90_DAYS = 'last_90_days';
  const LAST_MONTH = 'last_month';
  const THIS_MONTH = 'this_month';
  const LAST_WEEK = 'last_week';
  const THIS_QUARTER = 'this_quarter';
  const THIS_WEEK = 'this_week';
  const TODAY = 'today';
  const YESTERDAY = 'yesterday';
}
