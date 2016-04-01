<?php
header('Content-Type: image/jpeg');
$directory="bg/";
$images=glob($directory . "*.jpg");
$header=array();
foreach($images as $image){$header[] = $image;}
$randomimg=array_rand($header);
$rdmimg=$header[$randomimg];$output= file_get_contents($rdmimg);echo $output;?>