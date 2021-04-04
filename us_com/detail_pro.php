<?php
//lấy thông tin chi tiết bài viết
if(!isset($_GET['id'])||$_GET['id']==''){
    header('location:http://localhost/thuctap/web_news/404.html');
}
else if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getDetailPost = Posts::getDetailPost($id);
    // láy danh sách bình luận
    $getComments  = Comment::getComments($id);
    // lấy dánh sách bài viết nóng nhất
    $getBaiVietNong = Posts::getBaiVietNong();
    // lấy qc2
    $get3SlideQc2 = Slide::get3SlideQc2();
    if($getDetailPost == null){
        header('location:http://localhost/thuctap/web_news/404.html');
    }
}
else{
    header('location:http://localhost/thuctap/web_news/404.html');
}
?>