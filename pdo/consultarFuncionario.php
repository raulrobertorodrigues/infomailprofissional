<?php
//include("conexao.php");
	//$pdo=conectar();
//include("insert.php");
//include("select.php");
include "topo.php";

?>

<script>
	function apagarFuncionario(){
		if(confirm("Deseja excluir o Funcionário?")){
			return true;
		}else{ return false;}
	}
</script>

<fieldset style="background-color: #ecf0f1; margin-left: 70px; margin-right:70px; box-shadow: 2px 2px 5px #bbb; ">
<body style="padding-top: 5%;">
	<p style="padding-top: 1%;"><a href="cadastrarFuncionario.php" class="btn btn-success">Cadastrar Funcionário</a></p>
	
	<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover active">
		<thead style="color: #009;">
			<th>Nome</th>
			<th>CPF</th>
			<th>Sexo</th>
			<th>CNH registro</th>
			<th>Vencimento</th>
			<th>Endereço</th>
			<th>Numero</th>
			<th>Bairro</th>
			<th>Cidade</th>
			<th>Fone residencia</th>
			<th>Fone celular</th>
			<th>E-mail</th>
		</thead>

	<?php
		//$consulta=mysqli_query("SELECT * FROM funcionario WHERE cpfFuncionario=cpfFuncionario");
			//while ($linha=mysqli_fetch_array($consulta)){}
		//while($row=mysqli_fetch_assoc($sql)){
	?>
		<tr>
			<td class="">Antonio carlos<?php echo $row["nomeFuncionario"]; ?></td>
			<td class="">222.333.45-90<?php echo $row["cpfFuncionario"]; ?></td>
			<td class="">Masculino<?php echo $row["sexoFuncionario"]; ?></td>
			<td class="">12367235467<?php echo $row["cnhRegistro"]; ?></td>
			<td class="">30/12/2020<?php echo $row["vencimentoCnh"]; ?></td>
			<td class="">R: Londrina<?php echo $row["enderecoFuncionario"];?></td>
			<td class="">415<?php echo $row["numeroEndereco"]; ?></td>
			<td class="">Ipiranga<?php echo $row["bairroFuncionario"]; ?></td>
			<td class="">Ubatuba-SP<?php echo $row["cidadeFuncionario"]; ?></td>
			<td class="">12-3345-8967<?php echo $row["foneResidenciaFuncionario"]; ?></td>
			<td class="">12-98117-9011<?php echo $row["foneCelularFuncionario"]; ?></td>
			<td class="">antonio@gmail.com<?php echo $row["emailFuncionario"]; ?></td>
			<td>
				<a href="editarFuncionario.php?cpfFuncionario=<?php echo $row["cpfFuncionario"] ?>" class="btn"><i class="icon-pencil"></i></a>
				<a href="excluirFuncionario.php?cpfFuncionario=<?php echo $row["cpfFuncionario"] ?>" onclick="return apagarFuncionario()" class="btn"><i class="icon-trash"></i></a>
			</td>
		</tr>
		<?php 
			//{
			//if($linha == 0){echo "<tr><td>Nenhuma linha encontrada<td></tr>";} 
		?>

	</table>
	</div>
	<p><button class="btn btn-primary"type="submit">Imprimir</button></p>
</body>
</fieldset>

	<?php
    include "rodape.php";
	?>