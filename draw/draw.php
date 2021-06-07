<?php
require_once './vendor/autoload.php';

header('Content-Type: image/jpeg');
use Gregwar\Image\Image;

echo Image::open('grand.jpg')
	->rectangle(10,10,400,400,'blue',true)
	//->rectangle(10,10,400,400,'blue',false)
	//->roundedRectangle(10,10,400,100,20,'red',false)
	->circle(200,250,150,'green',true)
	->line(50, 500, 300, 500, '#FFF')
	->get()
	;
