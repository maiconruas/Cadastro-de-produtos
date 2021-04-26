

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuario</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

	<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 530px;">
			<div style="height:400px; width:550px; margin-left:15px;">

				<fieldset style="text-align: center;  display: flex; justify-content: center; align-items: center;" >
					<legend style="font-size: 35px;">cadastro de usuario </legend>
    					
						<form method="post" action="#">
        					<label style="font-size: 22px; margin-right: 18px;">Nome:</label><input type="text" name="nome" required="required" style=" padding: 10px;" ><br><br> 

        					<label style="font-size: 22px; margin-right: 5px;">Senha: </label><input type="password" name="senha"  required="required" style=" padding: 10px;"><br><br>

        					<input type="submit" value="cadastrar" name="entrar"  style="height:45px;width:100px;border-radius: 10px; background-color:  #F0F8FF ; font-size: 18px;"   onclick="return confirm
            ('Tem certeza que deseja adicionar usuario?')">
						</form>

								<form method="post" action="inicio.php" >
							        <input type="submit" value="Inicio" style="margin-top: 125px; height:45px;width:100px;border-radius: 10px; background-color:  #F0F8FF ; font-size: 18px; margin-right: 85px;" >
							   </form>

				</fieldset>
			</div>	
	</div>		
		
</body>
</html>



<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');

$sql = $pdo->prepare("INSERT INTO usuario (nome, senha) VALUES (:nome, :senha)");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':senha', $senha);

$sql->execute();
exit;

?>