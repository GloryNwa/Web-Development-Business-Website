<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'brilliantdevelopers';



$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}














?>