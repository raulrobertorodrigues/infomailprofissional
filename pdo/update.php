<?php
//conexao com o banco de dados
include("conexao.php");
$pdo=conectar();
//realizando consulta
$buscarusuario=$pdo->prepare("UPDATE funcionario SET nomeFuncionario=:nomeFuncionario");
$buscarusuario->execute();

?>