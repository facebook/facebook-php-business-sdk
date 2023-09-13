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
