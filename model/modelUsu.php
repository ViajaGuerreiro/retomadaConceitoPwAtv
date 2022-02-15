<?php

function cadastrarUsuBanco($conexao, $usuario, $senha){

    $opcao = ['cost' => 8];

    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = "insert into tbcadastro(usuario, senha) values('{$usuario}', '{$senhaCrypto}')";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function cadastrarDadosUsu($conexao, $nome, $sobrenome, $ddd, $cel, $nascimento, $rua, $numeroCasa, $cidade, $uf, $cep ) {
    session_start();

    $query = "update tbcadastro set nome = '{$nome}', sobrenome = '{$sobrenome}', ddd = '{$ddd}', celular ='{$cel}', nascimento = '{$nascimento}', rua = '{$rua}', numerocasa = '{$numeroCasa}', cidade = '{$cidade}', uf = '{$uf}', cep = '{$cep}' where codcadastro = '{$_SESSION['idusuario']}'";

    $resultado = mysqli_query($conexao,$query);
return $resultado;
}

function mostrarDadosUsu($conexao) {
    $query = "select nome as 'nomeusu', sobrenome as 'segundoNome', ddd as 'ddd', celular as 'cel', date_format(nascimento, '%d,%m,%Y') as 'nascimento', rua as 'rua', numerocasa as 'Ncasa', cidade as 'cidade', uf as 'uf', cep as 'cep' from tbcadastro where codcadastro = '{$_SESSION['idusuario']}'";

    $resultado = mysqli_query($conexao, $query);

    $dadosUsu = mysqli_fetch_assoc($resultado);
return $dadosUsu;
}
?>