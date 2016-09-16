<?php
//include 'constantesDoBancoDeDados.php';
//include 'funcoesDoBancoDeDados.php';
session_start();


//$usuario = $_POST[''];
//$senha  = $_POST[''];
echo $usuario;
echo $senha;
	

f(empty($usuario)){
	echo "<script>alert('Preencha todos os campos!');</script>";
	echo "<meta http-equiv='refresh' content='0, url=./login.php'>";
}elseif(empty($senha)){
	echo "<script>alert('Preencha todos os campos!');</script>";
	echo "<meta http-equiv='refresh' content='0, url=./login.php'>";
}else{
	//$sql = mysqli_num_rows(mysqli_query("SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'"));


	if($sql == 1){ 
		$_SESSION['sessao1'] = true;			
		echo "<script>alert('Usuário logado com sucesso!');</script>";
		echo "<meta http-equiv='refresh' content='0, url=./'>";
		header("Location: index.php");
	}else{
		echo "<script>alert('Usuário ou senha inválidos!');</script>";
		echo "<meta http-equiv='refresh' content='0, url=./login.php'>";
	}

}
?>