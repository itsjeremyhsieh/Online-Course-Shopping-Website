<?php
session_start();
if (!isset($_SESSION['wish'])) {
    $_SESSION['wish'] = Array();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$id = $_GET['id'];//商品ID

if (!in_array($id,$_SESSION['cart'])){
    if ( !in_array($id,$_SESSION['wish']))
        $_SESSION['cart'][]=$id;//加入陣列
    
}

//返回上一頁
$url = $_SERVER['HTTP_REFERER'];

header("Location: {$_SERVER['HTTP_REFERER']}");
?>