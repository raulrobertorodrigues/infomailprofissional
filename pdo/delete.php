<?php
include("conexao.php");
$pdo=conectar();
//verifica se tem dados necessarios para deletar
if(!empty($_POST["cpfFuncionario"]));
	//recebendo os dados
	$id=addcslashes(trim($_POST["cpfFuncionario"]));
//realizando a consulta para delete
	$deletarusuario=$pdo->prepare("DELETE FROM funcionario WHERE cpfFuncionario=?");
	$deletarusuario->bindValue(1,$id);
	$deletarusuario->execute();
	if($deletarusuario->rowCont() > 0);
		echo "USUÁRIO DELETADO COM SUCESSO!";
	else:
		echo "DESCULPE, O USUÁRIO NÃO FOI DELETADO";
	endif;
else:
	echo "<h2>NEHNUM USUÁRIO ENCONTRADO, FAVOR VERIFIQUE OS DADOS!</h2>";
endif;
?>


