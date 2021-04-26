


<?php 
	if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['senha'])){


require 'config.php';
require 'usuario.class.php';

$u = new usuario();



$nome = addslashes($_POST['nome']);
$senha = addslashes($_POST['senha']);

if($u->login($nome, $senha) == true){
	if(isset($_SESSION['codigo'])){
		header("Location: inicio.php");

	}else{
		header("Location: index.php");
	}

}else{
	header("Location: index.php");
}




}else{
	header("Location.index.php");
}



 ?>



