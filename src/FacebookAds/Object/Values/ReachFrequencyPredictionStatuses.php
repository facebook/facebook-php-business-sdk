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

abstract class ReachFrequencyPredictionStatuses {

  const SUCCESS = 1;
  const PENDING = 2;
  const UNREACHABLE_AUDIENCE = 3;
  const CONFIG_INVALID = 4;
  const TARGET_SPEC_INVALID = 5;
  const BUDGET_TOO_LOW = 6;
  const TOO_SHORT_AD_SET_LENGTH = 7;
  const TOO_LONG_AD_SET_LENGTH = 8;
  const END_DATE_TOO_FAR = 9;
  const FREQUENCY_CAP_NOT_SPECIFIED = 10;
  const UNSUPPORTED_PLACEMENT = 11;
  const DATE_ERROR = 12;
  const COUNTRY_NOT_SUPPORTED = 13;
  const BLACKOUT_DAYS = 14;
  const INSUFFICIENT_INVENTORY = 15;
  const REACH_BELOW_1_MILLION = 16;
  const MINIMUM_REACH_NOT_AVAILABLE = 17;
  const INVENTORY_CHANGED = 21;
}
