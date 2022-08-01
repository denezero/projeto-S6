<?php

    //criando classe que vai guardar o valores que vão ser pesquisando
    Class User{
        //variaveis private que vão sser usadas para fazer consulta
        private $id;
        private $name;
        private $senha;
        private $email;

        // funçoes em publico um sera o set que setara o valor;funcao(recebendo um valo)
        
        public function __get($atributo)
        {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

    }


