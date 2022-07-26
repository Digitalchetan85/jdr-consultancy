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
        <div class="page7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
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
                            <h2>USA Visitor Visa</h2>
                            <p>If you wish to go to the United States, obtaining a visa is a very important step.
                                People who have never filed for a visa before may find it difficult to understand the
                                differences between the many different kinds of visas. If you want to visit the
                                United States for leisure purposes, the B2 visa is the one you should apply for.</p>
                            <h5>What is a B2 visa?</h5>
                            <p>The B2 visa is a tourist visa that permits you to enter the United States for
                                purposes of tourism, pleasure, or to visit family members. The B2 visa is also
                                called US tourist visa.</p>

                            <!-- <img src="images/post-img-3.jpg" alt="" class="img-fluid mb30"> -->
                            <h3>Eligibility for a US Tourist Visa (B2-Visa):</h3>
                            <p>If you want to visit the United States for one of the following reasons, you are
                                eligible for a US tourist visa:</p>
                            <ul class="listnone check-circle">
                                <li>Enjoy a vacation in the United States.</li>
                                <li>Visit a number of different U.S. cities.</li>
                                <li>Take a trip to see relatives or friends.</li>
                                <li>Take part in social events organized by a variety of different
                                    organizations.</li>
                                <li>Pay a visit in order to get medical care.</li>
                                <li>Take part in events or contests related to music or sports that you won&#39;t
                                    get paid for.</li>
                            </ul>
                            <h3>What is the process for obtaining a tourist visa to the United States?</h3>
                            <p>Follow these simple steps to apply for a US tourist visa:</p>
                            <ol>
                                <li>Fill out and submit the DS-160 form.</li>
                                <li>Pay the application fees for your visa.</li>
                                <li>Schedule an interview for a US tourist visa at the Visa Application
                                    Center (VAC).</li>
                                <li>Put together your B2 Visa paperwork.</li>
                                <li>Make sure you show up for the visa interview at the VAC.</li>
                            </ol>
                            <p>You will need to bring the following to your appointment with VAC:</p>
                            <ul class="listnone check-circle">
                                <li>A valid passport is required. To enter the United States, you must have a
                                    valid passport for at least six months beyond your anticipated stay time.</li>
                                <li>The confirmation page of the DS-160 form</li>
                                <li>Confirmation page for the appointment</li>
                                <li>One printed photo that meets the requirements for a visitor visa</li>
                            </ul>
                            <p>You have to get all the documents you need for the interview at the consulate or
                                embassy. Get yourself ready for the interview. The consular official will determine
                                whether or not you are eligible for a visa based on your interview. There is a visa
                                issuance fee if your visa is granted.</p>
                            <h3>How can JDR Migration help?</h3>
                            <p>At JDR Migration, we specialize in guiding people through the whole visa
                                application process.</p>
                            <p>JDR Migration has been instrumental in the successful visa applications of
                                thousands of individuals throughout the country. Because we have a lot of
                                experience with the US visa process, we are your best bet if you want to apply for
                                a B2 visa.</p>
                            <h2>US Study Visa</h2>
                            <p>The United States of America is a country that many people fantasize about
                                visiting because of the many opportunities that exist for work, business, and a
                                variety of other reasons. This has earned the country the nickname &quot;the land of
                                opportunities.&quot; </p>
                            <p>There are many people from across the globe who wishes to work in the United
                                States because of its high pay and pleasant working conditions.</p>
                            <p><b>You may go to the United States for work reasons in one of two ways:</b></p>
                            <ol>
                                <li>Temporary  worker</li>
                                <li>Sponsored or permanent employee</li>

                            </ol>
                            <p>The non-immigrant visa is required for the temporary employees, whereas the
                                immigrant visa is required for the sponsored employees. An immigrant visa is
                                given to a foreign individual who wishes to settle permanently in the United States.
                                In most circumstances, a family member or employer files an application with the
                                U.S. Citizenship and Immigration Services on the individual&#39;s behalf (USCIS).</p>
                            <p>However, in order to get employment in the United States as an Indian citizen, you
                                will require the non-immigrant category of the work visa offered by the United
                                States.</p>
                            <h4>Eligibility to get a US work visa</h4>
                            <p>You must meet the following requirements to be able to apply for a work visa in
                                the United States.</p>
                            <ul class="listnone check-circle">
                                <li>You will need to apply for a visa while you are in India.</li>
                                <li>You are required to have a job offer in the United States.</li>
                                <li>Applicants must have a job and a letter from the employer to apply for
                                    the work category.</li>
                                <li>An I-129 and an I-797 form from your employer are required.</li>
                                <li>The Department of Labor in the United States will require your employer
                                    to have a labor certification approval.</li>
                                <li>Ensure that you fulfill all of the health standards.</li>
                                <li>To apply for a work permit, you must meet the age requirements.</li>
                                <li>You must meet the character requirements before applying.</li>
                                <li>To work in the United States, you need a clean criminal record and a
                                    sincere desire to work there.</li>
                            </ul>
                        </div>
                        <div class="content-area pt-5 pb-5 ps-2 pe-2 bg-light ">
                            <h2 class="text-center">Why choose JDR Migration?</h2>
                            <ul class="listnone check-circle">
                                <li>Because the number of people applying for US Work Permits each year
                                    from all over the globe is so high, it&#39;s critical that you work with a
                                    professional who has a track record of getting their clients&#39; applications
                                    approved.</li>
                                <li>A visa denial due to omissions or errors in your application might be
                                    upsetting after all the time and effort you put into it. JDR Migration helps
                                    you look at your current situation and the opportunities you have.</li>
                                <li>We also help you put together the documents you need for your visa
                                    application so that it gets approved quickly.</li>
                                <li>If you&#39;re ready to start the process of getting a temporary or permanent work
                                    permit in the United States, contact us at JDR Migration to set up an
                                    appointment with one of our immigration specialists.</li>
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