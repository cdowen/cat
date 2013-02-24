<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thumbnail {
  function thumb($pic_url, $width, $height) {
    $im = @imagecreatetruecolor($width, $height)
          or die("Cannot init GD image");
    $background = imagecolorallocate($im, 0, 0, 0);
    list($rwidth, $rheight) = getimagesize($filename);
    $source = imagecreatefromjpeg($pic_url);
    imagecopy($im, $source, 0,0,0,0, $rwidth, $rheight);
    header('Content-type: image/png');
    imagepng($im);
  }
}