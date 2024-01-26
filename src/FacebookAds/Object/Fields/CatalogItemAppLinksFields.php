<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class CatalogItemAppLinksFields extends AbstractEnum {

  const ANDROID = 'android';
  const IOS = 'ios';
  const IPAD = 'ipad';
  const IPHONE = 'iphone';
  const WEB = 'web';
  const WINDOWS = 'windows';
  const WINDOWS_PHONE = 'windows_phone';
  const WINDOWS_UNIVERSAL = 'windows_universal';

  public function getFieldTypes() {
    return array(
      'android' => 'list<AndroidAppLink>',
      'ios' => 'list<IosAppLink>',
      'ipad' => 'list<IosAppLink>',
      'iphone' => 'list<IosAppLink>',
      'web' => 'WebAppLink',
      'windows' => 'list<WindowsAppLink>',
      'windows_phone' => 'list<WindowsPhoneAppLink>',
      'windows_universal' => 'list<WindowsAppLink>',
    );
  }
}
