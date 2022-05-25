<?php
 session_start(); 
unset($_SESSION['userid']);
echo "<script>alert('登出成功!');
    
    </script>"; 
 header('location:index.php');

 ?>
