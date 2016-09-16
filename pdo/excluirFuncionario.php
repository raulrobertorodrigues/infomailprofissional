
<?php
include("conexao.php");
$pdo=conectar();
//verifica se tem dados necessarios para deletar
if(!empty($_POST["cpfFuncionario"]));
	//recebendo os dados
	$id=addcslashes(trim($_POST["cpfFuncionario"]));
//realizando a consulta para delete
	$deletarusuario=$pdo->prepare("DELETE FROM funcionario WHERE cpfFuncionario='$cpfFuncionario'");
	$deletarusuario->bindValue(1,$cpfFuncionario);
	$deletarusuario->execute();
	if($deletarusuario->rowCont() > 0);
		echo("<script type='text/javascript'>alert('FUNCIONÁRIO DELETADO COM SUCESSO!'); location.href='consultarFuncionario.php';</script>");
	else:
		echo "DESCULPE, O FUNCIONÁRIO NÃO FOI DELETADO"; 
		("<script type='text/javascript'>alert('DESCULPE, O FUNCIONÁRIO NÃO FOI DELETADO!'); location.href='consultarFuncionario.php';</script>");
	endif;
else:
	echo "<h2>NEHNUM USUÁRIO ENCONTRADO, FAVOR VERIFIQUE OS DADOS!</h2>";
endif;
?>
