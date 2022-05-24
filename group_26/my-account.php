<?php
/*
session_start();
if(!isset($_SESSION['userid']))
    header("Location: login.php");
*/
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

                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12 mb-30">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                會員資訊</a>

                            <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> 訂單管理</a>

                            <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> 下載資訊</a>

                            <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> 付款方式</a>

                            <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> 帳單地址</a>

                            <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> 帳號管理</a>

                            <a href="login.php"><i class="fa fa-sign-out"></i> 登出</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12 mb-30">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">

                                    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/rqskgpey.json" trigger="loop" colors="primary:#121331" scale="30" style="width:100px;height:100px">
                                    </lord-icon>
                                    <b>普通</b>會員,金熙您好
                                    <!------
								<div class="welcome">
									<p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong><a href="login-register.php" class="logout"> Logout</a>)</p>
								</div>
                                
								<p class="mb-0">您當前的等級為普通會員</p>----->
                                    <div class="g-progress" style="--progress: 70%">
                                    </div>


                                    <br>
                                    <center>距離下一等級還差$4500</center>



                                    <div class="row my-5">
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="service-block-inner">
                                                <h3>普通會員</h3>
                                                <h4> 加入即成為我們的一般會員</h4>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="service-block-inner">
                                                <h3>VIP會員</h3>
                                                <h4>實際消費金額達6000元，且有效交易次數達1次以上。</h4>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="service-block-inner">
                                                <h3>SVIP會員</h3>
                                                <h4>實際消費金額達15,000元，且有效交易次數達4次以上。</h4>

                                            </div>
                                        </div>
                                    </div>






                                    <h1 class="wow fadeInDown animated" data-wow-duration="0.7s" data-wow-delay="0s">
                                        會員優惠</h1>
                                    <div class="table-wrapper">
                                        <div class="table-2">
                                            <table style="border:3px #cccccc solid;" cellpadding="10" border='1' ;border-collapse:collapse;>
                                                <tbody>
                                                    <tr>
                                                        <th style="width:95px">會員等級</th>

                                                        <th>專屬優惠</th>
                                                        <th>生日禮</th>
                                                        <th>不定期優惠</th>
                                                    </tr>
                                                    <tr>
                                                        <td>一般會員</td>

                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>不定期發送優惠折扣碼</td>

                                                    </tr>
                                                    <tr>
                                                        <td>VIP會員</td>
                                                        <td>所有課程全面享有95折優惠</td>
                                                        <td>發送1000元優惠折扣碼（抵用門檻1500元）</td>
                                                        <td>每月不定期舉辦會員周，正品全面享有9折優惠。(特價品不適用)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SVIP會員</td>
                                                        <td>所有課程全面享有9折優惠</td>
                                                        <td>發送2000元優惠折扣碼（無抵用門檻）</td>
                                                        <td>每月不定期舉辦會員周，正品全面享有85折優惠。(特價品不適用)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>




                                    <br><br><br><br>
                                    <h1 class="wow fadeInDown animated" data-wow-duration="0.7s" data-wow-delay="0s">
                                        我的優惠卷</h1>
                                    <div class="table-wrapper">
                                        <div class="table-2">
                                            <table style="border:3px #cccccc solid;" cellpadding="10" border='1' ;border-collapse:collapse;>
                                                <tbody>
                                                    <tr>
                                                        <th>編號</th>
                                                        <th style="min-width:130px">優惠卷名稱</th>
                                                        <th>序號</th>
                                                        <th>面額</th>
                                                        <th>抵用門檻</th>
                                                        <th>使用狀況</th>
                                                        <th>有效期限</th>
                                                    </tr>
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>生日禮卷</td>
                                                        <td> #fheg32</td>
                                                        <td>$500</td>
                                                        <td>$3000</td>
                                                        <td>未使用</td>
                                                        <td>2025/04/11</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
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
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="download" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>課程下載</h3>

                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>課程名稱</th>
                                                    <th>開通日期</th>
                                                    <th>有效期限</th>
                                                    <th>下載</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Moisturizing Oil</td>
                                                    <td>Aug 22, 2022</td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="btn btn-dark btn-round">Download File</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Katopeno Altuni</td>
                                                    <td>Sep 12, 2022</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="btn btn-dark btn-round">Download File</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>付款方式</h3>

                                    <p class="saved-message">You Can't Saved Your Payment Method yet.</p>



                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>通訊地址</h3>

                                    <address>
                                        <p><strong>Alex Tuntuni</strong></p>
                                        <p>1355 Market St, Suite 900 <br>
                                            San Francisco, CA 94103</p>
                                        <p>Mobile: (123) 456-7890</p>
                                    </address>

                                    <a href="#" class="btn btn-dark btn-round d-inline-block"><i class="fa fa-edit"></i>編輯地址</a>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div id="account-info" class="tab-pane fade" role="tabpanel">
                                <div class="myaccount-content">
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
                                                    <a href="#account-info"><input type="submit" value="儲存變更" class="btn btn-dark btn-round btn-lg"></a>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->

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