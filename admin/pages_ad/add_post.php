<?php
ob_start();
session_start();
//liên kết với config.php
require_once('../../config.php');
//cấu hình level
$level = L2;
if(!isset($_SESSION["login"])){
    header("location:../login.php");
};
//quyền user
require_once('../../api/Role_ctv.php');
//truy vấn
require_once($level.LIB.'clsTypePost.php');
require_once($level.LIB.'clsCategories.php');
require_once($level.LIB.'clsPosts.php');

//khai báo các biến liên kết trang
$_main;
if(isset($_GET['id']))
{
    //xử lí
    require_once($level.AD_COM.'edit_post_pro.php');
    $_main = $level.AD_COM.'edit_post_ctp.php';
}
else
{
    //xử lí
    require_once($level.AD_COM.'add_post_pro.php');
    $_main = $level.AD_COM.'add_post_ctp.php';
}
$title ='<title>NTT news - Thêm bài viết </title>';
//liên kết đến trang layout
require_once('../layout.php');
?>