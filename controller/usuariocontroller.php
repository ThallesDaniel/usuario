<?php

require_once('../config/Conexao.php');
require_once('../model/usuario.php');
require_once('../dao/userdao.php');

// instanciando classes
$usuario = new Usuario();
$userdao = new UserDao();

$dados = filter_input_array(INPUT_POST);

//echo var_dump($dados);
//se a condição do submit for cadstrar,  entra na condicao de gravar os dados
if (isset($_POST['cadastrar'])) {
    $usuario->setNome($dados['nome']);
    $usuario->setEmail($dados['mail']);
    $usuario->setCpf($dados['cpf']);
    $usuario->setTelefone($dados['telefone']);
    $usuario->setSexo($dados['sexo']);
    $usuario->setSenha($dados['senha']);


    $userdao->criar($usuario);
    echo "<script>alert ('dados cadastrados');
    location.href = '../';
    </script> ";
}

?>