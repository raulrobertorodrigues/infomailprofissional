<?php
include "topo.php";

?>

<h3 style="text-align:center; padding-top: 8%; text-transform: uppercase;">Cadastrar Veículo</h3><hr style="box-shadow: 2px 2px 5px #bbb" />
<fieldset style="background-color: #ecf0f1; margin-left: 250px; margin-right:250px; box-shadow: 2px 2px 5px #bbb; ">
<form class="form-horizontal" style="text-align:center; padding-top: 1%; " action=" " method="post">
	<div class="control-group">
		<label>Prefixo<span style="color: red; font-weight: bold;">*</span></label>
		<input class="input-xlarge" type="text" name="prefixoVeiculo" required="required" style="height: 30px" placeholder="Numero:"/>
	</div>
	<div class="control-group">
		<label>Placa<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="placaVeiculo" required="required" style="height: 30px" placeholder=" Ex: xxx- 9999"/>
	</div>
	<div class="control-group">
		<label>Ano de fabricação<span style="color: red; font-weight: bold;">*</span></label>
		<input class="input-xlarge" type="text" name="anoVeiculo" required="required" style="height: 30px" placeholder="Ano:"/>
	</div>
	<div class="control-group">
		<label>Cor<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="corVeiculo" required="required"style="height: 30px" placeholder=" Cor do veiculo:"/>
	</div>
	<div class="control-group">
		<label>Direção hidráulica<span style="color: red; font-weight: bold;">*</span> </label>
		<select name="direcaohidraulica" style="width: 270px">
			<option value="sim">Sim</option>
			<option value="nao">Não</option>
		</select>
	</div>
	<div class="control-group">
		<label>Combustível<span style="color: red; font-weight: bold;">*</span> </label>
		<select name="combustivelVeiculo" style="width: 270px">
			<option value="gasolina">Gasolina</option>
			<option value="alcool">Álcool</option>
			<option value="flex">Flex</option>
		</select>
	</div>
	<div class="control-group">
		<label>Ar condicionado<span style="color: red; font-weight: bold;">*</span> </label>
		<select name="arcondicionado" style="width: 270px">
			<option value="sim">Sim</option>
			<option value="nao">Não</option>
		</select>
	</div>
	<div class="control-group">
		<button class="btn btn-primary"type="submit">Cadastrar</button>
		<a href="index.php" class="btn btn-warning">Voltar</a>
	</div>
	
</form>
</fieldset>
<?php
    include "rodape.php";
?>


