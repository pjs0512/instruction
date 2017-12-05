<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-11-30
 * Time: 오후 12:45
 */

$im = imagecreatefromjpeg("testImg.jpeg");

Header('Content-type:image/jpeg');

imagefilter($im, IMG_FILTER_BRIGHTNESS, 100);
// 밝기 조정
imagejpeg($im);
imagedestroy($im);