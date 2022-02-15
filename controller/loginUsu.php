<?php
session_start();
include_once("../model/conexao.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("Location: ../view/index.php");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//$DesfazersenhaCrypto--lembrete

$query = "select * from tbcadastro where usuario = '{$usuario}'";

$resultado = mysqli_query($conexao, $query);

$row = mysqli_num_rows($resultado);

if($row == 1) {
    $linha = mysqli_fetch_assoc($resultado);

    if(password_verify($senha,$linha["senha"])) {

        $_SESSION['usuario'] = $linha['usuario'];
        $_SESSION['idusuario'] = $linha['codcadastro'];
        
        header("Location: ../view/dadosUsu.php");
        exit();
    }else {
        $_SESSION['senha_incorreta'] = true;
        header("Location: ../view/login.php");
        exit();
    }
} 
else {
    $_SESSION['nao_autenticado'] = true;
    header("Location: ../view/login.php");
    exit();
}

?>