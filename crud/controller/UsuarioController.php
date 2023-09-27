<?php

include_once "../conexao/Conexao.php";
include_once "../model/usuario.php";
include_once "../dao/usuarioDAO.php";
//instanciar as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//passar os posts - dados

$d = filter_input_array(INPUT_POST);

//se for gravado com sucesso
if(isset($_POST['cadastrar'])){
    $usuario -> setNome($d['nome']);
    $usuario -> setSobrenome($d['sobrenome']);
    $usuario -> setIdade($d['idade']);
    $usuario -> setSexo($d['sexo']);
    $usuario -> setEmail($d['email']);

    $usuariodao->create($usuario);

    header("Location: ../../");
}
//se a requisição for editar
else if(isset($_POST['editar'])){
    $usuario -> setNome($d['nome']);
    $usuario -> setSobrenome($d['sobrenome']);
    $usuario -> setIdade($d['idade']);
    $usuario -> setSexo($d['sexo']);
    $usuario -> setEmail($d['email']);

    $usuariodao->update($usuario);

    header("Location: ../../");
}
//se for deletar
else if (isset($_GET['del'])){
    $usuario -> setId($_GET['del']);
    $usuariodao -> delete($usuario);

    header("Location: ../../");
}else{
    header("Location: ../../");
}