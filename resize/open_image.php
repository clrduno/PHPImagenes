<?php
header('Content-Type: image/jpeg');

$file_image = '../assets/images/attractions.jpg';

//readfile($file_image);

list($width, $height) = getimagesize($file_image);

$percentage = 0.3;

$new_width = $width * $percentage;
$new_height = $height * $percentage;

$thumb = imagecreatetruecolor($new_width, $new_height);

$origin = imagecreatefromjpeg($file_image);

imagecopyresized($thumb, $origin, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

imagejpeg($thumb, './thumbmail.jpg');