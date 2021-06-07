<?php

require_once './vendor/autoload.php';

use Gregwar\Image\Image;

header('Content-type: image/jpeg');

$text = isset( $_GET['text'] ) ? $_GET['text'] : '';

echo Image::open('valencia.jpg')
        ->write( './fonts/Roboto-Regular.ttf', $text, 10, 20, 15, 0, 'black', 'left' )
        ->get()
        ;

$counter = file_get_contents('counter.log');
$counter = (int) $counter;
$counter++;
file_put_contents('counter.log', $counter);