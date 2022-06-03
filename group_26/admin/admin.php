<?php
session_start();
if (!isset($_SESSION['userid']))
    header("Location: ../login.php");
if (isset($_SESSION['userid'])) {


    $link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

    if (!$link) {
        echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
        echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
        exit();
    }
    $sql = "SELECT * FROM member WHERE username = '" . $_SESSION['userid'] . "'";
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

    if ($result = mysqli_query($link, $sql)) {

        while ($row = mysqli_fetch_assoc($result)) {
            if($row['level'] != 4)
            header("Location: ../logout.php");
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">




    <!-- Bootstrap Css -->
    <link href="public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <?php include "adminheader.php"; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">儀錶板</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                                    <li class="breadcrumb-item active">儀錶板</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <?php include "adminfooter.php"; ?>
                <!-- JAVASCRIPT -->
                <script src="public/assets/libs/jquery/jquery.min.js"></script>
                <script src="public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="public/assets/libs/metismenu/metisMenu.min.js"></script>
                <script src="public/assets/libs/simplebar/simplebar.min.js"></script>
                <script src="public/assets/libs/node-waves/waves.min.js"></script>
                <script src="public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
                <script src="public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>


                <!-- apexcharts -->
                <script src="public/assets/libs/apexcharts/apexcharts.min.js"></script>

                <script src="public/assets/js/pages/dashboard.init.js"></script>



                <script src="public/assets/js/app.js"></script>


</body>

</html>