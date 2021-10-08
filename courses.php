<?php
include 'partials/db_con.php';
$id=$_GET['id'];
// echo $id;
// if(!isset($_GET['id'])){
//     header('location:index.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head><!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="partials/favicon.png" type="image/x-icon/png" /></head>

<body id="bg">
<div class="page-wraper">
<!-- <div id="loading-icon-bx"></div> -->

    <!-- Header Top ==== -->
	<?php include 'partials/header.php'; ?>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(Adrees/s37.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Our Courses</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="idex.php">Home</a></li>
					<li>Our Courses</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<label>Search Courses</label>
										<input name="dzName" type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">All Courses</h5>
                                <ul>
								<?php
                                    
									$showcat=mysqli_query($con,'SELECT * FROM `course_categories` limit 0, 5');
									while($row_showcat=mysqli_fetch_assoc($showcat)){
										?>
									<li><a href="courses.php?id=<?php echo $row_showcat['course_cat_id'];?>"><?php echo $row_showcat['course_cat_name'];?></a></li>
									<?php } ?>
                                </ul>
                            </div>
							<div class="widget">
								<a href="#"><img src="assets/images/adv/adv.jpg" alt=""/></a>
							</div>
							<div class="widget recent-posts-entry widget-courses">
                                <h5 class="widget-title style-1">Recent Courses</h5>
                                <div class="widget-post-bx">
								<?php
                                $recent_course_res=mysqli_query($con,'SELECT * FROM `course_info` ORDER by course_id DESC LIMIT 3');
while ($recent_course_row=mysqli_fetch_assoc($recent_course_res)){?>
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="Adrees/Courses/<?php echo $recent_course_row['course_img'];?>" width="200" height="143" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="courses-details.php?id=<?php echo $recent_course_row['course_id'];?>"><?php echo $recent_course_row['course_name'];?></a></h6>
                                            </div>
                                            <div class="ttr-post-meta">
                                                <ul>
                                                    <li class="price">
														<del><?php echo $recent_course_row['course_price']."RS";?></del>
														<h5><?php echo (int)($recent_course_row['course_price']-20.3)." RS";?></h5>
													</li>
                                                    <li class="review">03 Review</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><?php }?>
                                    
                                </div>
                            </div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="row">
							<?php
                                     $show_course=mysqli_query($con,'SELECT course_categories.*,course_info.* FROM `course_info` INNER JOIN course_categories on course_info.course_fk=course_categories.course_cat_id WHERE course_info.course_fk='.$id);
									 if(mysqli_num_rows($show_course)>0){
									 while($showcourse_row=mysqli_fetch_assoc($show_course)){
									
										?>
								<div class="col-md-6 col-lg-4 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											<img src="Adrees/Courses/<?php echo $showcourse_row['course_img'];?>" alt="">
											<a href="courses-details.php?id=<?php echo $showcourse_row['course_id'];?>" class="btn">Read More</a>
										</div>
										<div class="info-bx text-center">
											<h5><a href="courses-details.php?id=<?php echo $showcourse_row['course_id'];?>"><?php echo $showcourse_row['course_name'];?></a></h5>
											<span><?php echo $showcourse_row['course_cat_name'];?></span>
										</div>
										<div class="cours-more-info">
											<div class="review">
												<span>3 Review</span>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="price">
											<del><?php echo $showcourse_row['course_price']." RS";?></del>
                                                <h5><?php echo (int)($showcourse_row['course_price']-20.3)." RS";?></h5>
											</div>
										</div>
									</div>
								</div><?php }} else{
									echo "<h3>Comming Soon!</h3>";
								} ?>
								
								<!-- <div class="col-lg-12 m-b20">
									<div class="pagination-bx rounded-sm gray clearfix">
										<ul class="pagination">
											<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
										</ul>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
		
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
	<?php include 'partials/footer.php'; ?>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
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
<script src="assets/js/contact.js"></script>
<!-- <script src='assets/vendors/switcher/switcher.js'></script> -->
</body>

</html>
