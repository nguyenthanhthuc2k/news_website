<?php
// cấu hình đường dẩn
require_once('../config.php');
// cấu hình level
$level = L1;
// kết nối databsae
require_once($level.LIB.'db.php');
// gọi các câu truy vấn comment
require_once($level.LIB.'clsUser.php');
// KHÓA
if(isset($_POST['btn_block'])){
    $id = $_POST['id'];
    $result = User::block($id);
    $results = User::selectStatus($id);
    echo json_encode($results);
}
// MỞ
if(isset($_POST['btn_unblock'])){
    $id = $_POST['id'];
    $result = User::unblock($id);
    $results = User::selectStatus($id);
    echo json_encode($results);
}
?>