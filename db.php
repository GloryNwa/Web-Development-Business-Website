<?php

// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'brilliantdevelopers';

$db_host = 'remotemysql.com';
$db_user = 'OcMuDHYdvB';
$db_password = 'vLyByNx3xj';
$db_name = 'OcMuDHYdvB';




$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}



?>