<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = Array();
}
session_start();
$id = $_GET['id'];//�ӫ~ID

//if (!in_array($id,$cart)){
    $_SESSION['cart'][]=$id;//�[�J�}�C
// }
//��^�W�@��
$url = $_SERVER['HTTP_REFERER'];

header("Location: {$_SERVER['HTTP_REFERER']}");
?>