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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <!--additional method - for checkbox .. ,require_from_group method ...-->
    <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
    
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
    <script src="assets/js/form.js"></script>

    
    <script>
        $(document).ready(function($) {
            //for select
            $.validator.addMethod("notEqualsto", function(value, element, arg) {
                return arg != value;
            }, "您尚未選擇!");
    
            $("#form2").validate({
                submitHandler: function(form) {
                    alert("登入成功！");
                    form.submit();
                },
                rules: {
                    帳號: {
                        required: true,
                        minlength: 6,
                        maxlength: 10
                    },
                    pwd: {
                        required: true,
                        minlength: 6,
                        maxlength: 12
                    }
                },
                messages: {
                    帳號: {
                        required: "帳號為必填欄位",
                        minlength: "帳號最少要6個字",
                        maxlength: "帳號最長10個字"
                    },
                    pwd: {
                        required: "密碼為必填欄位",
                        minlength: "密碼最少要6個字",
                        maxlength: "密碼最長12個字"
                    },
                }
            });
        });
        </script>




</head>

<body>
    <div class="dui-container">
        <header>
        <div class="main-wrapper">

             <!-- Header Section Start -->
             <div class="header-section section">

                <!-- Header Top Start -->
                <div class="header-top header-top-one bg-theme-two">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-center">
    
                            <div class="col mt-10 mb-10 d-none d-md-flex">
                                <!-- Header Top Left Start -->
                                <div class="header-top-left">
                                    <p>雲端課程購物網站</p>
    
                                </div><!-- Header Top Left End -->
                            </div>
    
                            <div class="col mt-10 mb-10">
                                <!-- Header Language Currency Start -->
                                <ul class="header-lan-curr">
    
                                    <li><a href="#">語言</a>
                                        <ul>
                                            <li><a href="#">繁體中文</a></li>
                                            <li><a href="#">英文</a></li>
    
                                        </ul>
                                    </li>
    
                                    <li><a href="#">貨幣</a>
                                        <ul>
                                            <li><a href="#">英鎊</a></li>
                                            <li><a href="#">美金</a></li>
                                            <li><a href="#">歐元</a></li>
                                            <li><a href="#">新台幣</a></li>
                                        </ul>
                                    </li>
    
                                </ul><!-- Header Language Currency End -->
                            </div>
    
                            <div class="col mt-10 mb-10">
                                <!-- Header Shop Links Start -->
                                <div class="header-top-right">
    
                                    <p><a href="my-account.php">我的帳號</a>
                                        <a href="register.php">註冊會員</a><a href="login.php">登入</a>
                                    </p>
                                    <p>目前線上人數：1人</p>
                                </div><!-- Header Shop Links End -->
                            </div>
    
                        </div>
                    </div>
                </div><!-- Header Top End -->
    
                <!-- Header Bottom Start -->
                <div class="header-bottom header-bottom-one header-sticky">
                    <div class="container-fluid">
                        <div class="row menu-center align-items-center justify-content-between">
    
                            <div class="col mt-15 mb-15">
                                <!-- Logo Start -->
                                <div class="header-logo">
                                    <a href="index.php">
                                        <img src="assets/images/logo.png" alt="CourseLux">
                                    </a>
                                </div><!-- Logo End -->
                            </div>
    
                            <div class="col order-2 order-lg-3">
                                <!-- Header Advance Search Start -->
                                <div class="header-shop-links">
    
                                    <div class="header-search">
                                        <button class="search-toggle"><img src="assets/images/icons/search.png"
                                                alt="Search Toggle"><img class="toggle-close"
                                                src="assets/images/icons/close.png" alt="Search Toggle"></button>
                                        <div class="header-search-wrap">
                                            <form action="#">
                                                <input type="text" placeholder="Type and hit enter">
                                                <button><img src="assets/images/icons/search.png" alt="Search"></button>
                                            </form>
                                        </div>
                                    </div>
    
                                    <div class="header-wishlist">
                                        <a href="wishlist.php"><img src="assets/images/icons/wishlist.png" alt="Wishlist">
                                            <span>02</span></a>
                                    </div>
    
                                    <div class="header-mini-cart">
                                        <a href="cart.php"><img src="assets/images/icons/cart.png" alt="Cart">
                                            <span>02($250)</span></a>
                                    </div>
    
                                </div><!-- Header Advance Search End -->
                            </div>
    
                            <div class="col order-3 order-lg-2">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">首頁</a>
    
                                            </li>
                                            <li><a href="courses.php">雲端課程</a>
                                                <ul class="sub-menu">
                                                    <li><a href="">國一</a></li>
                                                    <li><a href="">國二</a></li>
                                                    <li><a href="">國三</a></li>
                                                    <li><a href="">高一</a></li>
                                                    <li><a href="">高二</a></li>
                                                    <li><a href="">高三</a></li>
                                                </ul>
    
                                            </li>
                                            <li><a href="my-course.php">我的課程</a>
                                            </li>
                                            <li><a href="contact.php">關於我們</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
    
                            <!-- Mobile Menu -->
                            <div class="mobile-menu order-4 d-block d-lg-none col"></div>
    
                        </div>
                    </div>
                </div><!-- Header BOttom End -->
    
            </div><!-- Header Section End -->
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>會員登入</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="courses.php">會員登入</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->


    <!-- Page Section Start -->
    <main>
        <div class="page-section section section-padding">
            <div class="container">
                <div class="row mbn-40">
                    <div class="login-register-form-wrap">
                        <form action="" method="POST" name="form2" id="form2" class="mb-2">
                            <div class="row">
                                <div class="row justify-content-center">
                                    <div class="col-4 mb-10" ><input type="text" placeholder="會員帳號或電子郵件" name="帳號" ></div>
                                </div>
                                
                                <div class="row justify-content-center">
                                <div class="col-4 mb-10"><input type="password" placeholder="密碼" name="pwd"></div>
                                </div>

                                <div class="row justify-content-center">
                                <div class="col-4 mb-10">
                                    <label><input type="checkbox" name="記住我" style="vertical-align: middle;" ><span style="vertical-align: middle;">&nbsp;記住我</span></label>
                                </div>
                                </div>


                                <div class="row justify-content-center">
                                <div class="col-4 mb-10">
                                <div class="shape-ex1"><input type="submit" value="登入"></div>
                                </div>
                                </div>

                                <div class="row justify-content-center">
                                <div class="col-4 mb-10"><a class="form-link" href="forgetpsw.php" >忘記帳號/密碼</a> </div>                                  
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-4 mb-10"><a class="form-link" href="register.php">尚未註冊?</a></div>
                                </div>
                                
                            </div>
                        </form>                                              
                    </div>                          
                </div>               
            </div>
        </div>
    </main>
    <!-- Page Section End -->
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

