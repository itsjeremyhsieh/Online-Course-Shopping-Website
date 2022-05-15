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
    </style>

    <style>
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
                姓名: {
                    required: true,
                    minlength: 1,
                    maxlength: 50
                },
                使用者名稱: {
                    required: true,
                    minlength: 1,
                    maxlength: 50
                },
                pwd: {
                    required: true,
                    minlength: 6,
                    maxlength: 12
                },
                pwd2: {
                    required: true,
                    equalTo: "#pwd"
                },
                content: {
                    required: true,

                },
                手機號碼: {
                    length: 10,
                    required: true,

                },
                email: {
                    required: true,

                },
                通訊地址: {
                    required: true,

                },
                公告類型: {
                    required: true
                },
                url: {
                    required: true
                },
                to_1: {
                    require_from_group: [1, ".to_group"]
                },
                to_2: {
                    require_from_group: [1, ".to_group"]
                },
                to_3: {
                    require_from_group: [1, ".to_group"]
                }


            },
            messages: {
                account: {
                    required: "帳號為必填欄位",
                    minlength: "帳號最少要4個字",
                    maxlength: "帳號最長10個字"
                },
                pwd2: {
                    equalTo: "兩次密碼不相符"
                },
                to_1: {
                    require_from_group: ""
                },
                to_2: {
                    require_from_group: ""
                },
                to_3: {
                    require_from_group: "請至少選擇1項"
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

                                    <form action="" method="POST" name="form1" id="form1" class="mb-2">
                                        <div class="row">

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="姓名" name="姓名">
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="使用者名稱"
                                                        name="使用者名稱"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="email" placeholder="電子郵件"
                                                        name="email"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="password" placeholder="密碼"
                                                        name="pwd"></div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="password" placeholder="密碼確認"
                                                        name="pwd2">
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10"><input type="text" placeholder="手機號碼"
                                                        name="手機號碼"></div>
                                            </div>

                                            <div class="row justify-content-center">

                                                <div class="col-4 mb-10">
                                                    &nbsp;&nbsp;性別：
                                                    <select name="gender" class="dropdown" id="" style="width: 85%;">
                                                        <option value="" disabled selected>請選擇</option>
                                                        <option>男性</option>
                                                        <option>女性</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center ">
                                                <div class="col-4 mb-10">
                                                    &nbsp;&nbsp;<label for="">生日：</label>

                                                    <select name="birthday" class="dropdown" id="" style="width: 30%;">

                                                        <?php for ($i = 1; $i <= 100; $i++)
                                                                {
                                                                    $date = date("Y") - $i;
                                                                    echo "<option value='$date'>" . $date . "</option>";
                                                                }
                                                                ?>
                                                    </select>

                                                    <select name="birthday" class="dropdown" style="width: 28%;">
                                                        <?php for ($i = 1; $i <= 12; $i++)
                                                                {
                                                                $month =  $i;
                                                                echo "<option value='$month'>" . $month . "</option>";
                                                                }
                                                                ?>
                                                    </select>

                                                    <select name="birthday" class="dropdown" style="width: 25%;">
                                                        <?php for ($i = 1; $i <= 31; $i++)
                                                                {
                                                                $day = $i;
                                                                echo "<option value='$day'>" . $day . "</option>";
                                                                }
                                                                ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center ">
                                                <div class="col-4 mb-10">
                                                    &nbsp;&nbsp;<label for="">地址：</label>

                                                    <select name="address" class="dropdown" id=""
                                                        style="position: relative; width: 42%;">

                                                        <option value="" disabled selected>縣市</option>
                                                        <option>基隆市</option>
                                                        <option>台北市</option>
                                                        <option>新北市</option>
                                                        <option>宜蘭縣</option>
                                                        <option>桃園市</option>
                                                        <option>新竹市</option>
                                                        <option>新竹縣</option>
                                                        <option>苗栗縣</option>
                                                        <option>台中市</option>
                                                        <option>彰化縣</option>
                                                        <option>南投縣</option>
                                                        <option>雲林縣</option>
                                                        <option>嘉義市</option>
                                                        <option>嘉義縣</option>
                                                        <option>台南市</option>
                                                        <option>屏東縣</option>
                                                        <option>花蓮縣</option>
                                                        <option>台東縣</option>
                                                        <option>澎湖縣</option>
                                                        <option>連江縣</option>
                                                        <option>金門縣</option>
                                                    </select>

                                                   
                                                    <input type="text" placeholder="通訊地址"
                                                        style="position: relative ;top:3px;" name="通訊地址">
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-4 mb-10">
                                                    <div class="shape-ex1"><input type="submit" value="註冊會員"
                                                            style="position: relative;top:5px;">
                                                    </div>
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