<?php 
$db_user = "root";
$db_name ="registration";
$db_pass="";

$db =new pdo('mysql:host=localhost;dbname='.$db_name.'charset=utf8'.$db_pass,$db_user);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);