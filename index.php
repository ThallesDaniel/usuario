<?php


    require_once('./config/Conexao.php');

    $conexao = Conexao::getConexao();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag inicial</title>
</head>
<body>
    <h2>inicial page</h2>
        <ul>
            <li><a href="./views/cadastro">CADASTRO</a></li>
            <li><a href="./views/listar">listar</a></li>
            <li><a href="./views/logout.php">sair</a></li>

        </ul>






</body>
</html>