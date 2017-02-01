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
              <li class="active">Construction</li>
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
                        <h2>Structural Designs and <br>Building Constructions</h2>
                        <hr>
                        <small>We are backed by a prolific team of professionals to carry out our business processes in a systematic manner. </small>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p>Structural design is the methodical investigation of the stability, strength and rigidity of structures. The basic objective in structural analysis and design is to produce a structure capable of resisting all applied loads without failure during its intended life.</p>

                    <a class="read-more" href="../services.html">All Services <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-sm-6 col-md-6 img">
                    <img src="../img/services/c01.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-sm-6 col-md-6 img">
                    <img src="../img/services/c02.jpg" alt="..." class="img-responsive">
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <h4>Structural Design</h4>
                    <p>Suspendisse eget felis eget nulla placerat luctus id quis sapien. Sed metus felis, euismod et euismod et, feugiat viverra diam.felis tortor, euismod ac tortor ut. Quisque nec erat erat.</p>

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="post-img thumbnail">
                              <img src="../img/services/c03.jpg" alt="...">
                              <div class="caption">
                                <small>ABC Building Structural Design</small>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="post-img thumbnail">
                              <img src="../img/services/c04.jpg" alt="...">
                              <div class="caption">
                                <small>Global Corporation Structural Design</small>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4>Building Constructions</h4>
                    <p>Building Construction is the process of preparing for and forming buildings and building systems. Construction starts with planning, design, and financing and continues until the structure is ready for occupancy.</p>
                    <p>Far from being a single activity, large scale construction is a feat of human multitasking. Normally, the job is managed by a project manager, and supervised by a construction manager, design engineer, construction engineer or project architect.</p>
                    <p>For the successful execution of a project, effective planning is essential. Those involved with the design and execution of the infrastructure in question must consider the zoning requirements, the environmental impact of the job, the successful scheduling, budgeting, construction site safety, availability and transportation of building materials, logistics, inconvenience to the public caused by construction delays and bidding, etc.</p>

                    <a class="read-more" href="../project-3col.html">View Our Works <span class="fa fa-chevron-circle-right"></span></a>
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