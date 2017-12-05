<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-12-02
 * Time: 오후 6:28
 */
$im = imagecreatefromjpeg("testImg2.jpeg");

Header('Content-type:image/jpeg');

imagefilter($im, IMG_FILTER_BRIGHTNESS, 100);
// 밝기 조정
imagejpeg($im);
imagedestroy($im);