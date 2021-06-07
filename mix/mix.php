<?php
require_once './vendor/autoload.php';

header('Content-Type: image/jpeg');
use Gregwar\Image\Image;

$chichen = Image::open('watermark.png')
	->resize('50%')
	;

echo Image::open('granada.jpg')
	->merge($chichen, 50, 10)
	->get()
	;

