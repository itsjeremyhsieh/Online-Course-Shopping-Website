<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = Array();
}
session_start();
$id = $_GET['id'];//商品ID

//if (!in_array($id,$cart)){
    $_SESSION['cart'][]=$id;//加入陣列
// }
//返回上一頁
$url = $_SERVER['HTTP_REFERER'];

header("Location: {$_SERVER['HTTP_REFERER']}");
?>