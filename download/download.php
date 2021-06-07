<?php
require_once './vendor/autoload.php';


header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename=modified.jpg');
use Gregwar\Image\Image;

$chichen =  Image::open('watermark.png')
        ->resize('30%')
        ;

echo Image::open('granada.jpg')
        
        ->rectangle( 10, 10, 400, 400, 'blue', false )
        ->roundedRectangle( 10, 10, 400, 100, 20, 'white', true )
        ->circle( 200, 250, 150, 'green', true )
        ->line( 50, 500, 300, 500, '#FFF' )
        //->write( './fonts/Roboto-Regular.ttf', 'New text', 10, 20, 15, 0, 'black', 'left' )
        //->negate()
        //->emboss()
        ->sepia()
        //->flip(true, false)
        //->save('download.jpg')
        ->get()
;
