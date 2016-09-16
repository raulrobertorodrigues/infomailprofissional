<?php
include "topo.php";

?>

<!--Dados do reservante-->

<h3 style="text-align:center; padding-top: 8%; text-transform: uppercase;">Devolução/Reserva</h3><hr style="box-shadow: 2px 2px 5px #bbb" />
<fieldset style="background-color: #ecf0f1; margin-left: 250px; margin-right:250px; box-shadow: 2px 2px 5px #bbb; ">
<form class="form-horizontal" style="text-align:center; padding-top: 1%; " action=" " method="post">
	<div class="control-group">
		<label>CPF funcionário<span style="color: red; font-weight: bold;">*</span></label>
		<input class="input-xlarge" type="text" name="cpfFuncionario" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required="required" style="height: 30px" placeholder="Somente numeros:"/>
	</div>

<!--Dados de controle-->

	<div class="control-group">
		<label>Hora saida<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="horaSaida" maxlength="5" OnKeyPress="formatar('##:##', this)" required="required" style="height: 30px" placeholder="Somente numeros:"/>
	</div>
	<div class="control-group">
		<label>Km saida<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="kmSaida" required="required" style="height: 30px" placeholder="Numero:"/>
	</div>
	<div class="control-group">
		<label>Hora chegada<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="horaChegada" maxlength="5" OnKeyPress="formatar('##:##', this)" required="required" style="height: 30px" placeholder="Numero:"/>
	</div>
	<div class="control-group">
		<label>Km chegada<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="kmChegada" required="required" style="height: 30px" placeholder="Numero:"/>
	</div>
	</div>
	<div class="control-group">
		<button class="btn btn-primary"type="submit">Finalizar</button>
		<a href="index.php" class="btn btn-warning">Voltar</a>
	</div>
	
</form>
</fieldset>
<?php
    include "rodape.php";
?>
