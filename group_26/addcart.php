<?php
session_start();
if (!isset($_SESSION['wish'])) {
    $_SESSION['wish'] = Array();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$id = $_GET['id'];//�ӫ~ID

if (!in_array($id,$_SESSION['cart'])){
    if ( !in_array($id,$_SESSION['wish']))
        $_SESSION['cart'][]=$id;//�[�J�}�C
    
}

//��^�W�@��
$url = $_SERVER['HTTP_REFERER'];

header("Location: {$_SERVER['HTTP_REFERER']}");
?>