<?php
//update tên loại bài viết
if(isset($_POST['save-edit-type-post'])){
    $id= $_POST['getid'];
    $editTypePost = $_POST['editTypePost'];
    $checkType = TypePost::checktype($editTypePost);
    $check = count($checkType);
    if($editTypePost ==''){
        echo'<script>alert("Vui lòng nhập đầy đủ !")</script>';
    }
    else if( $check > 0){
        echo'<script>alert("Loại bài viết này đã tồn tại !")</script>';
    }
    else{
        $results = TypePost::updateTypePost($id,$editTypePost);
    }
}
//thêm loại bài viết
if(isset($_POST['save-name-type'])){
    $nameTypePost = $_POST['nametype'];
    $checkType = TypePost::checktype($nameTypePost);
    $check = count($checkType);
    if($nameTypePost ==''){
        echo'<script>alert("Vui lòng nhập đầy đủ !")</script>';
    }
    else if( $check > 0){
        echo'<script>alert("Loại bài viết này đã tồn tại hoặc bạn đã xóa nó trước kia!")</script>';
    }
    else{
        $results = TypePost::addTypePost($nameTypePost);
        echo'<script>alert("Thêm thành công !")</script>';
    }
}
// khóa 
if(isset($_POST['btn-block'])){
    $getid = $_POST['getid'];
    $results = TypePost::blockTypePost($getid);
};
// xóa 
if(isset($_POST['btn-del'])){
    $id_type = $_POST['btn-del'];
    //kiểm tra xem có bài viết nào chưa nếu có sẽ không cho xóa
    $checkpost = Posts::checkpost_del_type($id_type);
    $check = count($checkpost);
    if($check > 0){
        echo'<script>alert("Loại này có tồn tại '.$check.' bài viết, Không thể xóa, bạn có thể khóa loại này để không dùng đến nó !")</script>';
    }else{
        $results = TypePost::delTypePost($id_type);
    }
};
// mở 
if(isset($_POST['btn-unblock'])){
    $getid = $_POST['getid'];
    $results = TypePost::unblockTypePost($getid);
};
//lấy danh sách chủ đề bài viết
$getTypePosts = TypePost::getTypePosts();
?>