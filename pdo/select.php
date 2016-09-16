<?php
//conexao com o banco de dados
include("conexao.php");
$pdo=conectar();
//realizando consulta
$buscarusuario=$pdo->prepare("SELECT * FROM funcionario WHERE cpfFuncionario=cpfFuncionario");
$buscarusuario->execute();
//tribuindo os dados a uma variavel
$linha = $buscarusuario->fetchAll(PDO::FETCH_OBJ);

foreach ($linha as $listar){
	//listagem dos dados
	echo $listar["nomeFuncionario", "cpfFuncionario", "sexoFuncionario", "cnhRegistro", "categoriaCnh",
	 "vencimentoCnh", "enderecoFuncionario", "numeroEndereco", "bairroFuncionario", "cidadeFuncionario", 
	 "foneResidenciaFuncionario", "foneCelularFuncionario", "emailFuncionario"];
}

?>