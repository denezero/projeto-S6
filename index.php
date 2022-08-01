<?php include("./menu.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./MVC/Controller/UserController.php" method="post">
        <button>Logar </button>
        <hr>
        <label >Nome</label>
        <input type="text" name='nome'>
        <hr>
        <label>Senha</label>
        <input type="text" name="senha">
        <hr>
        <label>E-mail</label>
        <input type="text" name="email">
        <hr>
        <button name="btnCadastrarContato">Cadastrar</button>
        

        
        
    </form>
</body>
</html>