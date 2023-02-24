<?php
include "header.php";
?>
<div>
    <img src="imagem/helpdesk.png" class="img-fluid" alt="" srcset="">
</div>
<div>
    <h1>Usuários</h1>
</div>
<form>
    <div class="form-group">
        <label for="id">Identificação</label>
        <input type="text" class="form-control form-control-lg" id="id" name="id" aria-describedby="idHelp" readonly>
    </div>
    <div class="form-group">
        <label for="usuario">Usuário</label>
        <input type="text" class="form-control form-control-lg" id="usuario" name="usuario" aria-describedby="usuarioHelp">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control form-control-lg" id="senha" name="senha" aria-describedby="senhaHelp">
    </div>
    <div class="form-group">
    <label for="tipo">Colaborador</label>
        <input type="text" class="form-control form-control-lg" id="colid" name="colid" aria-describedby="colidHelp" readonly>
        <input type="text" class="form-control form-control-lg" id="colaborador" name="colaborador" aria-describedby="colaboradorHelp" readonly>
        <button type="submit" class="btn btn-dark">Buscar</button>
    </div>
    <div class="form-group">
        <label for="setor">Setor</label>
        <input type="text" class="form-control form-control-lg" id="setorid" name="setorid" aria-describedby="setorHelp" readonly>
        <input type="text" class="form-control form-control-lg" id="setor" name="setor" aria-describedby="setorHelp" readonly>
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