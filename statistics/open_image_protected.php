<?php
session_start();

$code = isset( $_SESSION['auth'] ) ? $_SESSION['auth']  : 0;

if( $code )
{
    header('Content-type: image/jpeg');
    readfile('./attractions.jpg');
    $counter=file_get_contents('views.log');
    $counter=(int)$counter;
    $counter++;
    file_put_contents('views.log', $counter);
    $statidistics = $_SERVER['HTTP_USER_AGENT'].';'.$_SERVER['REMOTE_ADDR'];
    $statidistics.="\n*******************************\n";
    file_put_contents('statidistics.log', $statidistics, FILE_APPEND);
}else
{
    header('Content-type: image/png');
    readfile('./350x150.png');
}