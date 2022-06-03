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

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>User Grid | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">




    <!-- Bootstrap Css -->
    <link href="public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                            <h4 class="mb-0">用戶網格</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">聯繫人</a></li>
                                    <li class="breadcrumb-item active">用戶網格</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->




                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="public/assets/images/users/avatar-2.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Simon Ryles</a></h5>
                                <p class="text-muted mb-2">全棧開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="public/assets/images/users/avatar-3.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Marion Walker</a></h5>
                                <p class="text-muted mb-2">前端開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="avatar-lg mx-auto mb-4">
                                    <div class="avatar-title bg-soft-primary rounded-circle text-primary">
                                        <i class="mdi mdi-account-circle display-4 m-0 text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Frederick White</a></h5>
                                <p class="text-muted mb-2">UI/UX 開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="public/assets/images/users/avatar-4.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Shanon Marvin</a></h5>
                                <p class="text-muted mb-2">後端開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="avatar-lg mx-auto mb-4">
                                    <div class="avatar-title bg-soft-primary rounded-circle text-primary">
                                        <i class="mdi mdi-account-circle display-4 m-0 text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Mark Jones</a></h5>
                                <p class="text-muted mb-2">前端開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="public/assets/images/users/avatar-5.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Janice Morgan</a></h5>
                                <p class="text-muted mb-2">後端開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="public/assets/images/users/avatar-7.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Patrick Petty</a></h5>
                                <p class="text-muted mb-2">UI/UX 開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">編輯</a>
                                        <a class="dropdown-item" href="#">修改</a>
                                        <a class="dropdown-item" href="#">移除</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="public/assets/images/users/avatar-8.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Marilyn Horton</a></h5>
                                <p class="text-muted mb-2">前端開發人員</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> 簡介</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> 發訊息</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row mt-3">
                    <div class="col-xl-12">
                        <div class="text-center my-3">
                            <a href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> 載入更多 </a>
                        </div>
                    </div>
                </div>
                <!-- end row -->


            </div>
        </div>
        
    </div>
    </div>

 

    <?php include "adminfooter.php";?>
    <!-- JAVASCRIPT -->
    <script src="public/assets/libs/jquery/jquery.min.js"></script>
    <script src="public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="public/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="public/assets/libs/node-waves/waves.min.js"></script>
    <script src="public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>





    <script src="public/assets/js/app.js"></script>


</body>

</html>