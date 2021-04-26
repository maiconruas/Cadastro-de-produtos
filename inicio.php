<?php 
require 'config.php';

if(isset($_SESSION['codigo']) && !empty($_SESSION['codigo'])):

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina inicial</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<style>
			a{
				text-decoration: none;
				
			}

			a:hover{
				color:blue;
			}
		</style>

</head>
<body>
	
	<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 600px;">
		
		
		<fieldset style="width: 520px; padding-right: 50px;">
					<legend style="font-size: 45px; text-align: center;">Seja bem vindo</legend><br><br>

    					<form method="post" action="logout.php">
							<input type="submit" value="sair" name="sair" id="cadastrar" onclick="return confirm
								('Tem certeza que deseja sair?')">
						</form>


						<form method="post" action="estoque.php">
        					<input type="submit" value="Estoque " id="cadastrar">
   						</form>


						<form method="post" action="pesquisa.php" >
       					 	<input type="submit" value="Pesquisar " id="cadastrar">
    					</form>

						
    					<form method="post" action="adicionar.php">
        					<input type="submit" value="Cadastrar " id="cadastrar">
    					</form>

    					


    					

    	</fieldset>				
			

							
 			</div>
 	</div>

 <a href="usuario.php">Cadastrar novo usuario </a>

</body>
</html>
<?php else: header("Location: index.php");  endif; ?>
