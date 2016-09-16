<?php
//include("conexao.php");
	//$pdo=conectar();
//include("insert.php");	
include "topo.php";

?>
	<!--Dados do Funcionário-->
	
<h3 style="text-align:center; padding-top: 8%; text-transform: uppercase;">Cadastrar Funcionário</h3><hr style="box-shadow: 2px 2px 5px #bbb" />
<fieldset style="background-color: #ecf0f1; margin-left: 250px; margin-right:250px; box-shadow: 2px 2px 5px #bbb; ">
<form class="form-horizontal" style="text-align:center; padding-top: 1%; " action="DB_CadastrarFuncionario.php" method="post">
	<div class="control-group">
		<label>Nome<span style="color: red; font-weight: bold;">*</span></label>
		<input class="input-xlarge" type="text" name="nomeFuncionario" required="required" style="height: 30px" placeholder="Nome:"/>
	</div>
	<div class="control-group">
		<label>CPF<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="cpfFuncionario" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required="required" style="height: 30px" placeholder="Somente numeros:"/>
	</div>
	<div class="control-group">
		<label>Sexo<span style="color: red; font-weight: bold;">*</span> </label>
		<select name="sexoFuncionario" style="width: 270px">
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
		</select>
	</div>
	
	<!--Dados da Habilitação-->
	
	<div class="control-group">
		<label>CNH Registro<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="cnhRegistro"  required="required" style="height: 30px" placeholder="Somente numeros:"/>
	</div>
	<div class="control-group">
		<label>Vencimento<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" 
		name="vencimentoCnh"  required="required" style="height: 30px" placeholder="Ex:dd/mm/aaaa"/>        
	</div>
	
	<!--Endereço-->
	
	<div class="control-group">
		<label>Endereço<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type= "text" name="enderecoFuncionario" required="required" style="height: 30px"placeholder="Rua/Av:"/>
	</div>
	<div class="control-group">
		<label>Numero<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="numeroEndereco" required="required" style="height:
			30px" placeholder= "N:"/>	
	</div>
	<div class="control-group">
		<label>Bairro<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="bairroFuncionario" required="required" style="height:
			30px" placeholder="Bairro:"/>	
	</div>
	<div class="control-group">
		<label>Cidade<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="cidadeFuncionario" required="required" style="height:
			30px" placeholder="Municipio:"/>	
	</div>
	
	<!--Contato-->
	
	<div class="control-group">
		<label>Fone residencia<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" maxlength="13" OnKeyPress="formatar('##-####-####', this)" name="foneResidenciaFuncionario" required="required" style="height:
			30px" placeholder="Somente numeros:"/>	
	</div>
	<div class="control-group">
		<label>Fone celular<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="foneCelularFuncionario" maxlength="13" OnKeyPress="formatar('##-#####-####', this)" required="required" style="height:
			30px" placeholder="Somente numeros:"/>	
	</div>
	<div class="control-group">
		<label>E-mail<span style="color: red; font-weight: bold;">*</span> </label>
		<input class="input-xlarge" type="text" name="emailFuncionario" required="required" style="height:
			30px" placeholder="@:"/>
	</div>
	<div class="control-group">
		<button class="btn btn-primary"type="submit">Cadastrar</button>
		<a href="index.php" class="btn btn-warning">Voltar</a>
	</div>
</fieldset>
	
</form>
	<?php
    include "rodape.php";
	?>
