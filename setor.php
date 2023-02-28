<?php
include "header.php";
?>
<div>
    <img src="imagem/helpdesk.png" class="img-fluid" alt="" srcset="">
</div>
<div>
    <h1>Setores</h1>
</div>
<form>
    <div class="form-group">
        <label for="id">Identificação</label>
        <input type="text" class="form-control form-control-lg" id="id" name="id" aria-describedby="idHelp" readonly>
    </div>
    <div class="form-group">
        <label for="tipo">Setor</label>
        <input type="text" class="form-control form-control-lg" id="setor" name="setor" aria-describedby="setorHelp">
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