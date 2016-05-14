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

    </head>

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
                    <li><a href="cupon.php">Recuperar cupon</a></li>
                    <!--<li><a href="#programacao">Programação</a></li>-->
                    <!--<li><a href="#palestrantes">Palestrantes</a></li>-->
                    <!--<li><a href="login.html">Login (Pegar Certificado)</a></li>-->
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="cupon.php">Recuperar cupon</a></li>
                    <!--<li><a href="#programacao">Programação</a></li>-->
                    <!--<li><a href="#palestrantes">Palestrantes</a></li>-->
                    <!--<li><a href="login.html">Login (Pegar Certificado)</a></li>-->
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 class="header center teal-text text-lighten-2"><br><br><br><br></h1>

                <br><br>

            </div>
        </div>
        <div class="">
            <div class="container">
                <div style="color: #000;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php
                    echo "Cupon: " . $cupon->geraCupon();
                    ?>
                </div>
            <!--<img style="width: 100%; height: auto;" src="<?php echo $_GET['img'] ?>" alt="Participe da Semana de Integração das Engenharias">-->
            </div>
        </div>

    </div>

    <div id="fb-root"></div>
    <script src="js/jquery.js" type="text/javascript"></script>


    <br><br><br><br><br>



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