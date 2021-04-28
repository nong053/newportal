<?php
error_reporting (E_ALL ^ E_NOTICE);
extract($_REQUEST);

$hostname="127.0.0.1";
$username="root";
$password="";
$dbname="ncoc_db";
$conn=mysqli_connect($hostname,$username,$password);
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,  $dbname);

?>