<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../../Cssstyle/cadas.css" >
    <title>Cadastro</title>
</head>
<body>
    <section class="all">
    <div class="titulo">
        <h1 id="titulo">Cadastrar-ses</h1>
        <br>
    </div>

    <form action="../Controller/UserController.php" method="post" >

            <div class="nome"> 
                <label>Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="senha">
                <label>Senha:</label>
                <input type="text" name="senha" id="senha">
            </div>



        <button class="submit" type="submit" name="Login">Logar</button> 

    </form>
    </section>

</body>
</html>
