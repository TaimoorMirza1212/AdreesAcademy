<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<!-- admin\admin_partials -->

<head>
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon/png" />
    <!-- fontawsome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>


</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">
    <!-- header start -->
    <?php include 'admin_partials/header.php'; ?>
    <!-- header end -->

      <!--left sidebar start -->
      <?php include 'admin_partials/left-sidebar.php';?>
    <!-- left sidebar end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Mailbox</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Mailbox</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="email-wrapper">
                            <div class="email-menu-bar">
                                <div class="compose-mail">
                                    <a href="mailbox-compose.html" class="btn btn-block">Compose</a>
                                </div>
                                <div class="email-menu-bar-inner">
                                    <ul>
                                        <li class="active"><a href="mailbox.php"><i class="fa fa-envelope-o"></i>Inbox <span class="badge badge-success">8</span></a></li>
                                        <li><a href="mailbox.php"><i class="fa fa-send-o"></i>Sent</a></li>
                                        <li><a href="mailbox.php"><i class="fa fa-file-text-o"></i>Drafts <span class="badge badge-warning">8</span></a></li>
                                        <li><a href="mailbox.php"><i class="fa fa-cloud-upload"></i>Outbox <span class="badge badge-danger">8</span></a></li>
                                        <li><a href="mailbox.php"><i class="fa fa-trash-o"></i>Trash</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mail-list-container">
                                <div class="mail-toolbar">
                                    <div class="check-all">
                                        <div class="custom-control custom-checkbox checkbox-st1">
                                            <input type="checkbox" class="custom-control-input" id="check1">
                                            <label class="custom-control-label" for="check1"></label>
                                        </div>
                                    </div>
                                    <div class="mail-search-bar">
                                        <input type="text" class="form-control" placeholder="Search" />
                                    </div>
                                    <div class="dropdown all-msg-toolbar">
                                        <span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                            <li><a href="#"><i class="fa fa-arrow-down"></i> Archive</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> Snooze</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-open"></i> Mark as unread</a></li>
                                        </ul>
                                    </div>
                                    <div class="next-prev-btn">
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <?php include "../partials/db_con.php";

                                $getmail = mysqli_query($con, "SELECT * FROM `contact_us` order by co_id desc");
                                while ($row = mysqli_fetch_assoc($getmail)) {
                                ?>

                                    <div class="mail-box-list">
                                        <div class="mail-list-info">
                                            <div class="checkbox-list">
                                                <div class="custom-control custom-checkbox checkbox-st1">
                                                    <input type="checkbox" class="custom-control-input" id="check2">
                                                    <label class="custom-control-label" for="check2"></label>
                                                </div>
                                            </div>
                                            <div class="mail-rateing">
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="mail-list-title">
                                                <h6><?php echo $row['co_name']; ?></h6>
                                            </div>
                                            <div class="mail-list-title-info">
                                                <p><?php echo substr($row['co_message'], 0, 80); ?></p>
                                            </div>
                                            <div class="mail-list-time">
                                                <span><?php echo substr($row['co_added'], 0, 10); ?></span>
                                            </div>
                                            <ul class="mailbox-toolbar">

                                                <li data-toggle="tooltip" title="Replay"><a href="replay.php?id=<?php echo $row['co_id']; ?>">
                                                        <i class="fa fa-reply text-dark"></i></a></li>
                                                <li data-toggle="tooltip" title="Delete"><a href="replay.php?id=<?php echo $row['co_id']; ?>"><i class="fa fa-trash-o text-dark"></i></a></li>
                                                <li data-toggle="tooltip" title="Archive"><a href="replay.php?id=<?php echo $row['co_id']; ?>"><i class="fa fa-arrow-down text-dark"></i></a></li>
                                                <li data-toggle="tooltip" title="Snooze"><a href="replay.php?id=<?php echo $row['co_id']; ?>"><i class="fa fa-clock-o text-dark"></i></a></li>
                                                <li data-toggle="tooltip" title="Mark as unread"><a href="replay.php?id=<?php echo $row['co_id']; ?>"><i class="fa fa-envelope-open text-dark"></i></a></li>
                                            </ul>
                                        </div>


                                    </div><?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

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
    <script src='assets/vendors/scroll/scrollbar.min.js'></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/vendors/chart/chart.min.js"></script>
    <script src="assets/js/admin.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/mailbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->

</html>