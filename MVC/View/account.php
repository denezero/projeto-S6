
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>voce esta na sua conta</h1>
    <?php 
        include("../Controller/UserController.php");
        echo "helow".$_SESSION["nome"];
    
    ?>

    <a href="../../index.php">pagehome</a>

</body>
</html>