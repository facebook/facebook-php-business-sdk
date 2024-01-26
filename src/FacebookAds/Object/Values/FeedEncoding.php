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
 * @method static FeedEncoding getInstance()
 */
class FeedEncoding extends AbstractEnum {

  const AUTODETECT  = 'AUTODETECT';
  const ASCII = 'ASCII';
  const UTF_8 = 'UTF_8';
  const UTF_16 = 'UTF_16';
  const LATIN_1 = 'LATIN_1';
}
