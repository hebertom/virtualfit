<!DOCTYPE html>

<?php
require 'Cupon.php';


$cupon = new Cupon();
?>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Virtual Fit</title>

        <meta property="og:url"           content="http://www.ejec.co/index.php" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Your Website Title" />
        <meta property="og:description"   content="Your description" />
        <meta property="og:image"         content="http://ejec.co/img/123.png" />
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
                <a id="logo-container" href="#" class="brand-logo"><img src="img/nav_logo.png" alt="Virtual Fit"></img></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#cupon">Recuperar cupon</a></li>
                    <!--<li><a href="#programacao">Programação</a></li>-->
                    <!--<li><a href="#palestrantes">Palestrantes</a></li>-->
                    <!--<li><a href="login.html">Login (Pegar Certificado)</a></li>-->
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#cupon">Recuperar cupon</a></li>
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
                <h1 class="header center teal-text text-lighten-2"></h1>
                <!--<div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
                <div class="row left">
                    <a href="login.html" id="inscrever" class="btn-large waves-effect waves-light teal lighten-1">Quero participar!</a>
                </div>-->
                
                <!--<a href="./index.php" class="btn button-collapse"></a>-->
            </div>
        </div>
        <div class="parallax">
            <img style="width: 100%; height: auto;" src="<?php echo $_GET['img'] ?>" alt="Virtual Fit"></div>
    </div>

    <div id="fb-root"></div>
    <script src="js/jquery.js" type="text/javascript"></script>

    <div style="text-align:center">
        <a id="shareButton" target="_blank"style="    background: #4c69ba;
           background: linear-gradient(#4c69ba, #3b55a0);
           border: none;
           border-radius: 2px;
           color: #fff;
           cursor: pointer;
           font-weight: bold;
           height: 20px;
           line-height: 20px;
           padding: 10px;
           text-shadow: 0 -1px 0 #354c8c;
           white-space: nowrap;" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//ejec.co/img/123.png">Compartilhar</a>

    </div>

    <div  class="container">
        <div class="section"  >
            <div class="row">
                <div id="cupon" style="font-size: 25px; text-align: center; display: none">
                    <?php
                    echo "Cupon: " . $cupon->geraCupon($_GET['img']);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
//        document.getElementById("cupon").style.visibility = "hidden";
//        document.getElementById(text).style.display = 'none';

        $('#shareButton').click(function () {
//            alert("entrei");
            setTimeout(function () {
                return true;
            }, 10000);

            document.getElementById("cupon").style.display = 'block';
            
            
            
//        document.getElementById("cupon").style.visibility = "visible";

        });

    </script>





<!--        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>

<script>
    FB.ui(
            {
                method: 'feed',
                name: 'Facebook Dialogs',
                link: 'https://developers.facebook.com/docs/dialogs/',
                picture: 'http://fbrell.com/f8.jpg',
                caption: 'Reference Documentation',
                description: 'Dialogs provide a simple, consistent interface for applications to interface with users.'
            },
            function (response) {
                if (response && response.post_id) {
                    alert('Post was published.');
                } else {
                    alert('Post was not published.');
                }
            }
    );

</script>-->
    <!--
        <div id="something" class="fb-share-button" 
             data-href="http://ejec.co/img/123.png">
        </div>-->
    
    <footer class="page-footer teal">
        <div class="footer-copyright center">
            <div class="container">
                Desenvolvido no HACKATHON
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