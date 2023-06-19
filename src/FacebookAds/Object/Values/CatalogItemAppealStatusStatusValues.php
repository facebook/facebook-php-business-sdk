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

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static CatalogItemAppealStatusStatusValues getInstance()
 */
class CatalogItemAppealStatusStatusValues extends AbstractEnum {

  const THIS_ITEM_CANNOT_BE_APPEALED_AS_IT_IS_EITHER_APPROVED_OR_ALREADY_HAS_AN_APPEAL = 'This item cannot be appealed as it is either approved or already has an appeal';
  const THIS_ITEM_IS_NOT_REJECTED_FOR_ANY_OF_CHANNELS = 'This item is not rejected for any of channels';
  const WEVE_ENCOUNTERED_UNEXPECTED_ERROR_WHILE_PROCESSING_THIS_REQUEST_PLEASE_TRY_AGAIN_LATER_ = 'Weve encountered unexpected error while processing this request. Please try again later !';
  const YOUVE_REACHED_THE_MAXIMUM_NUMBER_OF_ITEM_REQUESTS_YOU_CAN_MAKE_THIS_WEEK_YOULL_BE_ABLE_TO_REQUEST_ITEM_REVIEWS_AGAIN_WITHIN_THE_NEXT_7_DAYS_ = 'Youve reached the maximum number of item requests you can make this week. Youll be able to request item reviews again within the next 7 days.';
  const YOUR_REQUEST_WAS_RECEIVED_SEE_INFORMATION_BELOW_TO_LEARN_MORE_ = 'Your request was received. See information below to learn more.';
}
