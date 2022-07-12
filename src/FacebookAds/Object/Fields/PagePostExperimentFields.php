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

class PagePostExperimentFields extends AbstractEnum {

  const AUTO_RESOLVE_SETTINGS = 'auto_resolve_settings';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DECLARED_WINNING_TIME = 'declared_winning_time';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const INSIGHT_SNAPSHOTS = 'insight_snapshots';
  const NAME = 'name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const PUBLISH_STATUS = 'publish_status';
  const PUBLISH_TIME = 'publish_time';
  const SCHEDULED_EXPERIMENT_TIMESTAMP = 'scheduled_experiment_timestamp';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'auto_resolve_settings' => 'Object',
      'creation_time' => 'datetime',
      'creator' => 'User',
      'declared_winning_time' => 'datetime',
      'description' => 'string',
      'id' => 'string',
      'insight_snapshots' => 'map<datetime, map<int, Object>>',
      'name' => 'string',
      'optimization_goal' => 'string',
      'publish_status' => 'string',
      'publish_time' => 'datetime',
      'scheduled_experiment_timestamp' => 'datetime',
      'updated_time' => 'datetime',
    );
  }
}
