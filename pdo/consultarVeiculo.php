<?php

include "topo.php";
//include("conexao.php");

?>

<script>
	function apagarVeiculo(){
		if(confirm("Deseja excluir o Veículo?")){
			return true;
		}else{ return false;}
	}
</script>

<fieldset style="background-color: #ecf0f1; margin-left: 70px; margin-right:70px; box-shadow: 2px 2px 5px #bbb; ">
<body style="padding-top: 5%;">
	
	<p style="padding-top: 1%;"><a href="cadastrarVeiculo.php" class="btn btn-success">Cadastrar Veículo</a></p>
	<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover active">
		<thead style="color: #009;">
			<th>Prefixo</th>
			<th>Placa</th>
			<th>Ano de fabricação</th>
			<th>Cor</th>
			<th>Direção</th>
			<th>Combustivel</th>
			<th>Ar condicionado</th>
		</thead>

		<?php
			//while($row=mysqli_fetch_assoc($sql)){
		?>
		<tr>
			<td class=""><?php echo $row["prefixoVeiculo"]; ?></td>
			<td class=""><?php echo $row["placaVeiculo"]; ?></td>
			<td class=""><?php echo $row["anoVeiculo"]; ?></td>
			<td class=""><?php echo $row["corVeiculo"]; ?></td>
			<td class=""><?php echo $row["direcaohidraulica"]; ?></td>
			<td class=""><?php echo $row["combustivelVeiculo"]; ?></td>
			<td class=""><?php echo $row["arcondicionado"]; ?></td>
			<td>
				<a href="editarVeiculo.php?prefixoVeiculo=<?php echo $row["prefixoVeiculo"] ?>" class="btn"><i class="icon-pencil"></i></a>
				<a href="excluirVeiculo.php?prefixoVeiculo=<?php echo $row["prefixoVeiculo"] ?>" onclick="return apagarVeiculo()" class="btn"><i class="icon-trash"></i></a>
			</td>
		</tr>
		<?php 
			
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