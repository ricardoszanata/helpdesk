<?php
include "header.php";
?>
<div>
    <img src="imagem/helpdesk.png" class="img-fluid" alt="" srcset="">
</div>
<form>
    <div class="form-group">
        <label for="email">Endereço de email</label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email">
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control form-control-lg" id="senha" name="senha" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-dark">Acessar</button>
</form>
<?php
include "footer.php";
?>