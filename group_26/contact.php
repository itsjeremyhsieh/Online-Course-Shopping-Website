<?php
session_start();

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26') // 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");


if ($result = mysqli_query($link, "SELECT * FROM message ORDER BY id DESC")) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        if ($count == 13)
            break;

        $allmsg .= "<li class='left clearfix'><span class='chat-img pull-left'><img src='https://bootdey.com/img/Content/user_3.jpg' alt='User Avatar'></span><div class='chat-body clearfix'><div class='header'> <strong class='primary-font'>" .
            $row['name'] . "</strong></div><p>" . $row['message'] . "</p></div></li>";

        $count = $count + 1;
    }
    $num = mysqli_num_rows($result);
    mysqli_free_result($result);
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CourseLux</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <!--additional method - for checkbox .. ,require_from_group method ...-->
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <!--中文錯誤訊息-->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>

    <script>
        $(document).ready(function($) {
            $("#form3").validate({
                submitHandler: function(form) {
                    form.submit();
                },
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,

                    },
                    message: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "姓名為必填欄位"

                    },
                    email: {
                        required: "電子信箱為必填欄位",

                    },
                    message: {
                        required: "訊息為必填欄位",
                    }
                }
            });
        });
    </script>
</head>

<body>

    <div class="main-wrapper">
        <?php include "header.php" ?>
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>關於我們</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="contact.php">關於我們</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section section-padding">
            <div class="container">

                <div class="row row-30 mbn-40">

                    <div class="contact-info-wrap col-md-6 col-12 mb-40">
                        <h3>留言板</h3>
                        <div id="BoxText2">
                            <ul class="chat">
                                <?php echo $allmsg; ?>


                            </ul>
                        </div>
                    </div>

                    <div class="contact-form-wrap col-md-6 col-12 mb-40">
                        <h3>留言</h3>
                        <form id="form3" action="addmessage.php" method="post">
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30"><input type="text" name="name" placeholder="姓名"></div>
                                    <div class="col-lg-6 col-12 mb-30"><input type="email" name="email" placeholder="電子郵件"></div>
                                    <div class="col-12 mb-30"><textarea name="message" placeholder="訊息"></textarea></div>
                                    <div class="col-12"><input type="submit" value="傳送"></div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div><!-- Page Section End -->

        <!-- Page Section Start -->


        <div class="container">
            <div class="row row-30 mbn-40">

                <div class="contact-info-wrap ">

                    <h3>關於我們</h3>
                    <div class="contact-center">
                        <p style="width:50%;">Jadusona is the best theme for elit, sed do eiusmod tempor dolor sit ame tse ctetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam,</p>
                    </div>

                    <ul class="contact-info">
                        <li>
                            <div class="contact-icon-1">
                                <i class="fa fa-map-marker"></i>
                                <p>256, 1st AVE, You address <br>will be here</p>
                            </div>

                        </li>
                        <li>
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                                <p><a href="#">+01 235 567 89</a><a href="#">+01 235 286 65</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon">
                                <i class="fa fa-globe"></i>
                                <p><a href="#">info@example.com</a><a href="#">www.example.com</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="contact-icon">
                                <i class=""></i>
                                <p><a href="#"></a><a href="#"></a></p>
                            </div>
                        </li>

                        <li>
                            <div class="contact-icon">
                                <i class=""></i>
                                <p><a href="#"></a><a href="#"></a></p>
                            </div>
                        </li>


                    </ul>

                </div>


            </div>
        </div>


        <!-- Page Section End -->

        <!-- Brand Section Start -->

        <div class="brand-section section section-padding pt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="brand-slider">

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-1.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-2.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-3.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-4.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-5.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-6.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Section End -->

        <?php include "footer.php" ?>

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>