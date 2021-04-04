<?php
if(!isset($_GET['id']) || $_GET['id']== ''){
    header('location:http://localhost/thuctap/web_news/404.html');
}
else if(isset($_GET['id'])){
    $id = $_GET['id'];
    //lấy danh sách bài viết theo chuyen mục 
    $getPostCats = Posts::getPostCats($id);
    //lấy info cat
    $getInfoCat = Categories::getInfoCat($id);
    // lấy dánh sách bài viết nóng nhất
    $getBaiVietNong = Posts::getBaiVietNong();
    // lấy qc2
    $get3SlideQc2 = Slide::get3SlideQc2();
    //kt
    if($getPostCats == null){
        header('location:http://localhost/thuctap/web_news/404.html');
    }
}
else{
    header('location:http://localhost/thuctap/web_news/404.html');
}
?>