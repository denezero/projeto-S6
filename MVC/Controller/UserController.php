<?php
    session_start();
    if (isset($_POST["btnCadastrarContato"])){
        
        cadastrar();
        
    } else if (isset($_POST['Login'])){
        login();
    }
        

        function cadastrar(){
            
            require_once "../Model/User.php";
            
            require_once "../Model/UserService.php";
            

            $user = new User;
            $service = new UserService;

            $user->name = $_POST["nome"];
            $user->email = $_POST["email"];
            $user->senha = $_POST["senha"];

  
            $service->confirmCadastre($user); 
    }


        function login(){
            require_once "../Model/User.php";

            require_once "../Model/UserService.php";

            $user =  new User;

            $service = new UserService;

            

        
            $user->senha = $_POST["senha"];
            $user->name = $_POST["nome"];

            $response = $service->confirmLogin($user);

            if($response != null) {
                //guardar os dados na Session
                $_SESSION["id"] = $response["id"];
                
                $_SESSION["nome"] = $response["cl_name"];
                $_SESSION["senha"] = $response["cl_senha"];
        
                header('Location: ../../index.php');
                
            }
        }


        

       