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
              <li class="active">Civil and Architecture</li>
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
                        <h2>Civil and <br>Architecture</h2>
                        <hr>
                        <small>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</small>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p>Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>

                    <a class="read-more" href="../services.html">All Services <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">
                <div class="col-md-6">
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
                              <img src="../img/services/01.jpg" alt="...">
                            </div>
                            <div class="item">
                              <img src="../img/services/05.jpg" alt="...">
                            </div>
                            <div class="item">
                              <img src="../img/services/07.jpg" alt="...">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <h4>Design and Planning</h4>
                    <p>Engineers of virtually any specialty get paid to experiment with the technologies of today and add in improvements of their own. In the process, they often create new, useful inventions that may be eligible for a patent. Engineers invent new technologies for the rest of us. There are many engineers (otherwise known as inventors) in history. Iím sure youíll recognize the names of a few. </p>
                    <p>For instance, take Leonardo da Vinci. He drew plans for several flying machines, including a helicopter and a hang glider as well as many military machines. In addition, da Vinci may have made a great civil engineer as shown from his plans for a 720-foot bridge that was recently turned into a reality. Another engineer/inventor is Eli Whitney. He invented the first cotton gin. Whitney is also credited with the creation of interchangeable parts. Oddly enough, the ability to interchange parts is thought to be a much more important and long lasting invention than the cotton gin (although that is all he is usually remembered for). </p>
                    <a class="read-more" href="../project-3col.html">View Our Works <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 img">
                    <img src="../img/services/08.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 img">
                    <img src="../img/services/v01.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 img">
                    <img src="../img/services/v02.jpg" alt="..." class="img-responsive">
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