<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-12-03
 * Time: 오전 12:40
 */
$count = isset($_GET['count'])?$_GET['count'] :  0;

$height = 20;
$width = $count*2;

$im = imagecreatetruecolor($width,$height);

$color = imagecolorallocate($im, rand(0,84)*3,rand(0,122)*2,rand(0,255));

imagefill($im, 0, 0, $color);

header('Content-type:image/png');
imagepng($im);

imagedestroy($im);
