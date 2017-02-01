@extends('master')
@section('content')

    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">Dreams Beach</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Projects</a></li>
       
              <li class="active">Portfolio Detail</li>
            </ol>
        </div>
    </div>

    <!-- Page Content
    ==================================-->
    <div id="en-content">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Dreams Beach<br> <span style="font-size:15px;font-weight:normal">Sharm El-Sheikh</span></h2>
                        <hr>
                     
                    </div>
                    <div class="project-details">
                        <h4>Project Details</h4>
                        <br>
                        <ul class="list-unstyled list-block">
                            <li><i class="fa fa-long-arrow-right"></i> <span>Started on: </span> September 28, 2014</li>
                            <li><i class="fa fa-long-arrow-right"></i> <span>Completed on: </span> May 11, 2015</li>
                            <li><i class="fa fa-long-arrow-right"></i> <span>Contract Worth: </span> $85,000,000.00</li>
                            <li><i class="fa fa-long-arrow-right"></i> <span>Location:</span> United States of America</li>
                            <li><i class="fa fa-long-arrow-right"></i> <span>Category:</span> Building, Architecture</li>
                            <li><i class="fa fa-long-arrow-right"></i> <span>Investor:</span> Jenn The Billionare</li>
                            <li><i class="fa fa-long-arrow-right"></i> <span>Website:</span> www.ThreeTowers.com</li>
                        </ul>
                        
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">

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
                              <img src="img/works/DP1.jpg"  style ="width:750px; height:450px"alt="...">
                            </div>
                            <div class="item">
                              <img src="img/works/DP2.jpg" style ="width:750px; height:450px" alt="...">
                            </div>
                            <div class="item">
                              <img src="img/works/DP3.jpg" style ="width:750px; height:450px" alt="...">
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <br>


                     <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco 
					 laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>

            </div>
        </div>
    </div> <!-- End Content -->


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
                        <a class="btn btn-default en-btn light" href="contact.html" role="button">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area -->
@stop