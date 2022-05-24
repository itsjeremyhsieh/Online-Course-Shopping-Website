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
                            <a href="#dashboad" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                會員資訊</a>

                            <a href="#orders" class="active" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> 訂單管理</a>

                            <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> 下載資訊</a>

                            <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> 付款方式</a>

                            <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> 帳單地址</a>

                            <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> 帳號管理</a>

                            <a href="login.php"><i class="fa fa-sign-out"></i> 登出</a>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12 mb-30">
                        <h3>訂單</h3>
                        <div class="myaccount-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>編號</th>
                                        <th>名稱</th>
                                        <th>日期</th>
                                        <th>狀態</th>
                                        <th>總價</th>
                                        <th>明細</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Moisturizing Oil</td>
                                        <td>Aug 22, 2022</td>
                                        <td>Pending</td>
                                        <td>$45</td>
                                        <td><a href="cart.php" class="btn btn-dark btn-round">查看</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Katopeno Altuni</td>
                                        <td>July 22, 2022</td>
                                        <td>Approved</td>
                                        <td>$100</td>
                                        <td><a href="cart.php" class="btn btn-dark btn-round">查看</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Murikhete Paris</td>
                                        <td>June 12, 2022</td>
                                        <td>On Hold</td>
                                        <td>$99</td>
                                        <td><a href="cart.php" class="btn btn-dark btn-round">查看</a></td>
                                    </tr>
                                </tbody>
                            </table>
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