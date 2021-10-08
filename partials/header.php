<?php
include 'partials/db_con.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="Adrees Academy : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="Adrees Academy : Education HTML Template" />
    <meta property="og:description" content="Adrees Academy : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    


    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/1.png" /> -->

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Adrees Academy1</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
    <!-- REVOLUTION SLIDER END -->
    <style>
/* top-bar */
.header {
    background:rgba(2, 0, 11, 0.6)!important;
}

        /* Slider */
        div#slide-100-layer-1,div#slide-200-layer-1 {
            background:rgba(2, 0, 11, 0.4)!important;
        }
        /* services */
        .service-bx .action-box img{
            height:15rem;
            width:100%;
            margin:0 auto;
        }
/* popular courses */
.item .cours-bx .action-box img{
    height:10rem;
            width:100%;
            margin:0 auto;
}
/* event images */
.event-bx .action-box img{
    height:15rem;
            width:100%;
            margin:0 auto;
}
.blog-post.blog-md.clearfix .ttr-post-media img{
    height:15rem;
            width:100%;
            margin:0 auto;
}
/* testimonial img */
.testimonial-thumb img{
    height: 80px!important;
    width:100%;
    margin:0 auto;
    border-radius:50%;
}


    </style>
</head>
<body>
        <!-- Header Top ==== -->
        <header class="header rs-nav header-transparent">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="faq-1.php"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                                <!-- <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li> -->
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li>
                                    <!-- <select class="header-lang-bx">
									<option data-icon="flag flag-uk">English UK</option>
									<option data-icon="flag flag-us">English US</option>
								</select> -->
                                </li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="index.php"><img src="assets/images/1.png" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="https://www.facebook.com/siradrees" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="index.php"><img src="assets/images/1.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"  > <a href="index.php" class="no-drop-down" >Home</a></li>

                                <li><a href="about-1.php" class="no-drop-down">About</i></a>
                                </li>

                                <!-- <li><a href="javascript:;">FAQ's</a>
                                            <ul class="sub-menu">
                                                <li><a href="faq-1.php">FAQ's 1</a></li>
                                                <li><a href="faq-2.php">FAQ's 2</a></li>
                                            </ul>
                                        </li> -->
                                <li>
                                    <a href="contact-1.php" class="no-drop-down">Contact Us</a>
                                </li>
                                <!-- <ul class="sub-menu">
                                                <li><a href="contact-1.php">Contact Us 1</a></li>
                                                <li><a href="contact-2.php">Contact Us 2</a></li>
                                            </ul> -->
                                <!-- </li>
                                        <li><a href="portfolio.php">Portfolio</a></li>
                                        <li><a href="profile.php">Profile</a></li>
                                        <li><a href="membership.php">Membership</a></li>
                                        <li><a href="error-404.php">404 Page</a></li>
                                    </ul> -->

                                <li class="add-mega-menu onmenu"><a >Our Courses </a>
                                <ul class="sub-menu add-menu">
									<li class="add-menu-left">
										<h5 class="menu-adv-title">Our Courses</h5>
										<ul>
                                        <?php
                                    
	                                    $res1=mysqli_query($con,'SELECT * FROM `course_categories` limit 0, 5');
	                                    while($row=mysqli_fetch_assoc($res1)){
                                            ?>
                                        <li><a href="courses.php?id=<?php echo $row['course_cat_id'];?>"><?php echo $row['course_cat_name'];?></a></li>
                                        <?php } ?>
                                   
                                    
										</ul>

									</li>
									<li class="add-menu-right">
										<img src="assets/images/adv/adv.jpg" alt=""/>
                                        <ul>
                                        <?php
                                    
	                                    $res1=mysqli_query($con,'SELECT * FROM `course_categories` limit 5, 5');
	                                    while($row=mysqli_fetch_assoc($res1)){
                                            ?>
                                        <li><a href="courses.php?id=<?php echo $row['course_cat_id'];?>"><?php echo $row['course_cat_name'];?></a></li>
                                        <?php } ?>
										</ul>
									</li>
								</ul>         
                            </li>
                                <li class="onmenu"><a href="javascript:;">Blog </a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-sidebar.php">Technology Blog</a></li>
                                        <li><a href="blog-list-sidebar.php">Security Sidebar</a></li>
                                        <li><a href="blog-list-sidebar.php">Blog List Sidebar</a></li>
                                        <li><a href="blog-list-sidebar.php">Blog Standard Sidebar</a></li>
                                        <li><a href="blog-list-sidebar.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="commingsoon.php">Donate</a>
                                </li>
                                <li>
                                    <a href="commingsoon.php">Gallery</a>
                                </li>
                                <!-- <li class="nav-dashboard"><a href="javascript:;">Dashboard </a>
                                    <ul class="sub-menu">
                                        <li><a href="admin/index.php">Dashboard</a></li>
                                        <li><a href="admin/add-listing.php">Add Listing</a></li>
                                        <li><a href="admin/bookmark.php">Bookmark</a></li>
                                        <li><a href="admin/courses.php">Courses</a></li>
                                        <li><a href="admin/review.php">Review</a></li>
                                        <li><a href="admin/teacher-profile.php">Teacher Profile</a></li>
                                        <li><a href="admin/user-profile.php">User Profile</a></li>
                                        <li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="admin/basic-calendar.php">Basic Calendar</a></li>
                                                <li><a href="admin/list-view-calendar.php">List View Calendar</a></li>
                                            </ul>
                                        </li> -->

                            </ul>
                            </li>
                            </ul>
                            <div class="nav-social-link">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->
        
<!-- Loader -->
        <!-- <div id="loading-icon-bx"></div> -->
</body>
</html>