<?php
session_start();
include_once("../model/conexao.php");
include_once("../model/modelUsu.php");
extract($_REQUEST, EXTR_OVERWRITE);

cadastrarUsuBanco($conexao, $usuario, $senha);

header("location: ../view/login.php");
$_SESSION['sucessoCad'] = true;

?>