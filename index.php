<?php
session_start();
$user = (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : null;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INSTITUTO URQUIZA</title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- owl carousel css -->

        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/lightbox.min.css" rel="stylesheet">

        <!-- Theme stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom stylesheet - for your changes -->
        <link href="css/customm.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">



        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Mordernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>

    <body data-target="#navigation" data-offset="120">
        <!-- *** NAVBAR ***
      _________________________________________________________ -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand scrollTo" href="#intro">INSTITUTO URQUIZA</a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Inicio</a>
                        </li>
                        <li><a href="historia.html">Historia</a>
                        </li>
                        <li class="dropdown">
                            <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Carreras <b class="caret"></b></a>
                            <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                <li>
                                    <a href="analista-funcional.html">Análisis Funcional de Sistemas Informáticos</a>
                                </li>
                                <li>
                                    <a href="infraestructura.html">Infraestructura de Tecnología de la Información</a>
                                </li>
                                <li>
                                    <a href="desarrollo.html">Desarrollo de Software</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                          <a href="contacto.html">Contacto</a>
                        </li>
                        <?php
                          if(is_null($user)){
                        ?>
                        <li class="dropdown">
                            <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Ingresar <b class="caret"></b></a>
                            <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form" role="form" method="post" action="php/login.php" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="username">Nombre</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                      <?php } else {?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Holaa <?php echo $user['usuario']; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                  <a href="php/logout.php">  <button  class="btn btn-danger btn-block">Cerrar sesión</button></a>
                                                </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                      <?php } ?>
                    </ul>
                    </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->

            </div>
        </div>
        <!-- /#navbar -->

        <!-- *** NAVBAR END *** -->


        <div id="all">
            <!-- *** INTRO IMAGE ***
        _________________________________________________________ -->
            <div id="intro" class="clearfix">
                <div class="item">
                    <div class="container">
                        <div class="row">

                            <h1 data-animate="fadeInDown">INSTITUTO URQUiZA</h1>
                            <p class="message" data-animate="fadeInUp">
                                Conoce todo acerca del INSTITUTO URQUIZA!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- *** INTRO IMAGE END *** -->



            <!-- *** SERVICES ***
        _________________________________________________________ -->
            <div class="section" id="section1">
                <div class="container">
                    <div class="col-md-12">
                        <h2 class="title" data-animate="fadeInDown">Carreras</h2>

                        <p class="lead">OFERTA EDUCATIVA DE NIVEL SUPERIOR DE LA ESCUELA Nº 49 J.J. DE URQUIZA </p>

                        <div class="row services">

                            <div class="col-md-4" data-animate="fadeInUp">

                                <div class="icon"><i class="fa fa-desktop"></i>
                                </div>
                                <a href="analista-funcional.html">
                                    <h3 class="heading">Análisis Funcional de Sistemas Informáticos</h3>
                                </a>

                                <p>El Técnico Superior en Análisis Funcional de Sistemas Informáticos...</p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-desktop"></i>
                                </div>
                                <a href="infraestructura.html">
                                    <h3 class="heading">Infraestructura de Tecnología de la Información</h3>
                                </a>

                                <p>El Técnico Superior en Infraestructura de Tecnología de la Información esta..</p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-desktop"></i>
                                </div>
                                <a href="desarrollo.html">
                                    <h3 class="heading">Desarrollo de Software</h3>
                                </a>

                                <p>El Técnico Superior en Desarrollo de Software participa en proyectos de ..</p>
                            </div>

                        </div>
                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** SERVICES END *** -->


            <!-- *** ABOUT US ***
        _________________________________________________________ -->

            <div class="section  text-gray" id="section2">
                <div class="container">
                    <div class="col-md-12">


                        <h2 class="title" data-animate="fadeInDown">Biblioteca</h2>

                        <div class="row">

                            <div class="col-md-8 col-md-offset-2">

                                <p class="text-large text-thin" data-animate="fadeInUp">
                                    Nuestro nivel terciario cuenta con su biblioteca híbrida adquirida por plan de mejora del INET con más de 400 textos específicos de nuestra profesión.
                                </p>
                                <p class="text-large text-thin" data-animate="fadeInUp">
                                    La biblioteca es administrada por personal quienes controlan y mantienen los servicios de préstamos de libros, consulta en sala y el cumplimiento de requisitos mínimos para poder acceder a los mismos.
                                </p>
                                <p class="text-large text-thin margin-bottom" data-animate="fadeInUp">
                                    Los textos están categorizados por tres temáticas:
                                </p>

                                <div class="col-md-4" data-animate="fadeInUp">

                                    <div class="icon">
                                    </div>
                                    <h3 class="heading" style="color:#6aae7a">Programación</h3>
                                    <p>PHP</p>
                                    <p>JAVA</p>
                                    <p>VBASIC</p>
                                    <p>JScript</p>
                                    <p>MySQL</p>
                                    <p>HTML</p>
                                    <p>CCS</p>
                                    <p>.NET</p>
                                </div>

                                <div class="col-md-4" data-animate="fadeInUp">

                                    <div class="icon">
                                    </div>
                                    <h3 class="heading" style="color:#6aae7a">Computación</h3>
                                    <p>Hardware</p>
                                    <p>Sistemas Operativos</p>
                                    <p>Windows</p>
                                    <p>Linux</p>
                                    <p>Obuntu</p>

                                </div>

                                <div class="col-md-4" data-animate="fadeInUp">

                                    <div class="icon">
                                    </div>
                                    <h3 class="heading" style="color:#6aae7a">Sistemas</h3>
                                    <p>Estructurado</p>
                                    <p>Objetos</p>
                                    <p>Hipermediales</p>
                                    <p>Análisis y Diseño</p>
                                    <p>UML</p>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** ABOUT US END *** -->


            <!-- *** TESTIMONIALS ***
_________________________________________________________ -->

            <div class="section text-gray" id="section3" data-animate="fadeInUp">

                <div class="container">
                    <hr>
                    <div class="col-md-12">

                        <div class="mb20">
                            <h2 class="title" data-animate="fadeInUp">AUTORIDADES</h2>


                        </div>

                        <ul class="owl-carousel testimonials same-height-row" data-animate="fadeInUp">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown
                                            belly, slightly domed and divided by arches into stiff sections.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-1.jpg">
                                            <h5>Prof. A.S.C. Adrián Márquez</h5>
                                            <p>RECTOR</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to
                                            me? " he thought. It wasn't a dream.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-2.jpg">
                                            <h5>Prof. Marcelo Plá</h5>
                                            <p>VICE RECTOR</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>

                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded
                                            frame.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-1.jpg">
                                            <h5>Prof. Juan Lombardi</h5>
                                            <p>Regente</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull
                                            weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>Prof. María Rosa Campitelli</h5>
                                            <p>Gabinete Técnico - Pedagógico</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull
                                            weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made
                                            him feel quite sad.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-3.jpg">
                                            <h5>Prof. Verónica Isola - (Área Sistemas)</h5>
                                            <p> Consejo Consultivo</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /.section -->

            <!-- *** TESTIMONIALS END *** -->

            <!-- *** CONTACT ***
        _________________________________________________________ -->

            <section id="portfolio" class="background-gray-lightest">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="heading lead">GALERIA DE FOTOS</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row no-space" style="padding-bottom: 30px;">
                        <div class="col-sm-4 col-xs-6">
                            <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                          <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>

                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="box"><a href="img/portfolio-3.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 3"><img src="img/portfolio-3.jpg" alt="" class="img-responsive"></a></div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="box"><a href="img/portfolio-5.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 5"><img src="img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="box"><a href="img/portfolio-4.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 4"><img src="img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="box"><a href="img/portfolio-6.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 6"><img src="img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="box"><a href="img/portfolio-2.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 2"><img src="img/portfolio-2.jpg" alt="" class="img-responsive"></a></div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                          <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>

                        </div>
                        <div class="col-sm-4 col-xs-6">
                          <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>

                        </div>
                    </div>
                </div>
            </section>




            <!-- *** FOOTER ***
        _________________________________________________________ -->


            <!-- /.section -->

            <!-- *** FOOTER END *** -->
        </div>
        <div class="section" id="footer">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <p class="social">
                            <a href="#" class="external facebook" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external instagram" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
                            <a href="mailto:#" class="email" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                    <!-- /.6 -->

                </div>

            </div>
            <!-- /.container -->
        </div>

        <!-- js base -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


        <!-- waypoints for scroll spy -->
        <script src="js/waypoints.min.js"></script>

        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- jQuery scroll to -->
        <script src="js/jquery.scrollTo.min.js"></script>

        <!-- main js file -->
        <script src="js/lightbox.js"></script>
        <script src="js/front.js"></script>


    </body>

</html>
