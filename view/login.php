<?php
session_start();
include_once("header.php");

?>

<div class="container m-5 p-5">
    <form method="POST" action="../controller/loginUsu.php">
        <?php
        if(isset($_SESSION['nao_autenticado'])) :

        ?>
            <div>
                <p>usuario não autenticado</p>
            </div>
        <?php
            unset($_SESSION['nao_autenticado']);
            endif;
        
        if(isset($_SESSION['senha_incorreta'])) :

        ?>
            <div>
                <p>Senha incorreta</p>
            </div>
        <?php
        unset($_SESSION['senha_incorreta']);
        endif
        ?>
        <div class="form-group">
            <label for="usuario">Digite o nome de Usuario</label>
            <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp" placeholder="Digite usuario">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="digite a senha">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form>
</div>

<?php
if (isset($_SESSION['sucessoCad'])) {
?>
    <script>
        window.alert("Usuario cadastrado com sucesso")
    </script>
<?php
unset($_SESSION['sucessoCad']);
}
include_once("footer.php");

?>