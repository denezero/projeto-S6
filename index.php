
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Survivale - Vale do sobrevivencialismo</title>
    <meta name="author" content="Fulano tal :: email@gmail.com">
    <meta name="description" content="">
    <meta name="keywords" content="sobrevivencialismo, survivalist, survivale, emergencia, agricultura, agropecuaria">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="icon" href="./img/survivale-96x96.png">
</head>

<body class="principal">
    <!-- cabeçario onde fiara a navagecao padrao como nav, e o mapa-->
    <div class="nav-left">
    
        <aside  class="block">
            <!--Barra com foro e conta-->
            <div class="description">
            <a href="perfilConta.html"><img class="imgem" src="./img/survivale-96x96.png" alt=""></a>
                <h1><a href="./MVC/View/accont">Conta</a>ha</h1>
                <a href="anuncio.html">Fazer Anuncio</a>
            </div>
            <!--Barra de navegação-->
            <nav class="navegation">
                <a href="#">  1 Obejto </a> 
                <a href="#">  2 Obejto </a>
                <a href="#">  3 Obejto</a>
                <a href="#">  4 Obejto</a>
                <a href="#">  5 Obejto</a>
                <a href="#">  6 Obejto</a>
                <a href="#">  7 Obejto</a>
                <a href="#">  8 Obejto</a>
                <a href="#">  9 Obejto</a>
                <a href="#"> 10 Obejto </a>   
            </nav>

        </aside> 
    
        <section class="home">
            <!--Barra de navegação-->
            <nav class="page-direct">
                <?php
                    
                    require_once("./MVC/Controller/UserController.php");
                    if($_SESSION['id'] == ""){
                        echo "<a href='./MVC/View/cadastra.php'>Cadastra</a> <a href='./MVC/View/login.php'>Logar</a>";
                    } else {
                        echo "<a href='./MVC/View/account.php'>conta</a> <a href='./MVC/View/logout.php'>logaout</a>";
                    }
                ?>
            

            </nav>
            <!--Mapa-->
            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.6334158175077!2d-51.17675364960986!3d-29.846001428946057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95196f552d212e35%3A0xe763345f2329bbf5!2sQI%20Faculdade%20%26%20Escola%20T%C3%A9cnica%20I%20Esteio!5e0!3m2!1spt-BR!2sbr!4v1656989388209!5m2!1spt-BR!2sbr"  allowfullscreen="" loading="lazy" frameborder="2" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <!-- TEXTO Principal-->
            <div class="principal-corpo">
                    INCLUDE a
                <div class="container page-wrapper">
                    <div class="page-inner">
                      <div class="row">
                        <div class="el-wrapper">
                          <div class="box-up">
                            <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
                            <div class="img-info">
                              <div class="info-inner">
                                <span class="p-name">I feel like Pablo</span>
                                <span class="p-company">Yeezy</span>
                              </div>
                              <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
                            </div>
                          </div>
                  
                          <div class="box-down">
                            <div class="h-bg">
                              <div class="h-bg-inner"></div>
                            </div>
                  
                            <a class="cart" href="#">
                              <span class="price">$120</span>
                              <span class="add-to-cart">
                                <span class="txt">Add in cart</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container page-wrapper">
                    <div class="page-inner">
                      <div class="row">
                        <div class="el-wrapper">
                          <div class="box-up">
                            <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
                            <div class="img-info">
                              <div class="info-inner">
                                <span class="p-name">I feel like Pablo</span>
                                <span class="p-company">Yeezy</span>
                              </div>
                              <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
                            </div>
                          </div>
                  
                          <div class="box-down">
                            <div class="h-bg">
                              <div class="h-bg-inner"></div>
                            </div>
                  
                            <a class="cart" href="#">
                              <span class="price">$120</span>
                              <span class="add-to-cart">
                                <span class="txt">Add in cart</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container page-wrapper">
                    <div class="page-inner">
                      <div class="row">
                        <div class="el-wrapper">
                          <div class="box-up">
                            <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
                            <div class="img-info">
                              <div class="info-inner">
                                <span class="p-name">I feel like Pablo</span>
                                <span class="p-company">Yeezy</span>
                              </div>
                              <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
                            </div>
                          </div>
                  
                          <div class="box-down">
                            <div class="h-bg">
                              <div class="h-bg-inner"></div>
                            </div>
                  
                            <a class="cart" href="#">
                              <span class="price">$120</span>
                              <span class="add-to-cart">
                                <span class="txt">Add in cart</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="container page-wrapper">
                    <div class="page-inner">
                      <div class="row">
                        <div class="el-wrapper">
                          <div class="box-up">
                            <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
                            <div class="img-info">
                              <div class="info-inner">
                                <span class="p-name">I feel like Pablo</span>
                                <span class="p-company">Yeezy</span>
                              </div>
                              <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
                            </div>
                          </div>
                  
                          <div class="box-down">
                            <div class="h-bg">
                              <div class="h-bg-inner"></div>
                            </div>
                  
                            <a class="cart" href="#">
                              <span class="price">$120</span>
                              <span class="add-to-cart">
                                <span class="txt">Add in cart</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
            
            </section>
            </div>
        </section>
    </div>

    <!--RODAPE-->
    <footer class="rodap">

    </footer>
        


</body>
</html>
</html>