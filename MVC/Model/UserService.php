<?php 
class UserService{
    public function confirmCadastre($user) {
        require_once "ConsultUser.php";

        $conect = new Consult;

        $cadastre = $conect->cadastrardados($user);

        if($cadastre){
            echo "Cadastrado com sucesso";
        } else {
            echo "Erro ao cadastra";
        }

    }

    public function confirmLogin($user){
       
        require_once "ConsultUser.php";

        $conect = new consult;

        $logon = $conect->pesquisa($user);



        if($logon != null) {
            $nomedb = $logon["cl_name"];
            $senhadb = $logon["cl_senha"];
            $emaildb = $logon["cl_email"];
        
            if(strcmp($nomedb, $user->name ) == 0 && strcmp($senhadb, $user->senha) == 0){
                echo "Login efetuado com sucesso "."<hr> $nomedb "."<hr> $senhadb "."<hr> $emaildb ";
            } else {
                echo "não encontrado";
            }
            
        } else{
            echo "erro ao logar";
        }
    
    }
}