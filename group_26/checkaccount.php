<?php
$user = trim($_POST['username']) ;
$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26') 
or die("無法開啟MySQL資料庫連結!<br>");

$sql = "SELECT * FROM member WHERE username='$user' ";

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

// 送出查詢的SQL指令
if ( $result = mysqli_query($link, $sql) ) {
    if( $row = mysqli_fetch_assoc($result) ) echo "此帳號已存在！";
    else echo "此帳號可用！";
    mysqli_free_result($result); // 釋放佔用的記憶體
}
mysqli_close($link); // 關閉資料庫連結
?>
