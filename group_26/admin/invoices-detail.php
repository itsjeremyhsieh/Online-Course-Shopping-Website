<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Invoice Detail | Minible - Admin & Dashboard Template</title>
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
                            <h4 class="mb-0">發票明細</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">發票</a></li>
                                    <li class="breadcrumb-item active">發票明細</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->




                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-end font-size-16">發票 #MN0131 <span class="badge bg-success font-size-12 ms-2">已付款</span></h4>
                                    <div class="mb-4">
                                        <img src="public/assets/images/logo.png" alt="logo" height="50" />
                                    </div>
                                    <div class="text-muted">
                                        <p class="mb-1">641 Counts Lane Wilmore, KY 40390</p>
                                        <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> abc@123.com</p>
                                        <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="text-muted">
                                            <h5 class="font-size-16 mb-3">付款人：</h5>
                                            <h5 class="font-size-15 mb-2">Preston Miller</h5>
                                            <p class="mb-1">4450 Fancher Drive Dallas, TX 75247</p>
                                            <p class="mb-1">PrestonMiller@armyspy.com</p>
                                            <p>001-234-5678</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-muted text-sm-end">
                                            <div>
                                                <h5 class="font-size-16 mb-1">發票編碼:</h5>
                                                <p>#MN0131</p>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="font-size-16 mb-1">開票日期:</h5>
                                                <p>09 Jul, 2020</p>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="font-size-16 mb-1">訂單編號:</h5>
                                                <p>#1123456</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="py-2">
                                    <h5 class="font-size-15">訂單摘要</h5>

                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px;">No.</th>
                                                    <th>商品</th>
                                                    <th>價錢</th>
                                                    <th>數量</th>
                                                    <th class="text-end" style="width: 120px;">總金額</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">01</th>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1">Nike N012 Running Shoes</h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">Color : <span class="fw-medium">Gray</span></li>
                                                            <li class="list-inline-item">Size : <span class="fw-medium">08</span></li>
                                                        </ul>
                                                    </td>
                                                    <td>$260</td>
                                                    <td>1</td>
                                                    <td class="text-end">$260.00</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">02</th>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1">Adidas Running Shoes</h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">Color : <span class="fw-medium">Black</span></li>
                                                            <li class="list-inline-item">Size : <span class="fw-medium">09</span></li>
                                                        </ul>
                                                    </td>
                                                    <td>$250</td>
                                                    <td>1</td>
                                                    <td class="text-end">$250.00</td>
                                                </tr>


                                                <tr>
                                                    <th scope="row" colspan="4" class="text-end">小計</th>
                                                    <td class="text-end">$510.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        折扣 </th>
                                                    <td class="border-0 text-end">- $50.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        運費 </th>
                                                    <td class="border-0 text-end">$25.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        含稅</th>
                                                    <td class="border-0 text-end">$13.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">總金額</th>
                                                    <td class="border-0 text-end">
                                                        <h4 class="m-0">$498.00</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-print-none mt-4">
                                        <div class="float-end">
                                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                            <a href="#" class="btn btn-primary w-md waves-effect waves-light">送出</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


            </div>
        </div>
        <?php include "adminfooter.php"; ?>
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