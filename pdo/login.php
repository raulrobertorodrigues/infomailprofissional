<?php
//include 'constantesDoBancoDeDados.php';
//include 'funcoesDoBancoDeDados.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="estilo.css">-->
	<!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->
	<link href="assets/css/bootstrap.css" rel="stylesheet">


</head>
<body style="background-color:#ecf0f1 ">

	<form  class="form-horizontal"  action="login2.php" method="post">
		<div style="text-align:center; margin: 8px;">
			<img src="imagens/GRV logo2.png" alt="carro" height="100px" />
		</div>
		<div style="text-align:center; margin: 0 auto; margin-top: 50px;">
			<label>Usuário </label>
			<input class="form-goup" type="text" name="usuario" style="height: 30px"/>
		</div>
		<div style="text-align:center; margin: 0 auto;">
			<label>Senha </label>
			<input type="password" name="senha" style="height: 30px" />
		</div>
		
		<div style="text-align:center; margin: 0 auto; padding: 30px;">
			<!--<button class="btn btn-primary" type="submit">Entrar</button>-->
			<input type="submit"  value="Entrar" class="btn btn-primary" />
			 
		</div>
		


	</form>
<?php
    include "rodape.php";
?>
	
</body>
</html>

