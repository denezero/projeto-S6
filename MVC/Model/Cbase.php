<?php
    //Criando classe que vai se conectar com banco de dados/ phpmyadmin
    
  
    
    class Cbase{
        // função que quando for entrado no site sem permição vai destruir os dados 

        //função que cria a conexao com o banco
        public  function createconection(){
            //variaveis que são usadas para entrar no banco 
            //$banco = nome do banco
            $banco = "db_sur";
  
            //$host onde vai ser rodado
            $host =  "localhost:3306";
            //$name = entrada de ususario
            $user =  "root";
            //$paw = passoword(senha) de entrada de usuario
            $paw =  "root";

            //criando variavel que vai criar a conexao juntando o host(local que vai ser rodado) name(nome) e passoword(senha)
            $conection = mysqli_connect($host,$user,$paw);
            //abrindo  a conecao e selecionando o banco 
            mysqli_select_db($conection, $banco);
            //convertendo qualquer consulta para utf8

                mysqli_query($conection, "SET NAMES 'utf8'");
                mysqli_query($conection, "SET character_set_connection=utf8");
                mysqli_query($conection, "SET character_set_client=utf8");
                mysqli_query($conection, "SET character_set_results=utf8");
            if (mysqli_connect_errno()) {
                die(mysqli_connect_error());
            }
            //e no final retornado a conexao
            return $conection;
        }

        public function fecharConexao($conection){
            mysqli_close($conection);
        }
    }