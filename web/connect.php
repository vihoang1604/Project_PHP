<?php 
error_reporting(1);
	$mysqli = new mysqli("localhost","root","password","project_PHP");
	if ($mysqli === false ) {
		die("ERROR:Could not connect ".$mysqli-> error);
	}
 ?>