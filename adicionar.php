<?php 
require 'config.php';

if(isset($_SESSION['codigo']) && !empty($_SESSION['codigo'])):

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Cadastro de produtos</title>
</head>
<body>
<form method="POST" action="adicionar_produto.php" >

    <fieldset>
    	<legend>Produto</legend>
             <p>
             	<label >Codigo produto: </label>
                <input type="text" name="codigo" id="codigo" required="required">
        	</p>
        

        <p>
            <label >Marca: </label>
            <input type="text" name="marca" id="marca" required="required">
        </p>

        <p>
            <label>Modelo: </label>
            <input type="text" name="modelo" id="modelo" required="required">
        </p>


        <p>
            <label >Cor: </label>
            <input type="text" name="cor" id="cor" required="required">
        </p>


        <p>
            <label >Preço: </label>
            <input type="text" name="preco" id="preço" size="5" required="required" >
        </p>


        <p>
            <label >Data fabricação: </label>
            <input type="date" name="data" id="data" required="required">
        </p>


        <p>
            <label >Data de cadastro: </label>
            <input type="date" name="datacadastro" id="datacadastro" required="required">
        </p>

  

  

    <fieldset>

    	  <legend>Fornecedor</legend> 
    	  
        <p>
            <label >Nome fornecedor: </label>
            <input type="text" name="nomefornecedor" id="nomefornecedor"  required="required">
        </p>


        <p>
            <label >Telefone:   </label>
            <input type="text" name="telefone" id="telefone" placeholder="(00) 000.000.000" required="required">
        </p>


        <p>
            <label >Email: </label>
            <input style="text-transform: none;" type="Email" name="email" id="email" placeholder="@email" size="35" required="required">
        </p>



        <fieldset>

       	 	<legend>Endereço</legend>
        	<p>
            	<label >Rua: </label>
            	<input type="text" name="rua" id="rua" required="required">
        	</p>


       		 <p>
            	<label >Numero: </label>
            	<input type="text" name="numero" id="numero" size="5" required="required">
       		 </p>


        	<p>
            	<label >Cidade: </label>
            	<input type="text" name="cidade" id="cidade" required="required">
        	</p>


        	<p>
           	    <label >Estado: </label>
                <input type="text" name="estado" id="estado" required="required">
        	</p>


       		 <p>
            	<label >Cep: </label>
            	<input type="text" name="cep" id="cep" placeholder=" 00000-000" required="required">
       		</p>
        </fieldset>

      </fieldset>

        <input type="submit" value="Cadastrar" id="cadastrar"  onclick="return confirm
            ('Tem certeza que deseja cadastrar?')">
    
		<input id="cancelar" type="reset" name="limpa" value="Limpar"  onclick="return confirm
            ('Tem certeza que deseja apagar?')">  

</form>
    <form method="post" action="inicio.php" style="float: left;">
        <input type="submit" value="Inicio" id="cadastrar">
    </form>
    <form method="post" action="estoque.php">
        <input type="submit" value="Produtos" id="cadastrar">
    </form>
    
 </fieldset>
     

</body>
</html>
<?php else: header("Location: index.php");  endif; ?>