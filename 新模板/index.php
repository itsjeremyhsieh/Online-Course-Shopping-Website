<?php
session_start();
$arr_cart = array_filter(explode(",",$_SESSION['cart']));
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CourseLux </title>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('a').click(function() {
                nameID = $(this).attr('id');
               
            })
        })
    </script>
    
</head>

<body>

    <div class="main-wrapper">

        <?php include "header.php" ?>

        <!-- Hero Section Start -->
        <div class="hero-section section">

            <!-- Hero Slider Start -->
            <div class="hero-slider hero-slider-one fix">

                <!-- Hero Item Start -->
                <div class="hero-item" style="background-image: url(assets/images/hero/hero-1.jpg)">

                    <!-- Hero Content -->
                    <div class="hero-content">

                        <h1>Get 35% off <br>Latest Course Product</h1>
                        <a href="#">SHOP NOW</a>

                    </div>

                </div><!-- Hero Item End -->

                <!-- Hero Item Start -->
                <div class="hero-item" style="background-image: url(assets/images/hero/hero-2.png)">

                    <!-- Hero Content -->
                    <div class="hero-content">

                        <h1>Get 35% off <br>Latest Course Product</h1>
                        <a href="#">SHOP NOW</a>

                    </div>

                </div><!-- Hero Item End -->

            </div><!-- Hero Slider End -->

        </div><!-- Hero Section End -->



        <!-- Product Section Start -->
        <div class="product-section section section-padding">
            <div class="container">

                <div class="row">
                    <div class="section-title text-center col mb-30">
                        <h1>熱門課程</h1>
                        <p>所有最熱門的課程都在這裡！</p>
                    </div>
                </div>

                <div class="row mbn-40">

                    <?php
                    $link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

                    if (!$link) {
                        echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
                        echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
                        exit();
                    }

                    mysqli_query($link, 'SET CHARACTER SET utf8');
                    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

                    if ($result = mysqli_query($link, "SELECT * FROM course ORDER BY sold DESC")) {
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) {

                            if ($count == 13)
                                break;

                            echo "<div class='col-xl-3 col-lg-4 col-md-6 col-12 mb-40'> <div class='product-item'> <div class='product-inner'><div class='image'> <img src='assets/images/product/"
                                . $row['name'] . ".jpg'><div class='image-overlay'><div class='action-buttons'><button>加入購物車</button><button>加入願望清單</button></div></div></div>"
                                . "<div class='content'><div class='content-left'><h4 class='title'><a href='single-product.php' id='" . $row["name"] . "' class= 'course'>" . $row["name"] . "</a></h4>"
                                . "</div><div class='content-right'><span class='price'>" . $row["price"] . "</span></div></div></div></div></div>";

                            $count = $count + 1;
                        }
                        $num = mysqli_num_rows($result);
                        mysqli_free_result($result);
                    }

                    mysqli_close($link);
                    ?>


                </div>
            </div><!-- Product Section End -->



            <!-- Product Section Start -->
            <div class="product-section section section-padding pt-0">
                <div class="container">
                    <div class="row mbn-40">

                        <div class="col-lg-4 col-md-6 col-12 mb-40">

                            <div class="row">
                                <div class="section-title text-start col mb-30">
                                    <h1>精選商品</h1>
                                    <p>專為您推薦</p>
                                </div>
                            </div>

                            <div class="best-deal-slider w-100">

                                <?php
                                $link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

                                if (!$link) {
                                    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
                                    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
                                    exit();
                                }
                                mysqli_query($link, 'SET CHARACTER SET utf8');
                                mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

                                if ($result = mysqli_query($link, "SELECT * FROM course ORDER BY sold DESC")) {
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div class='slide-item'><div class='best-deal-product'><div class='image'><img src='assets/images/product/"
                                            .  $row['name'] . ".jpg'></div><div class='content-top'><div class='content-top-left'><h4 class='title'><a href='#'>"
                                            . "</a></h4></div><div class='content-top-right'><span style='color: #afeeee' class='price'>" . $row["price"] . "</span></div></div><div class='content-bottom'>"
                                            . "<a href='#' style='color: #afeeee' data-hover='加入購物車'>加入購物車</a></div></div></div>";
                                    }
                                    $num = mysqli_num_rows($result);
                                    mysqli_free_result($result);
                                }

                                mysqli_close($link);
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-6 col-12 ps-3 ps-lg-4 ps-xl-5 mb-40">

                            <div class="row">
                                <div class="section-title text-start col mb-30">
                                    <h1>會考總複習課程</h1>
                                    <p>所有會考總複習雲端課程都在這裡</p>
                                </div>
                            </div>

                            <div class="small-product-slider row row-7 mbn-40">

                                <?php
                                $link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

                                if (!$link) {
                                    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
                                    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
                                    exit();
                                }
                                mysqli_query($link, 'SET CHARACTER SET utf8');
                                mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

                                if ($result = mysqli_query($link, "SELECT * FROM course WHERE smt = '通用'")) {
                                    $count1 = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        if ($count1 == 8)
                                            break;
                                        echo "<div class='col mb-40'> <div class='product-item'> <div class='product-inner'><div class='image'> <img height = '250px' src='assets/images/product/"
                                            .  $row['name'] . ".jpg'><div class='image-overlay'><div class='action-buttons'><button>加入購物車</button><button></button></div></div></div>"
                                            . "<div class='content'><div class='content-left'><h4 class='title'><a href='single-product.php' style='font-size: 12px'>" . $row["name"] . "</a></h4>"
                                            . "</div><div class='content-right'><span class='price'  style='font-size: 16px'>" . $row["price"] . "</span></div></div></div></div></div>";
                                        $count1 = $count1 + 1;
                                    }
                                    $num = mysqli_num_rows($result);
                                    mysqli_free_result($result);
                                }

                                mysqli_close($link);
                                ?>

                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- Product Section End -->

            <!-- Feature Section Start -->
            <div class="feature-section bg-theme-two section section-padding fix" style="background-image: url(assets/images/pattern/pattern-dot.png);">
                <div class="container">
                    <div class="feature-wrap row justify-content-between mbn-30">

                        <div class="col-md-4 col-12 mb-30">
                            <div class="feature-item text-center">

                                <div class="icon"><img src="assets/images/feature/feature-1.png" alt="Image"></div>
                                <div class="content">
                                    <h3>免運費 </h3>
                                    <p>一切雲端化！省紙愛地球好統整又可省錢</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-12 mb-30">
                            <div class="feature-item text-center">

                                <div class="icon"><img src="assets/images/feature/feature-2.png" alt="Image"></div>
                                <div class="content">
                                    <h3>３天鑑賞期</h3>
                                    <p>不喜歡不習慣看不順眼都可以退費</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-12 mb-30">
                            <div class="feature-item text-center">

                                <div class="icon"><img src="assets/images/feature/feature-3.png" alt="Image"></div>
                                <div class="content">
                                    <h3>品質保證</h3>
                                    <p>業界名師聯合製作，品質掛保證</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- Feature Section End -->

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