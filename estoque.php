<?php 
require 'config.php';

if(isset($_SESSION['codigo']) && !empty($_SESSION['codigo'])):

?>
<?php



$lista = [];

$sql = $pdo->query("SELECT * FROM produtos");

if($sql->rowCount() > 0){
	$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Estoque de produtos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<style>
		body{
			width:100% ;
		}
	#editar, #excluir{
	margin-top: 10px;
	margin-bottom: 10px;
	height:25px;
	width:65px;
	border-radius: 10px;
	background-color:  #F0F8FF ;
	font-size: 12px;
	}
	#excluir:hover{
		background-color: red;
		color:white;
	}

	#editar:hover{
		background-color: blue;
		color:white;
	}
</style>

	
	
	    <h1 style="text-align:center; font-weight: 400;">Estoque de produtos</h1>
   
<table border="2" width="100%" style="border-color: black;" >
	<tr>
		<th>Codigo</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Cor</th>
		<th>Preço</th>
		<th>Data de fabricação</th>
		<th>Data de cadastro</th>
		<th>Fornecedor</th>
		<th>Email</th>
		<th>Telefone</th>
		<th>Rua</th>
		<th>Numero</th>
		<th>Cidade</th>
		<th>Estado</th>
		<th>Cep</th>
		<th>Ações</th>
	</tr>
<?php foreach($lista as $produtos): ?>
	<tr>
		<td><?=$produtos['codigo'];?></td>
		<td><?=$produtos['marca'];?></td>
		<td><?=$produtos['modelo'];?></td>
		<td><?=$produtos['cor'];?></td>
		<td><?=$produtos['preco'];?></td>
		<td><?=$produtos['datafabricacao'];?></td>
		<td><?=$produtos['datacadastro'];?></td>
		<td><?=$produtos['fornecedor'];?></td>
		<td><?=$produtos['email'];?></td>
		<td><?=$produtos['telefone'];?></td>
		<td><?=$produtos['rua'];?></td>
		<td><?=$produtos['numero'];?></td>
		<td><?=$produtos['cidade'];?></td>
		<td><?=$produtos['estado'];?></td>
		<td><?=$produtos['CEP'];?></td>
		<td>

			
			<form method="post" action="editar.php?codigo=<?=$produtos['codigo'];?>">
        		<input type="submit" value="Editar" id="editar" >
    		</form>
    		<form method="post" action="excluir.php?codigo=<?=$produtos['codigo'];?>" onclick="return confirm
			('Tem certeza que deseja excluir?')">
        		<input type="submit" value="Excluir" id="excluir" >
    		</form>
		
		</td>
	</tr>

<?php endforeach; ?>


</table>
<a href="inicio.php"><input type="submit" value="Inicio" id="cadastrar" style="float: left; margin-bottom: 25px;"></a>
<a href="adicionar.php"><input type="submit" value="Cadastrar" id="cadastrar" style="margin-bottom: 25px; margin-right: 30px;"></a>
<a href="pesquisa.php"><input type="submit" value="Pesquisa" id="cadastrar" style=" margin-bottom: 25px;"></a>

</body>
</html>
<?php else: header("Location: index.php");  endif; ?>