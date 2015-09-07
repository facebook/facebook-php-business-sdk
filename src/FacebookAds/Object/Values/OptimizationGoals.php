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
 * @method static OptimizationGoals getInstance()
 */
class OptimizationGoals extends AbstractEnum {

  const APP_INSTALLS = 'APP_INSTALLS';
  const ENGAGED_USERS = 'ENGAGED_USERS';
  const EVENT_RESPONSES = 'EVENT_RESPONSES';
  const LINK_CLICKS = 'LINK_CLICKS';
  const NONE = 'NONE';
  const OFFER_CLAIMS = 'OFFER_CLAIMS';
  const OFFSITE_CONVERSIONS = 'OFFSITE_CONVERSIONS';
  const PAGE_LIKES = 'PAGE_LIKES';
  const POST_ENGAGEMENT = 'POST_ENGAGEMENT';
  const REACH = 'REACH';
  const VIDEO_VIEWS = 'VIDEO_VIEWS';
  const IMPRESSIONS = 'IMPRESSIONS';
}
