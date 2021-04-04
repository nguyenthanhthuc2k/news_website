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
//lọc bình luận theo id post
$limit =5;
$sql_filter = 'SELECT * FROM comments WHERE 1';
if(isset($_POST['id_post'])){
    if($_POST['id_post']==''){
        $sql_filter.='';
    }else{
        $sql_filter.=' AND `id_post` = '.$_POST['id_post'];
    }
}
if(isset($_POST['status_post']) && $_POST['status_post'] !=2){
    $sql_filter.= ' AND comments.status = '.$_POST['status_post'];
}
    $sql_filter .= ' ORDER BY `id` DESC LIMIT '.$limit;
    $results_filter = Comment::filter_id_post($sql_filter);
    echo json_encode($results_filter);
?>