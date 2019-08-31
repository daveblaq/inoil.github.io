<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    
    <!-- Responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Website title -->
    <title>Home || Innoilgroup</title>
    
    <!-- Favicons -->
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
        <!-- Header Area Start -->
        <?php 
        include('includes/nav.php');
       ?>  

          <!-- Free quote section start -->
        <section class="free-quote p-b-100 p-t-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="quote-form">
                            <form id="freeQuoteForm" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-heading">
                                            <h2 class="text-white">Get a free quote</h2>
                                            <span class="divider"></span>
                                        </div>
                                        <div id="msgSubmit" class="alert-danger alert hidden"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Your Name</label>
                                            <input type="text" id="name" name="name" required="required" placeholder="Your Name">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Mobile No.:</label>
                                            <input type="number" id="email" required="required" name="email" placeholder="Your mobile no.">
                                        </p>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <label>Email</label>
                                            <input type="text" id="mobile" name="mobile" placeholder="Your mobile no.">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>From:</label>
                                            <select name="website" class="custom-select" style="height: 50px; width: 350px; color: #000000;">

<option>ABUJA FCT</option>
<option>ABIA</option>
<option>ADAMAWA</option>
<option>AKWA IBOM</option>
<option>ANAMBRA</option>
<option>BAUCHI</option>
<option>BAYELSA</option>
<option>BENUE</option>
<option>BORNO</option>
<option>CROSS RIVER</option>
<option>DELTA</option>
<option>EBONYI</option>
<option>EDO</option>
<option>EKITI</option>
<option>ENUGU</option>
<option>GOMBE</option>
<option>IMO</option>
<option>JIGAWA</option>
<option>KADUNA</option>
<option>KANO</option>
<option>KATSINA</option>
<option>KEBBI</option>
<option>KOGI</option>
<option>KWARA</option>
<option>LAGOS</option>
<option>NASSARAWA</option>
<option>NIGER</option>
<option>OGUN</option>
<option>ONDO</option>
<option>OSUN</option>
<option>OYO</option>
<option>PLATEAU</option>
<option>RIVERS</option>
<option>SOKOTO</option>
<option>TARABA</option>
<option>YOBE</option>
<option>ZAMFARA</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>To:</label>
                                           <select name="website" class="custom-select" style="height: 50px; width: 350px; color: #000000;">

<option>ABUJA FCT</option>
<option>ABIA</option>
<option>ADAMAWA</option>
<option>AKWA IBOM</option>
<option>ANAMBRA</option>
<option>BAUCHI</option>
<option>BAYELSA</option>
<option>BENUE</option>
<option>BORNO</option>
<option>CROSS RIVER</option>
<option>DELTA</option>
<option>EBONYI</option>
<option>EDO</option>
<option>EKITI</option>
<option>ENUGU</option>
<option>GOMBE</option>
<option>IMO</option>
<option>JIGAWA</option>
<option>KADUNA</option>
<option>KANO</option>
<option>KATSINA</option>
<option>KEBBI</option>
<option>KOGI</option>
<option>KWARA</option>
<option>LAGOS</option>
<option>NASSARAWA</option>
<option>NIGER</option>
<option>OGUN</option>
<option>ONDO</option>
<option>OSUN</option>
<option>OYO</option>
<option>PLATEAU</option>
<option>RIVERS</option>
<option>SOKOTO</option>
<option>TARABA</option>
<option>YOBE</option>
<option>ZAMFARA</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label>Have any query? Please write us.</label>
                                            <textarea id="message" name="message" placeholder="Write Your Message Here"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <input type="submit" id="form-submit" value="Send">
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Free quote section end -->         
 <?php
     include('includes/footer.php');

     ?>
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
    
    <!-- Free Quote JS -->
    <script src="assets/js/free-quote-form.js"></script>


    <!-- Custom Js -->
    <script src="assets/js/custom.js"></script>

   
</body>

</html>