<?php 


class usuario
{
	
	public function login($nome, $senha)
	{
		global $pdo;

		$sql = "SELECT * FROM  usuario WHERE nome = :nome AND senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue("nome", $nome);
		$sql->bindValue("senha", $senha);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dado= $sql->fetch();

			$_SESSION['codigo'] = $dado['codigo'];
			return true;
		}else{
			return false;
		}
	}
}


 ?>