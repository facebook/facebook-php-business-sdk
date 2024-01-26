<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds;

class AnonymousSession implements SessionInterface {

  /**
   * @return array
   */
  public function getRequestParameters() {
    return array();
  }
}
