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
// xử lí
require_once($level.LIB.'clsSetting.php');
require_once($level.LIB.'clsUploadFile.php');
require_once($level.AD_COM.'setting_pro.php');
$title ='<title>NTT news - Setting </title>';
//khai báo các biến liên kết trang
$_main = $level.AD_COM.'setting_ctp.php';
//liên kết đến trang layout
require_once('../layout.php');
?>