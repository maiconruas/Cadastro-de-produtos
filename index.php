<!DOCTYPE html>
<html>
<head>
	<title>Pagina de login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

	<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 530px;">
			<div style="height:400px; width:550px; margin-left:15px;">

				<fieldset  style="text-align: center;  display: flex; justify-content: center; align-items: center;">
					<legend style="font-size: 35px;">Acesso ao sistema </legend>
    					<form method="post" action="logar.php"><br><br>
        					<input type="text" name="nome" style=" padding: 10px;" required="required" ><br><br>
        					<input type="password" name="senha" style=" padding: 10px;" required="required"><br><br>
        					<input type="submit" value="entrar" name="entrar"  style="	height:45px;width:100px;border-radius: 10px; background-color:  #F0F8FF ; font-size: 18px;">
    					</form><br>
    			</fieldset>

			</div>	
	</div>		
		
</body>
</html>

