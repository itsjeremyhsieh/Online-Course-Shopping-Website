<?php
session_start();

if (isset($_SESSION['cart'])) {
    $cartcnt = count($_SESSION['cart']);
} else {
    $cartcnt = 0;
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

<?php
/*
    //資料庫連結
    $connect = mysqli_connect('localhost', 'root', 'root123456', 'group_26');
    mysqli_set_charset($connect, 'utf8');
    $sql = "select * from course";
    $query = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($query);
    $pageSize = 12;
    $totalPage = ceil($num / $pageSize);
    // 獲取當前頁
    if ($_GET['page']) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    // 在當前頁的基礎上確定上一頁
    if ($page == 1) {
        $up = 1;
    } else {
        $up = $page - 1;
    }
    // 在當前頁的基礎上確定下一頁
    if ($page == $totalPage) {
        $next = $totalPage;
    } else {
        $next = $page + 1;	
    }
    $start = ($page - 1) * $pageSize;
    $sql = "select * from course limit $start, $pageSize";
    $res = mysqli_query($connect, $sql);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);

    /*
    $result = mysqli_query($link, "SELECT * FROM course ORDER BY sold DESC");
    $data1 = mysqli_fetch_assoc($result); // $data1[0] 就是資料總數
    $per = 12; //每頁顯示項目數量
    $pages = ceil($data1[0]/$per); //取得不小於值的下一個整數
    
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //總頁數//確認頁數只能夠是數值資料
    }
    
    $start = ($page-1)*$per; //每一頁開始的資料序號
    $result2 = mysqli_query($result.' LIMIT '.$start.', '.$per,$link);
    
*/
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

                        <h1> <br>最強的名師雲端課程都在CourseLux</h1>
                        <a href="courses.php">查看所有課程</a>

                    </div>

                </div><!-- Hero Item End -->

                <!-- Hero Item Start -->
                <div class="hero-item" style="background-image: url(assets/images/hero/hero-2.png)">

                    <!-- Hero Content -->
                    <div class="hero-content">

                        <h1> <br>查看最新最熱門的課程！</h1>
                        <a href="courses.php">立即查看</a>

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
                    if ($result = mysqli_query($link, "SELECT * FROM course ORDER BY sold DESC")) {
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) {

                            if ($count == 13)
                                break;

                            echo "<div class='col-xl-3 col-lg-4 col-md-6 col-12 mb-40'> <div class='product-item'> <div class='product-inner'><div class='image'> <img src='assets/images/product/"
                                . $row['name'] . ".jpg'><div class='image-overlay'><div class='action-buttons'><a href='addcart.php?id=" . $row["name"] . "'><button>加入購物車</button></a><a href='addwish.php?id=" . $row["name"] . "'><button>加入願望清單</button></a></div></div></div>"
                                . "<div class='content'><div class='content-left'><h4 class='title'><a href='single-product.php?id=" . $row["name"] . "' >" . $row["name"] . "</a></h4>"
                                . "</div><div class='content-right'><span class='price'>" . $row["price"] . "</span></div></div></div></div></div>";

                            $count = $count + 1;
                        }
                        $num = mysqli_num_rows($result);
                        mysqli_free_result($result);
                    }

              
                    ?>
            </div>

        </div><!-- Product Section End -->
        
        <?php
        /*
            //分頁頁碼
            echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
            echo "<br /><a href=?page=1>首頁</a> ";
            echo "第 ";
            for( $i=1 ; $i<=$pages ; $i++ ) {
                if ( $page-3 < $i && $i < $page+3 ) {
                    echo "<a href=?page=".$i.">".$i."</a> ";
                }
            } 
            echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
        */   
        ?>
       

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
                               

                                if ($result = mysqli_query($link, "SELECT * FROM course ORDER BY sold DESC")) {
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div class='slide-item'><div class='best-deal-product'> <a href='single-product.php?id=" . $row["name"] . "' ><div class='image'><img src='assets/images/product/"
                                            .  $row['name'] . ".jpg'></div></a><div class='content-top'><div class='content-top-left'><h4 class='title'><a href='#'>"
                                            . "</a></h4></div><div class='content-top-right'><span style='color: #afeeee' class='price'>" . $row["price"] . "</span></div></div><div class='content-bottom'>"
                                            . "</div></div></div>";
                                    }
                                    $num = mysqli_num_rows($result);
                                    mysqli_free_result($result);
                                } 
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-6 col-12 ps-3 ps-lg-4 ps-xl-5 mb-40">

                            <div class="row">
                                <div class="section-title text-start col mb-30">
                                    <h1>會考/學測總複習課程</h1>
                                    <p>所有會考學測總複習雲端課程都在這裡！幫助你戰勝大考</p>
                                </div>
                            </div>

                            <div class="small-product-slider row row-7 mbn-40">

                                <?php
                               

                                if ($result = mysqli_query($link, "SELECT * FROM course WHERE smt = '通用'")) {
                                    $count1 = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        if ($count1 == 8)
                                            break;
                                        echo "<div class='col mb-40'> <div class='product-item'> <div class='product-inner'><div class='image'> <img height = '270px' width = '320px' src='assets/images/product/"
                                            .  $row['name'] . ".jpg'><div class='image-overlay'></div></div>"
                                            . "<div class='content'><div class='content-left'><h4 class='title'> <a href='single-product.php?id=" . $row["name"] . "' style='font-size: 14px' >" . $row["name"] . "</a></h4>"
                                            . "</div><div class='content-right'><span class='price'  >" . $row["price"] . "</span></div></div></div></div></div>";
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