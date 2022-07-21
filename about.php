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
                            <span class="header-link d-none d-xl-block"><a href="#" class="anchor-link">Talk to Our Expert</a></span>
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
                            <li><a href="/">Home</a></li>
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
                                            <li><a class="dropdown-item" href="study-in-singapore.php">Study In NEWZEALAND</a></li>
                                            <li><a class="dropdown-item" href="study-in-singapore.php">STUDY IN SINGAPORE</a></li>
                                            <li><a class="dropdown-item" href="study-in-singapore.php">STUDY IN UK</a></li>
                                            <li><a class="dropdown-item" href="study-in-singapore.php">STUDY IN USA</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <!-- <li><a href="study_abroad.html">Study Abroad</a>
                            <ul>
                                <li><a href="study-in-usa.php">STUDY IN USA</a></li>
                                <li><a href="#">STUDY IN UK</a></li>
                                <li><a href="#">STUDY IN NEW ZEALAND</a></li>
                                <li><a href="#">STUDY IN AUSTRALIA </a></li>
                            </ul>
                        </li> -->
                            <li class="nav-item">
                                <a class="nav-link " href="coaching.php">Coaching</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="certifications.php">Certifications</a>
                            </li>
                            <li class="nav-item" href="contact.php">
                                <a class="nav-link ">Contact US</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </div>




    <!-- /.header classic -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="page-title">About JDR Migration</h1>
                    <p class="page-description">Study abroad for better employment opportunities, a higher standard of living. Reach out to us for other opportunities for more details.</p>
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
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page breadcrumb -->
    <div class="content pdb0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h2>About Our JDR Migration</h2>
                    <p class="lead">JDR Migration, one of the top Study Abroad & Migration, understand the challenges arising during study migration. Our primary goal is to assist you in scaling through these processes, such as assessment, documentation, and filing.</p>
                    <p>JDR Migration provides assistance to study in all top countries surf through the top-ranked schools and help you to pursue your dream.</p>
                    <p>We have expert professionals, who will guide from the beginning to the end process(from getting an offer letter to getting a visa and accommodation).</p>
                    <p>We have a global presence with a strategic network of own and associate offices in 25 locations across the world. We are planning to extend our services to over 20 offices by the year-end.</p>
                    <p>Get in touch with us today, so we can help you to realise your dream.</p>
                    <p class="text-default">Call: +91 7523999199</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="image-block"><img src="assets/images/about-us-fancy-img-2.png" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="space-medium pdb0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="feature-blurb mb20">
                            <div class="feature-content">
                                <h3 class="feature-title">Our Mision</h3>
                                <p>Our mission is to maximize our client’s chances of landing at their dream school, from loans to acquiring a Study visa. We want to be your bridge from your home country to your dream country. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="feature-blurb">
                            <div class="feature-content">
                                <h3 class="feature-title">Our Vision</h3>
                                <p>Our vision is to provide all our clients with a convenient, trustworthy and professional study migration service with personalized guidance. Whether you have immediate or pressing goals or long-term dreams, we will work with you to fulfil them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-medium">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h3>Get Back Your 'Ooo' With Study Migration!</h3>
                        <br>
                        <h3>Our Values</h3>
                        <p>We are committed to following the organizational values: Transparency, Excellence, Fairness, Accountability, Integrity, and Commitment.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-medium pdb0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="feature-blurb mb20">
                            <div class="feature-content">
                                <div class=""><img src="assets/images/office-img-1.jpg" alt="" class="img-fluid"></div>
                                <div class=""><img src="assets/images/office-img-2.html" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="feature-blurb">
                            <div class="feature-content">
                                <h3 class="feature-title">How do we help?</h3>
                                <p>Our experts help you choose the destination, school, and course, as well as aid you with your application, and other paperwork.</p>
                                <h3>We provide:</h3>
                                <ul class="listnone check-circle">
                                    <li>Free Study Abroad Counselling</li>
                                    <li>Course Advice</li>
                                    <li>Personalized Guidance For Preparation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2>Why JDR Migration?</h2>
                            <p> Since our founding, our primary goal has been to provide immigration in all over country and universities. Our impact is speak louder than our word.</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="counter-section pdb0">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-default">500+</h2>
                                <p class="counter-text">Institutions</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-secondary">5800+</h2>
                                <p class="counter-text"> Counselled</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-warning">500+</h2>
                                <p class="counter-text">Received Visa</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-default">30+</h2>
                                <p class="counter-text">Country</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-large">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="feature-blurb mb40">
                            <div class="feature-content">
                                <h3 class="feature-title">Our Services</h3>
                                <p> We offer Free Study Abroad Counselling, Course Advice, and Other services - Free visa filling, International accommodation, Flight Bookings and Forex Cards and International sim cards.</p>
                                <a href="#" class="btn btn-default">Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="feature-blurb">
                            <div class="feature-content">
                                <h3 class="feature-title">Partner Colleges</h3>
                                <p> We have collaborated with top schools around the world. Feel free to explore our comprehensive range of Universities and Education partners that we represent.</p>
                                <a href="#" class="btn btn-default">View partner Colleges</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-section bg-background" style="background-image:url('assets/images/country/Bottom Image.jpg');">
            <div class="space-large">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="section-title text-center">
                                <!-- section title start-->
                                <h2 class="text-white">Working Together, We Can Help</h2>
                                <p>Doubting the positive effects of our teamwork because you’ve been burned before? By working together with the clients, we learn that wins and losses affect everyone on the team. When teams work together, they can discuss and share a variety of perspectives of a situation.</p>
                                <a href="#" class="btn btn-primary">Join Us</a>
                            </div>
                            <!-- /.section title start-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- {{-- footer --}} -->
    <div class="footer">
        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <div class="widget-footer">
                        <h3 class="widget-title">About us</h3>
                        <p>JDR Migration, one of the top Study Abroad & Migration, understand the challenges arising during study migration. Our primary goal is to assist you in scaling through these processes, such as assessment, documentation, and filing.</p>
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
                    <p><b>Copyright © 2022 JDR Migration. All Rights Reserved.</b></p>
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