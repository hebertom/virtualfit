<!DOCTYPE html>

<?php
require 'Cupon.php';


$cupon = new Cupon();
?>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Semana de Integração das Engenharias 2015</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link rel="icon" href="favicon.png" type="image/png">
    </head>
    <body>

        <div class="navbar">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="#" class="brand-logo"><img src="img/nav_logo.png" alt="Semana de Integração das Engenharias 2015"></img></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#programacao">Programação</a></li>
                        <!--<li><a href="#palestrantes">Palestrantes</a></li>-->
                        <li><a href="login.html">Login (Pegar Certificado)</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#programacao">Programação</a></li>
                        <!--<li><a href="#palestrantes">Palestrantes</a></li>-->
                        <li><a href="login.html">Inscrição (Pegar Certificado)</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <h1 class="header center teal-text text-lighten-2"><br><br><br><br></h1>
                    <!--<div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                    <div class="row left">
                        <a href="login.html" id="inscrever" class="btn-large waves-effect waves-light teal lighten-1">Quero participar!</a>
                    </div>-->
                    <br><br>
                    <!--<a href="./index.php" class="btn button-collapse"></a>-->
                </div>
            </div>
            <div class="parallax"><img style="width: 100%; height: auto;" src="<?php echo $_GET['img'] ?>" alt="Participe da Semana de Integração das Engenharias"></div>
        </div>

        <!--        <div class="fb-share-button" 
                     data-href="http://ejec.co/img/123.png" 
                     data-layout="button_count">
                </div>-->


        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" 
        type="text/javascript"></script>

        <div class="fb-share-button" 
             data-href="http://ejec.co/img/123.png" 
             >
        </div>
        <!--data-layout="button_count"-->



        <div class="container">
            <div class="section" id="sobre">
                <div class="row">
                    <?php
                    echo "Cupon: " . $cupon->geraCupon($_GET['img']);
                    ?>
                </div>
            </div>
        </div>

        <footer class="page-footer teal">
            <div class="footer-copyright center">
                <div class="container">
                    Desenvolvido por <a class="white-text text-lighten-3" href="http://www.ejec.co"><img src="http://www.ejec.co/ejec5.png" alt="EJEC.co" width="7%"></a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('document').ready(function () {
                //$('#modalValorInscricoes').openModal();
            });
        </script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
    </body>
</html>