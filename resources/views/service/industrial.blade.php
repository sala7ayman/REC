@extends('master')
@section('content')
    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">Services</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="../index.html">Home</a></li>
              <li><a href="../services.html">Services</a></li>
              <li class="active">Industrial Engineering</li>
            </ol>
        </div>
    </div>

    <!-- Page Content 
    ========================-->
    <div id="en-content">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Industrial Engineering <br>Services</h2>
                        <hr>
                        <small>We are backed by a prolific team of professionals to carry out our business processes in a systematic manner. </small>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p>Our team comprises qualified electrical engineers, quality controllers, research & development, warehousing and packaging personnels and logistic personnels. All the team members work in coordination to achieve the goals of our organization as well as to maximize the level of satisfaction of our customers. Our quality controllers conduct various stringent tests on the products to offer a flawless range to our esteemed customers.</p>

                    <a class="read-more" href="../services.html">All Services <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">
                <div class="col-md-6 img">
                    <div id="imageSlider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#imageSlider" data-slide-to="1"></li>
                            <li data-target="#imageSlider" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="../img/services/i01.jpg" alt="...">
                            </div>
                            <div class="item">
                              <img src="../img/services/i02.jpg" alt="...">
                            </div>
                            <div class="item">
                              <img src="../img/services/i03.jpg" alt="...">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <h4>Industrial Project Management Services</h4>
                    <p>We don’t consult in an industry unless we have mastered its challenges and demonstrated improvements. In many cases, we have developed specific software solutions, project management protocols, and diagnostic equipment to streamline processes.</p>
                    <p>We leading the future of electrification with advanced technologies that distribute, protect and control. We provide customers, across various industries, with end-to-end product and service solutions that ensure the reliability and protection of the electrical infrastructure; from the power station to the end point and the sustainable power technologies in between.</p>
                    <a class="read-more" href="../project-3col.html">View Our Works <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="../img/services/i04.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="../img/services/i05.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="../img/services/i06.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="../img/services/i07.jpg" alt="..." class="img-responsive">
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <h4>System Repair Installation</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Suspendisse eget felis eget nulla placerat luctus id quis sapien. Sed metus felis, euismod et euismod et, feugiat viverra diam.felis tortor, euismod ac tortor ut. Quisque nec erat erat.</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4>Plantation Construction and Management</h4>
                    <p>Suspendisse eget felis eget nulla placerat luctus id quis sapien. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Sed metus felis, euismod et euismod et, feugiat viverra diam.felis tortor, euismod ac tortor ut. Quisque nec erat erat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- CTA
    ========================-->
    <div class="en-cta">
        <div class="overlay color">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Looking for the Best Engineering Solution for your Project?</h2>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-default en-btn light" href="http://bootstrapseven.com/404page.html" role="button">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area -->
@stop