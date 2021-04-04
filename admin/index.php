<?php
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
};
if(isset($_GET['logout'])){
    session_start();
    session_destroy();
    header("location:login.php");
}
//liên kết với config.php
require_once('../config.php');
$level = L1;
// kết nối các class
require_once($level.LIB.'clsPosts.php');
require_once($level.LIB.'clsIndex_ad.php');
require_once( $level.AD_COM.'index_pro.php');
//cấu hình level
$_main = $level.AD_COM.'index_ctp.php';
$title ='<title>NTT news - Quản lí </title>';
//liên kết đến trang layout
require_once('layout.php');
?>