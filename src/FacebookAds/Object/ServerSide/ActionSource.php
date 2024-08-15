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
 * Class ActionSource
 *
 * Where the conversion event occurred.
 *
 * @package FacebookAds\Object\ServerSide
 */
class ActionSource extends AbstractEnum {

  /**
   * Conversion happened over email.
   */
  const EMAIL = 'email';

  /**
   * Conversion was made on your website.
   */
  const WEBSITE = 'website';

  /**
   * Conversion was made using your app.
   */
  const APP = 'app';

  /**
   * Conversion was made over the phone.
   */
  const PHONE_CALL = 'phone_call';

  /**
   * Conversion was made via a messaging app, SMS, or online messaging feature.
   */
  const CHAT = 'chat';

  /**
   * Conversion was made in person at your physical store.
   */
  const PHYSICAL_STORE = 'physical_store';

  /**
   * Conversion happened automatically, for example, a subscription renewal that’s set on auto-pay each month.
   */
  const SYSTEM_GENERATED = 'system_generated';

  /**
   * Conversion happened through a business messaging channel, such as WhatsApp or Instagram Direct.
   */
  const BUSINESS_MESSAGING = 'business_messaging';

  /**
   * Conversion happened in a way that is not listed.
   */
  const OTHER = 'other';
}
