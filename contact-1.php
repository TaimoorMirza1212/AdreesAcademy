


<!DOCTYPE html>
<html lang="en">

<head><!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="partials/favicon.png" type="image/x-icon/png" /></head>
<body id="bg">
    <div class="page-wraper">
        <!-- <div id="loading-icon-bx"></div> -->

        <!-- Header Top ==== -->
        <?php include 'partials/header.php' ?>
        <!-- Header Top END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(Adrees/s27.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Contact Us </h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row"  id="main_contact">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->

            <!-- inner page banner -->
            <div class="page-banner contact-page section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 m-b30">
                            <div class="bg-primary text-white contact-info-bx">
                                <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="widget widget_getintuch">
                                    <ul>
                                        <li><i class="ti-location-pin"></i>75k Newcastle St. Ponte Vedra Beach, FL 309382 New York</li>
                                        <li><i class="ti-mobile"></i>0800-123456 (24/7 Support Line)</li>
                                        <li><i class="ti-email"></i>info@example.com</li>
                                    </ul>
                                </div>
                                <h5 class="m-t0 m-b20">Follow Us</h5>
                                <ul class="list-inline contact-social-bx">
                                    <li><a href="https://www.facebook.com/siradrees" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <form class="contact-bx ajax-form" action="contact_submit.php" method="POST"> 
                                <div class="ajax-message"></div>
                                <div class="heading-bx left">
                                    <h2 class="title-head">Get In <span>Touch</span></h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                </div>
                                <div class="row placeani">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Name</label>
                                                <input name="name" type="text" required class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Email Address</label>
                                                <input name="email" type="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Phone</label>
                                                <input name="phone" type="text" required class="form-control int-value">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Subject</label>
                                                <input name="subject" type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Type Message</label>
                                                <textarea name="message" rows="4" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <button name="send_message" type="submit"  class="btn button-md"> Send Message</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
        </div>
        <!-- Content END-->
        <!-- Footer ==== -->
        <?php include "partials/footer.php"?>
        <!-- Footer END ==== -->
        <!-- scroll top button -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>
    <!-- External JavaScripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendors/counter/waypoints-min.js"></script>
    <script src="assets/vendors/counter/counterup.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendors/masonry/masonry.js"></script>
    <script src="assets/vendors/masonry/filter.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/functions.js"></script>
    <!-- <script src="assets/js/contact.js"></script> -->
    <!-- <script src='assets/vendors/switcher/switcher.js'></script> -->
    <script src='../../www.google.com/recaptcha/api.js'></script>
</body>


</html>