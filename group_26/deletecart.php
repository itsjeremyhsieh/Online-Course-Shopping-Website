<?php

session_start();
$id = $_GET['id'];//�ӫ~ID
echo $id;

$key = array_search($_GET['id'], $_SESSION['cart']);	
unset($_SESSION['cart'][$key]);
 $_SESSION['cart'] = array_values($_SESSION['cart']);
//��^�W�@��
$url = $_SERVER['HTTP_REFERER'];

header("Location: {$_SERVER['HTTP_REFERER']}");
?>