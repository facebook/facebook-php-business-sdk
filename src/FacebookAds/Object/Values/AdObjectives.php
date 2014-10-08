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

abstract class AdObjectives {

  const CANVAS_APP_ENGAGEMENT = 'CANVAS_APP_ENGAGEMENT';
  const CANVAS_APP_INSTALLS  = 'CANVAS_APP_INSTALLS';
  const EVENT_RESPONSES = 'EVENT_RESPONSES';
  const LOCAL_AWARENESS = 'LOCAL_AWARENESS';
  const MOBILE_APP_ENGAGEMENT = 'MOBILE_APP_ENGAGEMENT';
  const MOBILE_APP_INSTALLS = 'MOBILE_APP_INSTALLS';
  const NONE  = 'NONE';
  const OFFER_CLAIMS  = 'OFFER_CLAIMS';
  const PAGE_LIKES = 'PAGE_LIKES';
  const POST_ENGAGEMENT = 'POST_ENGAGEMENT';
  const WEBSITE_CLICKS = 'WEBSITE_CLICKS';
  const WEBSITE_CONVERSIONS = 'WEBSITE_CONVERSIONS';
}
