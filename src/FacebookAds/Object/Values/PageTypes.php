<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * @deprecated page_types are read-only in v2.7 and to be removed in v2.8
 * @method static PageTypes getInstance()
 */
class PageTypes extends AbstractEnum {

  const DESKTOP_FEED = 'desktopfeed';
  const HOME = 'home';
  const INSTAGRAM_STREAM = 'instagramstream';
  const LEGACY_EXTERNAL = 'legacyexternal';
  const LOGOUT = 'logout';
  const MOBILE_EXTERNAL = 'mobileexternal';
  const MOBILE_FEED = 'mobilefeed';
  const RIGHT_COLUMN = 'rightcolumn';
}
