<?php
//liên kết với config.php
require_once('../config.php');
//cấu hình level
$level = L1;
//liên kết với lib
require_once($level.LIB.'clsPosts.php');
require_once($level.LIB.'clsCategories.php');
require_once($level.LIB.'clsSlides.php');
// xử lí
require_once($level.US_COM.'page_pro.php');
$title ='<title>NTT news - </title>';
//khai báo các biến liên kết trang
$_main = $level.US_COM.'page_ctp.php';
//liên kết đến trang layout
require_once($level.'layout.php');
?>