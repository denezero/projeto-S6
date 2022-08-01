<?php
    Class Consult{
        //criando funcao que recebe o user, que cadastrara os dados do ususario.
        public function cadastrardados($user) {
            // "importando" o arquivo e caso nao conseguir acessar ele quebrara
            
            require_once "Cbase.php";

            $database = new Cbase();
            
            $conection = $database->createconection();

            $insercao = "INSERT INTO 
                            clients (name,email,senha)
                        VALUES
                            (?,?,?)";
     
            $action = $conection->prepare($insercao);
            // bird_param é usada para vincular variáveis aos marcadores de parâmetro de uma declaração preparada "ssss"-> s siginifica que vai ser passados valores string  .
            //https://www.tutorialspoint.com/php/php_function_mysqli_stmt_bind_param.htm#:~:text=Definition%20and%20Usage.%20The%20mysqli_stmt_bind_param%20%28%29%20function%20is,to%20the%20parameter%20markers%20of%20a%20prepared%20statement.
            $action->bind_param("sss", $_name, $_email, $_senha);
            //variaveis setadas no bird_param que so pode ser usado quando uma conexao estiver em prepare()
            
        
            $_name = $user->name;
            $_email = $user->email;
            $_senha = $user->senha;
           
            
            $cadastrou = $action->execute();

            $action->close();
            $database->fecharConexao($conection);

            return $cadastrou;
        }

    }
