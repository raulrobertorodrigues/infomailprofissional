<?php
//include 'constantesDoBancoDeDados.php';
//include 'funcoesDoBancoDeDados.php';
include "topo.php";

//$sql = abreConexao()->query("SELECT * FROM reserva ORDER BY cpfFuncionario");

//$linha = mysqli_num_rows($sql);
?>

<script>
	function apagarReserva(){
		if(confirm("Deseja excluir a reserva?")){
			return true;
		}else{ return false;}
	}
</script>

<fieldset style="background-color: #ecf0f1; margin-left: 70px; margin-right:70px; box-shadow: 2px 2px 5px #bbb; ">
<body style="padding-top: 5%;">
	<p style="padding-top: 1%;"><a href="reservarVeiculo.php" class="btn btn-success">Cadastrar reserva</a></p>
	<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover active">
		<thead style="color: #009;">
			<th>CPF funcionário</th>
			<th>Selecione o veículo</th>
			<th>Data da reserva</th>
			<th>Período</th>
			<th>destino</th>
		</thead>

		<?php
			//while($row=mysqli_fetch_assoc($sql)){
		?>
		<tr>

			<td class="">222.333.45-90<?php echo $row["cpfFuncionario"]; ?></td>
			<td class="">DBN-9978<?php echo $row["selecioneVeiculo"]; ?></td>
			<td class="">23/05/2016<?php echo $row["dataReserva"]; ?></td>
			<td class="">10:30<?php echo $row["periodoReserva"]; ?></td>
			<td class="">Loja 2 centro<?php echo $row["destinoReserva"]; ?></td>
			<td>
				<a href="editarReserva.php?selecioneVeiculo=<?php echo $row["selecioneVeiculo"] ?>" class="btn"><i class="icon-pencil"></i></a>
				<a href="excluirReserva.php?selecioneVeiculo=<?php echo $row["selecioneVeiculo"] ?>" onclick="return apagarReserva()" class="btn"><i class="icon-trash"></i></a>
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
