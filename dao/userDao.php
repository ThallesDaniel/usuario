<?php

class UserDao{

    public function criar(Usuario $usuario){


     try {
    
        $sql = "INSERT INTO usuario(nome, email, cpf, telefone, sexo, senha) VALUES
        (:nome, :email, :cpf, :telefone, :sexo, :senha)";

        $stmt = Conexao::getConexao()-> prepare($sql);
        $stmt-> bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
        $stmt-> bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
        $stmt-> bindValue(":cpf", $usuario->getCpf(), PDO::PARAM_STR);
        $stmt-> bindValue(":telefone", $usuario->getTelefone(), PDO::PARAM_STR);
        $stmt-> bindValue(":sexo", $usuario->getSexo(), PDO::PARAM_STR);
        $stmt-> bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);
  
        return $stmt->execute();
} catch (PDOException $th) {
    echo "erro no cadastro" . $th ->getMessage();
 }
}
}
?>