<?php
 session_start(); 
unset($_SESSION['userid']);
unset($_SESSION['cart']);
echo "<script>alert('η»εΊζε!');
    
    </script>"; 
 header('location:index.php');

 ?>
