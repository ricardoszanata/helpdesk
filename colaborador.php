<?php
include "header.php";
?>
<div>
    <img src="imagem/helpdesk.png" class="img-fluid" alt="" srcset="">
</div>
<div>
    <h1>Colaboradores</h1>
</div>
<form>
    <div class="form-group">
        <label for="id">Identificação</label>
        <input type="text" class="form-control form-control-lg" id="id" name="id" aria-describedby="idHelp" readonly>
    </div>
    <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control form-control-lg" id="nome" name="nome" aria-describedby="nomeHelp">
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="text" class="form-control form-control-lg" id="celular" name="celular" aria-describedby="celularHelp">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control form-control-lg" id="tipoid" name="tipoid" aria-describedby="tipoidHelp" readonly>
        <input type="text" class="form-control form-control-lg" id="tipo" name="tipo" aria-describedby="tipoHelp" readonly>
        <button type="submit" class="btn btn-dark">Buscar</button>
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