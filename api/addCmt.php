<?php
// cấu hình đường dẩn
require_once('../config.php');
// cấu hình level
$level = L1;
// kết nối databsae
require_once($level.LIB.'db.php');
// gọi các câu truy vấn comment
require_once($level.LIB.'clsComment.php');
if(isset($_POST['btn'])){
    $author = $_POST['author'];
    $content = $_POST['content'];
    $id_post = $_POST['id_post'];
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $result = Comment::addCmt($author,$content,$id_post,$ipaddress);
    //viết lại truy vấn sau khi thêm cmt
    $sql= "SELECT * FROM comments WHERE `id_post`= ? AND comments.status= 1 ORDER BY `id` DESC LIMIT  5;";
    $loadcmts = Comment::loadcmt($sql,$id_post);
    echo json_encode($loadcmts);
}

?>