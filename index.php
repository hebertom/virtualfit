<!DOCTYPE html>
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

                </div>
            </div>
            <div class="parallax"><img style="width: 100%; height: auto;" src="<?php echo $_GET['img'] ?>" alt="Participe da Semana de Integração das Engenharias"></div>
        </div>


        <div class="container">
            <div class="section" id="sobre">
                <div class="row">
                    <br><br>
                    <div class="col s12 m12">
                        <h3 class="center teal-text">Dias 18, 19 e 20 de Novembro de 2015, no Grande Auditório da UEPG</h3>
                        <br><br>
                    </div>
                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center teal-text"><i class="material-icons">web</i></h2>
                            <h5 class="center">Inovação</h5>

                            <p class="light center">O evento explora os desafios e a importância das engenharias diante da necessidade 
                                de novas soluções diante á nossa sociedade.</p>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center teal-text"><i class="material-icons">school</i></h2>
                            <h5 class="center">Conhecimento</h5>

                            <p class="light center">Serão abordados aspectos sociais e econômicos comprometendo-se com um forte caráter científico
                                e tecnológico</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center teal-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Desenvolvimento</h5>

                            <p class="light center">Através das atividades, o evento cria oportunidades para 
                                o participante opinar, criar ideias, inovar, aprender e empreender.</p>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center teal-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Integração</h5>

                            <p class="light center">Seis áreas da engenharia serão tratadas: Agronomia, Eng. de Alimentos, 
                                Eng. Civil, Eng. de Computação, Eng. de Materiais e Eng. de Software</p>
                        </div>
                    </div>
                    <br><br>
                </div>

            </div>
        </div>

        <!--<div class="container teal white-text">
            <div class="section">-->
        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <h2 class="header text_b">Programação</h2>
                    <!--<div id="dia" align="center">
                            <a class="waves-effect waves-light btn">18/11</a>&nbsp;&nbsp;&nbsp;
                            <a class="waves-effect waves-light btn">19/11</a>&nbsp;&nbsp;&nbsp;
                            <a class="waves-effect waves-light btn">20/11</a>
                    </div>-->
                    <div id="programacao">
                        <div class="row" id="dia18">
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/18dia_1atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><br>A Energia Eólica e o seu potencial<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Paulo Apuama</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">18/11 - 19h00<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Aprenda como esta fonte de energia pode contribuir com a sociedade e a engenharia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/18dia_2atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">As Startups e o Ecossistema Empreendedor<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Sebrae</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">18/11 - 20h20<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Ajude a construir este ambiente propício ao desenvolvimento empreendedor de cada engenheiro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/18dia_3atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">O papel do engenheiro no processo de fabricação da cerveja<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Dr. Prof. Alessandro Nogueira</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">18/11 - 21h10<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Saiba como cada engenharia possui seu fundamental papel neste processo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="dia20">
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/19dia_1atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Programa de Residência Técnica<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Reitor Carlos Luciano Sant'Ana Vargas</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">19/11 - 19h00<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Conheça esta excelente oportunidade de qualificação profissional</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/19dia_2atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Planejamento para o sucesso<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Sergio Mazurek Tebcherani</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">19/11 - 20h00<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Conscientize-se do que quer para sua carreira e pense em todos os passos em busca do seu objetivo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/19dia_3atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Engenharia de Segurança do Trabalho<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Samuel Potma - CREA/PR</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">19/11 - 20h20<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Previna-se com as necessárias medidas de segurança de sua área.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="dia20">
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/20dia_1atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><br>A Engenharia é uma só<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Prof. Ariangelo Hauer Dias</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">20/11 - 19h00<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Se motive e receba inspiração sobre nosso curso, descobrindo parte de sua história e entendendo a importância da integração.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/20dia_2atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><br>Liderança X Gestão<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Anderson Cantuária - Fund. Estudar</a></p>

                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">20/11 - 20h00<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Descubra a diferença entre liderança e gestão e construa uma carreira de impacto na Engenharia.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card hoverable">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/20dia_3atividade.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Responsabilidade Civil do Engenheiro<i class="mdi-navigation-more-vert right"></i></span>
                                        <p><a>Dr. Igor T. Garcia - CREA/PR</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">20/11 - 21h10<i class="mdi-navigation-close right"></i></span>
                                        <p class="grey-text text-darken-1"><br>Conheça as atribuições de cada modalidade das engenharias e suas devidas responsabilidades.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="img/background1.jpg" alt="Background image 1"></div>
        </div>


        <!--
        <div class="container">
            <div class="section">

                <div class="container">
                    <h2 class="header text_b">Palestrantes</h2>
                    <div class="row" id="palestrantes">
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/back.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Paulo Apuama <i class="mdi-navigation-more-vert right"></i></span>
                                    <p><a href="#">Saiba mais</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Paulo Apuama <i class="mdi-navigation-close right"></i></span>
                                    <p>É um cara bastante conhecido e importante no meio em que atua e tem experências em diversas áreas, como na área geral de energia
                                    eólica.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator"  src="img/04.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                                    <p><a href="#">This is a link</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator"  src="img/03.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                                    <p><a href="#">This is a link</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/04.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                                    <p><a href="#">This is a link</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator"  src="img/05.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                                    <p><a href="#">This is a link</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator"  src="img/back1.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                                    <p><a  href="#">This is a link</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    <a class="waves-effect waves-light btn"><i class="mdi-file-cloud left"></i>button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->

        <!--
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container" id="inscricao">
            <div class="row center">
                <h5 class="header col s12 light">A Engenharia é uma só</h5>
                <a href="#modalInscricao" id="inscrever" class="btn-large waves-effect waves-light teal lighten-1">Fazer inscrição</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 3"></div>
