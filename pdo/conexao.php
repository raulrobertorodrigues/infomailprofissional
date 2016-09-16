<?php
	/*$host="localhost";
	$user="root";
	$pass="";
	$dbname="grv";

	$conexao=mysqli_connect($host,$user,$pass);
	$bd=mysqli_select_db($dbname);*/


function conectar(){
	try{
	$pdo=new PDO("mysqli:host=localhost;dbname=grv","$user","$pass");
	}catch(PDOException $e){
	echo $e->getCode("Erro ao conectar com o banco");
	}
	return $pdo;
}

?>