<?php
session_start();


if (isset($_SESSION['cart'])) {
    $cartcnt = count($_SESSION['cart']);
} else {
    $cartcnt = 0;
}

if (isset($_SESSION['wish'])) {
    $wishcnt = count($_SESSION['wish']);
} else {
    $wishcnt = 0;
}

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
    exit();
}
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

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
</head>

<body>

    <div class="main-wrapper">

        <?php include "header.php" ?>





        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>雲端課程</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="courses.php">雲端課程</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section section-padding">
            <div class="container">
                <div class="row row-30 mbn-40">

                    <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-40">
                        <div class="row">

                            <div class="col-12">
                                <div class="product-show">
                                    <h4>顯示:</h4>
                                    <select class="nice-select">
                                        <option>8</option>
                                        <option>12</option>
                                        <option>16</option>
                                        <option>20</option>
                                    </select>
                                </div>
                                <div class="product-short">
                                    <h4>排序:</h4>
                                    <select class="nice-select">
                                        <option>名稱順序</option>
                                        <option>名稱倒序</option>
                                        <option>更新日期：新至舊</option>
                                        <option>更新日期：舊至新</option>
                                        <option>價格：低至高</option>
                                        <option>價格：高至低</option>
                                    </select>
                                </div>
                            </div>
                            <!--商品-->
                            <?php

                            if ($result = mysqli_query($link, "SELECT * FROM course ")) {
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<div class='col-xl-4 col-md-6 col-12 mb-40'> <div class='product-item'> <div class='product-inner'><div class='image'> <img src='assets/images/product/"
                                        . $row["name"] . ".jpg'><div class='image-overlay'><div class='action-buttons'> <a href='addcart.php?id=" . $row["name"] . "'><button>加入購物車</button></a><a href='addwish.php?id=" . $row["name"] . "'><button>加入願望清單</button></a></div></div></div>"
                                        . "<div class='content'><div class='content-left'><h4 class='title'><a href='single-product.php?id=" . $row["name"] . "' >" . $row["name"] . "</a></h4>"
                                        . "</div><div class='content-right'><span class='price'>" . $row["price"] . "</span></div></div></div></div></div>";
                                }
                                $num = mysqli_num_rows($result);
                                mysqli_free_result($result);
                            }

                           
                            ?>
                            <div class="col-12">
                                <ul class="page-pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 mb-40">

                        <div class="sidebar">
                            <h4 class="sidebar-title">課程分類</h4>
                            <ul class="sidebar-list">
                                <li><a href="#">國小課程 <span class="num">18</span></a></li>
                                <li><a href="#">國中課程 <span class="num">09</span></a></li>
                                <li><a href="#">高中課程 <span class="num">05</span></a></li>

                            </ul>
                        </div>

                        <div class="sidebar">
                            <h4 class="sidebar-title">科目分類</h4>
                            <ul class="sidebar-list">
                                <li><a href="#">國文<span class="num">05</span></a>
                                </li>
                                <li><a href="#">英文<span class="num">10</span></a>
                                </li>
                                <li><a href="#">數學<span class="num">08</span></a>
                                </li>
                                <li><a href="#">社會<span class="num">16</span> </a>
                                </li>
                                <li><a href="#">自然科學<span class="num">17</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar">
                            <h4 class="sidebar-title">熱門商品</h4>
                            <div class="sidebar-product-wrap">
                                <?php
                                if ($result = mysqli_query($link, "SELECT * FROM course ORDER BY sold DESC")) {
                                    $count = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        if ($count == 3)
                                            break;

                                        echo "<div class='sidebar-product'><a href='single-product.php' class='image'><img src='assets/images/product/"
                                            . $row["name"] . ".jpg'></a><div class='content'><a href='single-product.php?id=" . $row["name"] . "' class='title' >" . $row["name"] . "</a>"
                                            . "<span class='price'>" . $row['price'] . "</span></div></div> ";
                                        $count++;
                                    }
                                }
                                ?>

                                <!-- <div class="sidebar-product">
                                    <a href="single-product.php" class="image"><img src="assets/images/product/product-1.jpg" alt=""></a>
                                    <div class="content">
                                        <a href="single-product.php" class="title">謝宥國中進階英文—國一上</a>
                                        <span class="price">$1099 <span class="old">$1899</span></span>
                                       
                                    </div>
                                </div>
                                <div class="sidebar-product">
                                    <a href="single-product.php" class="image"><img src="assets/images/product/product-2.jpg" alt=""></a>
                                    <div class="content">
                                        <a href="single-product.php" class="title">蔓萱高中資優數學—高二下</a>
                                        <span class="price">$1699 <span class="old">$2499</span></span>
                            
                                    </div>
                                </div>
                                <div class="sidebar-product">
                                    <a href="single-product.php" class="image"><img src="assets/images/product/product-3.jpg" alt=""></a>
                                    <div class="content">
                                        <a href="single-product.php" class="title">戴琪國小自然—小六上</a>
                                        <span class="price">$899 <span class="old">$1299</span></span>
                                    </div>
                                </div> -->
                            </div>
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