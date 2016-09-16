<?php
include "topo.php";

?>

<h3 style="text-align:center; padding-top: 8%; text-transform: uppercase;">Reservar veículo</h3><hr style="box-shadow: 2px 2px 5px #bbb" />
<fieldset style="background-color: #ecf0f1; margin-left: 250px; margin-right:250px; box-shadow: 2px 2px 5px #bbb; ">
<form class="form-horizontal" style="text-align:center; padding-top: 1%; " action=" " method="post">
    <div class="control-group">
    <div class="control-group">
        <label>Prefixo<span style="color: red; font-weight: bold;">*</span></label>
        <input class="input-xlarge" type="text" name="prefixoVeiculo" required="required" style="height: 30px" placeholder="Numero:"/>
    </div>
        <label>CPF funcionário<span style="color: red; font-weight: bold;">*</span></label>
        <input class="input-xlarge" type="text" maxlength="14" OnkeyPress="formatar('###.###.###-##', this)" name="cpfFuncionario" required="required" style="height: 30px" placeholder="Somente numeros:"/>
    </div>
    <div class="control-group">
        <label>Data da reserva<span style="color: red; font-weight: bold;">*</span> </label>
        <input class="input-xlarge" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" name="dataReserva"  required="required" style="height: 30px" placeholder="Ex:dd/mm/aaaa"/>
    </div>
    <div class="control-group">
        <label>Horário<span style="color: red; font-weight: bold;">*</span> </label>
        <input class="input-xlarge" type="horaReserva" maxlength="5" OnKeyPress="formatar('##:##', this)" name="dataReserva"  required="required" style="height: 30px" placeholder="Ex:dd/mm/aaaa"/>
    </div>
    </div>
    <div class="control-group">
        <label>Destino<span style="color: red; font-weight: bold;">*</span> </label>
        <input class="input-xlarge" type="text" name="destinoReserva" required="required" style="height: 30px" placeholder="local:"/>
    </div>
    </div>
  
    <div class="control-group">
        <button class="btn btn-primary"type="submit">Reservar</button>
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div> 
</form>
</fieldset>
<?php
    include "rodape.php";
?>