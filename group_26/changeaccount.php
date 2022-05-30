<?php

session_start();
if (!isset($_SESSION['userid']))
    header("Location: login.php");


$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26');

if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>";
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>";
    exit();
}
$sql = "SELECT * FROM member WHERE username = '".$_SESSION['userid'] ."'";
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

if(isset($_POST['name'])) {
    $sql = "UPDATE member SET name = '". $_POST['name']."' WHERE username = '". $_SESSION['userid']."'";
    $result = mysqli_query($link, $sql);
}
if(isset($_POST['email'])) {
    $sql = "UPDATE member SET email = '". $_POST['email']."' WHERE username = '". $_SESSION['userid']."'";
    $result = mysqli_query($link, $sql);
}
if(isset($_POST['gender'])) {
    $sql = "UPDATE member SET gender = '". $_POST['gender']."' WHERE username = '". $_SESSION['userid']."'";
    $result = mysqli_query($link, $sql);
}
if(isset($_POST['phone'])) {
    $sql = "UPDATE member SET phone = '". $_POST['phone']."' WHERE username = '". $_SESSION['userid']."'";
    $result = mysqli_query($link, $sql);
}
if(isset($_POST['bday'])) {
    $sql = "UPDATE member SET birth = '". $_POST['bday']."' WHERE username = '". $_SESSION['userid']."'";
    $result = mysqli_query($link, $sql);
}
if(isset($_POST['address'])) {
    $sql = "UPDATE member SET address = '". $_POST['address']."' WHERE username = '". $_SESSION['userid']."'";
    $result = mysqli_query($link, $sql);
}

mysqli_close($link); // 關閉資料庫連結


header("Location: {$_SERVER['HTTP_REFERER']}");

?>