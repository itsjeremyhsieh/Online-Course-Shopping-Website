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
</head>

<body>

    <div class="main-wrapper">

        <?php include "header.php" ?>
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>付款確認</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="checkout.php">付款確認</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section section-padding">
            <div class="container">

                <!-- Checkout Form s-->
                <form action="#" class="checkout-form">
                    <div class="row row-50 mbn-40">

                        <div class="col-lg-7">

                            <!-- Billing Address -->
                            <div id="billing-form" class="mb-20">
                                <h4 class="checkout-title">付款地址</h4>

                                <div class="row">

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>名*</label>
                                        <input type="text" placeholder="First Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>性*</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Email *</label>
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>電話號碼*</label>
                                        <input type="text" placeholder="Phone number">
                                    </div>
                                    <!---
							   <div class="col-12 mb-5">
								   <label>公司名稱</label>
								   <input type="text" placeholder="Company Name">
							   </div>
                                -->
                                    <div class="col-12 mb-5">
                                        <label>地址*</label>
                                        <input type="text" placeholder="Address line 1">
                                        <input type="text" placeholder="Address line 2">
                                    </div>
                                    <!---
							   <div class="col-md-6 col-12 mb-5">
								   <label>Country*</label>
								   <select class="nice-select">
										<option>Bangladesh</option>
										<option>China</option>
										<option>country</option>
										<option>India</option>
										<option>Japan</option>
								   </select>
							   </div>

							   <div class="col-md-6 col-12 mb-5">
								   <label>Town/City*</label>
								   <input type="text" placeholder="Town/City">
							   </div>

							   <div class="col-md-6 col-12 mb-5">
								   <label>State*</label>
								   <input type="text" placeholder="State">
							   </div>

							   <div class="col-md-6 col-12 mb-5">
								   <label>Zip Code*</label>
								   <input type="text" placeholder="Zip Code">
							   </div>
                            -->
                                    <div class="col-12 mb-5">
                                        <div class="check-box mb-15">
                                            <input type="checkbox" id="create_account">
                                            <label for="create_account">會員註冊?</label>
                                        </div>
                                        <div class="check-box mb-15">
                                            <input type="checkbox" id="shiping_address" data-shipping>
                                            <label for="shiping_address">運送到不同地點?</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- Shipping Address -->
                            <div id="shipping-form" class="mb-20">
                                <h4 class="checkout-title">收件地址</h4>

                                <div class="row">

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>名*</label>
                                        <input type="text" placeholder="First Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>姓*</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="col-md-6 col-12 mb-5">
                                        <label>電話號碼*</label>
                                        <input type="text" placeholder="Phone number">
                                    </div>
                                    <!--
							   <div class="col-12 mb-5">
								   <label>Company Name</label>
								   <input type="text" placeholder="Company Name">
							   </div>
                                -->
                                    <div class="col-12 mb-5">
                                        <label>地址*</label>
                                        <input type="text" placeholder="Address line 1">
                                        <input type="text" placeholder="Address line 2">
                                    </div>
                                    <!---
							   <div class="col-md-6 col-12 mb-5">
								   <label>Country*</label>
								   <select class="nice-select">
										<option>Bangladesh</option>
										<option>China</option>
										<option>country</option>
										<option>India</option>
										<option>Japan</option>
								   </select>
							   </div>

							   <div class="col-md-6 col-12 mb-5">
								   <label>Town/City*</label>
								   <input type="text" placeholder="Town/City">
							   </div>

							   <div class="col-md-6 col-12 mb-5">
								   <label>State*</label>
								   <input type="text" placeholder="State">
							   </div>

							   <div class="col-md-6 col-12 mb-5">
								   <label>Zip Code*</label>
								   <input type="text" placeholder="Zip Code">
							   </div>
                            -->
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-5">
                            <div class="row">

                                <!-- Cart Total -->
                                <div class="col-12 mb-40">

                                    <h4 class="checkout-title">購物車</h4>

                                    <div class="checkout-cart-total">

                                        <h4>商品 <span>總額</span></h4>

                                        <ul>
                                            <li>謝宥英文-國中三年級 <span>2495</span></li>
                                            <li>戴琪社會-國中三年級 <span>5350</span></li>
                                            <li>戴琪自然-國中三年級 <span>1875</span></li>
                                            <li>蔡蔓數學-國中二年級 <span>1250</span></li>
                                        </ul>

                                        <p>小記 <span> 10970</span></p>
                                        <p>運費 <span> 0</span></p>

                                        <h4>總計 <span> 10970</span></h4>

                                    </div>

                                </div>

                                <!-- Payment Method -->
                                <div class="col-12 mb-40">

                                    <h4 class="checkout-title">付款方式</h4>

                                    <div class="checkout-payment-method">

                                        <div class="single-method">
                                            <input type="radio" id="payment_check" name="payment-method" value="check">
                                            <label for="payment_check">支票付款</label>
                                            <p data-method="check">請發送支票包含商店名稱，商店街道、商店城鎮、商店狀態、商店郵政編碼、商店國家</p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                            <label for="payment_bank">銀行轉帳</label>
                                            <p data-method="bank">請發送支票包含商店名稱，商店街道、商店城鎮、商店狀態、商店郵政編碼、商店國家</p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                            <label for="payment_cash">貨到付款</label>
                                            <p data-method="cash">請發送支票包含商店名稱，商店街道、商店城鎮、商店狀態、商店郵政編碼、商店國家</p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                            <label for="payment_paypal">Paypal</label>
                                            <p data-method="paypal">請發送支票包含商店名稱，商店街道、商店城鎮、商店狀態、商店郵政編碼、商店國家</p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                            <label for="payment_payoneer">Payoneer</label>
                                            <p data-method="payoneer">請發送支票包含商店名稱，商店街道、商店城鎮、商店狀態、商店郵政編碼、商店國家</p>
                                        </div>

                                        <div class="single-method">
                                            <input type="checkbox" id="accept_terms">
                                            <label for="accept_terms">我已閱讀並接受條款細則及私隱政策</label>
                                        </div>

                                    </div>

                                    <button class="place-order">下訂單</button>

                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div><!-- Page Section End -->

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