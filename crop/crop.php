<?php
require_once './vendor/autoload.php';

header('Content-Type: image/jpeg');

use Gregwar\Image\Image;

echo Image::open('chichen.jpg')
	->crop(0,110,622,270)
	->get();