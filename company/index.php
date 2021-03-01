<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:admin/index.php?lmsg=true');
    exit;
}

require_once('../inc/config.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMV Admin : Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/own.css" rel="stylesheet">
</head>

<body class="sidebar-hide">

    <?php require_once('../layouts/sidebar.php');

    ?>

    <?php require_once('../layouts/header.php'); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Horizontal Form</h4>
                            <div class="card-header-right-icon">
                                <ul>
                                    <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="horizontal-form">
                                <form class="form-horizontal" method='POST' role='form' action='co_add.php'>
                                    <input type='hidden' name='in_Id' id='in_Id' class='form-control' type='text'>


                                    <div class='form-group'>
                                        <label for='in_CpName' class="col-sm-2 control-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input name='in_CpName' id='in_CpName' class='form-control' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label for='in_CompanyDetails' class="col-sm-2 control-label">Company Details</label>
                                        <div class="col-sm-10">
                                            <input name='in_CompanyDetails' id='in_CompanyDetails' class='form-control' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-group'>
                                        <label for='in_CanNumbder' class="col-sm-2 control-label">Can Numbder</label>
                                        <div class="col-sm-10">
                                            <textarea name='in_CanNumbder' id='in_CanNumbder' class='form-control' type='text' rows='5'></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" value="Register" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# main content -->


                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Student Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="user-profile m-t-15">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="user-photo m-b-30">
                                            <img class="img-responsive" src="../assets/images/user-profile.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="user-profile-name">Mr. Ajay</div>
                                        <div class="custom-tab user-profile-tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="1">
                                                    <div class="contact-information">
                                                        <div class="phone-content">
                                                            <span class="contact-title">Name:</span>
                                                            <span class="phone-number">Mr. Ajay</span>
                                                        </div>
                                                        <div class="website-content">
                                                            <span class="contact-title">Class:</span>
                                                            <span class="contact-website">3</span>
                                                        </div>
                                                        <div class="skype-content">
                                                            <span class="contact-title">Section:</span>
                                                            <span class="contact-skype">A</span>
                                                        </div>
                                                        <div class="address-content">
                                                            <span class="contact-title">Roll:</span>
                                                            <span class="mail-address">#2909</span>
                                                        </div>


                                                        <div class="address-content">
                                                            <span class="contact-title">Address:</span>
                                                            <span class="mail-address">ST-Canada</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# container-fluid -->

                <div class="col-lg-12">
                    <div class="card alert">
                        <div class="order-list-item">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Order ID</th>
                                        <th>Menu Name</th>
                                        <th>Price</th>
                                        <th>Rating</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include_once("config.php");

                                    $result = $dbConn->query("select * from students where apply like '%Athul%'");
                                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                                        echo '<tr>';
                                        echo '<td>' . $row['name'] . '</td>';
                                        echo '<td>' . $row['email'] . '</td>';
                                        echo '<td>' . $row['phone'] . '</td>';
                                        echo '<td>' . $row['bio'] . '</td>';
                                        echo '<td>' . $row['cv'] . '</td>';
                                        echo '<td>' . $row['apply'] . '</td>';
                                        echo '<td><button type="button" class="btn btn-success btn-rounded">Check</button></td>
                                            </tr>';
                                    }
                                    ?>









                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
            </div>
            <!-- /# main -->
        </div>
        <!-- /# content wrap -->



        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- jquery vendor -->
        <script src="../assets/js/lib/jquery.min.js"></script>
        <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="../assets/js/lib/menubar/sidebar.js"></script>
        <script src="../assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="../assets/js/lib/bootstrap.min.js"></script>
        <!-- bootstrap -->
        <script src="../assets/js/lib/mmc-common.js"></script>
        <script src="../assets/js/lib/mmc-chat.js"></script>
        <!--  Chart js -->
        <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="../assets/js/lib/chart-js/chartjs-init.js"></script>
        <!-- // Chart js -->

        <!--  Datamap -->
        <script src="../assets/js/lib/datamap/d3.min.js"></script>
        <script src="../assets/js/lib/datamap/topojson.js"></script>
        <script src="../assets/js/lib/datamap/datamaps.world.min.js"></script>
        <script src="../assets/js/lib/datamap/datamap-init.js"></script>
        <!-- // Datamap -->
        <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="../assets/js/lib/weather/weather-init.js"></script>
        <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="../assets/js/scripts.js"></script>
        <!-- scripit init-->
</body>

</html>