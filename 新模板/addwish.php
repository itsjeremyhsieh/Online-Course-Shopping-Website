<?php
if (!isset($_SESSION['wish'])) {
    $_SESSION['wish'] = Array();
}
session_start();
$id = $_GET['id'];//�ӫ~ID

//�Y�ӫ~���b�ʪ�����,�h�[�J�ʪ���(�}�C)

//if (!in_array($id, $_SESSION['wish'])){
    $_SESSION['wish'][]=$id;//�[�J�}�C
    
 //}
//��^�W�@��
$url = $_SERVER['HTTP_REFERER'];

header("Location: {$_SERVER['HTTP_REFERER']}");
?>