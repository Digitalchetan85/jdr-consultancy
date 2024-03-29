<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JDR Migration</title>
    <link rel="icon" href="assets/images/logoicon.jpg" type="image/jpg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome 4.0 CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- Google Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700%7cPT+Serif:400,400i,700,700i" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

    <div id="navbar" class="sticky-top">
        <div class="topbar bg-primary">
            <!-- topbar -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-none d-sm-none d-lg-block d-xl-block">
                        <p class="welcome-text">Welcome to JDR Migration</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="header-block">
                            <span class="header-link d-none d-xl-block"><a data-toggle="modal" data-target="#searchModal" class="anchor-link text-white text-decoration-none">Talk to Our Expert</a></span>
                            <span class="header-link">info@jdrmigration.com</span>
                            <span class="header-link"><a data-toggle="modal" data-target="#searchModal" class="btn btn-default btn-sm white_color">Enquiry Now</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.topbar -->
        <div class="navigation-regular sticky-top">
            <!-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="navigation-regular" class="">
                        navigation
                        <ul class="">
                            <li><a href="#">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="counselling.php">Counselling </a></li>
                                    <li><a href="#">Visa Filling </a></li>
                                    <li><a href="#">Flight Bookings </a></li>
                                </ul>
                            </li>
                            <li><a href="#">Study Abroad</a>
                                <ul>
                                    <li><a href="study-in-usa.php">STUDY IN USA</a></li>
                                    <li><a href="#">STUDY IN UK</a></li>
                                    <li><a href="#">STUDY IN NEW ZEALAND</a></li>
                                    <li><a href="#">STUDY IN AUSTRALIA </a></li>
                                </ul>
                            </li>
                            <li><a href="coaching.php">Coaching</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">
                    <button class="navbar-toggler pb-2 ms-auto me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand ps-5" href="/">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="counselling.php">Counselling</a></li>
                                            <li><a class="dropdown-item" href="visa-filling.php">Visa Filling</a></li>
                                            <li><a class="dropdown-item" href="flight-booking.php">Flight Bookings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="counselling.php">Counselling </a></li>
                                    <li><a href="#">Visa Filling </a></li>
                                    <li><a href="#">Flight Bookings </a></li>
                                </ul>
                            </li> -->
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Study In Abroad
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="study-in-australia.php">Study In Australia</a></li>
                                            <li><a class="dropdown-item" href="study-in-canada.php">Study In Canada</a></li>
                                            <li><a class="dropdown-item" href="study-in-dubai.php">Study In Dubai</a></li>
                                            <li><a class="dropdown-item" href="study-in-malta.php">Study In Malta</a></li>
                                            <li><a class="dropdown-item" href="study-in-newzealand.php">Study In New Zealand</a></li>
                                            <li><a class="dropdown-item" href="study-in-singapore.php">Study In Singapore</a></li>
                                            <li><a class="dropdown-item" href="study-in-uk.php">Study In UK</a></li>
                                            <li><a class="dropdown-item" href="study-in-usa.php">Study In USA</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            <li class="nav-item">
                                <a class="nav-link" href="coaching.php">Coaching</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="certifications.php">Certifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact US</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div>
        <!-- /.header classic -->
        <div class="page-header" id="visa">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="page-title">Visa Filling </h1>
                        <p class="page-description">All of our Visa Filling sessions are free, and we strive to make the application process as simple as possible. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-breadcrumb">
            <!-- page breadcrumb -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/jdr-consultancy">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Visa Filling
                                <li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page breadcrumb -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="content-area">
                            <h3 class="text-primary">Visa Processing Services JDR Migration </h3>
                            <p>Are you moving to another country to get a better education or a better job?</p>
                            <p>Or are you planning on staying in the country permanently?</p>
                            <p>If that&#39;s the case, you&#39;ve arrived at the correct place!</p>
                            <p>As your one-stop shop for everything immigration, JDR Migration makes moving
                                overseas a breeze. Once the necessary paperwork and verifications are in place, the
                                immigration process may go quite quickly.</p>
                            <p>The best way to solve your visa problems is to hire a professional in Bangalore
                                who has a lot of experience in your field.</p>

                            <h3>Our Visa Processing Service</h3>
                            <p>Our specialized visa department provides expedient, skillful, and value-added visa
                                services, all of which are designed to guarantee that you get your visa in a timely
                                manner.</p>
                            <p>Having worked in the industry for a number of years, our skilled professionals are
                                well-versed in visa procedures for a wide range of countries. This assists them in
                                handling visa transactions, regardless of how simple or complicated they may be.</p>

                            <p>We&#39;ll make sure you have everything you need and that you never have to cancel a
                                trip because of a lack of paperwork.</p>
                            <p>Everything, from making sure you have the correct paperwork to ensuring that
                                your visa application is processed quickly and without any problems, is taken care
                                of for you.</p>


                            <h2 class="">Why choose JDR Migration?</h2>
                            <p>JDR Migration&#39;s team of visa specialists guarantees that all application forms are
                                filled out to the letter and that every essential document is provided in the exact
                                manner requested.</p>
                            <p>The process of applying for and obtaining a visa is just as vital as receiving your
                                acceptance letter. You won&#39;t have any trouble getting through any part of the visa
                                procedure with our skilled immigration experts by your side.</p>
                            <h4>We at JDR Migration make sure of the following:</h4>
                            <ul class="listnone check-circle">
                                <li>There are no errors in your visa application.
                                    as simple as possible.</li>
                                <li>Check the visa checklist to make sure you have all of the necessary paperwork.</li>
                                <li>You have gone over the dos and don&#39;ts of getting a visa.</li>
                                <li>You&#39;re up-to-date on all of the latest policies and procedures.</li>
                                <li>On the day of your actual visa interview at the embassy, you feel both
                                    completely prepared and confident in your ability to succeed.</li>

                            </ul>

                            <p><b>Reach out to us right away to get the benefits!</b></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="sidebar sticky-top">
                            <div class="widget widget-quote-form bg-light">
                                <h3 class="form-title">Free Visa Filling Assessment</h3>
                                <!-- <p class="form-text">Find out your options for visa by completing a free online assessment.</p> -->
                                <form class="sidebar-quote-form">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="yourname">Your Name</label>
                                        <div class="">
                                            <input id="yourname" name="yourname" type="text" placeholder="Your Name" class="form-control" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="email">Email</label>
                                        <div class="">
                                            <input id="email" name="email" type="email" placeholder="Email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="mobileno">Mobile No</label>
                                        <div class="">
                                            <input id="mobileno" name="mobileno" type="number" placeholder="Mobile No" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selectvisa" class="sr-only">Select Visa</label>
                                        <select class="form-control" id="selectvisa" name="selectvisa">
                                            <option value="Select Visa">Select Visa</option>
                                            <option value="Students Visa">Students Visa</option>
                                            <option value="Business Visa">Business Visa</option>
                                            <option value="Family Visa">Family Visa</option>
                                            <option value="Travel Visa">Travel Visa </option>
                                            <option value="Work Visa">Work Visa </option>
                                            <option value="Visitor Visa">Visitor Visa </option>
                                            <option value="Migrate Visa">Migrate Visa </option>
                                            <option value="PR Visa">PR Visa</option>
                                        </select>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="message">Message</label>
                                        <div class="">
                                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-lg btn-block mt-4">Book My Free Assessment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- {{-- footer --}} -->
    <div id="footer" class="footer">
        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <div class="widget-footer">
                        <h3 class="widget-title">About us</h3>
                        <p>JDR Migration, one of the top Study Abroad & Migration , understand the challenges arising during study migration. Our primary goal is to assist you in scaling through these processes, such as assessment, documentation, and filing.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="widget-footer">
                        <h3 class="widget-title">Study Abroad</h3>
                        <ul class="listnone arrow-footer">

                            <li><a href="study-in-australia.php">Study In Australia</a></li> </a></li>
                            <li><a href="study-in-canada.php">Study In Canada</a></li>
                            <li><a href="study-in-dubai.php">Study In Dubai</a></li>
                            <li><a href="study-in-malta.php">Study In Malta</a></li>
                            <li><a href="study-in-singapore.php">Study In Singapore</a></li>
                            <li><a href="study-in-uk.php">Study In UK</a></li>
                            <li><a href="study-in-usa.php">Study In USA</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="widget-footer">
                        <h3 class="widget-title">Services</h3>
                        <ul class="listnone arrow-footer">
                            <li><a href="counselling.php">Counselling </a></li>
                            <li><a href="#">Visa Filling </a></li>
                            <li><a href="#">Flight Bookings </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="widget-footer">
                        <h3 class="widget-title">Contact Us</h3>
                        <ul class="listnone">
                            <li><a href="#"><i class="fa fa-envelope pr-2"></i> info@jdrmigration.com</a></li>
                            <li><a href="#"><i class="fa fa-envelope pr-2"></i> jdrmigration@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone pr-2"></i> +91 7523999199</a></li>
                            <!-- <li><a href="#"><i class="fa fa-map-marker pr-2"></i>3RD FLOOR, 707, NTI LAYOUT, 10 CROSS, 10TH MAIN, II PHASE, Sahakara Nagar Bengaluru Urban, Karnataka, 560092</a></li> -->
                        </ul>
                        <div class="pt-1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.4983961565113!2d77.58043127668125!3d13.067568784831922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae194edd460f63%3A0xfeaa6fea6ef67737!2sJDR%20Migration%20Pro!5e0!3m2!1sen!2sin!4v1655705588087!5m2!1sen!2sin" width="100%" height="150" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        <ul class="listnone mt-2">
                                <a href="https://www.facebook.com/jdrmigration" target="_blank"><i class="fa fa-facebook m-1"></i></a>
                                <a href="https://www.linkedin.com/company/jdrmigration/" target="_blank"><i class="fa fa-linkedin m-1"></i></a>
                                <a href="https://www.instagram.com/jdrmigration/"><i class="fa fa-instagram m-1"></i></a>
                                <a href="https://youtube.com/channel/UC__n4oHWi9HJ6HPHBa30vTw"><i class="fa fa-youtube m-1"></i></a>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <p><b>Copyright © 2022 JDR Migration. All Rights Reserved. Developed by ShanthasWebz</b></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny footer -->
    <a href="https://api.whatsapp.com/send?phone=917523999199" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Search Modal -->
    <div class="searchModal">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="enquiry-short-form">
                            <h2>Enter Your Information</h2>
                            <div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label sr-only" for="yourname">Your Name</label>
                                    <div class="">
                                        <input id="name" name="name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                        <span id="name-info" class="text-danger"></span>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label sr-only" for="email">Email</label>
                                    <div class="">
                                        <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
                                        <span id="email-info" class="text-danger"></span>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label sr-only" for="mobile">Mobile No</label>
                                    <div class="">
                                        <input id="phone" name="phone" type="tel" placeholder="Mobile No" class="form-control input-md" required="">
                                        <span id="phone-info" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="selectvisa" class="sr-only">Select Visa</label>
                                    <select class="form-control" id="selectvisa" name="selectvisa">
                                        <option value="Select Visa">Select Visa</option>
                                        <option value="Students Visa">Students Visa</option>
                                        <option value="Business Visa">Business Visa</option>
                                        <option value="Family Visa">Family Visa</option>
                                        <option value="Travel Visa">Travel Visa </option>
                                        <option value="Work Visa">Work Visa </option>
                                        <option value="Visitor Visa">Visitor Visa </option>
                                        <option value="Migrate Visa">Migrate Visa </option>
                                        <option value="PR Visa">PR Visa</option>
                                    </select>
                                    <span id="selectvisa-info" class="text-danger"></span>
                                </div>
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="control-label sr-only" for="message">Message</label>
                                    <div class="">
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                                        <span id="message-info" class="text-center"> </span>
                                    </div>
                                </div>
                                <div id="mail-status"></div>
                                <button class="btn btn-default btn-lg btn-block" onClick="sendContact();">Book My Free Assessment</button>
                            </div>
                            <span class="help-block">We will not spam your email.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.Search Modal -->
    <!-- {{-- footer --}} -->
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/menumaker.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/custom-carousel.js"></script>
    <script src="assets/js/navigation.js"></script>
</body>