@extends('master')
@section('content')

    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">Contact</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Home</a></li>
              <li class="active">Contact</li>
            </ol>
        </div>
    </div>

    <!-- Intro 
    ========================-->
    <div id="en-content">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>We Are Ready to <br>Help You 24/7</h2>
                        <hr>
                        <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</p>
                        <a class="read-more" href="project-3col.html">View Our Works <span class="fa fa-chevron-circle-right"></span></a>

                    
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <form id="contact-form" class="form" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <textarea class="form-control" rows="6" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>

                        <div id="success"></div>
                        <button type="submit" class="btn btn-send en-btn dark">Send Message</button> <!-- Send button -->
                    </form>

                    <div class="clearfix"></div>
                    <div class="spacer"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4>Main Office Info</h4>
                                <hr>
                                <ul class="list-unstyled list-block">
                                    <li><strong>Office Hours: </strong> <br>Mon-Friday 8am - 10pm</li>
                                    <li><strong>Address: </strong> <br>Igbalangao, Bugasong, Antique</li>
                                    <li><strong>Tell: </strong> <br>123-456-7890</li>
                                    <li><strong>Fax: </strong> <br>123-456-7890</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="contact-details">
                                <h4>Google Map Location</h4>
                                <hr>
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.294898230479!2d-74.01236055!3d40.71152420000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a19881b83fb%3A0x979b0a4fe0492ce6!2sWorld+Trade+Center%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sph!4v1424375590572"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Other Offices
    ========================-->
    <div id="en-offices">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Other Offices and <br>Branches</h2>
                        <hr>
                        <a class="read-more" href="contact.html">Start a Project with Us Now <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p><strong><em>Enhenyero INC.</em></strong> as one of the biggest Engineering Company in the World we have 6 other branches worldwide. As we continue to grow, we are planning to expand more of our branches from time to time. Visit the nearest branch in you place and make you Engineering Project done right. </p>

                    <div class="clearfix"></div>
                    <div class="spacer"></div>

                    <div class="row">
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>United States Office</h4>
                                <address>
                                    <strong>Enhenyero INC.</strong><br>
                                    Igbalangao, Bugasong, Antique<br>
                                    Philippines 5704<br>
                                    <abbr title="Phone">P:</abbr> 123-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>United Kingdom Branch</h4>
                                <address>
                                    <strong>Enhenyero INC. UK</strong><br>
                                    Birmingham, West Midlands<br>
                                    United Kingdom 60004<br>
                                    <abbr title="Phone">P:</abbr> 123-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Canada Office</h4>
                                <address>
                                    <strong>Enhenyero INC.</strong><br>
                                    Igbalangao, Bugasong, Antique<br>
                                    Philippines 5704<br>
                                    <abbr title="Phone">P:</abbr> 123-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Dubai Branch</h4>
                                <address>
                                    <strong>Enhenyero INC.</strong><br>
                                    Igbalangao, Bugasong, Antique<br>
                                    Philippines 5704<br>
                                    <abbr title="Phone">P:</abbr> 123-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>China Branch</h4>
                                <address>
                                    <strong>Enhenyero INC.</strong><br>
                                    Igbalangao, Bugasong, Antique<br>
                                    Philippines 5704<br>
                                    <abbr title="Phone">P:</abbr> 123-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Philippines Branch</h4>
                                <address>
                                    <strong>Enhenyero INC.</strong><br>
                                    Igbalangao, Bugasong, Antique<br>
                                    Philippines 5704<br>
                                    <abbr title="Phone">P:</abbr> 123-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Footer Area -->
    @stop