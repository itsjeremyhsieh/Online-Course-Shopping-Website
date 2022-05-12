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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <!--additional method - for checkbox .. ,require_from_group method ...-->
    <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>

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
    <script src="assets/js/form.js"></script>


    <script>
        $(document).ready(function($) {
            //for select
            $.validator.addMethod("notEqualsto", function(value, element, arg) {
                return arg != value;
            }, "您尚未選擇!");

            $("#form2").validate({
                submitHandler: function(form) {
                    alert("登入成功！");
                    form.submit();
                },
                rules: {
                    帳號: {
                        required: true,
                        minlength: 6,
                        maxlength: 10
                    },
                    pwd: {
                        required: true,
                        minlength: 6,
                        maxlength: 12
                    }
                },
                messages: {
                    帳號: {
                        required: "帳號為必填欄位",
                        minlength: "帳號最少要6個字",
                        maxlength: "帳號最長10個字"
                    },
                    pwd: {
                        required: "密碼為必填欄位",
                        minlength: "密碼最少要6個字",
                        maxlength: "密碼最長12個字"
                    },
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

                                <h1>會員登入</h1>
                                <ul class="page-breadcrumb">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href="courses.php">會員登入</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div><!-- Page Banner Section End -->


                <!-- Page Section Start -->
                <main>
                    <div class="page-section section section-padding">
                        <div class="container">
                            <div class="row mbn-40">
                                <div class="login-register-form-wrap">
                                    <form action="" method="POST" name="form2" id="form2" class="mb-2">
                                        <div class="row">
                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="會員帳號或電子郵件" name="帳號"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="password" placeholder="密碼" name="pwd"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10">
                                                    <label><input type="checkbox" name="記住我" style="vertical-align: middle;"><span style="vertical-align: middle;">&nbsp;記住我</span></label>
                                                </div>
                                            </div>


                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10">
                                                    <div class="shape-ex1"><input type="submit" value="登入"></div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><a class="form-link" href="forgetpsw.php">忘記帳號/密碼</a> </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><a class="form-link" href="register.php">尚未註冊?</a></div>
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