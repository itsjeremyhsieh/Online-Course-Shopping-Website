<?php
session_start();

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26') // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$email = $_POST['email'];




if($_SERVER["REQUEST_METHOD"] == "POST"){

    if ($result = mysqli_query($link, "SELECT * FROM member WHERE email = '$email'")) {
        $subject="=?UTF-8?B?".base64_encode('COURSELUX帳號密碼重設信件')."?=";//信件標題，解決亂碼問題
        mail("$email", $subject,"您好，請點擊以下連結以重設您的COURSELUX帳號密碼：\n http://localhost:8080/Online-Course-Shopping-Website/Online-Course-Shopping-Website/Online-Course-Shopping-Website/group_26/rstpsw.php")
        or die("郵件傳送失敗！");
        function_alert("重設密碼信件傳送成功");
    }
}

function function_alert($message) { 
      
    echo "<script>alert('$message');
    window.location.href='login.php';
   </script>"; 
   return false;
}
