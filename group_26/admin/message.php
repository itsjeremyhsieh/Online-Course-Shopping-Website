<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Invoice List | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">



    <!-- bootstrap-datepicker css -->
    <link href="public/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


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
                            <h4 class="mb-0">留言列表</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">留言</a></li>
                                    <li class="breadcrumb-item active">留言列表</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->




                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="float-end">
                            <div class=" mb-3">
                                <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                    <input type="text" class="form-control text-start" placeholder="From" name="From" />
                                    <input type="text" class="form-control text-start" placeholder="To" name="To" />

                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-filter-variant"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                <thead>
                                    <tr class="bg-transparent">
                                        <th style="width: 24px;">
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck">
                                                <label class="form-check-label" for="invoicecheck"></label>
                                            </div>
                                        </th>
                                        <th>商品</th>
                                        <th>留言日期</th>
                                        <th>留言</th>
                                        <th>評價</th>
                                        <th>留言用戶</th>
                                        <th style="width: 120px;">刪除留言</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck1">
                                                <label class="form-check-label" for="invoicecheck1"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0131</a>
                                        </td>
                                        <td>
                                            10 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Connie Franco</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck2">
                                                <label class="form-check-label" for="invoicecheck2"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0130</a>
                                        </td>
                                        <td>
                                            09 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Paul Reynolds</div>
                                        </td>

                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck3">
                                                <label class="form-check-label" for="invoicecheck3"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0129</a>
                                        </td>
                                        <td>
                                            09 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Ronald Patterson</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck4">
                                                <label class="form-check-label" for="invoicecheck4"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0128</a>
                                        </td>
                                        <td>
                                            08 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Adella Perez</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck5">
                                                <label class="form-check-label" for="invoicecheck5"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0127</a>
                                        </td>
                                        <td>
                                            07 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Theresa Mayers</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck6">
                                                <label class="form-check-label" for="invoicecheck6"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0126</a>
                                        </td>
                                        <td>
                                            06 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Michael Wallace</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck7">
                                                <label class="form-check-label" for="invoicecheck7"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0125</a>
                                        </td>
                                        <td>
                                            05 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Oliver Gonzales</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck8">
                                                <label class="form-check-label" for="invoicecheck8"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0124</a>
                                        </td>
                                        <td>
                                            05 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>David Burke</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck9">
                                                <label class="form-check-label" for="invoicecheck9"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0123</a>
                                        </td>
                                        <td>
                                            04 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Willie Verner</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck10">
                                                <label class="form-check-label" for="invoicecheck10"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a>
                                        </td>
                                        <td>
                                            03 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Felix Perry</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck11">
                                                <label class="form-check-label" for="invoicecheck11"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0121</a>
                                        </td>
                                        <td>
                                            02 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Virgil Kelley</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck12">
                                                <label class="form-check-label" for="invoicecheck12"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0120</a>
                                        </td>
                                        <td>
                                            02 Jul, 2020
                                        </td>
                                        <td>9這樣8</td>

                                        <td>
                                            ★★★★★
                                        </td>
                                        <td>
                                            <div>Matthew Lawler</div>
                                        </td>


                                        <td>

                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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



        <!-- bootstrap datepicker -->
        <script src="public/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- Required datatable js -->
        <script src="public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="public/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- init js -->
        <script src="public/assets/js/pages/ecommerce-datatables.init.js"></script>



        <script src="public/assets/js/app.js"></script>


</body>

</html>