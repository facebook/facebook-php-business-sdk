<?php

class wrong_coding_style_pr
{

public function a()
{
  return "this line will easily break the 80 chars limit if i continue to write useless things in this string"; 
}

  static protected function b($x) {
    return $x;
  }

}
