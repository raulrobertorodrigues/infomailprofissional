<?php

include_once ('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>InfomailProfissional</title>
<!-- Favicon-->
<link rel="icon" type="image/png" href="imagens/fav2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="assets/bootstrap2/css/bootstrap.css">
	 
<style type="text/css">
	.navbar-inverse .nav > li > a{
		font-family: "arial";
		color: #ecf0f1;	
	}
	.navbar-inverse .nav > li > a:hover{
		background-color: #ecf0f1; height: 50px;
		color: #000000;	
	}
	.botaoSair{ 
		padding: 7px;
		height: 30px;
		margin-left: 5px;
		background-color: #2ecc71;
		color: #FFFFFF;
		font-weight: bold;	 
		font-size: 14px;
		border-radius: 5px;
		border: 0px;
		cursor: pointer;
	}
	p{margin-left: 20px;}
</style>
<script>function formatar(mascara, documento){
  			var i = documento.value.length;
 			var saida = mascara.substring(0,1);
  			var texto = mascara.substring(i)

  	if (texto.substring(0,1) != saida){
        documento.value += texto.substring(0,1);            
  	}
}

</script>

</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner" ><!--"navbar-inner" irá começar a formatação da barra de navegação -->
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php" style="color: #ecf0f1; background-color:#1874CD;" >Página Inicial</a>
			<ul class="nav navbar-nav">
				<!--<li class="divider-vertical"><a href="index.php" style="color: #ecf0f1; background-color: #0000FF; font-weight: bold;">Pagina Inicial</a></li>-->
				<li class="dropdown divider-vertical">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="cadastrarFuncionario.php">Funcionário</a></li>
						<li><a href="cadastrarVeiculo.php">Veículo</a></li>	
					</ul>
				</li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Reserva<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="reservarVeiculo.php">Reservar</a></li>
						<li><a href="devolucaoVeiculo.php">Devolução</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Consulta<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="consultarFuncionario.php">Consultar Funcionário</a></li>
						<li><a href="consultarVeiculo.php">Consultar Veículo</a></li>
						<li><a href="consultarReserva.php">Consultar Reserva</a></li>
					</ul>
				</li>
			</ul>
			<form action="" class="navbar-form pull-right">
				<i class="fa fa-cog" aria-hidden="true"></i>
				<span class="sr-only">Loading...</span>
				<input type="text" style="height: 28px;" class="span3">
				<buttton class="btn btn-primary">Pesquisar</buttton>
				<a href="http://www.infomailprofissional.com.br"><input type="button" class="pull-right btn-danger botaoSair controll-nav" value="Sair" /></a>
			</form>
		</div>
	</div>	
</nav>
</body>
</html>

