<?php
include_once("header.php");
?>

<div class="container m-5 p-5">
    <form method="POST" action="../controller/cadastrarUsu.php">
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp" placeholder="Digite usuario">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="digite a senha">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>


<?php

    include_once("footer.php");
?>