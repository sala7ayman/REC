<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - RAVEDO </title>
    <meta name="description" content="Enhenyero Bootstrap Template is perfect for Industrial, Engineering and other Corporate Companies. It is fully responsive, well docommented codes with clean and awesome design.">
    <meta name="keywords" content="bootstrap, industrial theme, engineering theme, responsive, modern, clean">
    <meta name="author" content="Bootstrap Seven Themes">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="fonts/icons/flaticon.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="css/nivo-lightbox.css" >
    <link rel="stylesheet" href="css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Font
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    
  </head>
  <body>

    <!-- Top Navigation
    ========================-->
    <nav id="top-menu">
        <div class="container">
            <div class="row">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="col-sm-4 col-md-4">
                    <div class="navbar-header">
                        <a  href="#"><img src="img/logo.jpg" ></a>
                    </div>
                </div>  

                <div class="col-sm-8 col-md-8">
                    <ul class="top-links list-unstyled text-right">
                        <li class="top-contact">
                            <ol class="list-inline">
                                <li><i class="fa fa-phone"></i> : 1234 - 5678 - 9012</li>
                                <li><i class="fa fa-envelope-o"></i> : email@ravedo.com</li>
                            </ol>
                        </li>
                        <li>
                            <ol class="social-icons list-inline">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ol>
                        </li>
                    </ul>
                </div>  
                            
            </div>
        </div>
    </nav>

    <!-- Main Navigation
    ========================-->
    <div id="sticky-anchor"></div>
    <nav id="main-menu" class="navbar navbar-default">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu">
                    <i class="fa fa-list-ul"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myMenu">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="services">Services</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a href="project-2col">Holiday Inn</a></li>
                        <li><a href="project-3col">American International School</a></li>
                        <li><a href="single-project">Dreams Beach</a></li>
                      </ul>
                    </li>
					<li><a href="about">About Us</a></li>

                    <li><a href="contact">Contact Us</a></li>
                    <li class="dropdown">
                    
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
    </nav>
@yield('content')



<div id="en-footer">
        <div class="footer-content">
            <div class="container">

                <div class="row">

                    <div class="col-sm-5 col-md-5">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>About Us</h4>
                                <hr>
                            </div>
                            <a class="logo footer-logo" href="#">RAVEDO</a>
                            <br>
                            <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </small>
                            <br>
                            <br>
                            <address>
                                <strong>Enhenyero INC.</strong><br>
                                Igbalangao, Bugasong, Antique<br>
                                Philippines 5704<br>
                                <abbr title="Phone">P:</abbr> 123-456-7890
                            </address>

                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Services</h4>
                                <hr>
                            </div>
                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Civil and Architecture</a></li>
                                <li><i class="fa fa-long-arrow-right"></i> <a href="#">Mechanical Engineering</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Industrial Engineering</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Electrical and Electronics</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Communications Engineering</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Constructions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Page Links</h4>
                                <hr>
                            </div>
                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">About</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Our Team</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Works</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Services</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Latest News</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Contact</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

        

            </div>
        </div>
        <div class="bottom-footer">
            <div class="container text-center">
                <p>All Rights Reserved © 2016 | <a href="#">Ravedo Company INC.</a></p>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script><!-- LightBox Nivo -->

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/imagesloaded.js"></script>
    
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

   

    </body>

<!-- Mirrored from bootstrapseven.com/demos/enhenyero/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2016 17:37:31 GMT -->
</html>