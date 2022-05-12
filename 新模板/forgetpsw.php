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


    <script>
        $(document).ready(function($) {
            //for select
            $.validator.addMethod("notEqualsto", function(value, element, arg) {
                return arg != value;
            }, "您尚未選擇!");

            $("#form1").validate({
                submitHandler: function(form) {
                    alert("註冊成功！");
                    form.submit();
                },
                rules: {
                    password: {
                        required: true,
                    }
                },
                password: {

                }
            });
        });
    </script>
</head>

<body>
    <div class="dui-container">
        <header>
            <div class="main-wrapper">

                <?php include "header.php" ?>
                <!-- Page Banner Section Start -->
                <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="page-banner-content col">

                                <h1>忘記密碼</h1>
                                <ul class="page-breadcrumb">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href="courses.php">忘記密碼</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div><!-- Page Banner Section End -->


                <!-- Page Section Start -->
                <main>
                    <div class="loginsection">
                        <div class="container">
                            <div class="row mbn-40">
                                <div class="login-register-form-wrap">
                                    <form action="" method="POST" name="form1" id="form1" class="mb-2"></form>
                                    <div class="row">
                                        <div class="row justify-content-center">
                                            <div class="col-4 mb-10"><input type="password" name="password" placeholder="會員帳號或電子郵件"></div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-4 mb-10">
                                                <div class="shape-ex1"><input type="submit" value="傳送確認電子信件" style="position: relative;top: 50px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Page Section End -->
                <!-- Brand Section Start -->
                <div class="brand-section section section-padding pt-0">
                    <div class="container-fluid">
                        <div class="row">

                        </div>
                    </div>
                </div><!-- Brand Section End -->
                <?php include "footer.php" ?>
            </div>
</body>
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