<?php
session_start();
if (!isset($_SESSION['userid']))
    header("Location: ../login.php");
if (isset($_SESSION['userid'])) {
    $link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

    if (!$link) {
        echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
        echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
        exit();
    }
    $sql = "SELECT * FROM member WHERE username = '" . $_SESSION['userid'] . "'";
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

    if ($result = mysqli_query($link, $sql)) {

        while ($row = mysqli_fetch_assoc($result)) {
            if($row['level'] != 4)
            header("Location: ../logout.php");
        }
    }
}

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
    <title>修改課程資訊</title>
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

    <?php include "adminheader.php"; ?>


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
                                                        <input id="id" name="id" type="text" class="form-control" value=<?php echo $id; ?> readonly>
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
        <?php include "adminfooter.php"; ?>
       
</body>

</html>