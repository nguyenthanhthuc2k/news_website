<?php
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("location:../login.php");
};
require_once('../../api/Role_kdv.php');
//liên kết với config.php
require_once('../../config.php');
//cấu hình level
$level = L2;
//truy vấn
require_once($level.LIB.'clsComment.php');
//xữ lí
require_once($level.AD_COM.'binh_luan_pro.php');
$title ='<title>NTT news - Danh sách bình luận </title>';
//khai báo các biến liên kết trang
$_main = $level.AD_COM.'binh_luan_ctp.php';
//liên kết đến trang layout
require_once('../layout.php');
?>