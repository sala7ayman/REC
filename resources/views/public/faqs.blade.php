@extends('master')
@section('content')

    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">FAQs</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Home</a></li>
              <li class="active">Frequently Ask Questions</li>
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
                        <h2>Frequently Ask <br>Questions</h2>
                        <hr>
                        <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</p>
                        
                        <div id="popup">
                            <a class="read-more" href="https://www.youtube.com/watch?v=L9szn1QQfas">Watch Video For More Info <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p class="lead">This is the lead paragraphy about FAQs. Nulla interdum dapibus erat nec elementum. Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>
                    <h4>General Questions</h4>

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">

                        <!-- Collapse FAQ #1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="One">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="false" aria-controls="faq1">
                                      How much a standard project cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="faq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="One">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="Two">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="false" aria-controls="faq2">
                                    What are the basis of each project estimates?
                                    </a>
                                </h4>
                            </div>
                            <div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Two">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    <br>
                                    <br>
                                    <ul class="list-unstyled list-block">
                                        <li><i class="fa fa-check-square"></i>Sunt in culpa qui officia deserunt mollit anim id est</li>
                                        <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li><i class="fa fa-check-square"></i>Excepteur sint occaecat cupidatat non sunt in culpa qui.</li>
                                        <li><i class="fa fa-check-square"></i>Donec nec justo eget felis facilisis fermentum.</li>
                                        <li><i class="fa fa-check-square"></i>Mollit anim id est laborum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="Three">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="false" aria-controls="faq3">
                                      Do you provide service Internationally, or in places with your branch only?
                                    </a>
                                </h4>
                            </div>
                            <div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Three">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="Four">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="false" aria-controls="faq4">
                                      Ad vegan excepteur butcher vice lomo?
                                    </a>
                                </h4>
                            </div>
                            <div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Four">
                                <div class="panel-body">
                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="Five">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq5" aria-expanded="false" aria-controls="faq5">
                                      Enim eiusmod high life accusamus terry richardson ad squid?
                                    </a>
                                </h4>
                            </div>
                            <div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Five">
                                <div class="panel-body">
                                    Wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="smallspacer"></div>

                    <h4>Investors Questions</h4>

                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="false">

                        <!-- Collapse FAQ #1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="iOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#ifaq1" aria-expanded="false" aria-controls="ifaq1">
                                      How much a standard project cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="ifaq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="iOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="iTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#ifaq2" aria-expanded="false" aria-controls="ifaq2">
                                    What are the basis of each project estimates?
                                    </a>
                                </h4>
                            </div>
                            <div id="ifaq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="iTwo">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    <br>
                                    <br>
                                    <ul class="list-unstyled list-block">
                                        <li><i class="fa fa-check-square"></i>Sunt in culpa qui officia deserunt mollit anim id est</li>
                                        <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li><i class="fa fa-check-square"></i>Excepteur sint occaecat cupidatat non sunt in culpa qui.</li>
                                        <li><i class="fa fa-check-square"></i>Donec nec justo eget felis facilisis fermentum.</li>
                                        <li><i class="fa fa-check-square"></i>Mollit anim id est laborum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="iThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#ifaq3" aria-expanded="false" aria-controls="ifaq3">
                                      Do you provide service Internationally, or in places with your branch only?
                                    </a>
                                </h4>
                            </div>
                            <div id="ifaq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="iThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="iFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#ifaq4" aria-expanded="false" aria-controls="ifaq4">
                                      Ad vegan excepteur butcher vice lomo?
                                    </a>
                                </h4>
                            </div>
                            <div id="ifaq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="iFour">
                                <div class="panel-body">
                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="iFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#ifaq5" aria-expanded="false" aria-controls="ifaq5">
                                      Enim eiusmod high life accusamus terry richardson ad squid?
                                    </a>
                                </h4>
                            </div>
                            <div id="ifaq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="iFive">
                                <div class="panel-body">
                                    Wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="smallspacer"></div>

                    <h4>Other Questions</h4>

                    <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="false">

                        <!-- Collapse FAQ #1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="oOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion3" href="#ofaq1" aria-expanded="false" aria-controls="ofaq1">
                                      How much a standard project cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="ofaq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="oOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="oTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#ofaq2" aria-expanded="false" aria-controls="ofaq2">
                                    What are the basis of each project estimates?
                                    </a>
                                </h4>
                            </div>
                            <div id="ofaq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="oTwo">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    <br>
                                    <br>
                                    <ul class="list-unstyled list-block">
                                        <li><i class="fa fa-check-square"></i>Sunt in culpa qui officia deserunt mollit anim id est</li>
                                        <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li><i class="fa fa-check-square"></i>Excepteur sint occaecat cupidatat non sunt in culpa qui.</li>
                                        <li><i class="fa fa-check-square"></i>Donec nec justo eget felis facilisis fermentum.</li>
                                        <li><i class="fa fa-check-square"></i>Mollit anim id est laborum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="oThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#ofaq3" aria-expanded="false" aria-controls="ofaq3">
                                      Do you provide service Internationally, or in places with your branch only?
                                    </a>
                                </h4>
                            </div>
                            <div id="ofaq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="oThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="oFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#ofaq4" aria-expanded="false" aria-controls="ofaq4">
                                      Ad vegan excepteur butcher vice lomo?
                                    </a>
                                </h4>
                            </div>
                            <div id="ofaq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="oFour">
                                <div class="panel-body">
                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <!-- Collapse FAQ #5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="oFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#ofaq5" aria-expanded="false" aria-controls="ofaq5">
                                      Enim eiusmod high life accusamus terry richardson ad squid?
                                    </a>
                                </h4>
                            </div>
                            <div id="ofaq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="oFive">
                                <div class="panel-body">
                                    Wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    <br>
                                    <br>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                    </div>

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
                        <a class="btn btn-default en-btn light" href="contact.html" role="button">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area -->
    @stop