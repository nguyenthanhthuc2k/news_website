<?php
// lọc bài viết theo chuyên mục và trang thái
// cấu hình config
require_once('../config.php');
//level
$level = L1;
//connect databsae
require_once($level.LIB.'db.php');
//gọi class sql
require_once($level.LIB.'clsPosts.php');
$sql = 'SELECT * FROM `posts` WHERE 1';
$limit = 5;

//chọn theo chuyen muc
if(isset($_POST['cat']) && $_POST['cat'] != 0){
    $cat = $_POST['cat'];
    $case1 = '%,'.$cat;
    $case2 = $cat.',%';
    $case4 ='%'.$cat.'%';
    $case3 = '%,'.$cat.',%';
    $cats = 'SELECT categories FROM `posts` WHERE `categories` LIKE "'.$case1.'" OR `categories` LIKE "'.$case2.'" OR `categories` LIKE "'.$case3.'" OR `categories` LIKE "'.$case4.'"';
    $sql .= ' AND `categories` IN ('.$cats.')';
}
// lọc status kiểm tra nếu có chọn thì mới gán status
if(isset($_POST['status']) && $_POST['status'] != 2){
    $sql .= ' AND posts.status ='.$_POST['status'];
}
// lọc theo từ khóa tìm kím
if(isset($_POST['key']) && $_POST['key'] != ''){
    $sql  .= ' AND posts.title like \'%'.$_POST['key'].'%\'';
}
// lọc theo id bài viết tìm kím
if(isset($_POST['id_bv']) && $_POST['id_bv'] != ''){
    $sql .= ' AND posts.id = '.$_POST['id_bv'];
}
// lọc theo ngày đăng bài viết
if(isset($_POST['date']) && $_POST['date'] != ''){
    $sql .= ' AND date(posts.datetime) = \''.$_POST['date'].'\'';
}
$sql.= ' ORDER BY `id` DESC LIMIT '.$limit;
$results = Posts::filter_post($sql);
echo json_encode($results);
?>