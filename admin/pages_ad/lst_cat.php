<?php
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("location:../login.php");
};
require_once('../../api/Role_admin.php');
//liên kết với config.php
require_once('../../config.php');
//cấu hình level
$level = L2;
//xử lí
require_once($level.LIB.'clsCategories.php');
require_once($level.LIB.'clsPosts.php');
require_once($level.AD_COM.'lst_cat_pro.php');
$title ='<title>NTT news - Danh sách slide </title>';
//khai báo các biến liên kết trang
$_main = $level.AD_COM.'lst_cat_ctp.php';
//liên kết đến trang layout
require_once('../layout.php');
?>