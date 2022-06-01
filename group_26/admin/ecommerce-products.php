<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Products | Minible - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="public/assets/images/favicon.ico">



  <!-- ION Slider -->
  <link href="public/assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css" />


  <!-- Bootstrap Css -->
  <link href="public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-3.3.1.js"></script>
  <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

  <script>
    var tbl;
    $(function() {
      tbl = $('#course').DataTable({
        "language": {
          "processing": "處理中...",
          "loadingRecords": "載入中...",
          "lengthMenu": "顯示 _MENU_ 項結果",
          "zeroRecords": "沒有符合的結果",
          "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
          "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
          "infoFiltered": "(從 _MAX_ 項結果中過濾)",
          "search": "找關鍵字:",
          "paginate": {
            "first": "第一頁",
            "previous": "上一頁",
            "next": "下一頁",
            "last": "最後一頁"
          },
          "aria": {
            "sortAscending": ": 升冪排列",
            "sortDescending": ": 降冪排列"
          },
          "emptyTable": "目前沒有資料",
          "datetime": {
            "previous": "上一頁",
            "next": "下一頁",
            "hours": "時",
            "minutes": "分",
            "seconds": "秒",
            "amPm": [
              "上午",
              "下午"
            ]
          },
          "searchBuilder": {
            "add": "新增條件",
            "condition": "條件",
            "deleteTitle": "刪除過濾條件",
            "button": {
              "_": "複合查詢 (%d)",
              "0": "複合查詢"
            },
            "clearAll": "清空",
            "conditions": {
              "array": {
                "contains": "含有",
                "empty": "為空",
                "equals": "等於",
                "not": "不為",
                "notEmpty": "不為空"
              },
              "date": {
                "after": "大於",
                "before": "小於",
                "between": "在其中",
                "empty": "為空",
                "equals": "等於",
                "not": "不為",
                "notBetween": "不在其中",
                "notEmpty": "不為空"
              },
              "number": {
                "between": "在其中",
                "empty": "為空",
                "equals": "等於",
                "gt": "大於",
                "gte": "大於等於",
                "lt": "小於",
                "lte": "小於等於",
                "not": "不為",
                "notBetween": "不在其中",
                "notEmpty": "不為空"
              },
              "string": {
                "contains": "含有",
                "empty": "為空",
                "endsWith": "字尾為",
                "equals": "等於",
                "not": "不為",
                "notEmpty": "不為空",
                "startsWith": "字首為"
              }
            },
            "data": "欄位",
            "leftTitle": "群組條件",
            "logicAnd": "且",
            "logicOr": "或",
            "rightTitle": "取消群組",
            "title": {
              "_": "複合查詢 (%d)",
              "0": "複合查詢"
            },
            "value": "內容"
          },
          "editor": {
            "close": "關閉",
            "create": {
              "button": "新增",
              "title": "建立新項目",
              "submit": "建立"
            },
            "edit": {
              "button": "編輯",
              "title": "編輯項目",
              "submit": "更新"
            },
            "remove": {
              "button": "刪除",
              "title": "刪除",
              "submit": "刪除",
              "confirm": {
                "_": "您確定要刪除 %d 筆資料嗎？",
                "1": "您確定要刪除 %d 筆資料嗎？"
              }
            },
            "multi": {
              "restore": "回復修改",
              "title": "每行有不同的價值",
              "info": "您選擇了多個項目，每項目都有不同的價值。如果您想所有選擇的項目都用同一個價值，可以在這裏輸入一個價值。要不然它們會保留原本各自的價值",
              "noMulti": "此列不容許同時編輯多個項目"
            },
            "error": {
              "system": "系統發生錯誤(更多資訊)"
            }
          },
          "autoFill": {
            "cancel": "取消"
          },
          "buttons": {
            "copySuccess": {
              "_": "複製了 %d 筆資料",
              "1": "複製了 1 筆資料"
            },
            "copyTitle": "已經複製到剪貼簿",
            "excel": "Excel",
            "pdf": "PDF",
            "print": "列印",
            "copy": "複製"
          },
          "searchPanes": {
            "collapse": {
              "_": "搜尋面版 (%d)",
              "0": "搜尋面版"
            },
            "emptyPanes": "沒搜尋面版",
            "loadMessage": "載入搜尋面版中...",
            "clearMessage": "清空"
          },
          "select": {
            "rows": {
              "_": "%d 列已選擇",
              "1": "%d 列已選擇"
            }
          }
        },

        "ajax": {
          url: "datatable1_ajax.php",
          data: function(d) {
            return $('#form1').serialize() + "&oper=query";
          },
          type: 'POST',
          dataType: 'json'
        },

      });

      $('tbody').on('click', '#btn_delete', function() {

        if (!confirm('是否確定要刪除?'))
          return false;
        else {
          var data = tbl.row($(this).closest('tr')).data();
          var direct = "deletecourse.php?id=" + data[0];
          window.location.href = direct;
        }


      });
      $('tbody').on('click', '#btn_update', function() {

        
          var data = tbl.row($(this).closest('tr')).data();
          var direct = "ecommerce-product-detail.php?id=" + data[0];
          window.location.href = direct;
        
      });
    })
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
            <li class="menu-title">Menu</li>

            <li>
              <a href="admin.html">
                <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                <span>Dashboard</span>
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
            <li class="menu-title">Pages</li>


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
                <h4 class="mb-0">課程</h4>

                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                    <li class="breadcrumb-item active">Products</li>
                  </ol>
                </div>

              </div>
            </div>
          </div>
          <!-- end page title -->




          <div class="row">
            <div>
              <h4>課程列表</h4>
              <form name="form1" id="form1" method="post">
                <table class="table table-hover tm-table-small tm-product-table" id="course">
                  <thead>
                    <tr>
                      <th scope="col">課程編號</th>
                      <th scope="col">課程名稱</th>
                      <th scope="col">科目</th>
                      <th scope="col">適用年級</th>
                      <th scope="col">適用學期</th>
                      <th scope="col">授課教師</th>
                      <th scope="col">上課時長</th>
                      <th scope="col">總節數</th>
                      <th scope="col">售價</th>
                      <th scope="col">售出數量</th>
                      <th scope="col">課程敘述</th>
                      <th scope="col">修改/刪除</th>
                    </tr>
                  </thead>

                </table>
              </form>
            </div>


          </div>
          <!-- end row -->