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
    <style>
        .service-block-inner {
            padding: 15px 20px;
            position: relative;
            margin-bottom: 30px;
            height: 180px;
        }

        .service-block-inner::before {
            content: "";
            width: 5px;
            height: 100%;
            border-radius: 0px;
            background: #a1d0ec;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .service-block-inner::after {
            content: "";
            width: 5px;
            height: 0;
            border-radius: 0px;
            background: #579187;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .service-block-inner h3 {
            font-size: 24px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .service-block-inner p {
            margin: 0px;
            font-size: 16px;
            font-weight: 300;
            padding-bottom: 0px;
        }

        .service-block-inner h4 {
            margin: 0px;
            font-size: 17px;
            font-weight: 1000;
            padding-bottom: 0px;
            text-transform: uppercase;
            text-align: left;
        }

        .service-block-inner:hover::after {
            height: 100%;
        }

        th {
            border: 1px solid black;
            background-color: #cccccc;
            text-align: center;
        }

        td {
            border: 1px solid black;
            text-align: center;
        }

        table {
            width: 100%;

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
                    first_name: {
                        required: true,
                        minlength: 1,
                        maxlength: 50
                    },
                    display_name: {
                        required: true,
                        minlength: 1,
                        maxlength: 50
                    },
                    pwd: {
                        required: true,
                        minlength: 6,
                        maxlength: 12
                    },
                    new_pwd: {
                        required: true,
                        minlength: 6,
                        maxlength: 12
                    },
                    new_pwd2: {
                        required: true,
                        equalTo: "#pwd"
                    },
                    address: {
                        required: true,
    
                    },
                    phone: {
                        length: 10,
                        required: true,
    
                    },
                    email: {
                        required: true,
                    }
    
                },
                messages: {
                    first_name: {
                        required: "姓名為必填欄位",
                        minlength: "姓名最少要4個字",
                        maxlength: "姓名最長10個字"
                    },
                    display_name: {
                        required: "帳號為必填欄位",
                        minlength: "帳號最少要4個字",
                        maxlength: "帳號最長10個字"
                    },
                    phone: {
                        required: "此為必填欄位",
                    },
                    address: {
                        required: "此為必填欄位",
                    },
                    pwd: {
                        required: "此為必填欄位",
                    },
                    new_pwd: {
                        required: "此為必填欄位",
                    },
                    new_pwd2: {
                        equalTo: "兩次密碼不相符"
                    },
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

                        <h1>我的帳號</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="my-account.php">我的帳號</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section section-padding">
            <div class="container">
                <div class="row mbn-30">

                    <div class="col-lg-3 col-12 mb-30">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="my-account.php"><i class="fa fa-dashboard"></i>會員資訊</a>

                            <a href="order.php"><i class="fa fa-cart-arrow-down"></i> 訂單管理</a>

                            <a href="download.php"><i class="fa fa-cloud-download"></i> 下載資訊</a>

                            <a href="payment-method.php"><i class="fa fa-credit-card"></i> 付款方式</a>

                            <a href="address-edit.php"><i class="fa fa-map-marker"></i> 帳單地址</a>

                            <a href="account.php" class="active"><i class="fa fa-user"></i> 帳號管理</a>

                            <a href="login.php"><i class="fa fa-sign-out"></i> 登出</a>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12 mb-30">
                        <h3>帳號管理</h3>
                        <div class="account-details-form">
                            <form action="" method="POST" name="form1" id="form1" class="mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input id="first_name" name="first_name" required="required" placeholder="姓名" type="text">
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="display_name" name="display_name" required="required" placeholder="使用者名稱" type="text">
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="email" name="email" required="required" placeholder="電子郵件" type="email">
                                    </div>

                                    <div class="col-12 mb-30">
                                        &nbsp;&nbsp;性別：
                                        <select name="gender" class="dropdown" id="" style="width: 85%;">
                                            <option value="" disabled selected>請選擇</option>
                                            <option>男性</option>
                                            <option>女性</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="phone" name="phone" required="required" placeholder="手機號碼" type="text">
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="address" name="address" required="required" placeholder="通訊地址" type="text">
                                    </div>

                                    <div class="col-12 mb-30">
                                        <h4>更改密碼</h4>
                                    </div>

                                    <div class="col-12 mb-30">
                                        <input id="current-pwd"  name="pwd" required="required" placeholder="請輸入目前密碼" type="password">
                                    </div>

                                    <div class="col-lg-6 col-12 mb-30">
                                        <input id="new_pwd" name="new_pwd" required="required" placeholder="請輸入新密碼" type="password">
                                    </div>

                                    <div class="col-lg-6 col-12 mb-30">
                                        <input id="new_pwd2" name="new_pwd2" required="required" placeholder="請再次輸入新密碼" type="password">
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="儲存變更" class="btn btn-dark btn-round btn-lg">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Page Section End -->

        <!-- Brand Section Start -->
        <div class="brand-section section section-padding pt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="brand-slider">


                    </div>
                </div>
            </div>
        </div><!-- Brand Section End -->

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