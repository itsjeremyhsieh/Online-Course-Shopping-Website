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
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    
    <style>
        .loginwrapper {
            margin: auto;
        }

        .remember {
            position: relative;
            width: 42%;
        }

        .length {
            width: 100px;

        }

        textarea {
            overflow-y: scroll;
            height: 100px;
            width: 380px;
            resize: none;
            /* Remove this if you want the user to resize the textarea */
        }

        body {
            background-color: #F7F7F7;
        }

        .c_title {
            background-color: #E6E6E6;
            margin-top: 3px;
            padding-top: 5px;
            padding-bottom: 3px;
            padding-left: 5px;
            font-size: 11pt;
            color: #990033;
        }

        .c_content {
            background-color: #FFFFFF;
            margin-top: 3px;
            padding-top: 5px;
            padding-bottom: 3px;
            padding-left: 5px;
            font-size: 11pt;
            color: blue;
        }

        .c_button {
            background: #e3e3db;
            font-size: 16px;
            color: #6633FF;
            padding: 6px 14px;
            border-width: 2px;
            border-style: solid;
            border-color: #fff #d8d8d0 #d8d8d0 #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
        }

        #message {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
        }

        .error {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
        }
    </style>


    <script>
        $(document).ready(function($) {
          
            $("#regform").validate({
                submitHandler: function(form) {

                    form.submit();
                },
                rules: {
                    name: {
                        required: true,
                        minlength: 1,
                        maxlength: 50
                    },
                    username: {
                        required: true,
                        minlength: 1,
                        maxlength: 50
                    },
                    pwd: {
                        required: true,
                        minlength: 6

                    },
                    pwd2: {
                        required: true,
                        equalTo: "#pwd"
                    },

                    phone: {
                        length: 10,
                        required: true,

                    },
                    gender: {
                        required: true,
                    },
                    bday: {
                        required: true,
                    },
                    email: {
                        required: true,

                    },
                    address: {
                        required: true,
                    },
                },
                messages: {
                    username: {
                        required: "帳號為必填欄位",
                        minlength: "帳號最少要4個字",
                        maxlength: "帳號最長10個字"
                    },

                    pwd: {
                        required: "密碼為必填欄位",
                        minlength: "密碼最少要6個字",

                    },
                    pwd2: {
                        equalTo: "兩次密碼不相符"
                    },

                }
            });
        });
  
        $(function() { //網頁完成後才會載入
            $('#username').keyup(function() {
                $.ajax({
                    url: "checkaccount.php",
                    data: $('#sentToBack').serialize(),
                    type: "POST",
                    dataType: 'text',
                    success: function(msg) {
                        $("#show_msg").html(msg); //顯示訊息
                        //document.getElementById('show_msg').innerHTML= msg ;
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
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

                                <h1>註冊會員</h1>
                                <ul class="page-breadcrumb">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href="courses.php">註冊會員</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Banner Section End -->

                <!-- Page Section Start -->
                <main>
                    <div class="loginsection">
                        <div class="container">
                            <div class="row mbn-40">

                                <div class="login-register-form-wrap">

                                    <form action="addmember.php" method="POST" name="regform" id="regform" class="mb-2">
                                        <div class="row">

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="姓名" name="name">
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="使用者名稱" name="username" id="username"></div>
                                                <span id='show_msg' style="color:red"></span>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="email" placeholder="電子郵件" name="email" id="email"> </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="password" placeholder="密碼" name="pwd" id="pwd"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="password" placeholder="密碼確認" name="pwd2" id="pwd2">
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="手機號碼" name="phone" id="phone"></div>
                                            </div>

                                            <div class="row justify-content-center">

                                                <div class="col-4 mb-10">

                                                    <select name="gender" class="dropdown" id="gender" style="width: 100%;">
                                                        <option value="" disabled selected>性別</option>
                                                        <option value="1">男性</option>
                                                        <option value="0">女性</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center ">
                                                <div class="col-4 mb-10">
                                                    &nbsp;&nbsp;<label for="">生日：</label>
                                                    <input type="date" id="bday" name="bday">

                                                </div>
                                            </div>

                                            <div class="row justify-content-center ">
                                                <div class="col-4 mb-10">


                                                    <input type="text" placeholder="通訊地址" style="position: relative ;top:3px;" name="address" id="address">
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10">
                                                    <div class="shape-ex1"><input type="submit" value="註冊會員" style="position: relative;top:5px;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                    <!--<center>訊息：<span id='show_msg' style="color:red"></span></center>-->
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


</html>