</div>
        -->

        <div class="container valign-wrapper">
            <div class="section" id="patrocinadores">
                <img src="img/apoio.png" width="12%">
                <div class="row valign">
                    <br><br>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/influx.png" width="65%" alt="INFLUX">
                    </div><br><br><br>
                </div>
                <div class="row valign">
                    <div class="col s6 l4 center">
                        <img src="img/apoio/kmm.jpg" width="65%" alt="KMM">
                    </div>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/royalfit.png" width="65%" alt="ROYAL FIT">
                    </div>
                </div>
                <br>
                <div class="row valign">
                    <div class="col s6 l4 center">
                        <img src="img/apoio/apuama.png" width="65%" alt="APUAMA ENGENHARIA">
                    </div>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/sebrae.png" width="65%" alt="SEBRAE">
                    </div>
                </div>
                <br>
                <div class="row valign">
                    <div class="col s6 l4 center">
                        <img src="img/apoio/crea-pr.jpg" width="65%" alt="CREA/PR">
                    </div>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/fundacao-estudar.png"  width="65%" alt="Fundação Estudar">
                    </div>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/pegai.png" width="65%" alt="Pegaí">
                    </div>
                </div>
            </div>
        </div>

        <div class="container valign-wrapper">
            <div class="section" id="institucional">
                <div class="row valign">
                    <div class="col s6 l4 center">
                        <img src="img/apoio/uepg.png" width="65%" alt="Universidade Estadual de Ponta Grossa">
                    </div>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/caixa.png" width="65%" alt="Caixa Econômica Federal">
                    </div>
                    <div class="col s6 l4 center">
                        <img src="img/apoio/scate.png"  width="65%" alt="SCATE">
                    </div>
                </div>
            </div>
        </div>

        <footer class="page-footer teal">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Semana de Integração das Engenharias</h5>
                        <p class="grey-text text-lighten-4">Faça parte do primeiro encontro de engenharia da UEPG.</p>
                    </div>

                    <div class="col l3 s12">
                        <h5 class="white-text">Links úteis</h5>
                        <ul>
                            <!--<li><a class="white-text" href="http://www.uepg.br/proex/Home/PAX.html" target="_blank">Cine-Teatro PAX</a></li>-->
                            <li><a class="white-text" href="http://portal.uepg.br" target="_blank">UEPG</a></li>
                        </ul>
                    </div>

                    <div class="col l3 s12">
                        <h5 class="white-text">Entre em contato</h5>
                        <ul>
                            <li><a class="white-text" href="mailto:engenharia.integracao@gmail.com">engenharia.integracao@gmail.com</a></li>
                            <li><a class="white-text" href="https://www.facebook.com/events/1477537129214802/">Facebook</a></li>
                            <li><a class="white-text">042 9125 5084</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l12 white-text center">
                        <br><br>
                        <p>Dias 18, 19 e 20 de Novembro de 2015 - 19h<br>Grande Auditório da UEPG campus Central - Praça Santos Andrade, s/n - Centro - CEP 84010-919 - Ponta Grossa - Paraná
                        </p>
                    </div>
                </div>
            </div>
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