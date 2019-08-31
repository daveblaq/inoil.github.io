<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    
    <!-- Responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Website title -->
    <title>Contact Us || Innoilgroup</title>
    
 <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/favicon.png">
    <link rel="manifest" href="assets/favicons/manifest.json">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- CSS Skin -->
    <link rel="stylesheet" id="changeStylesheet" href="assets/css/skins/skin-1.css">
</head>
<body id="bg">
    <div class="wrapper">
  <?php  include('includes/nav.php'); ?>        
        
        <!-- Page title section start -->
        <section class="page-title p-t-120 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            <h1>Contact Us</h1>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>/</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->        
        
        <!-- Contact page section start -->
        <section class="contact-us section-light-grey p-t-70 p-b-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="address-block">
                            <div class="address-icon">
                                <i class="fa fa-phone text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Phone</h5>
                                <p>+2348166847595</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="address-block">
                            <div class="address-icon">
                                <i class="fa fa-envelope text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Email</h5>
                                <p>info@innoilgroup.com</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="address-block">
                            <div class="address-icon">
                                <i class="fa fa-home text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Address</h5>
                                <span>Plot 12 ECM Church Road Off KM2 Igbo Etche Road Rumukwurushi, Port Harcourt Nigeria</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-12 col-sm-12">
                        <div class="quote-form m-b-30">
                            <form role="form" id="contactForm" method="POST">
                                <div id="msgSubmit" class="alert-danger alert hidden"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label>Your Name</label>
                                            <input type="text" name="name" id="name" placeholder="Your Name" title="* Please provide your name" required="required">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Email Address</label>
                                            <input type="email" name="email" id="email" placeholder="Your Email Address" title="* Please provide your email address" required="required">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label>Subject</label>
                                            <input type="text" id="subject" placeholder="Subject"  title="* Please provide a subject">
                                        </p>
                                        <p>
                                            <label>Mobile</label>
                                            <input type="text" id="mobile" placeholder="Mobile" title="* Provide your mobile no" required="required">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Your Message</label>
                                            <textarea name="message" id="message" placeholder="Comment" title="* Please type a message"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <input type="submit" id="form-submit" value="Send Message">
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact page section end -->        
        
        <!-- Google map section start -->
        <div id="googleMap"></div>
        <!-- Google map section end -->        


      <?php include('includes/footer.php');  ?>
    </div>

  

    <!-- jQuery library -->
    <script src="assets/js/jquery.min.js"></script>
    
    <!-- Bootstrap core JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <!-- Counterup Js -->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- Isotop Js -->
    <script src='assets/js/jquery.isotope.min.js'></script>
    <script src='assets/js/custom-isotop.js'></script>
    
    <!-- Custom JS -->
    <script src="assets/js/contact-form.js"></script>

    <!-- Style Switcher Js -->
    <script src="assets/js/style-switcher.js"></script>

    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEc9rroRBoy9VvQoLpULpJKhaATYPOFSs&amp;callback=initMap"></script>

    <!-- Google Map Function Js -->
    <script src="assets/js/google-map.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    

</body>


</html>