<!-- Footer Top Section Start -->
<div class="footer-top-section section bg-theme-two-light section-padding">
    <div class="container">
        <div class="row mbn-40">

            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                <h4 class="title">聯繫我們</h4>
                        <p>500彰化市師大路二號</p>
                        <p><a href="tel:01234567890">01234 567 890</a><a href="tel:01234567891">01234 567 891</a></p>
                        <p><a href="mailto:info@example.com">info@example.com</a><a href="#">www.example.com</a></p>
            </div>

            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                <h4 class="title">商品</h4>
                <ul>
                    <li><a href="#">新品上架</a></li>
                    <li><a href="#">最熱銷</a></li>
                    <li><a href="#">流行商品</a></li>
                    <li><a href="#">現正優惠</a></li>
                    <li><a href="#">打折商品</a></li>
                    <li><a href="#">特色商品</a></li>
                </ul>
            </div>

            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                <h4 class="title">通知</h4>
                <ul>
                    <li><a href="#">關於我們</a></li>
                    <li><a href="#">條款&條件</a></li>
                    <li><a href="#">付款方式</a></li>
                    <li><a href="#">產品品質保證</a></li>
                    <li><a href="#">退貨須知</a></li>
                    <li><a href="#">付款須知</a></li>
                </ul>
            </div>

            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                <h4 class="title">電子報</h4>
                <p>訂閱CourseLux電子報以接收最新消息！</p>

                <form id="mc-form" class="mc-form footer-subscribe-form">
                    <input id="mc-email" autocomplete="off" placeholder="請輸入您的Email" name="EMAIL" type="email">
                    <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                </form>
                <!-- mailchimp-alerts Start -->
                <div class="mailchimp-alerts">
                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                </div><!-- mailchimp-alerts end -->

                <h5>追蹤我們</h5> 
                <p class="footer-social"><a href="#">Facebook</a> - <a href="#">Instagram</a> - <a href="#">YouTube</a></p>

            </div>

        </div>
    </div>
</div><!-- Footer Top Section End -->



   
    <br>
     <!-- Footer Bottom Section Start -->
     <footer>
     <div class="footer-bottom-section section bg-theme-two pt-15 pb-15" ">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="footer-copyright">© 2022 CourseLux</p>
                </div>
            </div>
        </div>
    </div>
     </footer><!-- Footer Bottom Section End -->



    </div>
</body>
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