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

class AdCreativeLinkDataImageLayerSpecFields extends AbstractEnum {

  const BLENDING_MODE = 'blending_mode';
  const CONTENT = 'content';
  const FRAME_IMAGE_HASH = 'frame_image_hash';
  const FRAME_SOURCE = 'frame_source';
  const IMAGE_SOURCE = 'image_source';
  const LAYER_TYPE = 'layer_type';
  const OPACITY = 'opacity';
  const OVERLAY_POSITION = 'overlay_position';
  const OVERLAY_SHAPE = 'overlay_shape';
  const SCALE = 'scale';
  const SHAPE_COLOR = 'shape_color';
  const TEXT_COLOR = 'text_color';
  const TEXT_FONT = 'text_font';

  public function getFieldTypes() {
    return array(
      'blending_mode' => 'BlendingMode',
      'content' => 'Object',
      'frame_image_hash' => 'string',
      'frame_source' => 'FrameSource',
      'image_source' => 'ImageSource',
      'layer_type' => 'LayerType',
      'opacity' => 'int',
      'overlay_position' => 'OverlayPosition',
      'overlay_shape' => 'OverlayShape',
      'scale' => 'int',
      'shape_color' => 'string',
      'text_color' => 'string',
      'text_font' => 'TextFont',
    );
  }
}
