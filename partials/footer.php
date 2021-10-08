<footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                                <a href="index.php" id="f_logo"><img src="assets/images/1.png" style="height:5rem;" alt="" /></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="login.php" class="btn ">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title">Sign Up For A Newsletter</h5>
                                <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                                <div class="subscribe-form m-b20">
                                    <form class="subscription-form" action="http://Adrees Academy.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                                        <div class="ajax-message"></div>
                                        <div class="input-group">
                                            <input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
                                            <span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Company</h5>
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about-1.php">About</a></li>
                                            <li><a href="faq-1.php">FAQs</a></li>
                                            <li><a href="contact-1.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Get In Touch</h5>
                                        <ul>
                                            <li><a href="http://Adrees Academy.themetrades.com/admin/index.php">Dashboard</a></li>
                                            <li><a href="blog-list-sidebar.php">Blog</a></li>
                                            <li><a href="portfolio.php">Portfolio</a></li>
                                            <li><a href="event.php">Event</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Courses</h5>
                                        <ul>
                                        <?php
                                    
                                    $res1=mysqli_query($con,'SELECT * FROM `course_categories` limit 5, 4');
                                    while($row=mysqli_fetch_assoc($res1)){
                                        ?>
                                    <li><a href="courses.php?id=<?php echo $row['course_cat_id'];?>"><?php echo $row['course_cat_name'];?></a></li>
                                    <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Our Gallery</h5>
                                <ul class="magnific-image">
                                    <li>
                                        <a href="Adrees/s5.jpg" class="magnific-anchor"><img src="Adrees/s5.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s6.jpg" class="magnific-anchor"><img src="Adrees/s6.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s7.jpg" class="magnific-anchor"><img src="Adrees/s7.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s8.jpg" class="magnific-anchor"><img src="Adrees/s8.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s9.jpg" class="magnific-anchor"><img src="Adrees/s9.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s10.jpg" class="magnific-anchor"><img src="Adrees/s10.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s11.jpg" class="magnific-anchor"><img src="Adrees/s11.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                    <li>
                                        <a href="Adrees/s12.jpg" class="magnific-anchor"><img src="Adrees/s12.jpg" alt="" style="height: 4.2rem;"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">HBS</a></div>
                    </div>
                </div>
            </div>
        </footer>