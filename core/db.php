<?php

$dsn = "mysql:host=127.0.0.1;charset=utf8;dbname=vesti_db";

try{
	$pdo = new PDO($dsn,"root","");
}catch(PDOException  $e){
	die("Error:  " . $e->getMessage());
}