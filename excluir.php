<?php
//delete//
require 'config.php';

$codigo = filter_input(INPUT_GET, 'codigo');
if($codigo) {
	
	$sql = $pdo->prepare("DELETE FROM produtos WHERE codigo = :codigo");
	$sql->bindValue(':codigo', $codigo);
	$sql->execute();

}
	header("location: estoque.php");
	exit;
