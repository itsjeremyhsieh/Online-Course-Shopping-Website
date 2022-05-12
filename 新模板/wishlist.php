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

    <!-- Header Section Start -->
    <div class="header-section section">

    <?php include "header.php" ?>

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>願望清單</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="wishlist.php">願望清單</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">

            <form action="#">				
                <div class="row">
                    <div class="col-12">
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
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-add-cart"><a href="#">加入購物車</a></td>
                                        <td class="pro-remove"><a href="#">×</a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-2.jpg" alt="" /></a></td>
                                        <td class="pro-title"><a href="#">Jumpsuit Outfits</a></td>
                                        <td class="pro-price"><span class="amount">$09</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-add-cart"><a href="#">加入購物車</a></td>
                                        <td class="pro-remove"><a href="#">×</a></td>
                                    </tr>
                                </tbody>
                            </table>
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