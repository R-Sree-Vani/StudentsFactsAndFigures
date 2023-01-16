<?php

$link = mysqli_connect('localhost','root','');
mysqli_connect($link,'sfaf');
if(!$link){
	die('cannoct connect'.mysqli_error());
}

?>
