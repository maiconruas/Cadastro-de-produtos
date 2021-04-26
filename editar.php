<?php
//update//
require'config.php';
$info = [];
$codigo = filter_input(INPUT_GET,'codigo');
if($codigo){

	$sql = $pdo->prepare("SELECT * FROM produtos where codigo = :codigo");
	$sql->bindValue(':codigo', $codigo);
	$sql->execute();

	if($sql->rowCount() > 0){

		$info = $sql->fetch(PDO::FETCH_ASSOC );

	}else{
		header("location: estoque.php");
		exit;
	}

}else{
	header("location: estoque.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Editar  produtos</title>
</head>
<body>
<form method="POST" action="editar_produto.php" >

    <fieldset>
    	<legend>Produto</legend>
             <p>
             	<label >Codigo produto: </label>
                <input type="text" name="codigo" id="codigo" value="<?=$info['codigo'];?>"/>
        	</p>
        

        <p>
            <label >Marca: </label>
            <input type="text" name="marca" id="marca" value="<?=$info['marca'];?>"/>
        </p>

        <p>
            <label>Modelo: </label>
            <input type="text" name="modelo" id="modelo" value="<?=$info['modelo'];?>"/>
        </p>


        <p>
            <label >Cor: </label>
            <input type="text" name="cor" id="cor" value="<?=$info['cor'];?>"/>
        </p>


        <p>
            <label >Preço: </label>
            <input type="text" name="preco" id="preço" size="5" value="<?=$info['preco'];?>"/>
        </p>


        <p>
            <label >Data fabricação: </label>
            <input type="date" name="data" id="data" value="<?=$info['data'];?>"/>
        </p>


        <p>
            <label >Data de cadastro: </label>
            <input type="date" name="datacadastro" id="datacadastro" value="<?=$info['datacadastro'];?>"/>
        </p>

  

  

    <fieldset>

    	  <legend>Fornecedor</legend> 
    	  
        <p>
            <label >Nome fornecedor: </label> 
            <input type="text" name="nomefornecedor" id="nomefornecedor"  value="<?=$info['fornecedor'];?>"/>
        </p>


        <p>
            <label >Telefone:   </label>
            <input type="text" name="telefone" id="telefone" placeholder="(00) 000.000.000" value="<?=$info['telefone'];?>"/>
        </p>


        <p>
            <label >Email: </label>
            <input style="text-transform: none;" type="Email" name="email" id="email" placeholder="@email" size="35" value="<?=$info['email'];?>"/>
        </p>



        <fieldset>

       	 	<legend>Endereço</legend>
        	<p>
            	<label >Rua: </label>
            	<input type="text" name="rua" id="rua" value="<?=$info['rua'];?>"/>
        	</p>


       		 <p>
            	<label >Numero: </label>
            	<input type="text" name="numero" id="numero" size="5" value="<?=$info['numero'];?>"/>
       		 </p>


        	<p>
            	<label >Cidade: </label>
            	<input type="text" name="cidade" id="cidade" value="<?=$info['cidade'];?>"/>
        	</p>


        	<p>
           	    <label >Estado: </label>
                <input type="text" name="estado" id="estado" value="<?=$info['estado'];?>"/>
        	</p>


       		 <p>
            	<label >Cep: </label>
            	<input type="text" name="cep" id="cep" placeholder=" 00000-000" value="<?=$info['CEP'];?>"/>
       		</p>
        </fieldset>

      </fieldset>

        <input type="submit" value="salvar" id="cadastrar" " onclick="return confirm
            ('Tem certeza que deseja alterar?')">
        <a href="estoque.php"><input type="submit" value="Voltar" id="cadastrar" ></a>
    	 
  
  </form>
      
    
 </fieldset>
   

    

</body>
</html>