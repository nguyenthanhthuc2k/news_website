<?php
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("location:../login.php");
};
//liên kết với config.php
require_once('../../config.php');
//cấu hình level
$level = L2;
// truy vấn
require_once($level.LIB.'clsUSer.php');
// xử lí
require_once($level.AD_COM.'password_pro.php');
$title ='<title>NTT news - Thông tin admin </title>';
//khai báo các biến liên kết trang
$_main = $level.AD_COM.'password_ctp.php';
//liên kết đến trang layout
require_once('../layout.php');
?>