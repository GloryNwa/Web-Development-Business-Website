<?php

$db_host = 'remotemysql.com';
$db_user = 'cQcHOsdAOT';
$db_password = 'XaRPuy7GGX';
$db_name = 'cQcHOsdAOT';



$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}














?>