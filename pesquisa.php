<?php 
require 'config.php';

if(isset($_SESSION['codigo']) && !empty($_SESSION['codigo'])):

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa de produto</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<style>
	#pesquisa{
	
	
	height:25px;
	
	width:100px;
	border-radius: 10px;
	background-color:  #F0F8FF ;
	font-size: 16px;
	}
</style>

				<fieldset>

					<legend>Pesquisa de produto</legend>

						<form  method ="post" action="#">
						<label>Codigo do produto: </label>
		         		<input type="text" name="codigo" id="codigo">
		         		<input type="submit" name="pesquisar" value="Pesquisar" id="pesquisa">
		         		</form><br><br>

		         		<form  method ="post" action="#">
		         		<label>Preço de produto: </label>
		         		<input type="text" name="preco" id="preco" size="10">
		         		<input type="submit" name="pesquisar" value="Pesquisar" id="pesquisa">
		         		</form><br><br>


		         		<form  method ="post" action="#">
		         		<label>Fornecedor do produto: </label>
		         		<input type="text" name="nomefornecedor" id="nomefornecedor">
		         		<input type="submit" name="pesquisar" value="Pesquisar" id="pesquisa">
		         		</form>

		        		 

    			
		         		
				<form method="post" action="inicio.php">
        					<input type="submit" value="Inicio" id="cadastrar" ><br>
    			</form>

    			</fieldset>	


<?php

//codigo

$codigo = filter_input(INPUT_POST, 'codigo');
$pdo = new PDO("mysql:dbname=cadastro; host=localhost", "root" , "");
$sql = $pdo->prepare('SELECT * FROM produtos WHERE codigo  like :codigo');
$sql->bindParam(':codigo', $codigo, PDO::PARAM_STR);
$sql->execute();	

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="2" width="100%" style="border-radius: 10px; border-color: black; ">
	<tr>
		<th>Codigo</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Preço</th>
		<th>Fornecedor</th>
	</tr>	
<?php

	if(count($resultado)){
	foreach($resultado as $resultado){
?>

<tr>
		<td><?=$resultado['codigo'];?></td>
		<td><?=$resultado['marca'];?></td>
		<td><?=$resultado['modelo'];?></td>
		<td><?=$resultado['preco'];?></td>
		<td><?=$resultado['fornecedor'];?></td>
</tr>

<?php
} } else {
?>

<?php	
}			
?>
   
<?php

//fornecedor


$nomefornecedor = filter_input(INPUT_POST, 'nomefornecedor');
$pdo = new PDO("mysql:dbname=cadastro; host=localhost", "root" , "");
$sql = $pdo->prepare('SELECT * FROM produtos WHERE fornecedor  like :fornecedor');
$sql->bindParam(':fornecedor', $nomefornecedor, PDO::PARAM_STR);
$sql->execute();	

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<?php

	if(count($resultado)){
	foreach($resultado as $resultado){
?>

<tr>
		<td><?=$resultado['codigo'];?></td>
		<td><?=$resultado['marca'];?></td>
		<td><?=$resultado['modelo'];?></td>
		<td><?=$resultado['preco'];?></td>
		<td><?=$resultado['fornecedor'];?></td>
</tr>

<?php
} } else {
?>

<?php	
}			
?>

<?php

//preço

$preco = filter_input(INPUT_POST, 'preco');
$pdo = new PDO("mysql:dbname=cadastro; host=localhost", "root" , "");
$sql = $pdo->prepare('SELECT * FROM produtos WHERE preco  like :preco');
$sql->bindParam(':preco', $preco, PDO::PARAM_STR);
$sql->execute();	

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

 
<?php

	if(count($resultado)){
	foreach($resultado as $resultado){
?>

<tr>
		<td><?=$resultado['codigo'];?></td>
		<td><?=$resultado['marca'];?></td>
		<td><?=$resultado['modelo'];?></td>
		<td><?=$resultado['preco'];?></td>
		<td><?=$resultado['fornecedor'];?></td>
</tr>

<?php
} } else {
?>

<?php	
}			
?>  

</body>
</html>
<?php else: header("Location: index.php");  endif; ?>