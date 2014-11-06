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

namespace FacebookAds\Object\Fields;

abstract class CustomAudienceFields {

  const ACCOUNT_ID = 'account_id';
  const APPROXIMATE_COUNT = 'approximate_count';
  const DATA_SOURCE = 'data_source';
  const DELIVERY_STATUS = 'delivery_status';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const LOOKALIKE_AUDIENCE_IDS = 'lookalike_audience_ids';
  const LOOKALIKE_SPEC = 'lookalike_spec';
  const NAME = 'name';
  const OPERATION_STATUS = 'operation_status';
  const OPT_OUT_LINK = 'opt_out_link';
  const ORIGIN_AUDIENCE_ID = 'origin_audience_id';
  const PERMISSION_FOR_ACTIONS = 'permission_for_actions';
  const PREFILL = 'prefill';
  const RETENTION_DAYS = 'retention_days';
  const RULE = 'rule';
  const SUBTYPE = 'subtype';
  const TIME_UPDATED = 'time_updated';
}
