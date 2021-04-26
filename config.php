<?php 
//conexão//
session_start();


	$db_name = 'cadastro';
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$pdo = new PDO ("mysql:dbname=cadastro; host=localhost", "root" , "");
	
 ?>