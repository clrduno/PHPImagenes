<?php
$code=isset($_GET['code']) ? $_GET['code'] : '';

if($code==12345){
	header('Content-Type: image/gif');
	readfile('./attractions.jpg');
}else{	
	header('Content-type: image/png');
	readfile('./350x150.png');
}