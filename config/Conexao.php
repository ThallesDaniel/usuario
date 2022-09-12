<?php

    class Conexao{

        //variavel que guarda o PDO
        protected static $conexao;


        //cçasse privada
        private function __construct()
        {
            #info  conf da conexao com o PDO
            
            $db_host = "localhost";
            $db_nome = "mvc_php_dao";
            $db_usuario = "root";
            $db_senha = "";
            $db_driver = "mysql";
         
        try {
            //atribui a variavel $conexao os parametros com o bd(PDO)
            self:: $conexao = new PDO ("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario,$db_senha);
            //atribui as execoes de tratamento de error se tiver
            self:: $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //garantir que os dados com acentuaçoes sejam armazenados sem erro
            self:: $conexao ->exec('SET NAMES utf8');

           // echo "foi";

        } catch (PDOException $th) {
            // msgm de erro se nn der
        echo "FOI NN" . $th->getMessage();
        die();

        }
        
        }

            //metodo que acessa o construct privado
        public static function getConexao(){
            //garante uma unica instancia, se nn tiver é criado uma nova
            if(!self::$conexao){
                new Conexao();
            }
            return self::$conexao;

        }



    }






?>
