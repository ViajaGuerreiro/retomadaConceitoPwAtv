<?php
session_start();

include_once("../model/conexao.php");
include_once("../model/modelUsu.php");

extract($_REQUEST, EXTR_OVERWRITE);

cadastrarDadosUsu($conexao, $nome, $sobrenome, $ddd, $cel, $nascimento, $rua, $numeroCasa, $cidade, $uf, $cep);


header("Location: ../view/dadosUsu.php");
$_SESSION['sucesso'] = true;

?>