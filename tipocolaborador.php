<?php
include "header.php";
?>
<div>
    <img src="imagem/helpdesk.png" class="img-fluid" alt="" srcset="">
</div>
<div>
    <h1>Tipos de Colaboradores</h1>
</div>
<form>
    <div class="form-group">
        <label for="id">Identificação</label>
        <input type="text" class="form-control form-control-lg" id="id" name="id" aria-describedby="idHelp" readonly>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo de Colaborador</label>
        <input type="text" class="form-control form-control-lg" id="tipo" name="tipo" aria-describedby="tipoHelp">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="ativo" name="ativo">
        <label class="form-check-label" for="ativo">Ativo</label>
    </div>
    <button type="submit" class="btn btn-dark">Gravar</button>
</form>
<?php
include "footer.php";
?>