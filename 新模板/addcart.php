
<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = Array();
}
session_start();
$id = $_GET['id'];//�ӫ~ID

//�Y�ӫ~���b�ʪ�����,�h�[�J�ʪ���(�}�C)
if (!in_array($id,$_SESSION['cart'])) {
   $_SESSION['cart'][]=$id;//�[�J�}�C
}
//��^�W�@��
$url = $_SERVER['HTTP_REFERER'];
header("Location:$url");

?>