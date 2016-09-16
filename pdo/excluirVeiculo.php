
<?php
include("conexao.php");

$placaVeiculo = $_POST['placaVeiculo'];

$sql = mysqli_query("DELETE FROM veiculo WHERE placaVeiculo='$placaVeiculo'");

if(!$sql){
	echo("<script type='text/javascript'>alert('Erro ao tentar excluir o veículo!'); location.href='consultarVeiculo.php';</script>");
}else{
	echo("<script type='text/javascript'>alert('Veículo excluído com sucesso!'); location.href='consultarVeiculo.php';</script>");
}

?>