<?php
session_start();

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_26') // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");
$sql = "select * from course";
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$username = $_POST['username'];
$password = $_POST['pwd'];
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sql = "SELECT * FROM member WHERE username ='".$username."'";
    $result=mysqli_query($link,$sql);
    if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]) {
        session_start();
        $_SESSION['userid'] = $username;
       

        
        
        function_alert1("登入成功！");
        //header("location:index.php");
    }
    else{
        function_alert("帳號或密碼錯誤！");
        //header("location:login.php");
    }
}
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='login.php';
    </script>"; 
    return false;
} 
function function_alert1($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    return false;
} 
?>