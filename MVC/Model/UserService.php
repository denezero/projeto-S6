<?php 
class UserService{
    public function confirmCadastre($user) {
        require_once "ConsultUser.php";

        $conect = new Consult;

        $cadastre = $conect->cadastrardados($user);

        if($cadastre){
            header("Location:../View/confirmacadastro.php");
        } else {
            header("Location:../View/cadastra.php");
        }

    }

    public function confirmLogin($user){
       
        require_once "ConsultUser.php";

        $conect = new consult;

        $logon= $conect->pesquisa($user);



        if($logon != null) {
            
            $nomedb = $logon["cl_name"];
            $senhadb = $logon["cl_senha"];
            $emaildb = $logon["cl_email"];
        
            if(strcmp($nomedb, $user->name ) == 0 && strcmp($senhadb, $user->senha) == 0){
                echo "Login efetuado com sucesso";
                return $logon;
                
            } else {
                echo "não encontrado";
            }
            
        } else{
                    
            $_SESSION['id'] = "";
            
            echo "erro ao logar";
        }
    
    }
}