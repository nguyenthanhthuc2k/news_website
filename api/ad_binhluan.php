<?php
//ADMIN/PAGES/binh luận
// cấu hình đường dẩn
require_once('../config.php');
// cấu hình level
$level = L1;
//kết nối database
require_once($level.LIB.'db.php');
//gọi class bình luận
require_once($level.LIB.'clsComment.php');
//khóa
if(isset($_POST['btn-block'])){
    $id= $_POST['id_block'];
    $results = Comment::BlockCmt($id);
    $selectStatus = Comment::getStatusCmt($id);
    echo json_encode($selectStatus);
}
//mở khóa
if(isset($_POST['btn-unblock'])){
    $id= $_POST['id_unblock'];
    $results = Comment::unBlockCmt($id);
    $selectStatus = Comment::getStatusCmt($id);
    echo json_encode($selectStatus);
}
//xóa bl
if(isset($_POST['btn-del'])){
    $id= $_POST['id_del'];
    $results = Comment::delCmt($id);
    $limit =5;
    $sql= "SELECT * FROM comments WHERE comments.status = 0  OR comments.status = 1  ORDER BY `id` DESC LIMIT $limit";
    $selectCmt = Comment::loadCmt_after_del($sql,$limit);
    echo json_encode($selectCmt);
}
?>