
<?php
//include 'constantesDoBancoDeDados.php';
//include 'funcoesDoBancoDeDados.php';

$prefixoVeiculo = $_GET['prefixoVeiculo'];

$sql = mysqli_query("DELETE FROM reserva WHERE prefixoVeiculo='$prefixoVeiculo'");

if(!$sql){
	echo("<script type='text/javascript'>alert('Erro ao tentar excluir a reserva!'); location.href='consultarReserva.php';</script>");
}else{
	echo("<script type='text/javascript'>alert('Reserva excluída com sucesso!'); location.href='consultarReserva.php';</script>");
}

?>