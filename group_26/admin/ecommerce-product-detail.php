<?php

$id = $_GET['id']; //商品ID

$link = mysqli_connect("localhost", "root", "root123456", "group_26") // 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
$sql = "SELECT * FROM course WHERE id='" . $id . "'";
if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $subject = $row['subject'];
        $grade = $row['grade'];
        $smt = $row['smt'];
        $teacher = $row['teacher'];
        $length = $row['length'];
        $total = $row['total'];
        $price = $row['price'];
        $sold = $row['sold'];
        $valid = $row['valid'];
        $description = $row['description'];
        $download = $row['download'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CourseLux 後臺管理系統</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">

    <meta name="description" content="">
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

    <!-- select2 css -->
    <link href="public/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="public/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />


    <!-- Bootstrap Css -->
    <link href="public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



    <script>
        $(document).ready(function($) {
            //for select
            $.validator.addMethod("notEqualsto", function(value, element, arg) {
                return arg != value;
            }, "您尚未選擇!");

            $("#form3").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    id: {
                        required: true,
                      
                    },
                    subject: {
                        required: true,
                      
                    },
                    grade: {
                        required: true,
                      
                    },
                    smt: {
                        required: true,
                      
                    },
                    teacher: {
                        required: true,
                      
                    },
                    length: {
                        required: true,
                      
                    },
                    total: {
                        required: true,
                      
                    },
                    sold: {
                        required: true,
                    },
                    price: {
                        required: true,
                    },
                    valid: {
                        required: true,
                    },
                    cover: {
                        required: true,
                    },
                    download: {
                        required: true,
                    },
                    description: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "此為必填欄位",
                    },
                    id: {
                        required: "此為必填欄位",
                      
                    },
                    subject: {
                        required: "此為必填欄位",
                      
                    },
                    grade: {
                        required: "此為必填欄位",
                      
                    },
                    smt: {
                        required: "此為必填欄位",
                      
                    },
                    teacher: {
                        required: "此為必填欄位",
                      
                    },
                    length: {
                        required: "此為必填欄位",
                      
                    },
                    total: {
                        required: "此為必填欄位",
                      
                    },
                    sold: {
                        required: "此為必填欄位",
                    },
                    price: {
                        required: "此為必填欄位",
                    },
                    valid: {
                        required: "此為必填欄位",
                    },
                    /*cover: {
                        required: "此為必填欄位",
                    },
                    download: {
                        required: "此為必填欄位",
                    },*/
                    description: {
                        required: "此為必填欄位",
                    },
                }
            });
        });
    </script>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="admin.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="public/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="public/assets/images/logo-dark.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="admin.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="public/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="public/assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="uil-search"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil-search"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>




                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="uil-minus-path"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil-bell"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0 font-size-16"> 通知 </h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> 全部已讀</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="uil-shopping-basket"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">您的訂單已送達</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 分鐘 前</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <img src="public/assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 小時 前</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="uil-truck"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 分鐘 前</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <img src="public/assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 小時 前</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="uil-arrow-circle-right me-1"></i> 查看更多..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="public/assets/images/users/avatar-4.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Marcus</span>
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">查看帳號</span></a>
                            <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">帳號設定</span> <span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                            <a class="dropdown-item" href="/logout"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">登出</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="uil-cog"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="admin.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="public/assets/images/logo.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="public/assets/images/logo.png" alt="" height="50">
                    </span>
                </a>

                <a href="admin.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="public/assets/images/logo.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="public/assets/images/logo.png" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">目錄</li>

                        <li>
                            <a href="admin.html">
                                <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                                <span>儀錶板</span>
                            </a>
                        </li>



                        <li class="menu-title">功能列表</li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-store"></i>
                                <span>課程管理</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ecommerce-products.html">課程</a></li>
                                <li><a href="ecommerce-product-detail.html">修改課程資訊</a></li>
                                <li><a href="ecommerce-add-product.html">新增課程</a></li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-invoice"></i>
                                <span>訂單管理</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html">訂單列表</a></li>
                                <li><a href="invoices-detail.html">訂單明細</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-book-alt"></i>
                                <span>會員帳號管理</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html">會員列表</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-book-alt"></i>
                                <span>留言管理</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="message.html">留言列表</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->


        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">


                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">修改課程</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">課程管理</a></li>
                                        <li class="breadcrumb-item active">修改課程資訊</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->




                    <div class="row">
                        <div class="col-lg-12">
                            <div id="addproduct-accordion" class="custom-accordion">
                                <div class="card">
                                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                                        <div class="p-4">

                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            01
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">課程資訊</h5>
                                                    <p class="text-muted text-truncate mb-0">請修改以下資訊</p>
                                                </div>
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>
                                    </a>

                                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <form action="editcourse.php" method="POST" name="form3" id="form3" class="mb-2" enctype="multipart/form-data">


                                                <div class="mb-3">
                                                    <label class="form-label" for="name">課程名稱</label>
                                                    <input id="name" name="name" type="text" class="form-control" value=<?php echo $name; ?>>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="id">課程編號</label>
                                                            <input id="id" name="id" type="text" class="form-control" value=<?php echo $id;?> readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="subject">科目</label>
                                                            <input id="subject" name="subject" type="text" class="form-control" value=<?php echo $subject; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="grade">適用年級</label>
                                                            <input id="grade" name="grade" type="text" class="form-control" value=<?php echo $grade; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="smt">適用學期</label>
                                                            <input id="smt" name="smt" type="text" class="form-control" value=<?php echo $smt; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="teacher">授課老師</label>
                                                            <input id="teacher" name="teacher" type="text" class="form-control" value=<?php echo $teacher; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="length">上課時長</label>
                                                            <input id="length" oninput="value=value.replace(/[^\d]/g,'')" name="length" type="text" class="form-control" value=<?php echo $length; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="total">總節數</label>
                                                            <input id="total" oninput="value=value.replace(/[^\d]/g,'')" name="total" type="text" class="form-control" value=<?php echo $total; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="sold">售出數量</label>
                                                            <input id="sold" oninput="value=value.replace(/[^\d]/g,'')" name="sold" type="text" class="form-control" value=<?php echo $sold; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">售價</label>
                                                            <input id="price" oninput="value=value.replace(/[^\d]/g,'')" name="price" type="text" class="form-control" value=<?php echo $price; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="valid">有效期限</label>
                                                            <input id="valid" oninput="value=value.replace(/[^\d]/g,'')" name="valid" type="text" class="form-control" value=<?php echo $valid; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="cover">課程封面</label> <br>
                                                            <input name="cover" type="file" id="cover" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label" for="cover">課程教材</label> <br>
                                                            <input name="download" type="file" id="download" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <label class="form-label" for="description">課程敘述</label>
                                                    <textarea class="form-control" id="description" name="description" rows="4"><?php echo $description; ?></textarea>
                                                </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-4">
                        <div class="col text-end">
                            <a href="ecommerce-products.php" class="btn btn-danger">取消 </a>
                            <input type="submit" value="儲存" class="btn btn-success uil uil-file-alt me-1">

                        </div> <!-- end col -->
                    </div> <!-- end row-->
                    </form>

                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Minible.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>


            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="public/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="public/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="public/assets/css/bootstrap-dark.min.css" data-appStyle="public/assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="public/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="public/assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <script src="public/assets/libs/jquery/jquery.min.js"></script>
    <script src="public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="public/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="public/assets/libs/node-waves/waves.min.js"></script>
    <script src="public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>



    <!-- select 2 plugin -->
    <script src="public/assets/libs/select2/js/select2.min.js"></script>

    <!-- dropzone plugin -->
    <script src="public/assets/libs/dropzone/min/dropzone.min.js"></script>

    <!-- init js -->
    <script src="public/assets/js/pages/ecommerce-add-product.init.js"></script>



    <script src="public/assets/js/app.js"></script>


</body>

</html>