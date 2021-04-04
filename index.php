<?php
//liên kết với config.php
require_once('config.php');
//cấu hình level
$level = L0;
//liên kết với lib
require_once($level.LIB.'clsPosts.php');
require_once($level.LIB.'clsSlides.php');
require_once($level.LIB.'clsCategories.php');
// xử lí
require_once($level.US_COM.'index_pro.php');
$title ='<title>NTT news - Trang chủ website </title>';
//khai báo các biến liên kết trang
$_main = $level.US_COM.'index_ctp.php';
//liên kết đến trang layout
require_once($level.'layout.php');
?>