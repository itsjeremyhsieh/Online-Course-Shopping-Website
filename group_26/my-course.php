<?php

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

                    <h1>我的課程</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="my-course.php">我的課程</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">

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

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/玉育自然-國中一年級(上學期).jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Tmart Baby Dress</a></h4>

                         
                                   
                                </div>

                                <div class="content-right">
                                   
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-2.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Jumpsuit Outfits</a></h4>

                                   
                                </div>

                                <div class="content-right">
                                    
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-3.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Smart Shirt</a></h4>

                                 
                                   
                                </div>

                                <div class="content-right">
                                   
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-4.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Kids Shoe</a></h4>

                                  
                                   
                                </div>

                                <div class="content-right">
                                    
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-5.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php"> Bowknot Bodysuit</a></h4>

                                  
                                   
                                </div>

                                <div class="content-right">
                                    
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-6.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Striped T-Shirt</a></h4>

                                  

                                   
                                </div>

                                <div class="content-right">
                                  
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-7.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Kislen Jak Tops</a></h4>

                                   
                            

                                   
                                </div>

                                <div class="content-right">
                                   
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="assets/images/product/product-8.jpg" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>課程大綱</button>
                                        <button>開始上課</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.php">Lattic Shirt</a></h4>

                          
                                   
                                </div>

                                <div class="content-right">
                            
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

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