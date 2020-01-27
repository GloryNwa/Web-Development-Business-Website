<?php
// include_once('db.php');
session_start();
// unset($_SESSION['email']);
unset($_SESSION['password']);
session_destroy();

header("Location: ../index.php");
exit;


?>