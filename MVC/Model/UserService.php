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

}