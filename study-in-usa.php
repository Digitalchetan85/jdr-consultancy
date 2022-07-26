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
        <div class="navigation-regular">
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
                                        <li><a href="free-counselling.php">Free Counselling </a></li>
                                        <li><a href="#">Free Visa Filling </a></li>
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
                            <img src="assets/images/logo.jpg" alt="">
                        </a>
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="about.php">About Us</a>
                            </li>
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="free-counselling.php">Free Counselling</a></li>
                                            <li><a class="dropdown-item" href="#">Free Visa Filling</a></li>
                                            <li><a class="dropdown-item" href="#">Flight Bookings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="free-counselling.php">Free Counselling </a></li>
                                    <li><a href="#">Free Visa Filling </a></li>
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
                                            <li><a class="dropdown-item" href="study-in-newzealand.php">Study In NEWZEALAND</a></li>
                                            <li><a class="dropdown-item" href="study-in-singapore.php">STUDY IN SINGAPORE</a></li>
                                            <li><a class="dropdown-item" href="study-in-uk.php">STUDY IN UK</a></li>
                                            <li><a class="dropdown-item" href="study-in-usa.php">STUDY IN USA</a></li>
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
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="page-title">Study in USA</h1>
                        <p class="page-description">The United States of America is a country that needs no introduction. If you desire to achieve your goals, the world is your oyster. </p>
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
                                <li class="breadcrumb-item active" aria-current="page">Study in USA</li>
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
                            <h2>STUDY IN USA</h2>
                            <p>The United States of America is a country that needs no introduction. If you desire to achieve your goals, the world is your oyster. The country is home to a varied ethnic population, the most top-ranked institutions in the world, and beautiful scenery. The United States is a land of opportunities, a destination for immigrants seeking new perspectives.</p>
                            <p>The U.S. has the largest population of international students with more than 800,000 students opting for this country as their most favoured overseas education destination. As one of the most popular studies abroad destinations, the country provides international students with numerous career options in a variety of sectors. </p>
                            <p>Over your four years of study, you can extend your horizons and discover where your genuine skills and talents lie to the flexible majors and minors structure. Undergraduate students in the fields of science, technology, engineering, or mathematics are also eligible.</p>
                            <img src="images/post-img-3.jpg" alt="" class="img-fluid mb30">
                            <h3>Why STUDY IN THE USA</h3>
                            <!-- <p>The country has emerged as a leading study abroad destination known for its top-quality education. Here are the top 10 reasons why you should choose to study in the US:</p> -->
                            <ul class="listnone check-circle">
                                <li>High-quality education</li>
                                <li>Wide range of programs and courses</li>
                                <li>Flexible and comprehensive course structure</li>
                                <li>Multiple scholarships and funding opportunities</li>
                                <li>An International experience that strengthens your CV</li>
                                <li>Research and Training opportunities</li>
                                <li>Make your stay comfortable with part-time job opportunities</li>
                                <li>Vibrant campus life</li>
                                <li>Career Opportunities</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sidebar sticky-top">
                            <div class="widget widget-quote-form bg-light">
                                <h3 class="form-title">Free Immigration Assessment</h3>
                                <p class="form-text">Find out your options for visa by completing a free online assessment.</p>
                                <div class="sidebar-quote-form">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="yourname">Your Name</label>
                                        <div class="">
                                            <input id="study-usa-name" name="study-usa-name" type="text" placeholder="Your Name" class="form-control" required="">
                                            <span id="study-usa-name-info" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="email">Email</label>
                                        <div class="">
                                            <input id="study-usa-email" name="study-usa-email" type="email" placeholder="Email" class="form-control" required="">
                                            <span id="study-usa-email-info" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="mobileno">Mobile No</label>
                                        <div class="">
                                            <input id="study-usa-phone" name="study-usa-phone" type="tel" placeholder="Mobile No" class="form-control" required="">
                                            <span id="study-usa-phone-info" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selectvisa" class="sr-only">Select Visa</label>
                                        <select class="form-control" id="study-usa-selectvisa" name="study-usa-selectvisa">
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
                                            <textarea class="form-control" id="study-usa-message" name="study-usa-message" rows="4" placeholder="Message"></textarea>
                                            <span id="study-usa-info" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div id="study-usa-mail-status"></div>
                                    <button onClick="sendStudyUsaContact();" class="btn btn-default btn-lg btn-block">Book My Free Assessment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card-accordion">
                            <div class="card-accordion-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        EDUCATION IN USA
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-accordion-body">
                                    <p>US universities offer various kinds of degrees catering to every student’s needs and interests. Students can study at any of the following levels to earn the following degrees.</p>
                                    <ul class="listnone check-circle">
                                        <li>University level first stage</li>
                                        <li>Associate Degree (AA)</li>
                                        <li>Bachelor’s Degree (BS, BA)</li>
                                        <li>Post-bachelor’s Diploma/Certificate</li>
                                        <li>University level second stage</li>
                                        <li>Master’s Degree (without thesis) (MS, MA, Meng)</li>
                                        <li>Master’s Degree research (with thesis)(MS, MA, Meng)</li>
                                        <li>University level third stage</li>
                                        <li>Doctorate (PhD.)</li>
                                    </ul>
                                    <h3 class="text-underline">Mandatory Documents required to apply </h3>
                                    <ul class="listnone check-circle">
                                        <li>A Valid Passport</li>
                                        <li>Academic Transcripts</li>
                                        <li>Standardized Test Scores</li>
                                        <li>Proof of Funds</li>
                                    </ul>
                                    <h3 class="text-underline">Cost</h3>
                                    <p>Tuition costs are estimated at Us$ $30,000 per year, with housing expenditures averaging around USD 10,000 per year. However, fees differ greatly from one college to the next and from one course to the next. The cost of a prestigious MBA or another postgraduate programme might be significantly greater. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-accordion">
                            <div class="card-accordion-header" id="headingTwo">
                                <h5 class="mb0">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What do we do offer?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-accordion-body">
                                    <h3 class="text-underline">Personalized Admission Counselling</h3>
                                    <ul class="listnone check-circle">
                                        <li>We assist you with the entire application process, from creating a profile to acquiring an offer letter. </li>
                                        <li>Get customized shortlists based on your interests. </li>
                                        <li>Agent experts write and revise SOPs and other application essays.</li>
                                        <li>Assistance with interview preparation and mock interviews </li>
                                        <li>Acceptance Rate of at minimum 75%</li>
                                    </ul>
                                    <h3 class="text-underline">Funding Assistance and Scholarships</h3>
                                    <ul class="listnone check-circle">
                                        <li>We assist you to find the best way to fund your studies abroad.</li>
                                        <li>Guidance on student loans and scholarships </li>
                                        <li>Part-time job openings and research funding grants.</li>
                                        <li>Advice on income statements and planning</li>
                                    </ul>
                                    <h3 class="text-underline">Strong University Networks</h3>
                                    <ul class="listnone check-circle">
                                        <li>We are partnered with some of the best universities globally.</li>
                                        <li>Admission to prestigious colleges is essential for a successful worldwide career. </li>
                                        <li>In virtual fairs, meet with colleges one-on-one. </li>
                                        <li>Waivers of application fees and on-the-spot offers</li>

                                    </ul>
                                </div>
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
                            <li><a href="free-counselling.php">Free Counselling </a></li>
                            <li><a href="#">Free Visa Filling </a></li>
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
                            <a href="#" target="_blank"><i class="fa fa-facebook m-1"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin m-1"></i></a>
                            <a href="#"><i class="fa fa-instagram m-1"></i></a>
                            <a href="#"><i class="fa fa-youtube m-1"></i></a>
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