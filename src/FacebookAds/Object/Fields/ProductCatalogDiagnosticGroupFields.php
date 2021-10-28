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

class ProductCatalogDiagnosticGroupFields extends AbstractEnum {

  const AFFECTED_CHANNELS = 'affected_channels';
  const AFFECTED_FEATURES = 'affected_features';
  const DIAGNOSTICS = 'diagnostics';
  const ERROR_CODE = 'error_code';
  const NUMBER_OF_AFFECTED_ITEMS = 'number_of_affected_items';
  const SEVERITY = 'severity';
  const SUBTITLE = 'subtitle';
  const TITLE = 'title';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'affected_channels' => 'list<AffectedChannels>',
      'affected_features' => 'list<AffectedFeatures>',
      'diagnostics' => 'list<Object>',
      'error_code' => 'int',
      'number_of_affected_items' => 'int',
      'severity' => 'Severity',
      'subtitle' => 'string',
      'title' => 'string',
      'type' => 'Type',
    );
  }
}
