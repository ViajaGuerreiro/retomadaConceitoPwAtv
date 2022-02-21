<?php

session_start();
include_once("../controller/verificaLogin.php");
include_once("../model/conexao.php");
include_once("../model/modelUsu.php");

echo ("<h3>Olá " . $_SESSION['usuario'] . "</h3>");
$dados = mostrarDadosUsu($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>dadosUsuario</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="fundo_log">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../view/dadosUsu.php">Dados <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/logout.php">Sair/Voltar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container m-5 p-5">
        <form method="POST" action="../controller/cadastrarDadosUsu.php">

            <div class="form-row">
                <div class="col">
                    <input value="<?= $dados["nomeusu"] ?>" required name="nome" type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="col">
                    <input value="<?= $dados["segundoNome"] ?>" required name="sobrenome" type="text" class="form-control" placeholder="Sobrenome">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="ddd"></label>
                    <input value="<?= $dados["ddd"] ?>" required name="ddd" type="tel" class="form-control" id="ddd" placeholder="(__)" maxlength="2">
                </div>
                <div class="form-group col-md-5">
                    <label for="celular"></label>
                    <input value="<?= $dados["cel"] ?>" required name="cel" type="tel" class="form-control" id="celular" placeholder="_____-____" maxlength="9">
                </div>
                <div class="form-group col-md-6">
                    <label for="nascimento"></label>
                    <input value="<?= $dados["nascimento"] ?>" required name="nascimento" type="date" class="form-control" id="nascimento" placeholder="00/00/0000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rua">Endereço</label>
                    <input value="<?= $dados["rua"] ?>" required name="rua" type="text" class="form-control" id="rua" placeholder="Rua">
                </div>
                <div class="form-group col-md-4">
                    <label for="numero"><br></label>
                    <input value="<?= $dados["Ncasa"] ?>" required name="numeroCasa" type="text" class="form-control" id="numero" placeholder="Nº">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade"></label>
                    <input value="<?= $dados["cidade"] ?>" required name="cidade" type="text" class="form-control" id="cidade" placeholder="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="uf"></label>
                    <select required name="uf" id="uf" class="form-control">
                        <option value="<?= $dados["uf"] ?>" disabled selected>UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="cep"></label>
                    <input value="<?= $dados["cep"] ?>" required name="cep" type="text" class="form-control" id="cep" placeholder="_____-___" maxlength="8">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar/Alterar Dados</button>
        </form>
    </div>
    <?php
        if (isset($_SESSION['sucesso'])) {
    ?>
        <script>
            window.alert("Dados cadastrados com sucesso")
        </script>
    <?php
    unset($_SESSION['sucesso']);
    }
    ?>

</body>

</html>