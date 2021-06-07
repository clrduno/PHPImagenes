<?php

require_once './vendor/autoload.php';

use Gregwar\Image\Image;

header('Content-Type: image/jpeg');

$text = isset($_GET['text']) ? $_GET['text'] : '';
//no genera los encabezados
echo Image::open('machu.jpg')
->resize('10%')
->write('./fonts/rancho-regular.ttf', $text, 100, 100, 15, 0, 'red', 'left')
->get();
