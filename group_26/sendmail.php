<?php
session_start();

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26') // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$email = $_POST['email'];
echo $email;



if($_SERVER["REQUEST_METHOD"] == "POST"){

    
        
    if ($result = mysqli_query($link, "SELECT * FROM member WHERE email = '$email'")) {
        $random_number = random_int(100000, 999999);
        $msg = "您的COURSELUX密碼重設驗證碼為" . $random_number;
        $msg = wordwrap($msg,70);
        mail("$email","COURSELUX密碼重設驗證碼",$msg)
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
