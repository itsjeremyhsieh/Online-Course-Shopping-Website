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

                        <h1>購物車</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="wishlist.php">購物車</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section section-padding">
            <div class="container">

                <form action="#">
                    <div class="row mbn-40">
                        <div class="col-12 mb-40">
                            <div class="cart-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">圖片</th>
                                            <th class="pro-title">商品</th>
                                            <th class="pro-price">價格</th>
                                            <th class="pro-quantity">數量</th>
                                            <th class="pro-subtotal">總價</th>
                                            <th class="pro-remove">移除</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.jpg" alt="" /></a></td>
                                            <td class="pro-title"><a href="#">Tmart Baby Dress</a></td>
                                            <td class="pro-price"><span class="amount">$25</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </td>
                                            <td class="pro-subtotal">$25</td>
                                            <td class="pro-remove"><a href="#">🗑️</a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-2.jpg" alt="" /></a></td>
                                            <td class="pro-title"><a href="#">Jumpsuit Outfits</a></td>
                                            <td class="pro-price"><span class="amount">$09</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </td>
                                            <td class="pro-subtotal">$09</td>
                                            <td class="pro-remove"><a href="#">🗑️</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-12 mb-40">
                            <div class="cart-buttons mb-30">
                                <input type="submit" value="更新購物車" />
                                <a href="#">繼續選購</a>
                            </div>
                            <div class="cart-coupon">
                                <br>
                                <h4>優惠券</h4>
                                <br>
                                <p>前往察看您的優惠券</p>
                                <div class="cuppon-form">
                                    <input type="text" placeholder="優惠代碼" />
                                    <input type="submit" value="新增優惠券" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-12 mb-40">
                            <div class="cart-total fix">
                                <br>
                                <h3>購物車內商品總價</h3>
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>小計</th>
                                            <td><span class="amount">$306.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>總共</th>
                                            <td>
                                                <strong><span class="amount">$306.00</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="proceed-to-checkout section mt-30">
                                    <a href="#">確認結算</a>
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