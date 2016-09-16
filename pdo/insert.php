<?php
	//include("conexao.php");
	//$pdo=conectar();

$nomeFuncionario = $_POST['nomeFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$sexoFuncionario = $_POST['sexoFuncionario'];
$cnhRegistro = $_POST['cnhRegistro'];
$categoriaCnh = $_POST['categoriaCnh'];
$vencimentoCnh = $_POST['vencimentoCnh'];
$enderecoFuncionario = $_POST['enderecoFuncionario'];
$numeroEndereco = $_POST['numeroEndereco'];
$bairroFuncionario = $_POST['bairroFuncionario'];
$cidadeFuncionario = $_POST['cidadeFuncionario'];
$foneResidenciaFuncionario = $_POST['foneResidenciaFuncionario'];
$foneCelularFuncionario = $_POST['foneCelularFuncionario'];
$emailFuncionario = $_POST['emailFuncionario'];

//prepara o cadastro
$buscausuario=$pdo->query("SELECT * FROM funcionario");
$buscasegura=$pdo->prepare("INSERT INTO funcionario (nomeFuncionario, cpfFuncionario, sexoFuncionario, cnhRegistro,categoriaCnh, vencimentoCnh, enderecoFuncionario, numeroEndereco, bairroFuncionario, cidadeFuncionario, foneResidenciaFuncionario, foneCelularFuncionario, emailFuncionario)
	VALUES(:nomeFuncionario, :cpfFuncionario, :sexoFuncionario, :cnhRegistro, :categoriaCnh, 
	:vencimentoCnh, :enderecoFuncionario, :numeroEndereco, :bairroFuncionario, 
	:cidadeFuncionario, :foneResidenciaFuncionario, :foneCelularFuncionario, :emailFuncionario)");

$buscasegura->bindValue(":nomeFuncionario", $nomeFuncionario);     
$buscasegura->bindValue(":cpfFuncionario", $cpfFuncionario);
$buscasegura->bindValue(":sexoFuncionario", $sexoFuncionario);
$buscasegura->bindValue(":cnhRegistro", $cnhRegistro);
$buscasegura->bindValue(":categoriaCnh", $categoriaCnh);
$buscasegura->bindValue(":vencimentoCnh", $vencimentoCnh);
$buscasegura->bindValue(":enderecoFuncionario", $enderecoFuncionario);
$buscasegura->bindValue(":numeroEndereco", $numeroEndereco);
$buscasegura->bindValue(":bairroFuncionario", $bairroFuncionario);
$buscasegura->bindValue(":cidadeFuncionario", $cidadeFuncionario);
$buscasegura->bindValue(":foneResidenciaFuncionario", $foneResidenciaFuncionario);
$buscasegura->bindValue(":foneCelularFuncionario", $foneCelularFuncionario);
$buscasegura->bindValue(":emailFuncionario", $emailFuncionario);
//valida o cadastro efetua busca
$validar=$pdo->prepare("SELECT * FROM funcionario WHERE nomeFuncionario=?, cpfFuncionario=?, sexoFuncionario=?, cnhRegistro=?, categoriaCnh=?, vencimentoCnh=?, enderecoFuncionario=?, numeroEndereco=?, bairroFuncionario=?, cidadeFuncionario=?, foneResidenciaFuncionario=?, foneCelularFuncionario=?, emailFuncionario=?");
//para nao ser repetido
$validar->execute(array($cpfFuncionario, $cnhRegistro, $emailFuncionario));
if($validar->rowCount()==0):
	//executa o cadastro
	$buscasegura->execute();
else:
	echo "Já existe!";
		("<script type='text/javascript'>alert('DESCULPE, O FUNCIONÁRIO JÁ EXISTE!');</script>");
endif;

?>